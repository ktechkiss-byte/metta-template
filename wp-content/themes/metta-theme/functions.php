<?php
/**
 * Metta Theme functions and definitions
 */

function metta_handle_language_cookie() {
    if ( empty($_GET['lang']) ) {
        return;
    }

    $lang = sanitize_key(wp_unslash($_GET['lang']));
    if ( ! in_array($lang, array('vi', 'en', 'zh'), true) ) {
        return;
    }

    setcookie('metta_lang', $lang, time() + (DAY_IN_SECONDS * 30), COOKIEPATH ?: '/');
    $_COOKIE['metta_lang'] = $lang;
}
add_action('init', 'metta_handle_language_cookie', 1);

function metta_theme_scripts() {
    $theme_uri = get_template_directory_uri();
    $asset = function($local_path) use ($theme_uri) {
        return $theme_uri . '/' . ltrim($local_path, '/');
    };

    // Main theme stylesheet. Flatsome CSS/JS are already hard-coded in header.php/footer.php.
    wp_enqueue_style( 'metta-theme-style', get_stylesheet_uri(), array(), '3.35.5' );

    $uses_swiper = is_front_page()
        || is_page_template( 'page-khoa-hoc-duong-sinh.php' )
        || is_page_template( 'page-chi-nhanh.php' )
        || is_singular( 'chi-nhanh' );

    if ( $uses_swiper ) {
        wp_enqueue_style( 'swiper-bundle', $asset('vendor/flatsome-child/assets/css/swiper-bundle.min.css'), array(), '1.0' );
        wp_enqueue_script( 'swiper-js', $asset('vendor/flatsome-child/assets/js/swiper-bundle.min.js'), array(), '1.0', true );
        wp_enqueue_script( 'single-chi-nhanh-js', $asset('vendor/flatsome-child/assets/js/single-chi-nhanh.js'), array('swiper-js'), '1.0', true );
    }

    $uses_fancybox = is_page_template( 'page-chi-nhanh.php' ) || is_singular( 'chi-nhanh' );

    if ( $uses_fancybox ) {
        wp_enqueue_style( 'fancybox-css', $asset('vendor/flatsome-child/assets/css/fancybox.css'), array(), '1.0' );
        wp_enqueue_script( 'fancybox-js', $asset('vendor/flatsome-child/assets/js/fancybox.umd.js'), array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'metta_theme_scripts' );

// Include ACF fields
$metta_acf_fields = get_template_directory() . '/inc/acf-fields.php';
$metta_training_fields = get_template_directory() . '/inc/acf-training-fields.php';

if ( file_exists( $metta_acf_fields ) ) {
    require_once $metta_acf_fields;
}

if ( file_exists( $metta_training_fields ) ) {
    require_once $metta_training_fields;
}


function metta_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menus( array(
        'primary_left'  => __( 'Primary Menu Left', 'metta-theme' ),
        'primary_right' => __( 'Primary Menu Right', 'metta-theme' ),
        'mobile'        => __( 'Mobile Menu', 'metta-theme' ),
        'footer_links'  => __( 'Footer Links', 'metta-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'metta_theme_setup' );

/**
 * Automatically translate menu titles using metta_static
 */
add_filter('nav_menu_item_title', function($title, $item) {
    if (function_exists('metta_static')) {
        return metta_static($title);
    }
    return $title;
}, 10, 2);

// ==========================================
// CUSTOM MULTILANGUAGE HELPERS
// ==========================================

function metta_get_current_language() {
    // Check URL param first (priority)
    if ( isset($_GET['lang']) && in_array($_GET['lang'], array('vi', 'en', 'zh')) ) {
        return $_GET['lang'];
    }

    // Check cookie
    if ( isset($_COOKIE['metta_lang']) ) {
        $cookie_lang = sanitize_key(wp_unslash($_COOKIE['metta_lang']));
        if ( in_array($cookie_lang, array('vi', 'en', 'zh'), true) ) {
            return $cookie_lang;
        }
    }

    // Default
    return 'vi';
}

function metta_get_field($field_name, $post_id = false) {
    if (!function_exists('get_field')) return '';

    $lang = metta_get_current_language();

    // If default language (vi), just use the original field name
    if ( $lang == 'vi' ) {
        return get_field($field_name, $post_id);
    }
    
    // Attempt translated field
    $suffix = '_' . $lang; // _en or _zh
    $content = get_field($field_name . $suffix, $post_id);

    // Fallback to default if empty
    if ( empty($content) ) {
        // Optional: strict mode? No, fallback to VI is safer.
        return get_field($field_name, $post_id);
    }

    return $content;
}

function metta_t($text_vi, $text_en = '', $text_zh = '') {
    $lang = metta_get_current_language();
    if ($lang == 'en' && !empty($text_en)) return $text_en;
    if ($lang == 'zh' && !empty($text_zh)) return $text_zh;
    return $text_vi;
}

function metta_the_field($field_name, $post_id = false) {
    echo metta_get_field($field_name, $post_id);
}

function metta_get_repeater_rows($field_name, $post_id = false) {
    if (!function_exists('get_field')) {
        return array();
    }

    $rows = metta_get_field($field_name, $post_id);
    if (!is_array($rows)) {
        return array();
    }

    return array_values(array_filter($rows, 'is_array'));
}

function metta_row_value($row, $key, $fallback = '') {
    $lang = metta_get_current_language();
    if ($lang !== 'vi') {
        $localized_key = $key . '_' . $lang;
        if (!empty($row[$localized_key])) {
            return $row[$localized_key];
        }
    }

    return !empty($row[$key]) ? $row[$key] : $fallback;
}

function metta_default_branches() {
    return array(
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/z7321243434473_0b4c7065cbeea0b7a8817deed701d409.jpg',
            'name' => 'Metta Spa Tên Lửa',
            'hotline' => '0938431234',
            'address' => '378 Tên Lửa, P. Bình Trị Đông B, Q. Bình Tân, TP. HCM',
            'link' => home_url('/chi-nhanh/metta-spa-ten-lua/'),
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg',
            'name' => 'Metta Spa Biên Hòa',
            'hotline' => '0911535339',
            'address' => 'LK23 Đường N1, KDC Bửu Long, Biên Hòa, Đồng Nai',
            'link' => home_url('/chi-nhanh/metta-spa-bien-hoa/'),
        ),
    );
}

function metta_get_branch_items($field_name = 'branch_items', $legacy_prefix = 'branch', $post_id = false) {
    $rows = metta_get_repeater_rows($field_name, $post_id);
    $items = array();

    foreach ($rows as $row) {
        $name = metta_row_value($row, 'name');
        if (empty($name)) {
            continue;
        }

        $items[] = array(
            'image' => !empty($row['image']) ? $row['image'] : '',
            'name' => $name,
            'hotline' => metta_row_value($row, 'hotline'),
            'address' => metta_row_value($row, 'address'),
            'link' => !empty($row['link']) ? $row['link'] : '#',
        );
    }

    if (!empty($items)) {
        return $items;
    }

    for ($i = 1; $i <= 6; $i++) {
        $name_key = $legacy_prefix === 'about_branch' ? "about_branch_{$i}_name" : "{$legacy_prefix}_{$i}_name";
        $img_key = $legacy_prefix === 'about_branch' ? "about_branch_{$i}_img" : "{$legacy_prefix}_{$i}_img";
        $hotline_key = $legacy_prefix === 'about_branch' ? "about_branch_{$i}_hotline" : "{$legacy_prefix}_{$i}_hotline";
        $address_key = $legacy_prefix === 'about_branch' ? "about_branch_{$i}_addr" : "{$legacy_prefix}_{$i}_address";
        $link_key = $legacy_prefix === 'about_branch' ? "about_branch_{$i}_link" : "{$legacy_prefix}_{$i}_link";

        $name = metta_get_field($name_key);
        if (empty($name)) {
            continue;
        }

        $items[] = array(
            'image' => metta_get_field($img_key),
            'name' => $name,
            'hotline' => metta_get_field($hotline_key),
            'address' => metta_get_field($address_key),
            'link' => metta_get_field($link_key) ?: '#',
        );
    }

    return !empty($items) ? $items : metta_default_branches();
}

function metta_get_product_items($post_id = false) {
    $rows = metta_get_repeater_rows('product_items', $post_id);
    $items = array();

    foreach ($rows as $row) {
        $name = metta_row_value($row, 'name');
        if (empty($name)) {
            continue;
        }

        $items[] = array(
            'image' => !empty($row['image']) ? $row['image'] : '',
            'name' => $name,
            'desc' => metta_row_value($row, 'desc'),
            'price' => metta_row_value($row, 'price'),
            'link' => !empty($row['link']) ? $row['link'] : '#',
        );
    }

    if (!empty($items)) {
        return $items;
    }

    for ($i = 1; $i <= 6; $i++) {
        $name = metta_get_field('sp' . $i . '_name');
        if (empty($name)) {
            continue;
        }

        $items[] = array(
            'image' => metta_get_field('sp' . $i . '_img'),
            'name' => $name,
            'desc' => metta_get_field('sp' . $i . '_desc'),
            'price' => metta_get_field('sp' . $i . '_price'),
            'link' => metta_get_field('sp' . $i . '_link') ?: '#',
        );
    }

    return $items;
}

function metta_default_combos() {
    return array(
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
            'title' => 'GỘI ĐẦU THẢO DƯỢC DƯỠNG SINH',
            'desc' => 'Một liệu pháp dưỡng sinh - chăm sóc vùng đầu<br />Thang 1: Bài Độc (bạc hà,hương nhu, sả) <br />Thang 2: Kiện Tóc - Giảm Áp (ngải cứu, thục địa, hà thủ ô)<br />Thang 3: Hoạt huyết - Thư giãn (quế chỉ, gừng, bồ kết)',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/co_vai_gay.png',
            'title' => 'DƯỠNG SINH VAI – CỔ – GÁY CHUYÊN SÂU',
            'desc' => 'Khai thông huyệt đạo vùng cổ vai gáy – giải phóng khí trệ, đưa máu lên nuôi não. <br /><strong>Giúp thư giãn tâm trí, giảm đau mỏi, cải thiện giấc ngủ và tinh thần sáng suốt.</strong>',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/duong_gan_gia_uat.png',
            'title' => 'DƯỠNG GAN GIẢI UẤT',
            'desc' => 'Giải uất kết, thanh nhiệt, điều hòa cảm xúc. <br /><strong>Giúp giải tỏa nóng giận, mệt mỏi, mang lại sự bình hòa và sáng da, nhẹ người.</strong>',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/duong_tim_an_than.png',
            'title' => 'DƯỠNG TIM AN THẦN',
            'desc' => 'Điều hòa khí huyết, an định thần trí. <br /><strong>Giúp giảm hồi hộp, lo âu, đưa tâm về trạng thái an nhiên – ngủ sâu giấc tự nhiên.</strong>',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/cham_soc_phu_san.png',
            'title' => 'CHĂM SÓC PHỤ KHOA',
            'desc' => 'Cải thiện tình trạng khô rát , hàn lạnh tử cung lưu thông khí huyết, giảm đau bụng kinh, điều hòa kinh nguyệt , Tăng cường nội tiết',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/duong_than_an_nguyen.png',
            'title' => 'DƯỠNG THẬN AN NGUYÊN',
            'desc' => 'Thận là gốc của tiên thiên, sinh tinh , sinh tuỷ <br /><strong>Giúp ngủ sâu, cải thiện sinh lực – giữ gốc khỏe</strong>',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/duong_phoi_ich_khi.png',
            'title' => 'DƯỠNG PHỔI ÍCH KHÍ',
            'desc' => 'Thanh phế, bổ khí, khai thông hô hấp.<br /><strong>Giúp nhẹ ngực, cải thiện hô hấp.</strong>',
        ),
        array(
            'image' => get_site_url() . '/wp-content/uploads/2025/12/duong_ty_vi_metta.png',
            'title' => 'DƯỠNG TỲ VỊ METTA',
            'desc' => 'Bổ trung ích khí, điều hóa tiêu hóa – hấp thu.<br /><strong>Giúp cơ thể khỏe từ ruột, da hồng hào, tinh thần minh mẫn và tăng miễn dịch.</strong>',
        ),
    );
}

function metta_get_combo_items($post_id = false) {
    $rows = metta_get_repeater_rows('combo_items', $post_id);
    $items = array();

    foreach ($rows as $row) {
        $title = metta_row_value($row, 'title');
        if (empty($title)) {
            continue;
        }

        $items[] = array(
            'image' => !empty($row['image']) ? $row['image'] : '',
            'title' => $title,
            'desc' => metta_row_value($row, 'desc'),
        );
    }

    if (!empty($items)) {
        return $items;
    }

    $defaults = metta_default_combos();
    foreach ($defaults as $index => $default) {
        $i = $index + 1;
        if ($i <= 6) {
            $default['image'] = metta_get_field('combo_' . $i . '_img') ?: $default['image'];
            $default['title'] = metta_get_with_fallback('combo_' . $i . '_title', $default['title']);
            $default['desc'] = metta_get_with_fallback('combo_' . $i . '_desc', $default['desc']);
        }
        $items[] = $default;
    }

    return $items;
}

function metta_get_with_fallback($field_name, $default_vi) {
    if (!function_exists('get_field')) return $default_vi;
    
    $lang = metta_get_current_language();
    
    // 1. If Vietnamese, try current field
    if ($lang == 'vi') {
        $val = get_field($field_name);
        return $val ? $val : $default_vi;
    }
    
    // 2. For non-VI, try localized field first (_en, _zh)
    $suffix = '_' . $lang;
    $val = get_field($field_name . $suffix);
    if (!empty($val)) {
        return $val;
    }
    
    // 3. If localized field is empty, fallback to the base Vietnamese ACF field
    $val_vi = get_field($field_name);
    if (!empty($val_vi)) {
        // Optional: Should we translate the base field content if it's text?
        // For links, we definitely want the base field.
        // For text, we can try to translate it using the map.
        $translations = metta_get_translations();
        if (isset($translations[$lang][$val_vi])) {
            return $translations[$lang][$val_vi];
        }
        return $val_vi;
    }
    
    // 4. If even the base field is empty, check the hardcoded translation map for the hardcoded $default_vi
    $translations = metta_get_translations();
    if (isset($translations[$lang][$default_vi])) {
        return $translations[$lang][$default_vi];
    }
    
    // 5. Fallback to hardcoded default (VI) if all else fails
    return $default_vi;
}

function metta_static($text) {
    if (empty($text)) return '';
    $lang = metta_get_current_language();
    if ($lang == 'vi') return $text; // Optimization
    
    $translations = metta_get_translations();
    if (isset($translations[$lang][$text])) {
        return $translations[$lang][$text];
    }
    return $text;
}

function metta_is_active($path = '') {
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $target_url = home_url($path);
    
    // Normalize string by removing query parameters for comparison if needed, but keeping simple for now
    // Handle home specifically
    if ($path === '' || $path === '/') {
        if (trim(parse_url($current_url, PHP_URL_PATH), '/') === trim(parse_url(home_url(), PHP_URL_PATH), '/')) {
            return 'current-menu-item active';
        }
        return '';
    }

    if (strpos($current_url, $target_url) !== false) {
        return 'current-menu-item active';
    }
    return '';
}

function metta_get_booking_url() {
    return apply_filters('metta_booking_url', 'https://datlich.mettaspadongy.vn/');
}

function metta_default_nav_items($location) {
    $items = array(
        'primary_left' => array(
            array('label' => 'Trang chủ', 'url' => '/'),
            array('label' => 'Giới thiệu', 'url' => '/gioi-thieu'),
            array('label' => 'Menu', 'url' => '/menu'),
            array('label' => 'Sản phẩm', 'url' => '/san-pham'),
        ),
        'primary_right' => array(
            array('label' => 'Khóa học', 'url' => '/dao-tao'),
            array('label' => 'Chi nhánh', 'url' => '/chi-nhanh'),
            array('label' => 'Tin tức', 'url' => '/tin-tuc'),
            array('label' => 'Liên hệ', 'url' => '/lien-he'),
            array('label' => 'Đặt Lịch', 'url' => metta_get_booking_url(), 'classes' => 'metta-booking-menu-item'),
        ),
    );

    if ($location === 'mobile') {
        return array_merge($items['primary_left'], $items['primary_right']);
    }

    return isset($items[$location]) ? $items[$location] : array();
}

function metta_fallback_nav_menu_items_html($location) {
    $html = '';

    foreach (metta_default_nav_items($location) as $item) {
        $url = isset($item['url']) ? $item['url'] : '#';
        $is_external = preg_match('#^https?://#i', $url);
        $href = $is_external ? $url : home_url($url);
        $classes = array('menu-item');

        if (!$is_external) {
            $active_class = metta_is_active($url);
            if ($active_class) {
                $classes = array_merge($classes, explode(' ', $active_class));
            }
        }

        if (!empty($item['classes'])) {
            $classes = array_merge($classes, explode(' ', $item['classes']));
        }

        $target = $is_external ? ' target="_blank" rel="noopener"' : '';

        $html .= sprintf(
            '<li class="%1$s"><a href="%2$s"%3$s><span>%4$s</span></a></li>',
            esc_attr(implode(' ', array_unique(array_filter($classes)))),
            esc_url($href),
            $target,
            esc_html(metta_static($item['label']))
        );
    }

    return $html;
}

function metta_nav_menu_items_html($theme_location) {
    if (has_nav_menu($theme_location)) {
        $menu_html = wp_nav_menu(array(
            'theme_location' => $theme_location,
            'container'      => false,
            'items_wrap'     => '%3$s',
            'depth'          => 3,
            'echo'           => false,
            'fallback_cb'    => false,
        ));

        if (!empty($menu_html)) {
            return $menu_html;
        }
    }

    return metta_fallback_nav_menu_items_html($theme_location);
}

function metta_render_nav_menu_items($theme_location) {
    echo metta_nav_menu_items_html($theme_location);
}

function metta_render_mobile_nav_menu_items() {
    if (has_nav_menu('mobile')) {
        echo metta_nav_menu_items_html('mobile');
        return;
    }

    if (has_nav_menu('primary_left') || has_nav_menu('primary_right')) {
        echo metta_nav_menu_items_html('primary_left');
        echo metta_nav_menu_items_html('primary_right');
        return;
    }

    echo metta_fallback_nav_menu_items_html('mobile');
}

function metta_menu_item_is_booking($url = '', $title = '') {
    $haystack = strtolower(remove_accents(wp_strip_all_tags($url . ' ' . $title)));

    return strpos($haystack, 'datlich.mettaspadongy.vn') !== false
        || strpos($haystack, '/dat-lich') !== false
        || strpos($haystack, 'dat lich') !== false;
}

function metta_nav_menu_item_classes($classes, $menu_item, $args, $depth) {
    if (metta_menu_item_is_booking($menu_item->url, $menu_item->title)) {
        $classes[] = 'metta-booking-menu-item';
    }

    return array_unique($classes);
}
add_filter('nav_menu_css_class', 'metta_nav_menu_item_classes', 10, 4);

function metta_nav_menu_link_attributes($atts, $menu_item, $args, $depth) {
    if (!metta_menu_item_is_booking($menu_item->url, $menu_item->title)) {
        return $atts;
    }

    $atts['target'] = '_blank';
    $atts['rel'] = trim((isset($atts['rel']) ? $atts['rel'] : '') . ' noopener');

    return $atts;
}
add_filter('nav_menu_link_attributes', 'metta_nav_menu_link_attributes', 10, 4);

function metta_get_translations() {
    return array(
        'en' => array(
            'Trang chủ' => 'Home',
            'Giới thiệu' => 'About Us',
            'Tin tức' => 'News',
            'Khóa học' => 'Courses',
            'Chi nhánh' => 'Branches',
            'Menu' => 'Menu',
            'Sản phẩm' => 'Products',
            'Liên hệ' => 'Contact',
            'Đặt Lịch' => 'Booking', 
            'Hẹn lịch' => 'Booking',
            'DƯỠNG SINH VAI – CỔ – GÁY CHUYÊN SÂU' => 'Intensive Neck & Shoulder Nourishing',
            'Tại Metta Spa Có gì' => 'What is at Metta Spa?',
            'Liệu pháp độc quyền tập trung đả thông Kinh Bàng Quang (đường kinh lạc dài nhất cơ thể) và các huyệt Du vùng lưng. Kết hợp với chườm thảo dược và ngâm chân bài hàn, giúp đào thải độc tố tích tụ trong tạng phủ ra ngoài qua đường bài tiết.' => 'Exclusive therapy focusing on unblocking the Bladder Meridian (the longest meridian) and Back Shu points. Combined with herbal compresses and foot soaking, it helps eliminate accumulated toxins through excretion.',
            'Combo Nổi Bật' => 'Featured Combos',
            'Bảo Trì Sức Khoẻ<br />Cùng Metta Spa' => 'Health Maintenance<br />With Metta Spa',
            'Bảo Trì Sức Khoẻ\nCùng Metta Spa' => "Health Maintenance\nWith Metta Spa",
            'Metta Spa cung cấp các sản phẩm chăm sóc sức khỏe chủ động từ thảo dược thiên nhiên, được tinh chế dựa trên nền tảng Đông y dưỡng sinh. Mỗi sản phẩm là một giải pháp giúp bạn nuôi dưỡng cơ thể, thư giãn tinh thần và duy trì sự cân bằng mỗi ngày ngay tại nhà.' => 'Metta Spa offers proactive healthcare products made from natural herbs, refined based on Oriental nourishing principles. Each product is a solution to nourish your body, relax your mind, and maintain daily balance at home.',
            'Metta Spa Đông Y' => 'Metta Oriental Spa',
            'Khách Hàng Nói Về Metta Spa' => 'What Customers Say About Metta Spa',
            'Chọn Chi Nhánh' => 'Select Branch',
            'Giải uất kết, thanh nhiệt, điều hòa cảm xúc. <br /><strong>Giúp giải tỏa nóng giận, mệt mỏi, mang lại sự bình hòa và sáng da, nhẹ người.</strong>' => 'Relieve stagnation, clear heat, regulate emotions. <br /><strong>Helps release anger and fatigue, improving peace of mind, brightening skin, and feeling light.</strong>',
            'Gỡ bỏ "tảng đá" trên vai – Trả lại sự linh hoạt vốn có.' => 'Remove the "boulder" on your shoulder – Restore inherent flexibility.',
            'Metta cùng bạn xây dựng' => 'Metta builds with you',
            'lối sống dưỡng sinh.' => 'a nourishing lifestyle.',
            'Tái tạo sức khoẻ từ gốc – lan toả giá trị dưỡng sinh Đông Y. Chúng tôi chọn con đường chậm, tự nhiên, chân thật – để sức khoẻ trở về đúng bản chất.' => 'Regenerate health from the root – Spread the value of Oriental Nourishing. We choose the slow, natural, authentic path – for health to return to its true nature.',
            'KHỞI ĐẦU SỰ NGHIỆP\nVỮNG CHẮC TẠI METTA' => "START A SOLID\nCAREER AT METTA",
            'Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong và bão dưỡng sức khoẻ cho khách hàng chất lượng nhất.' => 'Metta Oriental Spa recreates the traditional Asian art of beauty – combining traditional nourishing essence with modern therapies, helping purify the body, beautify from within, and providing the highest quality health maintenance.',
            'Gội Đầu Dưỡng Sinh & Khai Thông Huyệt Đạo' => 'Nourishing Shampoo & Meridian Opening',
            'Hơn cả làm sạch, đó là liệu pháp "thay não" cho người bận rộn.' => 'More than cleaning, it is a "brain replacement" therapy for busy people.',
            '"Trao nghề từ Tâm – Dựng nghiệp từ Tầm"\nVăn hóa Tây Nguyên hòa quyện tinh hoa Đông Y trong từng bài giảng.' => '"Teaching from the Heart – Building Career with Vision"\nHighland culture blends with Oriental Medicine essence in every lecture.',
            'Giải Phóng Tắc Nghẽn Cổ Vai Gáy' => 'Relieve Neck & Shoulder Blockages',
            'Sử dụng kỹ thuật day ấn sâu vào các huyệt đạo "vàng" (Phong Trì, Kiên Tỉnh, Đại Chùy) kết hợp với tinh dầu thảo dược ấm nóng. KTV Metta sẽ bóc tách từng bó cơ bị co cứng, giải phóng chèn ép dây thần kinh và khôi phục đường cong sinh lý.' => 'Using deep pressing techniques on "golden" acupoints (Feng Chi, Jian Jing, Da Zhui) combined with warm herbal oil. Metta technicians will separate each stiff muscle bundle, release nerve compression, and restore physiological curves.',
            'DƯỠNG TIM AN THẦN' => 'HEART NOURISHING & CALMING',
            'Thải độc tầng sâu – Hồi sinh năng lượng gốc.' => 'Deep detoxification – Revive original energy.',
            'DƯỠNG THẬN AN NGUYÊN' => 'KIDNEY NOURISHING & VITALITY',
            'Một liệu pháp dưỡng sinh - chăm sóc vùng đầu<br />Thang 1: Bài Độc (bạc hà,hương nhu, sả) <br />Thang 2: Kiện Tóc - Giảm Áp (ngải cứu, thục địa, hà thủ ô)<br />Thang 3: Hoạt huyết - Thư giãn (quế chỉ, gừng, bồ kết)' => 'A nourishing therapy - head care<br />Step 1: Detox (peppermint, holy basil, lemongrass) <br />Step 2: Hair Strengthening - Pressure Reduction (mugwort, rehmannia, polygonum)<br />Step 3: Blood Circulation - Relaxation (cinnamon twig, ginger, locust bean)',
            'Trải nghiệm dưỡng sinh cao cấp' => 'Premium nourishing experience',
            'DƯỠNG GAN GIẢI UẤT' => 'LIVER NOURISHING & STRESS RELIEF',
            'Bảng giá dịch vụ' => 'Service Price List',
            'Dưỡng Sinh Tạng Phủ (Gan - Thận - Phổi)' => 'Viscera Nourishing (Liver - Kidney - Lung)',
            'Điều hòa khí huyết, an định thần trí. <br /><strong>Giúp giảm hồi hộp, lo âu, đưa tâm về trạng thái an nhiên – ngủ sâu giấc tự nhiên.</strong>' => 'Regulate Qi and blood, calm the mind. <br /><strong>Helps reduce palpitations, anxiety, brings the mind to a peaceful state – natural deep sleep.</strong>',
            'Hình ảnh' => 'Gallery',
            'GỘI ĐẦU THẢO DƯỢC DƯỠNG SINH' => 'HERBAL NOURISHING SHAMPOO',
            'Kết hợp hài hòa các liệu trình dưỡng sinh đặc trưng của Metta Spa, mang đến sự thư giãn toàn diện, phục hồi năng lượng và nuôi dưỡng vẻ đẹp từ gốc rễ.' => 'Harmonious combination of Metta Spa\'s signature nourishing courses, bringing comprehensive relaxation, restoring energy, and nurturing beauty from the root.',
            'Metta đông y Spa – nơi chăm sóc sức khỏe và sắc đẹp từ gốc rễ. Với liệu trình dưỡng sinh chuẩn mực, thảo dược tinh chọn và đội ngũ tận tâm, chúng tôi giúp bạn thư giãn, phục hồi năng lượng và nuôi dưỡng vẻ đẹp bền lâu.' => 'Metta Oriental Spa – a place for root health and beauty care. With standard nourishing regimens, selected herbs, and a dedicated team, we help you relax, recover energy, and nurture lasting beauty.',
            'Thận là gốc của tiên thiên, sinh tinh , sinh tuỷ <br /><strong>Giúp ngủ sâu, cải thiện sinh lực – giữ gốc khỏe</strong>' => 'The kidney is the root of congenital constitution, generating essence and marrow <br /><strong>Helps sleep deeply, improve vitality – keep the root healthy</strong>',
            'Khám phá Chi Nhánh' => 'Discover Branches',
            'Cải thiện tình trạng khô rát , hàn lạnh tử cung lưu thông khí huyết, giảm đau bụng kinh, điều hòa kinh nguyệt , Tăng cường nội tiết' => 'Improve dryness, cold uterus, circulate Qi and blood, reduce menstrual pain, regulate menstruation, enhance hormones',
            'CHĂM SÓC PHỤ KHOA' => 'GYNECOLOGICAL CARE',
            'Quy trình 75 phút kết hợp giữa nước gội thảo dược được nấu tươi mỗi ngày (Bồ kết, Hà thủ ô, Gừng...) và kỹ thuật Ấn - Vuốt - Miết độc quyền vào vùng Bách Hội. Liệu pháp giúp đả thông kinh lạc vùng đầu, đưa dưỡng chất thấm sâu vào nang tóc.' => '75-minute process combining herbal shampoo cooked fresh daily (Locust bean, Polygonum, Ginger...) and exclusive Pressing - Stroking - Rubbing techniques on the Bai Hui area. The therapy helps unblock head meridians, delivering nutrients deep into hair follicles.',
            'Khai thông huyệt đạo vùng cổ vai gáy – giải phóng khí trệ, đưa máu lên nuôi não. <br /><strong>Giúp thư giãn tâm trí, giảm đau mỏi, cải thiện giấc ngủ và tinh thần sáng suốt.</strong>' => 'Unblock neck and shoulder acupoints – release stagnant Qi, bring blood to nourish the brain. <br /><strong>Helps relax the mind, reduce pain and fatigue, improve sleep and mental clarity.</strong>',
            'Bảo Dưỡng Sức Khoẻ<br />Ghé Metta Spa!' => 'Maintain Health<br />Visit Metta Spa!',
            'Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong và bão dưỡng sức khoẻ cho khách hàng chất lượng nhất.' => 'Metta Oriental Spa recreates the traditional Asian art of beauty – combining traditional nourishing essence with modern therapies, helping purify the body, beautify from within, and providing the highest quality health maintenance.',
            '<p>Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong. Giữa nhịp sống tất bật, Metta Spa không chỉ giúp bạn thư giãn, phục hồi năng lượng, mà còn nâng niu làn da, cơ thể và tâm hồn theo cách tự nhiên, hài hòa – như cách ông bà ta xưa từng làm đẹp bằng thảo mộc và hơi ấm. Tại Metta Spa, làm đẹp là một hành trình trở về với bản thể an nhiên và trọn vẹn hơn.</p>' => '<p>Metta Oriental Spa recreates the traditional Asian art of beauty, blending ancient nourishing essence with modern therapies to purify the body and beautify from deep within. Amidst the busy life, Metta Spa not only helps you relax and restore energy but also cherishes your skin, body, and soul in a natural, harmonious way – just as our ancestors used herbs and warmth. At Metta Spa, beauty is a journey back to a more peaceful and complete self.</p>',
        ),
        'zh' => array(
            'Trang chủ' => '首页',
            'Giới thiệu' => '关于我们',
            'Tin tức' => '新闻',
            'Khóa học' => '课程',
            'Chi nhánh' => '分店',
            'Menu' => '菜单',
            'Sản phẩm' => '产品',
            'Liên hệ' => '联系',
            'Đặt Lịch' => '预约', 
            'Hẹn lịch' => '预约',
            'DƯỠNG SINH VAI – CỔ – GÁY CHUYÊN SÂU' => '深度肩颈养生',
            'Tại Metta Spa Có gì' => 'Metta Spa 有什么？',
            'Liệu pháp độc quyền tập trung đả thông Kinh Bàng Quang (đường kinh lạc dài nhất cơ thể) và các huyệt Du vùng lưng. Kết hợp với chườm thảo dược và ngâm chân bài hàn, giúp đào thải độc tố tích tụ trong tạng phủ ra ngoài qua đường bài tiết.' => '独家疗法专注于疏通膀胱经（人体最长的经络）和背俞穴。结合草药热敷和足浴，有助于通过排泄排出积聚的毒素。',
            'Combo Nổi Bật' => '特色套餐',
            'Bảo Trì Sức Khoẻ<br />Cùng Metta Spa' => '健康保养<br />与 Metta Spa 同行',
            'Bảo Trì Sức Khoẻ\nCùng Metta Spa' => "健康保养\n与 Metta Spa 同行",
            'Metta Spa cung cấp các sản phẩm chăm sóc sức khỏe chủ động từ thảo dược thiên nhiên, được tinh chế dựa trên nền tảng Đông y dưỡng sinh. Mỗi sản phẩm là một giải pháp giúp bạn nuôi dưỡng cơ thể, thư giãn tinh thần và duy trì sự cân bằng mỗi ngày ngay tại nhà.' => 'Metta Spa 提供基于东方医学基础精制的天然草药主动保健产品。每款产品都是帮助您在家中滋养身体、放松身心并保持日常平衡的解决方案。',
            'Metta Spa Đông Y' => 'Metta 东方 Spa',
            'Khách Hàng Nói Về Metta Spa' => '客户对 Metta Spa 的评价',
            'Chọn Chi Nhánh' => '选择分店',
            'Giải uất kết, thanh nhiệt, điều hòa cảm xúc. <br /><strong>Giúp giải tỏa nóng giận, mệt mỏi, mang lại sự bình hòa và sáng da, nhẹ người.</strong>' => '解郁结，清热，调节情绪。<br /><strong>有助于缓解愤怒、疲劳，带来平和、亮肤和轻松感。</strong>',
            'Gỡ bỏ "tảng đá" trên vai – Trả lại sự linh hoạt vốn có.' => '卸下肩上的“巨石”——恢复固有的灵活性。',
            'Metta cùng bạn xây dựng' => 'Metta 与您共建',
            'lối sống dưỡng sinh.' => '养生生活方式。',
            'Tái tạo sức khoẻ từ gốc – lan toả giá trị dưỡng sinh Đông Y. Chúng tôi chọn con đường chậm, tự nhiên, chân thật – để sức khoẻ trở về đúng bản chất.' => '从根本上通过再生健康——传播东方养生价值。我们选择缓慢、自然、真实的道路——让健康回归其本质。',
            'KHỞI ĐẦU SỰ NGHIỆP\nVỮNG CHẮC TẠI METTA' => "在 METTA 开启\n稳固的事业",
            'Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong và bão dưỡng sức khoẻ cho khách hàng chất lượng nhất.' => 'Metta 东方 Spa 再现了亚洲人的传统美容艺术——结合传统养生精髓与现代护理疗法，帮助净化身体，由内而外美容，并为客户提供最优质的健康保养。',
            'Gội Đầu Dưỡng Sinh & Khai Thông Huyệt Đạo' => '养生洗头 & 开通穴道',
            'Hơn cả làm sạch, đó là liệu pháp "thay não" cho người bận rộn.' => '不仅仅是清洁，更是忙碌人群的“换脑”疗法。',
            '"Trao nghề từ Tâm – Dựng nghiệp từ Tầm"\nVăn hóa Tây Nguyên hòa quyện tinh hoa Đông Y trong từng bài giảng.' => '“用心传授——以远见立业”\n西原文化与中医精髓融入每一堂课。',
            'Giải Phóng Tắc Nghẽn Cổ Vai Gáy' => '缓解颈肩后颈堵塞',
            'Sử dụng kỹ thuật day ấn sâu vào các huyệt đạo "vàng" (Phong Trì, Kiên Tỉnh, Đại Chùy) kết hợp với tinh dầu thảo dược ấm nóng. KTV Metta sẽ bóc tách từng bó cơ bị co cứng, giải phóng chèn ép dây thần kinh và khôi phục đường cong sinh lý.' => '运用深按“黄金”穴位（风池、肩井、大椎）的技术，结合温热草药油。Metta 技师将分离每一束僵硬的肌肉，缓解神经压迫，恢复生理曲线。',
            'DƯỠNG TIM AN THẦN' => '养心安神',
            'Thải độc tầng sâu – Hồi sinh năng lượng gốc.' => '深层排毒——复活原始能量。',
            'DƯỠNG THẬN AN NGUYÊN' => '养肾安元',
            'Một liệu pháp dưỡng sinh - chăm sóc vùng đầu<br />Thang 1: Bài Độc (bạc hà,hương nhu, sả) <br />Thang 2: Kiện Tóc - Giảm Áp (ngải cứu, thục địa, hà thủ ô)<br />Thang 3: Hoạt huyết - Thư giãn (quế chỉ, gừng, bồ kết)' => '一种养生疗法 - 头部护理<br />第一步：排毒（薄荷、罗勒、香茅）<br />第二步：健发 - 减压（艾草、熟地、何首乌）<br />第三步：活血 - 放松（桂枝、生姜、皂角）',
            'Trải nghiệm dưỡng sinh cao cấp' => '高端养生体验',
            'DƯỠNG GAN GIẢI UẤT' => '养肝解郁',
            'Bảng giá dịch vụ' => '服务价目表',
            'Dưỡng Sinh Tạng Phủ (Gan - Thận - Phổi)' => '脏腑养生（肝 - 肾 - 肺）',
            'Điều hòa khí huyết, an định thần trí. <br /><strong>Giúp giảm hồi hộp, lo âu, đưa tâm về trạng thái an nhiên – ngủ sâu giấc tự nhiên.</strong>' => '调节气血，安神定志。<br /><strong>有助于减少心悸、焦虑，使心灵回归安宁状态——自然深睡眠。</strong>',
            'Hình ảnh' => '图片',
            'GỘI ĐẦU THẢO DƯỢC DƯỠNG SINH' => '草药养生洗头',
            'Kết hợp hài hòa các liệu trình dưỡng sinh đặc trưng của Metta Spa, mang đến sự thư giãn toàn diện, phục hồi năng lượng và nuôi dưỡng vẻ đẹp từ gốc rễ.' => '和谐结合 Metta Spa 特色的养生疗程，带来全面放松，恢复能量，从根本上滋养美丽。',
            'Metta đông y Spa – nơi chăm sóc sức khỏe và sắc đẹp từ gốc rễ. Với liệu trình dưỡng sinh chuẩn mực, thảo dược tinh chọn và đội ngũ tận tâm, chúng tôi giúp bạn thư giãn, phục hồi năng lượng và nuôi dưỡng vẻ đẹp bền lâu.' => 'Metta 东方 Spa —— 从根本上照顾健康和美丽的地方。凭借标准的养生方案、精选的草药和敬业的团队，我们帮助您放松、恢复能量并滋养持久的美丽。',
            'Thận là gốc của tiên thiên, sinh tinh , sinh tuỷ <br /><strong>Giúp ngủ sâu, cải thiện sinh lực – giữ gốc khỏe</strong>' => '肾为先天之本，生精，生髓 <br /><strong>有助于深睡眠，改善活力——保持根本健康</strong>',
            'Khám phá Chi Nhánh' => '探索分店',
            'Cải thiện tình trạng khô rát , hàn lạnh tử cung lưu thông khí huyết, giảm đau bụng kinh, điều hòa kinh nguyệt , Tăng cường nội tiết' => '改善干燥、宫寒，流通气血，减轻痛经，调节月经，增强荷尔蒙',
            'CHĂM SÓC PHỤ KHOA' => '妇科护理',
            'Quy trình 75 phút kết hợp giữa nước gội thảo dược được nấu tươi mỗi ngày (Bồ kết, Hà thủ ô, Gừng...) và kỹ thuật Ấn - Vuốt - Miết độc quyền vào vùng Bách Hội. Liệu pháp giúp đả thông kinh lạc vùng đầu, đưa dưỡng chất thấm sâu vào nang tóc.' => '75分钟的流程，结合每天新鲜熬制的草药洗发水（皂角、何首乌、生姜……）和独家的百会穴按-抚-推技术。该疗法有助于疏通头部经络，将营养输送到毛囊深处。',
            'Khai thông huyệt đạo vùng cổ vai gáy – giải phóng khí trệ, đưa máu lên nuôi não. <br /><strong>Giúp thư giãn tâm trí, giảm đau mỏi, cải thiện giấc ngủ và tinh thần sáng suốt.</strong>' => '疏通颈肩穴位——释放气滞，引血养脑。<br /><strong>有助于放松心灵，减轻疼痛和疲劳，改善睡眠和精神清晰度。</strong>',
            'Bảo Dưỡng Sức Khoẻ<br />Ghé Metta Spa!' => 'Maintain Health<br />Visit Metta Spa!',
            '<p>Metta đông y Spa là nơi tái hiện nghệ thuật làm đẹp truyền thống của người Á Đông – kết hợp tinh hoa dưỡng sinh cổ truyền với liệu pháp chăm sóc hiện đại, giúp thanh lọc cơ thể, làm đẹp từ sâu bên trong. Giữa nhịp sống tất bật, Metta Spa không chỉ giúp bạn thư giãn, phục hồi năng lượng, mà còn nâng niu làn da, cơ thể và tâm hồn theo cách tự nhiên, hài hòa – như cách ông bà ta xưa từng làm đẹp bằng thảo mộc và hơi ấm. Tại Metta Spa, làm đẹp là một hành trình trở về với bản thể an nhiên và trọn vẹn hơn.</p>' => '<p>Metta Oriental Spa recreates the traditional Asian art of beauty, blending ancient nourishing essence with modern therapies to purify the body and beautify from deep within. Amidst the busy life, Metta Spa not only helps you relax and restore energy but also cherishes your skin, body, and soul in a natural, harmonious way — just as our ancestors used herbs and warmth. At Metta Spa, beauty is a journey back to a more peaceful and complete self.</p>',
        ),
    );
}

// ==========================================
// CUSTOM OG IMAGE
// ==========================================
add_filter( 'rank_math/opengraph/facebook/image', function( $attachment_url ) {
    // Override with custom PNG logo for better social support
    return 'https://mettaspadongy.vn/wp-content/uploads/2026/01/Screenshot-2025-12-18-at-07.23.48.png';
});

/**
 * DearFlip is only needed for the Menu PDF viewer.
 */
function metta_enqueue_menu_flipbook_assets() {
    if ( ! metta_is_menu_flipbook_page() ) {
        metta_dequeue_dflip_outside_menu();
        return;
    }

    $asset_path = WP_CONTENT_DIR . '/plugins/3d-flipbook-dflip-lite/assets';
    $asset_url  = content_url( '/plugins/3d-flipbook-dflip-lite/assets/' );

    if ( ! file_exists( $asset_path . '/js/dflip.min.js' ) || ! file_exists( $asset_path . '/css/dflip.min.css' ) ) {
        return;
    }

    wp_enqueue_style( 'metta-dflip-style', $asset_url . 'css/dflip.min.css', array(), '2.4.30' );
    wp_enqueue_script( 'metta-dflip-script', $asset_url . 'js/dflip.min.js', array( 'jquery' ), '2.4.30', true );

    $dflip_global = array(
        'text' => array(
            'toggleSound' => 'Bật/tắt âm thanh',
            'toggleThumbnails' => 'Ẩn/hiện trang thu nhỏ',
            'toggleOutline' => 'Ẩn/hiện mục lục',
            'previousPage' => 'Trang trước',
            'nextPage' => 'Trang sau',
            'toggleFullscreen' => 'Toàn màn hình',
            'zoomIn' => 'Phóng to',
            'zoomOut' => 'Thu nhỏ',
            'toggleHelp' => 'Trợ giúp',
            'singlePageMode' => 'Một trang',
            'doublePageMode' => 'Hai trang',
            'downloadPDFFile' => 'Tải PDF',
            'gotoFirstPage' => 'Trang đầu',
            'gotoLastPage' => 'Trang cuối',
            'share' => 'Chia sẻ',
            'mailSubject' => 'Bảng giá Metta Spa',
            'mailBody' => 'Xem bảng giá tại {{url}}',
            'loading' => 'Đang tải bảng giá ',
        ),
        'viewerType' => 'flipbook',
        'moreControls' => 'download,pageMode,startPage,endPage,sound',
        'hideControls' => '',
        'scrollWheel' => 'false',
        'backgroundColor' => '#777',
        'height' => 'auto',
        'paddingLeft' => '20',
        'paddingRight' => '20',
        'controlsPosition' => 'bottom',
        'duration' => 800,
        'soundEnable' => 'true',
        'enableDownload' => 'true',
        'showSearchControl' => 'false',
        'showPrintControl' => 'false',
        'enableAnnotation' => false,
        'enableAnalytics' => 'false',
        'webgl' => 'true',
        'hard' => 'none',
        'maxTextureSize' => '1600',
        'rangeChunkSize' => '524288',
        'zoomRatio' => 1.5,
        'pageMode' => '0',
        'singlePageMode' => '0',
        'pageSize' => '0',
        'autoPlay' => 'false',
        'autoPlayDuration' => 5000,
        'autoPlayStart' => 'false',
        'linkTarget' => '2',
        'sharePrefix' => 'flipbook-',
    );

    wp_add_inline_script(
        'metta-dflip-script',
        'window.dFlipLocation = ' . wp_json_encode( $asset_url ) . '; window.dFlipWPGlobal = ' . wp_json_encode( $dflip_global ) . ';',
        'before'
    );
}
add_action( 'wp_enqueue_scripts', 'metta_enqueue_menu_flipbook_assets', 30 );

function metta_is_menu_flipbook_page() {
    return is_page_template( 'page-menu.php' ) || is_page( 'menu' );
}

function metta_dequeue_dflip_outside_menu() {
    if ( metta_is_menu_flipbook_page() ) {
        return;
    }

    wp_dequeue_style( 'dflip-style' );
    wp_deregister_style( 'dflip-style' );
    wp_dequeue_script( 'dflip-script' );
    wp_deregister_script( 'dflip-script' );
    wp_dequeue_style( 'metta-dflip-style' );
    wp_deregister_style( 'metta-dflip-style' );
    wp_dequeue_script( 'metta-dflip-script' );
    wp_deregister_script( 'metta-dflip-script' );

    if ( isset( $GLOBALS['dflip'] ) && is_object( $GLOBALS['dflip'] ) ) {
        remove_action( 'wp_print_footer_scripts', array( $GLOBALS['dflip'], 'hook_script' ) );
    }
}
add_action( 'wp_print_styles', 'metta_dequeue_dflip_outside_menu', 100 );
add_action( 'wp_print_footer_scripts', 'metta_dequeue_dflip_outside_menu', 0 );
