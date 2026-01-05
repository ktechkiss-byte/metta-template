
import re

def convert():
    with open('/www/wwwroot/metta-template/index.html', 'r', encoding='utf-8') as f:
        lines = f.readlines()

    # Split points based on analysis
    header_end = 1966  # Ends at </header>
    body_start = 1966  # Starts at <main
    body_end = 3839    # Ends at </main>
    footer_start = 3839 # Starts at <footer

    # 0 to header_end
    header_lines = lines[:header_end]
    # header_end to body_end (Body content)
    page_lines = lines[header_end:body_end]
    # body_end to end
    footer_lines = lines[body_end:]

    def process_content(content_lines):
        content = "".join(content_lines)
        
        # Replace absolute domain
        content = content.replace('https://mettaspadongy.vn', '<?php echo get_site_url(); ?>')
        content = content.replace('http://mettaspadongy.vn', '<?php echo get_site_url(); ?>')

        # Handle relative asset paths if any remain
        # We use regex to ensure we don't double-replace
        content = re.sub(r'(?<!\?\>)/(wp-content|wp-includes)', r'<?php echo get_site_url(); ?>/\1', content)
        content = re.sub(r'([\"\'])wp-content/', r'\1<?php echo get_site_url(); ?>/wp-content/', content)
        content = re.sub(r'([\"\'])wp-includes/', r'\1<?php echo get_site_url(); ?>/wp-includes/', content)
        
        # Handle links
        content = content.replace('href="index.htm"', 'href="<?php echo home_url(); ?>"')
        content = content.replace('href="index.html"', 'href="<?php echo home_url(); ?>"')
        
        # specific page links - simple regex for href="slug" -> href="<?php echo home_url('/slug'); ?>"
        # Avoiding complex regex for now, just replacing known menu items if possible or leaving them relative (which breaks on subpages).
        # Better: replace href="([a-z0-9-]+)" with href="<?php echo home_url('/$1'); ?>" but be careful.
        # Let's simple-fix the known ones from the menu:
        menu_items = ['gioi-thieu', 'tin-tuc', 'khoa-hoc-duong-sinh', 'chi-nhanh', 'menu', 'san-pham', 'lien-he']
        for item in menu_items:
             content = content.replace(f'href="{item}"', f'href="<?php echo home_url("/{item}"); ?>"')

        return content

    header_content = process_content(header_lines)
    page_content = process_content(page_lines)
    footer_content = process_content(footer_lines)

    # Header Replacements
    header_content = header_content.replace('</head>', '<?php wp_head(); ?>\n</head>')
    # Handle body class
    # Regex to find <body class="..."> and replace with <body <?php body_class(); ?>>
    # Preserving the original classes might be useful or redundant. 
    # For a template, we want WP to control classes.
    header_content = re.sub(r'<body[^>]*>', '<body <?php body_class(); ?>>', header_content)

    # Footer Replacements
    footer_content = footer_content.replace('</body>', '<?php wp_footer(); ?>\n</body>')

    # Write files
    base_path = '/www/wwwroot/metta-template/wp-content/themes/metta-theme/'
    
    with open(base_path + 'header.php', 'w', encoding='utf-8') as f:
        f.write(header_content)
        
    with open(base_path + 'footer.php', 'w', encoding='utf-8') as f:
        f.write(footer_content)
        
    with open(base_path + 'front-page.php', 'w', encoding='utf-8') as f:
        f.write('<?php get_header(); ?>\n')
        f.write(page_content)
        f.write('\n<?php get_footer(); ?>')

if __name__ == '__main__':
    convert()
