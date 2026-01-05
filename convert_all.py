
import os
import re

def process_file(file_path, template_name):
    print(f"Processing {file_path} -> {template_name}")
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
    except Exception as e:
        print(f"Error reading {file_path}: {e}")
        return

    # Dynamic Split
    header_split = content.find('</header>')
    if header_split == -1:
        print("No </header> found, skipping.")
        return
    
    main_end = content.find('</main>')
    if main_end == -1:
        footer_start = content.find('<footer id="footer"')
        if footer_start != -1:
            main_end = footer_start
        else:
            print("No split point found.")
            return

    body_content = content[header_split + len('</header>'):main_end + len('</main>')]
    
    # Replace absolute domain
    body_content = body_content.replace('https://mettaspadongy.vn', '<?php echo get_site_url(); ?>')
    body_content = body_content.replace('http://mettaspadongy.vn', '<?php echo get_site_url(); ?>')

    # Handle wp-content and wp-includes (capturing quote and optional ../ prefixes)
    # Pattern: quote + optional sequence of ../ + wp-content/
    # Replacement: quote + php site url + /wp-content/
    body_content = re.sub(r'(?<!\?\>)([\"\'])(\.\./)*wp-content/', r'\1<?php echo get_site_url(); ?>/wp-content/', body_content)
    body_content = re.sub(r'(?<!\?\>)([\"\'])(\.\./)*wp-includes/', r'\1<?php echo get_site_url(); ?>/wp-includes/', body_content)
    
    # Handle absolute paths starting with /
    body_content = re.sub(r'(?<!\?\>)([\"\'])/(wp-content|wp-includes)', r'\1<?php echo get_site_url(); ?>/\2', body_content)
    
    # Handle Links
    # index.htm/html
    body_content = re.sub(r'href=([\"\'])(\.\./)*index\.htm[l]?\1', r'href=\1<?php echo home_url(); ?>\1', body_content)

    # Menu items
    menu_items = ['gioi-thieu', 'tin-tuc', 'khoa-hoc-duong-sinh', 'chi-nhanh', 'menu', 'san-pham', 'lien-he']
    for item in menu_items:
         # Match href="item" or href="../item"
         # Note: ensure we don't match specific files if not intended, but usually slug links are clean.
         # We look for href="[../]*slug" ending with quote
         pattern = r'href=([\"\'])(\.\./)*' + re.escape(item) + r'\1'
         replacement = r'href=\1<?php echo home_url("/' + item + r'"); ?>\1'
         body_content = re.sub(pattern, replacement, body_content)

    # Write Template
    base_path = '/www/wwwroot/metta-template/wp-content/themes/metta-theme/'
    with open(base_path + template_name, 'w', encoding='utf-8') as f:
        f.write('<?php\n/* Template Name: ' + template_name.replace('.php', '') + ' */\nget_header(); ?>\n')
        f.write(body_content)
        f.write('\n<?php get_footer(); ?>')

files_map = {
    '/www/wwwroot/metta-template/gioi-thieu/index.htm': 'page-gioi-thieu.php',
    '/www/wwwroot/metta-template/khoa-hoc-duong-sinh/index.htm': 'page-khoa-hoc-duong-sinh.php',
    '/www/wwwroot/metta-template/chi-nhanh/index.htm': 'page-chi-nhanh.php',
    '/www/wwwroot/metta-template/menu/index.htm': 'page-menu.php',
    '/www/wwwroot/metta-template/san-pham/index.html': 'page-san-pham.php',
    '/www/wwwroot/metta-template/tin-tuc/index.htm': 'page-tin-tuc.php',
    '/www/wwwroot/metta-template/lien-he/index.htm': 'page-lien-he.php',
    '/www/wwwroot/metta-template/chinh-sach-bao-mat/index.htm': 'page-chinh-sach-bao-mat.php',
    '/www/wwwroot/metta-template/100-phut-an-nhien-tai-tam-ban-trai-nghiem-nhung-gi/index.htm': 'page-100-phut-an-nhien.php',
    '/www/wwwroot/metta-template/co-the-ra-roi-lung-dau-toc-bet/index.htm': 'page-co-the-ra-roi.php',
    '/www/wwwroot/metta-template/khong-ngai-bi-bach-khi-massage-vi-da-co-tinh-dau-thao-moc-dac-che-rieng-tu-tam/index.htm': 'page-khong-ngai-bi-bach.php',
    '/www/wwwroot/metta-template/lam-me-cung-dung-bo-be-chinh-minh/index.htm': 'page-lam-me-cung-dung.php',
    '/www/wwwroot/metta-template/moi-khi-met-moi-ban-thuong-di-dau/index.htm': 'page-moi-khi-met-moi.php',
    '/www/wwwroot/metta-template/muon-da-dep-hay-bat-dau-tu-1-giac-ngu-ngon/index.htm': 'page-muon-da-dep.php',
    '/www/wwwroot/metta-template/tam-oi-spa-chin-chu-tu-tac-phong-tinh-te-trong-tung-le-nghi-don-tiep/index.htm': 'page-tam-oi-spa-chin-chu.php',
    '/www/wwwroot/metta-template/tam-oi-spa-chon-binh-yen-giua-pho-phuong-tap-nap/index.htm': 'page-tam-oi-spa-chon-binh-yen.php',
    '/www/wwwroot/metta-template/tam-oi-spa-quan-1-chon-duong-sinh-rieng-tu-giua-long-pho-thi/index.htm': 'page-tam-oi-spa-quan-1.php',
    '/www/wwwroot/metta-template/tim-goc-an-yen-hen-nhau-o-tam-oi-spa-quan-4/index.htm': 'page-tim-goc-an-yen.php',
    '/www/wwwroot/metta-template/tran-troc-thau-dem-thuc-day-ra-roi/index.htm': 'page-tran-troc-thau-dem.php',
    '/www/wwwroot/metta-template/tro-troi-de-cam-mua-nang-that-thuong/index.htm': 'page-tro-troi-de-cam.php',
    '/www/wwwroot/metta-template/tu-cung-am-de-thu-thai/index.htm': 'page-tu-cung-am-de.php'
}

for path, tmpl in files_map.items():
    if os.path.exists(path):
        process_file(path, tmpl)
    else:
        print(f"Skipping {path} (not found)")
