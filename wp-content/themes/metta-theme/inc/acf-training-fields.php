<?php
/**
 * ACF Fields for Training/Academy Page
 * Converted from Repeater to Group fields for ACF Free compatibility
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
    'key' => 'group_training_page',
    'title' => 'Training Page Fields',
    'fields' => array(
        // ========================================
        // HERO BANNER SECTION
        // ========================================
        array(
            'key' => 'field_training_hero_tab',
            'label' => 'Hero Banner',
            'name' => '',
            'type' => 'tab',
            'placement' => 'top',
        ),
        array(
            'key' => 'field_training_hero_title_main',
            'label' => 'Hero Title Main',
            'name' => 'training_hero_title_main',
            'type' => 'text',
            'default_value' => 'KHỞI ĐẦU SỰ NGHIỆP',
        ),
        array(
            'key' => 'field_training_hero_title_sub',
            'label' => 'Hero Title Sub',
            'name' => 'training_hero_title_sub',
            'type' => 'text',
            'default_value' => 'VỮNG CHẮC CÙNG NGHỀ DƯỠNG SINH ĐÔNG Y',
        ),
        array(
            'key' => 'field_training_hero_subtitle',
            'label' => 'Hero Subtitle',
            'name' => 'training_hero_subtitle',
            'type' => 'textarea',
            'default_value' => '"Trao nghề từ Tâm – Dựng nghiệp từ Tầm". Metta Spa cam kết đào tạo KTV chuyên nghiệp với 80% thời lượng thực hành thực chiến.',
        ),
        array(
            'key' => 'field_training_hero_bg',
            'label' => 'Hero Background Image',
            'name' => 'training_hero_bg',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_training_hero_cta_1_text',
            'label' => 'CTA 1 Text',
            'name' => 'training_hero_cta_1_text',
            'type' => 'text',
            'default_value' => 'ĐĂNG KÝ TƯ VẤN LỘ TRÌNH',
        ),
        array(
            'key' => 'field_training_hero_cta_1_link',
            'label' => 'CTA 1 Link',
            'name' => 'training_hero_cta_1_link',
            'type' => 'url',
            'default_value' => '#register',
        ),
        array(
            'key' => 'field_training_hero_cta_2_text',
            'label' => 'CTA 2 Text',
            'name' => 'training_hero_cta_2_text',
            'type' => 'text',
            'default_value' => 'NHẬN ƯU ĐÃI KHÓA HỌC',
        ),
        array(
            'key' => 'field_training_hero_cta_2_link',
            'label' => 'CTA 2 Link',
            'name' => 'training_hero_cta_2_link',
            'type' => 'url',
            'default_value' => '#register',
        ),

        // ========================================
        // INTRODUCTION SECTION
        // ========================================
        array(
            'key' => 'field_training_intro_tab',
            'label' => 'Introduction',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_intro_title',
            'label' => 'Introduction Title',
            'name' => 'training_intro_title',
            'type' => 'text',
            'default_value' => 'TẠI SAO NGHỀ DƯỠNG SINH LÀ "CHÌA KHÓA VÀNG" TRONG THỜI ĐẠI MỚI?',
        ),
        array(
            'key' => 'field_training_intro_badge',
            'label' => 'Introduction Badge',
            'name' => 'training_intro_badge',
            'type' => 'text',
            'default_value' => 'VỀ CHÚNG TÔI',
        ),
        array(
            'key' => 'field_training_intro_content',
            'label' => 'Introduction Content',
            'name' => 'training_intro_content',
            'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'full',
        ),
        array(
            'key' => 'field_training_intro_img',
            'label' => 'Introduction Image',
            'name' => 'training_intro_img',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // ========================================
        // USP SECTION (4 fixed items instead of repeater)
        // ========================================
        array(
            'key' => 'field_training_usp_tab',
            'label' => 'USP (Điểm khác biệt)',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_usp_title',
            'label' => 'USP Section Title',
            'name' => 'training_usp_title',
            'type' => 'text',
            'default_value' => 'ĐIỂM KHÁC BIỆT CỦA CHƯƠNG TRÌNH ĐÀO TẠO TẠI METTA',
        ),
        // USP 1
        array(
            'key' => 'field_usp_1_title',
            'label' => 'USP 1 - Title',
            'name' => 'usp_1_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_1_icon',
            'label' => 'USP 1 - Icon Class',
            'name' => 'usp_1_icon',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
            'instructions' => 'VD: icon-book-open, fas fa-book',
        ),
        array(
            'key' => 'field_usp_1_desc',
            'label' => 'USP 1 - Description',
            'name' => 'usp_1_desc',
            'type' => 'textarea',
            'rows' => 3,
        ),
        // USP 2
        array(
            'key' => 'field_usp_2_title',
            'label' => 'USP 2 - Title',
            'name' => 'usp_2_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_2_icon',
            'label' => 'USP 2 - Icon Class',
            'name' => 'usp_2_icon',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_2_desc',
            'label' => 'USP 2 - Description',
            'name' => 'usp_2_desc',
            'type' => 'textarea',
            'rows' => 3,
        ),
        // USP 3
        array(
            'key' => 'field_usp_3_title',
            'label' => 'USP 3 - Title',
            'name' => 'usp_3_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_3_icon',
            'label' => 'USP 3 - Icon Class',
            'name' => 'usp_3_icon',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_3_desc',
            'label' => 'USP 3 - Description',
            'name' => 'usp_3_desc',
            'type' => 'textarea',
            'rows' => 3,
        ),
        // USP 4
        array(
            'key' => 'field_usp_4_title',
            'label' => 'USP 4 - Title',
            'name' => 'usp_4_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_4_icon',
            'label' => 'USP 4 - Icon Class',
            'name' => 'usp_4_icon',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_usp_4_desc',
            'label' => 'USP 4 - Description',
            'name' => 'usp_4_desc',
            'type' => 'textarea',
            'rows' => 3,
        ),

        // ========================================
        // CURRICULUM MODULES (3 fixed modules)
        // ========================================
        array(
            'key' => 'field_training_curriculum_tab',
            'label' => 'Lộ trình đào tạo',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_curriculum_title',
            'label' => 'Curriculum Title',
            'name' => 'training_curriculum_title',
            'type' => 'text',
            'default_value' => 'LỘ TRÌNH ĐÀO TẠO CHI TIẾT',
        ),
        // Module 1
        array(
            'key' => 'field_module_1_number',
            'label' => 'Module 1 - Number',
            'name' => 'module_1_number',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
            'default_value' => '01',
        ),
        array(
            'key' => 'field_module_1_title',
            'label' => 'Module 1 - Title',
            'name' => 'module_1_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_module_1_icon',
            'label' => 'Module 1 - Icon',
            'name' => 'module_1_icon',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_module_1_content',
            'label' => 'Module 1 - Content (Các điểm chính, mỗi dòng một điểm)',
            'name' => 'module_1_content',
            'type' => 'textarea',
            'rows' => 5,
            'instructions' => 'Mỗi dòng là một bullet point.',
        ),
        // Module 2
        array(
            'key' => 'field_module_2_number',
            'label' => 'Module 2 - Number',
            'name' => 'module_2_number',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
            'default_value' => '02',
        ),
        array(
            'key' => 'field_module_2_title',
            'label' => 'Module 2 - Title',
            'name' => 'module_2_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_module_2_icon',
            'label' => 'Module 2 - Icon',
            'name' => 'module_2_icon',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_module_2_content',
            'label' => 'Module 2 - Content',
            'name' => 'module_2_content',
            'type' => 'textarea',
            'rows' => 5,
        ),
        // Module 3
        array(
            'key' => 'field_module_3_number',
            'label' => 'Module 3 - Number',
            'name' => 'module_3_number',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
            'default_value' => '03',
        ),
        array(
            'key' => 'field_module_3_title',
            'label' => 'Module 3 - Title',
            'name' => 'module_3_title',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_module_3_icon',
            'label' => 'Module 3 - Icon',
            'name' => 'module_3_icon',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_module_3_content',
            'label' => 'Module 3 - Content',
            'name' => 'module_3_content',
            'type' => 'textarea',
            'rows' => 5,
        ),

        // ========================================
        // BENEFITS SECTION (4 fixed items)
        // ========================================
        array(
            'key' => 'field_training_benefits_tab',
            'label' => 'Quyền lợi học viên',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_benefits_title',
            'label' => 'Benefits Title',
            'name' => 'training_benefits_title',
            'type' => 'text',
            'default_value' => 'QUYỀN LỢI CỦA HỌC VIÊN',
        ),
        // Benefit 1
        array(
            'key' => 'field_benefit_1_icon',
            'label' => 'Benefit 1 - Icon',
            'name' => 'benefit_1_icon',
            'type' => 'text',
            'wrapper' => array('width' => '20'),
            'default_value' => '✅',
        ),
        array(
            'key' => 'field_benefit_1_title',
            'label' => 'Benefit 1 - Title',
            'name' => 'benefit_1_title',
            'type' => 'text',
            'wrapper' => array('width' => '40'),
        ),
        array(
            'key' => 'field_benefit_1_desc',
            'label' => 'Benefit 1 - Description',
            'name' => 'benefit_1_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '40'),
        ),
        // Benefit 2
        array(
            'key' => 'field_benefit_2_icon',
            'label' => 'Benefit 2 - Icon',
            'name' => 'benefit_2_icon',
            'type' => 'text',
            'wrapper' => array('width' => '20'),
            'default_value' => '✅',
        ),
        array(
            'key' => 'field_benefit_2_title',
            'label' => 'Benefit 2 - Title',
            'name' => 'benefit_2_title',
            'type' => 'text',
            'wrapper' => array('width' => '40'),
        ),
        array(
            'key' => 'field_benefit_2_desc',
            'label' => 'Benefit 2 - Description',
            'name' => 'benefit_2_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '40'),
        ),
        // Benefit 3
        array(
            'key' => 'field_benefit_3_icon',
            'label' => 'Benefit 3 - Icon',
            'name' => 'benefit_3_icon',
            'type' => 'text',
            'wrapper' => array('width' => '20'),
            'default_value' => '✅',
        ),
        array(
            'key' => 'field_benefit_3_title',
            'label' => 'Benefit 3 - Title',
            'name' => 'benefit_3_title',
            'type' => 'text',
            'wrapper' => array('width' => '40'),
        ),
        array(
            'key' => 'field_benefit_3_desc',
            'label' => 'Benefit 3 - Description',
            'name' => 'benefit_3_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '40'),
        ),
        // Benefit 4
        array(
            'key' => 'field_benefit_4_icon',
            'label' => 'Benefit 4 - Icon',
            'name' => 'benefit_4_icon',
            'type' => 'text',
            'wrapper' => array('width' => '20'),
            'default_value' => '✅',
        ),
        array(
            'key' => 'field_benefit_4_title',
            'label' => 'Benefit 4 - Title',
            'name' => 'benefit_4_title',
            'type' => 'text',
            'wrapper' => array('width' => '40'),
        ),
        array(
            'key' => 'field_benefit_4_desc',
            'label' => 'Benefit 4 - Description',
            'name' => 'benefit_4_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '40'),
        ),
        array(
            'key' => 'field_training_benefit_img',
            'label' => 'Benefits Section Image',
            'name' => 'training_benefit_img',
            'type' => 'image',
            'return_format' => 'url',
        ),

        // ========================================
        // TARGET AUDIENCE (3 fixed items)
        // ========================================
        array(
            'key' => 'field_training_target_tab',
            'label' => 'Đối tượng phù hợp',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_target_title',
            'label' => 'Target Audience Title',
            'name' => 'training_target_title',
            'type' => 'text',
            'default_value' => 'ĐỐI TƯỢNG PHÙ HỢP',
        ),
        // Target 1
        array(
            'key' => 'field_target_1_icon',
            'label' => 'Target 1 - Icon',
            'name' => 'target_1_icon',
            'type' => 'text',
            'wrapper' => array('width' => '30'),
        ),
        array(
            'key' => 'field_target_1_desc',
            'label' => 'Target 1 - Description',
            'name' => 'target_1_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '70'),
        ),
        // Target 2
        array(
            'key' => 'field_target_2_icon',
            'label' => 'Target 2 - Icon',
            'name' => 'target_2_icon',
            'type' => 'text',
            'wrapper' => array('width' => '30'),
        ),
        array(
            'key' => 'field_target_2_desc',
            'label' => 'Target 2 - Description',
            'name' => 'target_2_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '70'),
        ),
        // Target 3
        array(
            'key' => 'field_target_3_icon',
            'label' => 'Target 3 - Icon',
            'name' => 'target_3_icon',
            'type' => 'text',
            'wrapper' => array('width' => '30'),
        ),
        array(
            'key' => 'field_target_3_desc',
            'label' => 'Target 3 - Description',
            'name' => 'target_3_desc',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '70'),
        ),

        // ========================================
        // TESTIMONIALS (3 fixed items)
        // ========================================
        array(
            'key' => 'field_training_testimonials_tab',
            'label' => 'Cảm nhận học viên',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_testimonials_title',
            'label' => 'Testimonials Title',
            'name' => 'training_testimonials_title',
            'type' => 'text',
            'default_value' => 'CẢM NHẬN HỌC VIÊN',
        ),
        // Testimonial 1
        array(
            'key' => 'field_testi_1_name',
            'label' => 'Testimonial 1 - Name',
            'name' => 'testi_1_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_testi_1_class',
            'label' => 'Testimonial 1 - Class',
            'name' => 'testi_1_class',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_testi_1_photo',
            'label' => 'Testimonial 1 - Photo',
            'name' => 'testi_1_photo',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_testi_1_content',
            'label' => 'Testimonial 1 - Content',
            'name' => 'testi_1_content',
            'type' => 'textarea',
            'rows' => 4,
        ),
        // Testimonial 2
        array(
            'key' => 'field_testi_2_name',
            'label' => 'Testimonial 2 - Name',
            'name' => 'testi_2_name',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_testi_2_class',
            'label' => 'Testimonial 2 - Class',
            'name' => 'testi_2_class',
            'type' => 'text',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_testi_2_photo',
            'label' => 'Testimonial 2 - Photo',
            'name' => 'testi_2_photo',
            'type' => 'image',
            'return_format' => 'url',
        ),
        array(
            'key' => 'field_testi_2_content',
            'label' => 'Testimonial 2 - Content',
            'name' => 'testi_2_content',
            'type' => 'textarea',
            'rows' => 4,
        ),

        // ========================================
        // REGISTRATION FORM
        // ========================================
        array(
            'key' => 'field_training_form_tab',
            'label' => 'Form đăng ký',
            'name' => '',
            'type' => 'tab',
        ),
        array(
            'key' => 'field_training_form_title',
            'label' => 'Form Title',
            'name' => 'training_form_title',
            'type' => 'text',
            'default_value' => 'ĐỪNG BỎ LỠ CƠ HỘI TRỞ THÀNH "BÀN TAY VÀNG" TRONG LÀNG DƯỠNG SINH',
        ),
        array(
            'key' => 'field_training_form_subtitle',
            'label' => 'Form Subtitle',
            'name' => 'training_form_subtitle',
            'type' => 'textarea',
        ),
        array(
            'key' => 'field_training_hotline',
            'label' => 'Hotline',
            'name' => 'training_hotline',
            'type' => 'text',
            'default_value' => '0931.323.268',
        ),
        // Location 1
        array(
            'key' => 'field_location_1_name',
            'label' => 'Location 1 - Name',
            'name' => 'location_1_name',
            'type' => 'text',
            'wrapper' => array('width' => '30'),
        ),
        array(
            'key' => 'field_location_1_address',
            'label' => 'Location 1 - Address',
            'name' => 'location_1_address',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '70'),
        ),
        // Location 2
        array(
            'key' => 'field_location_2_name',
            'label' => 'Location 2 - Name',
            'name' => 'location_2_name',
            'type' => 'text',
            'wrapper' => array('width' => '30'),
        ),
        array(
            'key' => 'field_location_2_address',
            'label' => 'Location 2 - Address',
            'name' => 'location_2_address',
            'type' => 'textarea',
            'rows' => 2,
            'wrapper' => array('width' => '70'),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-dao-tao.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

endif;
