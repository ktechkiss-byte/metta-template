<?php
if( function_exists('acf_add_local_field_group') ):

// ==========================================
// 1. CÀI ĐẶT WEBSITE (TRANG CHỦ & HỆ THỐNG)
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_home_settings',
	'title' => 'Cài đặt Website (Trang Chủ & Hệ Thống)',
	'fields' => array(
        // TAB 0: CÀI ĐẶT CHUNG (LOGO & FOOTER)
		array(
			'key' => 'field_home_general_tab',
			'label' => '0. Cài đặt chung',
			'type' => 'tab',
		),
            array(
                'key' => 'field_site_logo',
                'label' => 'Logo Website',
                'name' => 'site_logo',
                'type' => 'image',
                'return_format' => 'url',
                'instructions' => 'Nếu để trống sẽ dùng logo mặc định.',
                'wrapper' => array('width' => '100'),
            ),
            array(
                'key' => 'field_footer_about_title',
                'label' => 'Footer: Giới thiệu ngắn',
                'type' => 'message',
                'message' => 'Nội dung hiển thị ở chân trang (bên dưới logo).',
            ),
            array(
                'key' => 'field_footer_about_vn',
                'label' => 'Giới thiệu Footer (VI)',
                'name' => 'footer_about',
                'type' => 'textarea',
                'rows' => 3,
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_footer_about_en',
                'label' => 'Giới thiệu Footer (EN)',
                'name' => 'footer_about_en',
                'type' => 'textarea',
                'rows' => 3,
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_footer_about_zh',
                'label' => 'Giới thiệu Footer (ZH)',
                'name' => 'footer_about_zh',
                'type' => 'textarea',
                'rows' => 3,
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_footer_copyright_vn',
                'label' => 'Bản quyền (VI)',
                'name' => 'footer_copyright',
                'type' => 'text',
                'default_value' => 'Copyright © 2025 Bản quyền thuộc về Metta Spa Đông Y',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_footer_copyright_en',
                'label' => 'Bản quyền (EN)',
                'name' => 'footer_copyright_en',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_footer_copyright_zh',
                'label' => 'Bản quyền (ZH)',
                'name' => 'footer_copyright_zh',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),

        // TAB 1: HERO SECTION
		array(
			'key' => 'field_home_hero_tab',
			'label' => '1. Phần Hero',
			'type' => 'tab',
		),
            // ACCORDION: VIETNAMESE
            array(
                'key' => 'field_home_hero_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_hero_msg_1',
                'label' => 'Nội dung văn bản',
                'type' => 'message',
                'message' => 'Cài đặt nội dung tiêu đề và đoạn giới thiệu ngắn ở phần đầu trang.',
            ),
            array(
                'key' => 'field_home_hero_chip',
                'label' => 'Dòng chữ nhỏ trên tiêu đề (Chip)',
                'name' => 'hero_chip',
                'type' => 'text',
                'instructions' => 'Ví dụ: Hệ thống dưỡng sinh đông y hàng đầu',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_booking_link',
                'label' => 'Link Đặt lịch (URL)',
                'name' => 'hero_booking_link',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_main',
                'label' => 'Tiêu đề chính (Dòng 1)',
                'name' => 'hero_title_main',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_sub',
                'label' => 'Tiêu đề phụ (Dòng 2)',
                'name' => 'hero_title_sub',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_desc',
                'label' => 'Đoạn mô tả ngắn',
                'name' => 'hero_desc',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: ENGLISH
            array(
                'key' => 'field_home_hero_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_hero_chip_en',
                'label' => 'Dòng chữ nhỏ trên tiêu đề (Chip) (EN)',
                'name' => 'hero_chip_en',
                'type' => 'text',
                'instructions' => 'Ví dụ: Hệ thống dưỡng sinh đông y hàng đầu',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_booking_link_en',
                'label' => 'Link Đặt lịch (URL) (EN)',
                'name' => 'hero_booking_link_en',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_main_en',
                'label' => 'Tiêu đề chính (Dòng 1) (EN)',
                'name' => 'hero_title_main_en',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_sub_en',
                'label' => 'Tiêu đề phụ (Dòng 2) (EN)',
                'name' => 'hero_title_sub_en',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_desc_en',
                'label' => 'Đoạn mô tả ngắn (EN)',
                'name' => 'hero_desc_en',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: CHINESE
            array(
                'key' => 'field_home_hero_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_hero_chip_zh',
                'label' => 'Dòng chữ nhỏ trên tiêu đề (Chip) (ZH)',
                'name' => 'hero_chip_zh',
                'type' => 'text',
                'instructions' => 'Ví dụ: Hệ thống dưỡng sinh đông y hàng đầu',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_booking_link_zh',
                'label' => 'Link Đặt lịch (URL) (ZH)',
                'name' => 'hero_booking_link_zh',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_main_zh',
                'label' => 'Tiêu đề chính (Dòng 1) (ZH)',
                'name' => 'hero_title_main_zh',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_title_sub_zh',
                'label' => 'Tiêu đề phụ (Dòng 2) (ZH)',
                'name' => 'hero_title_sub_zh',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_hero_desc_zh',
                'label' => 'Đoạn mô tả ngắn (ZH)',
                'name' => 'hero_desc_zh',
                'type' => 'textarea',
                'rows' => 3,
            ),
            
            // ACCORDION END
            array(
                'key' => 'field_home_hero_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        array(
			'key' => 'field_home_slide_1_image',
			'label' => 'Ảnh Slide 1',
			'name' => 'slide_1_image',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '33'),
		),
        array(
			'key' => 'field_home_slide_2_image',
			'label' => 'Ảnh Slide 2',
			'name' => 'slide_2_image',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '33'),
		),
        array(
			'key' => 'field_home_slide_3_image',
			'label' => 'Ảnh Slide 3',
			'name' => 'slide_3_image',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '33'),
		),
            // SLIDES LANGUAGES ACCORDIONS
            // ACCORDION: VIETNAMESE
            array(
                'key' => 'field_home_slides_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_slide_1_label',
                'label' => 'Nhãn Slide 1',
                'name' => 'slide_1_label',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_2_label',
                'label' => 'Nhãn Slide 2',
                'name' => 'slide_2_label',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_3_label',
                'label' => 'Nhãn Slide 3',
                'name' => 'slide_3_label',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),

            // ACCORDION: ENGLISH
            array(
                'key' => 'field_home_slides_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_slide_1_label_en',
                'label' => 'Nhãn Slide 1 (EN)',
                'name' => 'slide_1_label_en',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_2_label_en',
                'label' => 'Nhãn Slide 2 (EN)',
                'name' => 'slide_2_label_en',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_3_label_en',
                'label' => 'Nhãn Slide 3 (EN)',
                'name' => 'slide_3_label_en',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),

            // ACCORDION: CHINESE
            array(
                'key' => 'field_home_slides_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_slide_1_label_zh',
                'label' => 'Nhãn Slide 1 (ZH)',
                'name' => 'slide_1_label_zh',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_2_label_zh',
                'label' => 'Nhãn Slide 2 (ZH)',
                'name' => 'slide_2_label_zh',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            array(
                'key' => 'field_home_slide_3_label_zh',
                'label' => 'Nhãn Slide 3 (ZH)',
                'name' => 'slide_3_label_zh',
                'type' => 'text',
                'wrapper' => array('width' => '33'),
            ),
            
            // ACCORDION END
            array(
                'key' => 'field_home_slides_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // TAB 2: INTRO
        array(
			'key' => 'field_home_intro_tab',
			'label' => '2. Phần Giới Thiệu',
			'type' => 'tab',
		),
        // ACCORDION: VIETNAMESE
            array(
                'key' => 'field_home_intro_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_intro_title',
                'label' => 'Tiêu đề giới thiệu',
                'name' => 'intro_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_home_intro_content',
                'label' => 'Nội dung chi tiết',
                'name' => 'intro_content',
                'type' => 'wysiwyg',
            ),

            // ACCORDION: ENGLISH
            array(
                'key' => 'field_home_intro_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_intro_title_en',
                'label' => 'Tiêu đề giới thiệu (EN)',
                'name' => 'intro_title_en',
                'type' => 'text',
            ),
            array(
                'key' => 'field_home_intro_content_en',
                'label' => 'Nội dung chi tiết (EN)',
                'name' => 'intro_content_en',
                'type' => 'wysiwyg',
            ),

            // ACCORDION: CHINESE
            array(
                'key' => 'field_home_intro_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_intro_title_zh',
                'label' => 'Tiêu đề giới thiệu (ZH)',
                'name' => 'intro_title_zh',
                'type' => 'text',
            ),
            array(
                'key' => 'field_home_intro_content_zh',
                'label' => 'Nội dung chi tiết (ZH)',
                'name' => 'intro_content_zh',
                'type' => 'wysiwyg',
            ),
            
            // ACCORDION END
            array(
                'key' => 'field_home_intro_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        array(
			'key' => 'field_home_intro_img_left',
			'label' => 'Ảnh trái',
			'name' => 'intro_img_left',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_home_intro_img_right',
			'label' => 'Ảnh phải',
			'name' => 'intro_img_right',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '50'),
		),

        // TAB 3: FEATURES (TAI METTA SPA)
        array(
			'key' => 'field_home_metta_spa_tab',
			'label' => '3. Tại Metta Spa',
			'type' => 'tab',
		),
        // ACCORDION: VIETNAMESE
            array(
                'key' => 'field_home_metta_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_metta_title',
                'label' => 'Tiêu đề chính của phần',
                'name' => 'metta_title',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_metta_desc',
                'label' => 'Mô tả ngắn của phần',
                'name' => 'metta_desc',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH
            array(
                'key' => 'field_home_metta_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_metta_title_en',
                'label' => 'Tiêu đề chính của phần (EN)',
                'name' => 'metta_title_en',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_metta_desc_en',
                'label' => 'Mô tả ngắn của phần (EN)',
                'name' => 'metta_desc_en',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE
            array(
                'key' => 'field_home_metta_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_metta_title_zh',
                'label' => 'Tiêu đề chính của phần (ZH)',
                'name' => 'metta_title_zh',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_metta_desc_zh',
                'label' => 'Mô tả ngắn của phần (ZH)',
                'name' => 'metta_desc_zh',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END
            array(
                'key' => 'field_home_metta_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        
        // Feature 1
        array(
			'key' => 'field_home_fea_1_msg',
			'label' => 'Đặc điểm 1',
			'type' => 'message',
            'message' => '---------------------------------------------------',
		),
        array(
			'key' => 'field_home_fea_1_img',
			'label' => 'Ảnh đại diện 1',
			'name' => 'fea_1_img',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Feature 1)
            array(
                'key' => 'field_home_fea_1_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_1_title',
                'label' => 'Tiêu đề 1',
                'name' => 'fea_1_title',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_1_sub',
                'label' => 'Tiêu đề phụ 1 (Nghiêng)',
                'name' => 'fea_1_sub',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_1_desc',
                'label' => 'Mô tả chi tiết 1',
                'name' => 'fea_1_desc',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: ENGLISH (Feature 1)
            array(
                'key' => 'field_home_fea_1_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_1_title_en',
                'label' => 'Tiêu đề 1 (EN)',
                'name' => 'fea_1_title_en',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_1_sub_en',
                'label' => 'Tiêu đề phụ 1 (Nghiêng) (EN)',
                'name' => 'fea_1_sub_en',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_1_desc_en',
                'label' => 'Mô tả chi tiết 1 (EN)',
                'name' => 'fea_1_desc_en',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: CHINESE (Feature 1)
            array(
                'key' => 'field_home_fea_1_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_1_title_zh',
                'label' => 'Tiêu đề 1 (ZH)',
                'name' => 'fea_1_title_zh',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_1_sub_zh',
                'label' => 'Tiêu đề phụ 1 (Nghiêng) (ZH)',
                'name' => 'fea_1_sub_zh',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_1_desc_zh',
                'label' => 'Mô tả chi tiết 1 (ZH)',
                'name' => 'fea_1_desc_zh',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION END (Feature 1)
            array(
                'key' => 'field_home_fea_1_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        // Feature 2
        array(
			'key' => 'field_home_fea_2_msg',
			'label' => 'Đặc điểm 2',
			'type' => 'message',
            'message' => '---------------------------------------------------',
		),
        array(
			'key' => 'field_home_fea_2_img',
			'label' => 'Ảnh đại diện 2',
			'name' => 'fea_2_img',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Feature 2)
            array(
                'key' => 'field_home_fea_2_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_2_title',
                'label' => 'Tiêu đề 2',
                'name' => 'fea_2_title',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_2_sub',
                'label' => 'Tiêu đề phụ 2 (Nghiêng)',
                'name' => 'fea_2_sub',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_2_desc',
                'label' => 'Mô tả chi tiết 2',
                'name' => 'fea_2_desc',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: ENGLISH (Feature 2)
            array(
                'key' => 'field_home_fea_2_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_2_title_en',
                'label' => 'Tiêu đề 2 (EN)',
                'name' => 'fea_2_title_en',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_2_sub_en',
                'label' => 'Tiêu đề phụ 2 (Nghiêng) (EN)',
                'name' => 'fea_2_sub_en',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_2_desc_en',
                'label' => 'Mô tả chi tiết 2 (EN)',
                'name' => 'fea_2_desc_en',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: CHINESE (Feature 2)
            array(
                'key' => 'field_home_fea_2_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_2_title_zh',
                'label' => 'Tiêu đề 2 (ZH)',
                'name' => 'fea_2_title_zh',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_2_sub_zh',
                'label' => 'Tiêu đề phụ 2 (Nghiêng) (ZH)',
                'name' => 'fea_2_sub_zh',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_2_desc_zh',
                'label' => 'Mô tả chi tiết 2 (ZH)',
                'name' => 'fea_2_desc_zh',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION END (Feature 2)
            array(
                'key' => 'field_home_fea_2_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        // Feature 3
        array(
			'key' => 'field_home_fea_3_msg',
			'label' => 'Đặc điểm 3',
			'type' => 'message',
            'message' => '---------------------------------------------------',
		),
        array(
			'key' => 'field_home_fea_3_img',
			'label' => 'Ảnh đại diện 3',
			'name' => 'fea_3_img',
			'type' => 'image',
			'return_format' => 'url',
            'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Feature 3)
            array(
                'key' => 'field_home_fea_3_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_3_title',
                'label' => 'Tiêu đề 3',
                'name' => 'fea_3_title',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_3_sub',
                'label' => 'Tiêu đề phụ 3 (Nghiêng)',
                'name' => 'fea_3_sub',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_3_desc',
                'label' => 'Mô tả chi tiết 3',
                'name' => 'fea_3_desc',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: ENGLISH (Feature 3)
            array(
                'key' => 'field_home_fea_3_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_3_title_en',
                'label' => 'Tiêu đề 3 (EN)',
                'name' => 'fea_3_title_en',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_3_sub_en',
                'label' => 'Tiêu đề phụ 3 (Nghiêng) (EN)',
                'name' => 'fea_3_sub_en',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_3_desc_en',
                'label' => 'Mô tả chi tiết 3 (EN)',
                'name' => 'fea_3_desc_en',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION: CHINESE (Feature 3)
            array(
                'key' => 'field_home_fea_3_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_fea_3_title_zh',
                'label' => 'Tiêu đề 3 (ZH)',
                'name' => 'fea_3_title_zh',
                'type' => 'text',
                'wrapper' => array('width' => '40'),
            ),
            array(
                'key' => 'field_home_fea_3_sub_zh',
                'label' => 'Tiêu đề phụ 3 (Nghiêng) (ZH)',
                'name' => 'fea_3_sub_zh',
                'type' => 'text',
                'wrapper' => array('width' => '35'),
            ),
            array(
                'key' => 'field_home_fea_3_desc_zh',
                'label' => 'Mô tả chi tiết 3 (ZH)',
                'name' => 'fea_3_desc_zh',
                'type' => 'textarea',
                'rows' => 3,
            ),

            // ACCORDION END (Feature 3)
            array(
                'key' => 'field_home_fea_3_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // TAB 4: COMBOS
        array(
			'key' => 'field_home_combo_tab',
			'label' => '4. Combo Nổi Bật',
			'type' => 'tab',
		),
        // ACCORDION: VIETNAMESE
            array(
                'key' => 'field_home_combo_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_title',
                'label' => 'Tiêu đề phần Combo',
                'name' => 'combo_title',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_combo_desc',
                'label' => 'Mô tả phần Combo',
                'name' => 'combo_desc',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH
            array(
                'key' => 'field_home_combo_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_title_en',
                'label' => 'Tiêu đề phần Combo (EN)',
                'name' => 'combo_title_en',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_combo_desc_en',
                'label' => 'Mô tả phần Combo (EN)',
                'name' => 'combo_desc_en',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE
            array(
                'key' => 'field_home_combo_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_title_zh',
                'label' => 'Tiêu đề phần Combo (ZH)',
                'name' => 'combo_title_zh',
                'type' => 'text',
                'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_home_combo_desc_zh',
                'label' => 'Mô tả phần Combo (ZH)',
                'name' => 'combo_desc_zh',
                'type' => 'textarea',
                'rows' => 2,
                'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END
            array(
                'key' => 'field_home_combo_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
            array(
                'key' => 'field_home_combo_items',
                'label' => 'Danh sách Combo linh hoạt',
                'name' => 'combo_items',
                'type' => 'repeater',
                'instructions' => 'Ưu tiên dùng danh sách này. Nếu để trống, website sẽ dùng dữ liệu Combo 1..6 cũ và 2 combo mặc định.',
                'layout' => 'block',
                'button_label' => 'Thêm combo',
                'sub_fields' => array(
                    array('key' => 'field_home_combo_item_image', 'label' => 'Ảnh', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
                    array('key' => 'field_home_combo_item_title', 'label' => 'Tên combo (VI)', 'name' => 'title', 'type' => 'text', 'wrapper' => array('width' => '25')),
                    array('key' => 'field_home_combo_item_title_en', 'label' => 'Tên combo (EN)', 'name' => 'title_en', 'type' => 'text', 'wrapper' => array('width' => '25')),
                    array('key' => 'field_home_combo_item_title_zh', 'label' => 'Tên combo (ZH)', 'name' => 'title_zh', 'type' => 'text', 'wrapper' => array('width' => '25')),
                    array('key' => 'field_home_combo_item_desc', 'label' => 'Mô tả (VI)', 'name' => 'desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '33')),
                    array('key' => 'field_home_combo_item_desc_en', 'label' => 'Mô tả (EN)', 'name' => 'desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '33')),
                    array('key' => 'field_home_combo_item_desc_zh', 'label' => 'Mô tả (ZH)', 'name' => 'desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '33')),
                ),
            ),
        // Combo 1
        array(
				'key' => 'field_home_combo_1_img', 'label' => 'Combo 1 - Ảnh', 'name' => 'combo_1_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
			),
        // ACCORDION: VIETNAMESE (Combo 1)
            array(
                'key' => 'field_home_combo_1_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_1_title', 'label' => 'Combo 1 - Tên', 'name' => 'combo_1_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_1_desc', 'label' => 'Combo 1 - Mô tả', 'name' => 'combo_1_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 1)
            array(
                'key' => 'field_home_combo_1_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_1_title_en', 'label' => 'Combo 1 - Tên (EN)', 'name' => 'combo_1_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_1_desc_en', 'label' => 'Combo 1 - Mô tả (EN)', 'name' => 'combo_1_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 1)
            array(
                'key' => 'field_home_combo_1_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_1_title_zh', 'label' => 'Combo 1 - Tên (ZH)', 'name' => 'combo_1_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_1_desc_zh', 'label' => 'Combo 1 - Mô tả (ZH)', 'name' => 'combo_1_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 1)
            array(
                'key' => 'field_home_combo_1_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // Combo 2
        array(
			'key' => 'field_home_combo_2_img', 'label' => 'Combo 2 - Ảnh', 'name' => 'combo_2_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Combo 2)
            array(
                'key' => 'field_home_combo_2_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_2_title', 'label' => 'Combo 2 - Tên', 'name' => 'combo_2_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_2_desc', 'label' => 'Combo 2 - Mô tả', 'name' => 'combo_2_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 2)
            array(
                'key' => 'field_home_combo_2_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_2_title_en', 'label' => 'Combo 2 - Tên (EN)', 'name' => 'combo_2_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_2_desc_en', 'label' => 'Combo 2 - Mô tả (EN)', 'name' => 'combo_2_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 2)
            array(
                'key' => 'field_home_combo_2_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_2_title_zh', 'label' => 'Combo 2 - Tên (ZH)', 'name' => 'combo_2_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_2_desc_zh', 'label' => 'Combo 2 - Mô tả (ZH)', 'name' => 'combo_2_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 2)
            array(
                'key' => 'field_home_combo_2_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // Combo 3
        array(
			'key' => 'field_home_combo_3_img', 'label' => 'Combo 3 - Ảnh', 'name' => 'combo_3_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Combo 3)
            array(
                'key' => 'field_home_combo_3_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_3_title', 'label' => 'Combo 3 - Tên', 'name' => 'combo_3_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_3_desc', 'label' => 'Combo 3 - Mô tả', 'name' => 'combo_3_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 3)
            array(
                'key' => 'field_home_combo_3_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_3_title_en', 'label' => 'Combo 3 - Tên (EN)', 'name' => 'combo_3_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_3_desc_en', 'label' => 'Combo 3 - Mô tả (EN)', 'name' => 'combo_3_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 3)
            array(
                'key' => 'field_home_combo_3_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_3_title_zh', 'label' => 'Combo 3 - Tên (ZH)', 'name' => 'combo_3_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_3_desc_zh', 'label' => 'Combo 3 - Mô tả (ZH)', 'name' => 'combo_3_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 3)
            array(
                'key' => 'field_home_combo_3_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),
        // Combo 4
        array(
			'key' => 'field_home_combo_4_img', 'label' => 'Combo 4 - Ảnh', 'name' => 'combo_4_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Combo 4)
            array(
                'key' => 'field_home_combo_4_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_4_title', 'label' => 'Combo 4 - Tên', 'name' => 'combo_4_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_4_desc', 'label' => 'Combo 4 - Mô tả', 'name' => 'combo_4_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 4)
            array(
                'key' => 'field_home_combo_4_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_4_title_en', 'label' => 'Combo 4 - Tên (EN)', 'name' => 'combo_4_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_4_desc_en', 'label' => 'Combo 4 - Mô tả (EN)', 'name' => 'combo_4_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 4)
            array(
                'key' => 'field_home_combo_4_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_4_title_zh', 'label' => 'Combo 4 - Tên (ZH)', 'name' => 'combo_4_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_4_desc_zh', 'label' => 'Combo 4 - Mô tả (ZH)', 'name' => 'combo_4_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 4)
            array(
                'key' => 'field_home_combo_4_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // Combo 5
        array(
			'key' => 'field_home_combo_5_img', 'label' => 'Combo 5 - Ảnh', 'name' => 'combo_5_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Combo 5)
            array(
                'key' => 'field_home_combo_5_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_5_title', 'label' => 'Combo 5 - Tên', 'name' => 'combo_5_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_5_desc', 'label' => 'Combo 5 - Mô tả', 'name' => 'combo_5_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 5)
            array(
                'key' => 'field_home_combo_5_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_5_title_en', 'label' => 'Combo 5 - Tên (EN)', 'name' => 'combo_5_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_5_desc_en', 'label' => 'Combo 5 - Mô tả (EN)', 'name' => 'combo_5_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 5)
            array(
                'key' => 'field_home_combo_5_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_5_title_zh', 'label' => 'Combo 5 - Tên (ZH)', 'name' => 'combo_5_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_5_desc_zh', 'label' => 'Combo 5 - Mô tả (ZH)', 'name' => 'combo_5_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 5)
            array(
                'key' => 'field_home_combo_5_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // Combo 6
        array(
			'key' => 'field_home_combo_6_img', 'label' => 'Combo 6 - Ảnh', 'name' => 'combo_6_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
		),
        // ACCORDION: VIETNAMESE (Combo 6)
            array(
                'key' => 'field_home_combo_6_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_6_title', 'label' => 'Combo 6 - Tên', 'name' => 'combo_6_title', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_6_desc', 'label' => 'Combo 6 - Mô tả', 'name' => 'combo_6_desc', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Combo 6)
            array(
                'key' => 'field_home_combo_6_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_6_title_en', 'label' => 'Combo 6 - Tên (EN)', 'name' => 'combo_6_title_en', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_6_desc_en', 'label' => 'Combo 6 - Mô tả (EN)', 'name' => 'combo_6_desc_en', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Combo 6)
            array(
                'key' => 'field_home_combo_6_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_home_combo_6_title_zh', 'label' => 'Combo 6 - Tên (ZH)', 'name' => 'combo_6_title_zh', 'type' => 'text', 'wrapper' => array('width' => '25'),
            ),
            array(
                'key' => 'field_home_combo_6_desc_zh', 'label' => 'Combo 6 - Mô tả (ZH)', 'name' => 'combo_6_desc_zh', 'type' => 'textarea', 'rows' => 2, 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Combo 6)
            array(
                'key' => 'field_home_combo_6_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // TAB 5: GALLERY
        array(
			'key' => 'field_home_gallery_tab',
			'label' => '5. Hình ảnh',
			'type' => 'tab',
		),
        array(
			'key' => 'field_home_gallery_title',
			'label' => 'Tiêu đề section',
			'name' => 'gallery_title',
			'type' => 'text',
            'default_value' => 'Hình ảnh',
            'wrapper' => array('width' => '100'),
		),
        array(
			'key' => 'field_home_gallery_desc',
			'label' => 'Mô tả (Description)',
			'name' => 'gallery_desc',
			'type' => 'textarea',
            'rows' => 3,
            'default_value' => 'Không phải lời nói Đây là những trải nghiệm thật tại Metta — Đừng để cơ thể mệt mỏi thêm nữa Hãy dành cho mình một khoảng thời gian để được chăm sóc đúng cách',
            'wrapper' => array('width' => '100'),
		),
        array(
			'key' => 'field_home_gallery_cta_text',
			'label' => 'Nút CTA: Text',
			'name' => 'gallery_cta_text',
			'type' => 'text',
            'default_value' => 'Đặt lịch trải nghiệm ngay',
            'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_home_gallery_cta_url',
			'label' => 'Nút CTA: Link',
			'name' => 'gallery_cta_url',
			'type' => 'url',
            'default_value' => 'https://datlich.mettaspadongy.vn/',
            'wrapper' => array('width' => '50'),
		),
        // 12 Images for the grid
        array(
			'key' => 'field_gal_img_1', 'label' => 'Hình 1 (Khổ dọc lớn)', 'name' => 'gal_img_1', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
		),
        array(
			'key' => 'field_gal_img_2', 'label' => 'Hình 2 (Vuông nhỏ)', 'name' => 'gal_img_2', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg',
		),
        array(
			'key' => 'field_gal_img_3', 'label' => 'Hình 3 (Khổ dọc lớn)', 'name' => 'gal_img_3', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
		),
        array(
			'key' => 'field_gal_img_4', 'label' => 'Hình 4 (Vuông nhỏ)', 'name' => 'gal_img_4', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg',
		),
        array(
			'key' => 'field_gal_img_5', 'label' => 'Hình 5 (Vuông nhỏ)', 'name' => 'gal_img_5', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
		),
        array(
			'key' => 'field_gal_img_6', 'label' => 'Hình 6 (Vuông nhỏ)', 'name' => 'gal_img_6', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
		),
        array(
			'key' => 'field_gal_img_7', 'label' => 'Hình 7 (Vuông nhỏ)', 'name' => 'gal_img_7', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484732_2d1e46a5ab82dc922a8ed3862ffd0c98.jpg',
		),
        array(
			'key' => 'field_gal_img_8', 'label' => 'Hình 8 (Khổ dọc lớn)', 'name' => 'gal_img_8', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104193_8316d0cd67c89088c05256e053a20b1d.jpg',
		),
        array(
			'key' => 'field_gal_img_9', 'label' => 'Hình 9 (Vuông nhỏ)', 'name' => 'gal_img_9', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2026/03/z7321244104166_d5f483d125730f143fbd2d4124c88633.jpg',
		),
        array(
			'key' => 'field_gal_img_10', 'label' => 'Hình 10 (Khổ dọc lớn)', 'name' => 'gal_img_10', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25'),
            'default_value' => get_site_url() . '/wp-content/uploads/2025/12/z7321243484722_8e5bf710651f64d00645fa318ab562e4.jpg',
		),

        // TAB 6: GLOBAL INFO
        array(
			'key' => 'field_global_info_tab',
			'label' => '6. Liên Hệ & MXH',
			'type' => 'tab',
		),
        // ACCORDION: VIETNAMESE (Global Info)
            array(
                'key' => 'field_global_info_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_phone', 'label' => 'Hotline Tổng', 'name' => 'global_phone', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_email', 'label' => 'Email', 'name' => 'global_email', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_address', 'label' => 'Địa chỉ chính', 'name' => 'global_address', 'type' => 'text',
            ),
            array(
                'key' => 'field_global_fb', 'label' => 'Facebook URL', 'name' => 'link_facebook', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_zalo', 'label' => 'Zalo URL', 'name' => 'link_zalo', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: ENGLISH (Global Info)
            array(
                'key' => 'field_global_info_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_phone_en', 'label' => 'Hotline Tổng (EN)', 'name' => 'global_phone_en', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_email_en', 'label' => 'Email (EN)', 'name' => 'global_email_en', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_address_en', 'label' => 'Địa chỉ chính (EN)', 'name' => 'global_address_en', 'type' => 'text',
            ),
            array(
                'key' => 'field_global_fb_en', 'label' => 'Facebook URL (EN)', 'name' => 'link_facebook_en', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_zalo_en', 'label' => 'Zalo URL (EN)', 'name' => 'link_zalo_en', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION: CHINESE (Global Info)
            array(
                'key' => 'field_global_info_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_phone_zh', 'label' => 'Hotline Tổng (ZH)', 'name' => 'global_phone_zh', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_email_zh', 'label' => 'Email (ZH)', 'name' => 'global_email_zh', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_address_zh', 'label' => 'Địa chỉ chính (ZH)', 'name' => 'global_address_zh', 'type' => 'text',
            ),
            array(
                'key' => 'field_global_fb_zh', 'label' => 'Facebook URL (ZH)', 'name' => 'link_facebook_zh', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),
            array(
                'key' => 'field_global_zalo_zh', 'label' => 'Zalo URL (ZH)', 'name' => 'link_zalo_zh', 'type' => 'text', 'wrapper' => array('width' => '50'),
            ),

            // ACCORDION END (Global Info)
            array(
                'key' => 'field_global_info_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // TAB 7: SCRIPTS
        array(
			'key' => 'field_global_scripts_tab',
			'label' => '7. Mã Tracking',
			'type' => 'tab',
		),
        // ACCORDION: VIETNAMESE (Scripts)
            array(
                'key' => 'field_global_scripts_acc_vn',
                'label' => 'Tiếng Việt',
                'type' => 'accordion',
                'open' => 1,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_header_scripts', 'label' => 'Header Scripts', 'name' => 'header_scripts', 'type' => 'textarea',
            ),
            array(
                'key' => 'field_global_footer_scripts', 'label' => 'Footer Scripts', 'name' => 'footer_scripts', 'type' => 'textarea',
            ),

            // ACCORDION: ENGLISH (Scripts)
            array(
                'key' => 'field_global_scripts_acc_en',
                'label' => 'English',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_header_scripts_en', 'label' => 'Header Scripts (EN)', 'name' => 'header_scripts_en', 'type' => 'textarea',
            ),
            array(
                'key' => 'field_global_footer_scripts_en', 'label' => 'Footer Scripts (EN)', 'name' => 'footer_scripts_en', 'type' => 'textarea',
            ),

            // ACCORDION: CHINESE (Scripts)
            array(
                'key' => 'field_global_scripts_acc_zh',
                'label' => 'Trung Văn (Chinese)',
                'type' => 'accordion',
                'open' => 0,
                'multi_expand' => 1,
            ),
            array(
                'key' => 'field_global_header_scripts_zh', 'label' => 'Header Scripts (ZH)', 'name' => 'header_scripts_zh', 'type' => 'textarea',
            ),
            array(
                'key' => 'field_global_footer_scripts_zh', 'label' => 'Footer Scripts (ZH)', 'name' => 'footer_scripts_zh', 'type' => 'textarea',
            ),

            // ACCORDION END (Scripts)
            array(
                'key' => 'field_global_scripts_acc_end',
                'type' => 'accordion',
                'endpoint' => 1,
            ),

        // TAB 8: NÚT CTA (TRANG CHỦ)
        array(
			'key' => 'field_home_cta_tab',
			'label' => '8. Nút CTA (Trang Chủ)',
			'type' => 'tab',
		),
        array(
            'key' => 'field_cta_info_msg',
            'label' => 'Hướng dẫn',
            'type' => 'message',
            'message' => 'Quản lý nội dung và link cho tất cả các nút CTA trên trang chủ. Nếu để trống sẽ dùng giá trị mặc định.',
        ),

        // --- Hero CTA ---
        array(
            'key' => 'field_cta_hero_msg',
            'label' => '① Nút CTA Hero (Đầu trang)',
            'type' => 'message',
            'message' => 'Nút CTA lớn ở phần hero banner đầu trang.',
        ),
        array(
            'key' => 'field_cta_hero_text',
            'label' => 'Nội dung nút Hero CTA',
            'name' => 'hero_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "Bắt đầu hành trình dưỡng sinh"',
            'wrapper' => array('width' => '50'),
        ),
        array(
            'key' => 'field_cta_hero_text_en',
            'label' => 'Nội dung nút Hero CTA (EN)',
            'name' => 'hero_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_hero_text_zh',
            'label' => 'Nội dung nút Hero CTA (ZH)',
            'name' => 'hero_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // --- Intro CTA ---
        array(
            'key' => 'field_cta_intro_msg',
            'label' => '② Nút "Tìm hiểu thêm" (Giới thiệu)',
            'type' => 'message',
            'message' => 'Nút link ở phần giới thiệu Metta Spa.',
        ),
        array(
            'key' => 'field_cta_intro_text',
            'label' => 'Nội dung nút',
            'name' => 'intro_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "Tìm hiểu thêm"',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_intro_link',
            'label' => 'Link nút',
            'name' => 'intro_cta_link',
            'type' => 'text',
            'instructions' => 'Mặc định: /gioi-thieu (đường dẫn tương đối hoặc URL đầy đủ)',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_intro_text_en',
            'label' => 'Nội dung nút (EN)',
            'name' => 'intro_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_intro_text_zh',
            'label' => 'Nội dung nút (ZH)',
            'name' => 'intro_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // --- Feature Booking CTA ---
        array(
            'key' => 'field_cta_feature_msg',
            'label' => '③ Nút "Đặt Lịch" (3 đặc điểm)',
            'type' => 'message',
            'message' => 'Nút đặt lịch dưới 3 card đặc điểm (Gội đầu, Cổ vai gáy, Tạng phủ). Dùng chung 1 nội dung + 1 link.',
        ),
        array(
            'key' => 'field_cta_feature_text',
            'label' => 'Nội dung nút',
            'name' => 'feature_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "ĐẶT LỊCH"',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_feature_link',
            'label' => 'Link nút',
            'name' => 'feature_cta_link',
            'type' => 'text',
            'instructions' => 'Mặc định: https://datlich.mettaspadongy.vn/',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_feature_text_en',
            'label' => 'Nội dung nút (EN)',
            'name' => 'feature_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_feature_text_zh',
            'label' => 'Nội dung nút (ZH)',
            'name' => 'feature_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // --- Xem Bảng Giá CTA (Features section) ---
        array(
            'key' => 'field_cta_menu_fea_msg',
            'label' => '④ Nút "Xem bảng giá" (phần Đặc điểm)',
            'type' => 'message',
            'message' => 'Nút link "Xem bảng giá" ở cuối phần Tại Metta Spa.',
        ),
        array(
            'key' => 'field_cta_menu_fea_text',
            'label' => 'Nội dung nút',
            'name' => 'menu_fea_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "Xem bảng giá"',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_fea_link',
            'label' => 'Link nút',
            'name' => 'menu_fea_cta_link',
            'type' => 'text',
            'instructions' => 'Mặc định: /menu',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_fea_text_en',
            'label' => 'Nội dung nút (EN)',
            'name' => 'menu_fea_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_fea_text_zh',
            'label' => 'Nội dung nút (ZH)',
            'name' => 'menu_fea_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // --- Xem Bảng Giá CTA (Combo section) ---
        array(
            'key' => 'field_cta_menu_combo_msg',
            'label' => '⑤ Nút "Xem bảng giá" (phần Combo)',
            'type' => 'message',
            'message' => 'Nút link "Xem bảng giá" ở cuối phần Combo Nổi Bật.',
        ),
        array(
            'key' => 'field_cta_menu_combo_text',
            'label' => 'Nội dung nút',
            'name' => 'menu_combo_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "Xem bảng giá"',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_combo_link',
            'label' => 'Link nút',
            'name' => 'menu_combo_cta_link',
            'type' => 'text',
            'instructions' => 'Mặc định: /menu',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_combo_text_en',
            'label' => 'Nội dung nút (EN)',
            'name' => 'menu_combo_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_menu_combo_text_zh',
            'label' => 'Nội dung nút (ZH)',
            'name' => 'menu_combo_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // --- Xem Thêm Tin Tức CTA ---
        array(
            'key' => 'field_cta_news_msg',
            'label' => '⑥ Nút "Xem thêm tin tức"',
            'type' => 'message',
            'message' => 'Nút link ở cuối phần Tin Tức.',
        ),
        array(
            'key' => 'field_cta_news_text',
            'label' => 'Nội dung nút',
            'name' => 'news_cta_text',
            'type' => 'text',
            'instructions' => 'Mặc định: "Xem thêm tin tức"',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_news_link',
            'label' => 'Link nút',
            'name' => 'news_cta_link',
            'type' => 'text',
            'instructions' => 'Mặc định: /tin-tuc',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_news_text_en',
            'label' => 'Nội dung nút (EN)',
            'name' => 'news_cta_text_en',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),
        array(
            'key' => 'field_cta_news_text_zh',
            'label' => 'Nội dung nút (ZH)',
            'name' => 'news_cta_text_zh',
            'type' => 'text',
            'wrapper' => array('width' => '25'),
        ),

        // TAB 9: ẢNH NỀN SECTIONS
        array(
            'key'   => 'field_home_bg_tab',
            'label' => '9. Ảnh Nền Sections',
            'type'  => 'tab',
        ),
        array(
            'key'     => 'field_home_bg_info',
            'label'   => 'Hướng dẫn',
            'type'    => 'message',
            'message' => 'Quản lý ảnh nền cho các section nâu tối trên trang chủ. Ảnh được áp dụng với hiệu ứng blur mờ tự động. Nếu để trống sẽ dùng ảnh Gemini mặc định.',
        ),
        array(
            'key'     => 'field_home_bg_info_hero',
            'label'   => '① Ảnh nền Hero (Đầu trang)',
            'type'    => 'message',
            'message' => 'Ảnh nền lớn phía sau hero banner với hiệu ứng blur.',
        ),
        array(
            'key'           => 'field_home_hero_bg_image',
            'label'         => 'Ảnh nền Hero',
            'name'          => 'hero_bg_image',
            'type'          => 'image',
            'return_format' => 'url',
            'instructions'  => 'Kích thước gợi ý: 2560×1707px. Ảnh sẽ tự động blur nhẹ.',
            'wrapper'       => array('width' => '100'),
        ),
        array(
            'key'     => 'field_home_bg_info_combo',
            'label'   => '② Ảnh nền Section Liệu Trình / Hành trình phục hồi',
            'type'    => 'message',
            'message' => 'Ảnh nền phía sau phần Combo Nổi Bật với hiệu ứng blur + overlay nâu.',
        ),
        array(
            'key'           => 'field_home_combo_bg_image',
            'label'         => 'Ảnh nền Combo/Liệu trình',
            'name'          => 'combo_bg_image',
            'type'          => 'image',
            'return_format' => 'url',
            'instructions'  => 'Kích thước gợi ý: 2560×1707px. Ảnh sẽ tự động blur nhẹ.',
            'wrapper'       => array('width' => '100'),
        ),
        array(
            'key'     => 'field_home_bg_info_review',
            'label'   => '③ Ảnh nền Section Đánh Giá Khách Hàng',
            'type'    => 'message',
            'message' => 'Ảnh nền phía sau phần review/đánh giá với hiệu ứng blur + overlay nâu.',
        ),
        array(
            'key'           => 'field_home_review_bg_image',
            'label'         => 'Ảnh nền Review/Đánh giá',
            'name'          => 'review_bg_image',
            'type'          => 'image',
            'return_format' => 'url',
            'instructions'  => 'Kích thước gợi ý: 2560×1707px. Ảnh sẽ tự động blur nhẹ.',
            'wrapper'       => array('width' => '100'),
        ),

	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
));

// ==========================================
// 2. TRANG GIỚI THIỆU
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_about_page',
	'title' => 'Cài đặt Trang Giới Thiệu',
	'fields' => array(
        // TAB: Phần Hero
        array('key' => 'tab_about_hero', 'label' => 'Phần Hero', 'type' => 'tab'),
		array('key' => 'field_about_hero_title', 'label' => 'Tiêu đề Hero', 'name' => 'about_hero_title', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_about_hero_title_en', 'label' => 'Tiêu đề Hero (EN)', 'name' => 'about_hero_title_en', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_about_hero_title_zh', 'label' => 'Tiêu đề Hero (ZH)', 'name' => 'about_hero_title_zh', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_about_hero_desc', 'label' => 'Mô tả Hero', 'name' => 'about_hero_desc', 'type' => 'textarea', 'rows' => 4),
		array('key' => 'field_about_hero_desc_en', 'label' => 'Mô tả Hero (EN)', 'name' => 'about_hero_desc_en', 'type' => 'textarea', 'rows' => 4),
		array('key' => 'field_about_hero_desc_zh', 'label' => 'Mô tả Hero (ZH)', 'name' => 'about_hero_desc_zh', 'type' => 'textarea', 'rows' => 4),
        array('key' => 'field_about_img_1', 'label' => 'Ảnh giới thiệu 1', 'name' => 'about_img_1', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_img_2', 'label' => 'Ảnh giới thiệu 2', 'name' => 'about_img_2', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_img_3', 'label' => 'Ảnh giới thiệu 3', 'name' => 'about_img_3', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),

        // TAB: Phần Sứ Mệnh đầu trang
        array('key' => 'tab_about_mission', 'label' => 'Phần Sứ Mệnh', 'type' => 'tab'),
        array(
            'key' => 'field_about_mission_title',
            'label' => 'Tiêu đề Sứ mệnh',
            'name' => 'about_mission_title',
            'type' => 'text',
            'default_value' => 'SỨ MỆNH METTA SPA',
        ),
        array(
            'key' => 'field_about_mission_title_en',
            'label' => 'Tiêu đề Sứ mệnh (EN)',
            'name' => 'about_mission_title_en',
            'type' => 'text',
        ),
        array(
            'key' => 'field_about_mission_title_zh',
            'label' => 'Tiêu đề Sứ mệnh (ZH)',
            'name' => 'about_mission_title_zh',
            'type' => 'text',
        ),
        array(
            'key' => 'field_about_mission_desc',
            'label' => 'Mô tả Sứ mệnh',
            'name' => 'about_mission_desc',
            'type' => 'textarea',
            'rows' => 3,
            'default_value' => 'Giúp cộng đồng thoát khỏi những cơn đau mỏi thể xác và áp lực tinh thần bằng liệu pháp tự nhiên, an toàn, cùng lòng từ bi và sự tử tế chân thành.',
        ),
        array(
            'key' => 'field_about_mission_desc_en',
            'label' => 'Mô tả Sứ mệnh (EN)',
            'name' => 'about_mission_desc_en',
            'type' => 'textarea',
            'rows' => 3,
        ),
        array(
            'key' => 'field_about_mission_desc_zh',
            'label' => 'Mô tả Sứ mệnh (ZH)',
            'name' => 'about_mission_desc_zh',
            'type' => 'textarea',
            'rows' => 3,
        ),
        array('key' => 'field_about_mission_img_1', 'label' => 'Ảnh Sứ mệnh 1', 'name' => 'about_mission_img_1', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_mission_img_2', 'label' => 'Ảnh Sứ mệnh 2', 'name' => 'about_mission_img_2', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_mission_img_3', 'label' => 'Ảnh Sứ mệnh 3', 'name' => 'about_mission_img_3', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),

        // TAB: Phần Về Chúng Tôi
        array('key' => 'tab_about_intro', 'label' => 'Phần Về Chúng Tôi', 'type' => 'tab'),
        array('key' => 'field_about_intro_title', 'label' => 'Tiêu đề Về chúng tôi', 'name' => 'about_intro_title', 'type' => 'text'),
        array('key' => 'field_about_intro_desc', 'label' => 'Nội dung Về chúng tôi', 'name' => 'about_intro_desc', 'type' => 'wysiwyg', 'media_upload' => 0),
        array('key' => 'field_about_intro_img1', 'label' => 'Ảnh lớn Về chúng tôi', 'name' => 'about_intro_img1', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_intro_img2', 'label' => 'Ảnh nhỏ Về chúng tôi', 'name' => 'about_intro_img2', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_intro_img3', 'label' => 'Icon Về chúng tôi', 'name' => 'about_intro_img3', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_stat_1_num', 'label' => 'Thông số 1 (Số)', 'name' => 'about_stat_1_num', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_1_text', 'label' => 'Thông số 1 (Chữ)', 'name' => 'about_stat_1_text', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_2_num', 'label' => 'Thông số 2 (Số)', 'name' => 'about_stat_2_num', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_2_text', 'label' => 'Thông số 2 (Chữ)', 'name' => 'about_stat_2_text', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_3_num', 'label' => 'Thông số 3 (Số)', 'name' => 'about_stat_3_num', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_3_text', 'label' => 'Thông số 3 (Chữ)', 'name' => 'about_stat_3_text', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_4_num', 'label' => 'Thông số 4 (Số)', 'name' => 'about_stat_4_num', 'type' => 'text', 'wrapper' => array('width' => '50')),
        array('key' => 'field_about_stat_4_text', 'label' => 'Thông số 4 (Chữ)', 'name' => 'about_stat_4_text', 'type' => 'text', 'wrapper' => array('width' => '50')),

        // TAB: Phần Vì sao chọn chúng tôi
        array('key' => 'tab_about_why', 'label' => 'Vì Sao Chọn', 'type' => 'tab'),
        array('key' => 'field_about_why_bg', 'label' => 'Ảnh nền', 'name' => 'about_why_bg', 'type' => 'image', 'return_format' => 'url'),
        array('key' => 'field_about_why_title', 'label' => 'Tiêu đề', 'name' => 'about_why_title', 'type' => 'text'),
        array('key' => 'field_about_why_desc', 'label' => 'Mô tả', 'name' => 'about_why_desc', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_about_why_img_float', 'label' => 'Ảnh trang trí', 'name' => 'about_why_img_float', 'type' => 'image', 'return_format' => 'url'),
        
        array('key' => 'field_about_why_item1_img', 'label' => 'Ảnh item 1', 'name' => 'about_why_item1_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item1_title', 'label' => 'Tiêu đề item 1', 'name' => 'about_why_item1_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item1_desc', 'label' => 'Mô tả item 1', 'name' => 'about_why_item1_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),
        
        array('key' => 'field_about_why_item2_img', 'label' => 'Ảnh item 2', 'name' => 'about_why_item2_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item2_title', 'label' => 'Tiêu đề item 2', 'name' => 'about_why_item2_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item2_desc', 'label' => 'Mô tả item 2', 'name' => 'about_why_item2_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),
        
        array('key' => 'field_about_why_item3_img', 'label' => 'Ảnh item 3', 'name' => 'about_why_item3_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item3_title', 'label' => 'Tiêu đề item 3', 'name' => 'about_why_item3_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_why_item3_desc', 'label' => 'Mô tả item 3', 'name' => 'about_why_item3_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),

        // TAB: Phần Giá Trị Cốt Lõi
        array('key' => 'tab_about_core', 'label' => 'Giá Trị Cốt Lõi', 'type' => 'tab'),
        array('key' => 'field_about_core_bg', 'label' => 'Ảnh nền', 'name' => 'about_core_bg', 'type' => 'image', 'return_format' => 'url'),
        array('key' => 'field_about_core_title', 'label' => 'Tiêu đề Giá trị', 'name' => 'about_core_title', 'type' => 'text'),
        array('key' => 'field_about_core_1_icon', 'label' => 'Icon 1', 'name' => 'about_core_1_icon', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_1_title', 'label' => 'Tiêu đề 1', 'name' => 'about_core_1_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_1_desc', 'label' => 'Mô tả 1', 'name' => 'about_core_1_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_2_icon', 'label' => 'Icon 2', 'name' => 'about_core_2_icon', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_2_title', 'label' => 'Tiêu đề 2', 'name' => 'about_core_2_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_2_desc', 'label' => 'Mô tả 2', 'name' => 'about_core_2_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_3_icon', 'label' => 'Icon 3', 'name' => 'about_core_3_icon', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_3_title', 'label' => 'Tiêu đề 3', 'name' => 'about_core_3_title', 'type' => 'text', 'wrapper' => array('width' => '33')),
        array('key' => 'field_about_core_3_desc', 'label' => 'Mô tả 3', 'name' => 'about_core_3_desc', 'type' => 'textarea', 'rows' => 3, 'wrapper' => array('width' => '33')),

        // TAB: Hình Ảnh
        array('key' => 'tab_about_gallery', 'label' => 'Phần Hình Ảnh', 'type' => 'tab'),
        array('key' => 'field_about_gallery_title', 'label' => 'Tiêu đề Hình ảnh', 'name' => 'about_gallery_title', 'type' => 'text'),
        array('key' => 'field_about_gallery_bg', 'label' => 'Ảnh nền Pattern', 'name' => 'about_gallery_bg', 'type' => 'image', 'return_format' => 'url'),
        array('key' => 'field_about_gal_1', 'label' => 'Ảnh 1', 'name' => 'about_gal_1', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_2', 'label' => 'Ảnh 2', 'name' => 'about_gal_2', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_3', 'label' => 'Ảnh 3', 'name' => 'about_gal_3', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_4', 'label' => 'Ảnh 4', 'name' => 'about_gal_4', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_5', 'label' => 'Ảnh 5', 'name' => 'about_gal_5', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_6', 'label' => 'Ảnh 6', 'name' => 'about_gal_6', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_7', 'label' => 'Ảnh 7', 'name' => 'about_gal_7', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_8', 'label' => 'Ảnh 8', 'name' => 'about_gal_8', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_9', 'label' => 'Ảnh 9', 'name' => 'about_gal_9', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_gal_10', 'label' => 'Ảnh 10', 'name' => 'about_gal_10', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),

        // TAB: Khám Phá Chi Nhánh
        array('key' => 'tab_about_branch', 'label' => 'Phần Chi Nhánh', 'type' => 'tab'),
        array('key' => 'field_about_branch_bg', 'label' => 'Ảnh nền Pattern', 'name' => 'about_branch_bg', 'type' => 'image', 'return_format' => 'url'),
        array('key' => 'field_about_branch_title', 'label' => 'Tiêu đề Chi Nhánh', 'name' => 'about_branch_title', 'type' => 'text'),
        array(
            'key' => 'field_about_branch_items',
            'label' => 'Danh sách chi nhánh linh hoạt',
            'name' => 'about_branch_items',
            'type' => 'repeater',
            'instructions' => 'Ưu tiên dùng danh sách này cho section chi nhánh trên trang Giới thiệu. Nếu để trống, website dùng CN1/CN2 cũ.',
            'layout' => 'block',
            'button_label' => 'Thêm chi nhánh',
            'sub_fields' => array(
                array('key' => 'field_about_branch_item_image', 'label' => 'Ảnh', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
                array('key' => 'field_about_branch_item_name', 'label' => 'Tên chi nhánh', 'name' => 'name', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_about_branch_item_hotline', 'label' => 'Hotline', 'name' => 'hotline', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_about_branch_item_address', 'label' => 'Địa chỉ', 'name' => 'address', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_about_branch_item_link', 'label' => 'Link chi tiết', 'name' => 'link', 'type' => 'text', 'wrapper' => array('width' => '20')),
            ),
        ),
        array('key' => 'field_about_branch_1_img', 'label' => 'Ảnh CN1', 'name' => 'about_branch_1_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_1_name', 'label' => 'Tên CN1', 'name' => 'about_branch_1_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_1_hotline', 'label' => 'Hotline CN1', 'name' => 'about_branch_1_hotline', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_1_addr', 'label' => 'Địa chỉ CN1', 'name' => 'about_branch_1_addr', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_2_img', 'label' => 'Ảnh CN2', 'name' => 'about_branch_2_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_2_name', 'label' => 'Tên CN2', 'name' => 'about_branch_2_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_2_hotline', 'label' => 'Hotline CN2', 'name' => 'about_branch_2_hotline', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_about_branch_2_addr', 'label' => 'Địa chỉ CN2', 'name' => 'about_branch_2_addr', 'type' => 'text', 'wrapper' => array('width' => '25')),
	),
	'location' => array(
		array(
			array('param' => 'page_template', 'operator' => '==', 'value' => 'page-gioi-thieu.php'),
		),
	),
));

// ==========================================
// 3. TRANG CHI NHÁNH
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_branch_page',
	'title' => 'Cài đặt Trang Chi Nhánh',
	'fields' => array(
		array('key' => 'field_branch_bg', 'label' => 'Ảnh nền Hero', 'name' => 'branch_page_bg', 'type' => 'image', 'return_format' => 'url'),
        array('key' => 'field_branch_page_title', 'label' => 'Tiêu đề trang', 'name' => 'branch_page_title', 'type' => 'text'),
        array('key' => 'field_branch_page_title_en', 'label' => 'Tiêu đề trang (EN)', 'name' => 'branch_page_title_en', 'type' => 'text'),
        array('key' => 'field_branch_page_title_zh', 'label' => 'Tiêu đề trang (ZH)', 'name' => 'branch_page_title_zh', 'type' => 'text'),
        array(
            'key' => 'field_branch_items',
            'label' => 'Danh sách chi nhánh linh hoạt',
            'name' => 'branch_items',
            'type' => 'repeater',
            'instructions' => 'Ưu tiên dùng danh sách này. Nếu để trống, website dùng các field CN cũ.',
            'layout' => 'block',
            'button_label' => 'Thêm chi nhánh',
            'sub_fields' => array(
                array('key' => 'field_branch_item_image', 'label' => 'Ảnh', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
                array('key' => 'field_branch_item_name', 'label' => 'Tên chi nhánh', 'name' => 'name', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_branch_item_hotline', 'label' => 'Hotline', 'name' => 'hotline', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_branch_item_address', 'label' => 'Địa chỉ', 'name' => 'address', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_branch_item_link', 'label' => 'Link chi tiết', 'name' => 'link', 'type' => 'text', 'wrapper' => array('width' => '20')),
            ),
        ),
        // Branch 1
        array('key' => 'field_branch_1_msg', 'label' => 'Chi nhánh 1', 'type' => 'message'),
        array('key' => 'field_branch_1_img', 'label' => 'Ảnh CN1', 'name' => 'branch_1_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_1_name', 'label' => 'Tên CN1', 'name' => 'branch_1_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_1_hotline', 'label' => 'Hotline CN1', 'name' => 'branch_1_hotline', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_1_address', 'label' => 'Địa chỉ CN1', 'name' => 'branch_1_address', 'type' => 'text', 'wrapper' => array('width' => '25')),
        // Branch 2
        array('key' => 'field_branch_2_msg', 'label' => 'Chi nhánh 2', 'type' => 'message'),
        array('key' => 'field_branch_2_img', 'label' => 'Ảnh CN2', 'name' => 'branch_2_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_2_name', 'label' => 'Tên CN2', 'name' => 'branch_2_name', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_2_hotline', 'label' => 'Hotline CN2', 'name' => 'branch_2_hotline', 'type' => 'text', 'wrapper' => array('width' => '25')),
        array('key' => 'field_branch_2_address', 'label' => 'Địa chỉ CN2', 'name' => 'branch_2_address', 'type' => 'text', 'wrapper' => array('width' => '25')),
	),
	'location' => array(
		array(
			array('param' => 'page_template', 'operator' => '==', 'value' => 'page-chi-nhanh.php'),
		),
	),
));

// ==========================================
// 4. TRANG MENU (PDF)
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_menu_page',
	'title' => 'Cài đặt Trang Menu/Bảng giá',
	'fields' => array(
        array('key' => 'field_menu_page_title', 'label' => 'Tiêu đề banner', 'name' => 'menu_page_title', 'type' => 'text'),
        array('key' => 'field_menu_page_title_en', 'label' => 'Tiêu đề banner (EN)', 'name' => 'menu_page_title_en', 'type' => 'text'),
        array('key' => 'field_menu_page_title_zh', 'label' => 'Tiêu đề banner (ZH)', 'name' => 'menu_page_title_zh', 'type' => 'text'),
		array('key' => 'field_menu_pdf', 'label' => 'File PDF Menu', 'name' => 'menu_pdf_url', 'type' => 'file', 'return_format' => 'url'),
	),
	'location' => array(
		array(
			array('param' => 'page_template', 'operator' => '==', 'value' => 'page-menu.php'),
		),
	),
));

// ==========================================
// 5. TRANG SẢN PHẨM
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_product_page',
	'title' => 'Cài đặt Trang Sản Phẩm',
	'fields' => array(
        // TAB: Phần giới thiệu
        array('key' => 'field_product_tab_intro', 'label' => 'Phần Giới Thiệu', 'type' => 'tab'),
        array('key' => 'field_product_page_title', 'label' => 'Tiêu đề lớn (Intro)', 'name' => 'product_page_title', 'type' => 'text', 'instructions' => 'Dùng \\n để xuống dòng.', 'wrapper' => array('width' => '50')),
        array('key' => 'field_product_page_intro', 'label' => 'Nội dung giới thiệu', 'name' => 'product_page_intro', 'type' => 'textarea', 'wrapper' => array('width' => '50')),
        array('key' => 'field_product_page_img', 'label' => 'Ảnh minh họa đầu trang', 'name' => 'product_page_img', 'type' => 'image', 'return_format' => 'url'),

        // TAB: Phần Sản Phẩm (tất cả gộp chung như Chi Nhánh)
        array('key' => 'field_product_tab_listing', 'label' => 'Phần Sản Phẩm', 'type' => 'tab'),
        array('key' => 'field_product_listing_title', 'label' => 'Tiêu đề danh sách SP', 'name' => 'product_listing_title', 'type' => 'text', 'default_value' => 'Sản Phẩm Của Chúng Tôi', 'wrapper' => array('width' => '50')),
        array('key' => 'field_product_listing_subtitle', 'label' => 'Phụ đề danh sách SP', 'name' => 'product_listing_subtitle', 'type' => 'text', 'default_value' => 'Giải pháp chăm sóc sức khỏe & sắc đẹp từ thiên nhiên', 'wrapper' => array('width' => '50')),
        array(
            'key' => 'field_product_items',
            'label' => 'Danh sách sản phẩm linh hoạt',
            'name' => 'product_items',
            'type' => 'repeater',
            'instructions' => 'Ưu tiên dùng danh sách này. Nếu để trống, website dùng SP1..SP6 cũ.',
            'layout' => 'block',
            'button_label' => 'Thêm sản phẩm',
            'sub_fields' => array(
                array('key' => 'field_product_item_image', 'label' => 'Ảnh', 'name' => 'image', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
                array('key' => 'field_product_item_name', 'label' => 'Tên sản phẩm', 'name' => 'name', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_product_item_price', 'label' => 'Giá', 'name' => 'price', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_product_item_link', 'label' => 'Link', 'name' => 'link', 'type' => 'text', 'wrapper' => array('width' => '20')),
                array('key' => 'field_product_item_desc', 'label' => 'Mô tả', 'name' => 'desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
            ),
        ),
        // SP1
        array('key' => 'field_sp1_img', 'label' => 'Ảnh SP1', 'name' => 'sp1_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp1_name', 'label' => 'Tên SP1', 'name' => 'sp1_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp1_price', 'label' => 'Giá SP1', 'name' => 'sp1_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp1_link', 'label' => 'Link SP1', 'name' => 'sp1_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp1_desc', 'label' => 'Mô tả SP1', 'name' => 'sp1_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
        // SP2
        array('key' => 'field_sp2_img', 'label' => 'Ảnh SP2', 'name' => 'sp2_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp2_name', 'label' => 'Tên SP2', 'name' => 'sp2_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp2_price', 'label' => 'Giá SP2', 'name' => 'sp2_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp2_link', 'label' => 'Link SP2', 'name' => 'sp2_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp2_desc', 'label' => 'Mô tả SP2', 'name' => 'sp2_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
        // SP3
        array('key' => 'field_sp3_img', 'label' => 'Ảnh SP3', 'name' => 'sp3_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp3_name', 'label' => 'Tên SP3', 'name' => 'sp3_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp3_price', 'label' => 'Giá SP3', 'name' => 'sp3_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp3_link', 'label' => 'Link SP3', 'name' => 'sp3_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp3_desc', 'label' => 'Mô tả SP3', 'name' => 'sp3_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
        // SP4
        array('key' => 'field_sp4_img', 'label' => 'Ảnh SP4', 'name' => 'sp4_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp4_name', 'label' => 'Tên SP4', 'name' => 'sp4_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp4_price', 'label' => 'Giá SP4', 'name' => 'sp4_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp4_link', 'label' => 'Link SP4', 'name' => 'sp4_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp4_desc', 'label' => 'Mô tả SP4', 'name' => 'sp4_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
        // SP5
        array('key' => 'field_sp5_img', 'label' => 'Ảnh SP5', 'name' => 'sp5_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp5_name', 'label' => 'Tên SP5', 'name' => 'sp5_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp5_price', 'label' => 'Giá SP5', 'name' => 'sp5_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp5_link', 'label' => 'Link SP5', 'name' => 'sp5_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp5_desc', 'label' => 'Mô tả SP5', 'name' => 'sp5_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
        // SP6
        array('key' => 'field_sp6_img', 'label' => 'Ảnh SP6', 'name' => 'sp6_img', 'type' => 'image', 'return_format' => 'url', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp6_name', 'label' => 'Tên SP6', 'name' => 'sp6_name', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp6_price', 'label' => 'Giá SP6', 'name' => 'sp6_price', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp6_link', 'label' => 'Link SP6', 'name' => 'sp6_link', 'type' => 'text', 'wrapper' => array('width' => '20')),
        array('key' => 'field_sp6_desc', 'label' => 'Mô tả SP6', 'name' => 'sp6_desc', 'type' => 'text', 'wrapper' => array('width' => '20')),
	),
	'location' => array(
		array(
			array('param' => 'page_template', 'operator' => '==', 'value' => 'page-san-pham.php'),
		),
	),
));

// ==========================================
// 6. TRANG KHÓA HỌC
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_course_page',
	'title' => 'Cài đặt Trang Khóa Học',
	'fields' => array(
        // TAB 1: HERO
        array('key' => 'field_c_tab_1', 'label' => '1. Hero Header', 'type' => 'tab'),
        array('key' => 'field_course_hero_bg', 'label' => 'Ảnh nền Hero', 'name' => 'course_hero_bg', 'type' => 'image', 'return_format' => 'url'),
        array(
            'key' => 'field_course_hero_chip', 'label' => 'Badge (Chip)', 'name' => 'course_hero_chip', 'type' => 'text', 
            'default_value' => 'TINH HOA DƯỠNG SINH VIỆT',
            'instructions' => 'Dòng chữ nhỏ trên tiêu đề (vd: TINH HOA DƯỠNG SINH VIỆT)'
        ),
		array('key' => 'field_course_hero_h1', 'label' => 'Tiêu đề Hero (H1)', 'name' => 'course_hero_h1', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_course_hero_h1_sub', 'label' => 'Tiêu đề Hero (Dòng phụ)', 'name' => 'course_hero_h1_sub', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_course_hero_h1_en', 'label' => 'Tiêu đề Hero (H1) (EN)', 'name' => 'course_hero_h1_en', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_course_hero_h1_sub_en', 'label' => 'Tiêu đề Hero (Dòng phụ) (EN)', 'name' => 'course_hero_h1_sub_en', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_course_hero_h1_zh', 'label' => 'Tiêu đề Hero (H1) (ZH)', 'name' => 'course_hero_h1_zh', 'type' => 'textarea', 'rows' => 2),
		array('key' => 'field_course_hero_h1_sub_zh', 'label' => 'Tiêu đề Hero (Dòng phụ) (ZH)', 'name' => 'course_hero_h1_sub_zh', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_course_hero_sub', 'label' => 'Mô tả Hero', 'name' => 'course_hero_sub', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_course_hero_sub_en', 'label' => 'Mô tả Hero (EN)', 'name' => 'course_hero_sub_en', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_course_hero_sub_zh', 'label' => 'Mô tả Hero (ZH)', 'name' => 'course_hero_sub_zh', 'type' => 'textarea', 'rows' => 2),
        array('key' => 'field_course_hero_cta_text', 'label' => 'Nút CTA Text', 'name' => 'course_hero_cta_text', 'type' => 'text', 'default_value' => 'NHẬN LỘ TRÌNH TƯ VẤN'),
        array('key' => 'field_course_hero_cta_link', 'label' => 'Nút CTA Link', 'name' => 'course_hero_cta_link', 'type' => 'text', 'default_value' => '#register'),
        array('key' => 'field_course_hero_cta_2_text', 'label' => 'Nút CTA 2 Text', 'name' => 'course_hero_cta_2_text', 'type' => 'text', 'default_value' => 'NHẬN ƯU ĐÃI KHÓA HỌC'),
        array('key' => 'field_course_hero_cta_2_link', 'label' => 'Nút CTA 2 Link', 'name' => 'course_hero_cta_2_link', 'type' => 'text', 'default_value' => '#register'),

        // TAB 2: INTRO
        array('key' => 'field_c_tab_2', 'label' => '2. Giới thiệu', 'type' => 'tab'),
        array('key' => 'field_course_intro_badge', 'label' => 'Badge Intro', 'name' => 'course_intro_badge', 'type' => 'text', 'default_value' => 'VỀ CHÚNG TÔI'),
        array('key' => 'field_course_intro_title', 'label' => 'Tiêu đề Intro', 'name' => 'course_intro_title', 'type' => 'text', 'default_value' => 'SỨ MỆNH ĐÀO TẠO TỪ TÂM'),
        array('key' => 'field_course_intro_content', 'label' => 'Nội dung Intro', 'name' => 'course_intro_content', 'type' => 'wysiwyg', 'media_upload' => 0, 'toolbar' => 'basic'),
        // Image for intro section (new request)
        array('key' => 'field_course_intro_img', 'label' => 'Ảnh Intro (Bên phải)', 'name' => 'course_intro_img', 'type' => 'image', 'return_format' => 'url'),


        // TAB 3: USP
        array('key' => 'field_c_tab_3', 'label' => '3. Điểm khác biệt (USP)', 'type' => 'tab'),
        array('key' => 'field_course_usp_title', 'label' => 'Tiêu đề USP', 'name' => 'course_usp_title', 'type' => 'text', 'default_value' => 'ĐIỂM KHÁC BIỆT TẠI METTA'),
        array(
            'key' => 'field_course_usp_list',
            'label' => 'Danh sách USP',
            'name' => 'course_usp_list',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => array(
                array('key' => 'field_usp_icon', 'label' => 'Icon Class (FontAwesome)', 'name' => 'icon_class', 'type' => 'text', 'default_value' => 'fas fa-star'),
                array('key' => 'field_usp_title', 'label' => 'Tiêu đề', 'name' => 'title', 'type' => 'text'),
                array('key' => 'field_usp_desc', 'label' => 'Mô tả', 'name' => 'desc', 'type' => 'textarea', 'rows' => 2),
            )
        ),

        // TAB 4: CURRICULUM
        array('key' => 'field_c_tab_4', 'label' => '4. Lộ trình', 'type' => 'tab'),
        array('key' => 'field_course_curr_title', 'label' => 'Tiêu đề Lộ trình', 'name' => 'course_curr_title', 'type' => 'text', 'default_value' => 'LỘ TRÌNH PHÁT TRIỂN TOÀN DIỆN'),
        array(
            'key' => 'field_course_curr_list',
            'label' => 'Các Module học',
            'name' => 'course_curr_list',
            'type' => 'repeater',
            'layout' => 'row',
            'sub_fields' => array(
                array('key' => 'field_curr_title', 'label' => 'Tên Chương/Module', 'name' => 'title', 'type' => 'text'),
                array('key' => 'field_curr_content', 'label' => 'Nội dung chi tiết', 'name' => 'content', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0),
            )
        ),

        // TAB 5: BENEFITS
        array('key' => 'field_c_tab_5', 'label' => '5. Quyền lợi', 'type' => 'tab'),
        array('key' => 'field_course_benefit_title', 'label' => 'Tiêu đề Quyền lợi', 'name' => 'course_benefit_title', 'type' => 'text', 'default_value' => 'QUYỀN LỢI ĐẶC QUYỀN'),
        array(
            'key' => 'field_course_benefit_list',
            'label' => 'Danh sách Quyền lợi',
            'name' => 'course_benefit_list',
            'type' => 'repeater',
            'layout' => 'row',
            'sub_fields' => array(
                array('key' => 'field_ben_icon', 'label' => 'Icon Class', 'name' => 'icon_class', 'type' => 'text'),
                array('key' => 'field_ben_title', 'label' => 'Tiêu đề', 'name' => 'title', 'type' => 'text'),
                array('key' => 'field_ben_desc', 'label' => 'Mô tả', 'name' => 'desc', 'type' => 'textarea', 'rows' => 2),
            )
        ),
        array('key' => 'field_course_benefit_img', 'label' => 'Ảnh Quyền lợi (Bên phải)', 'name' => 'course_benefit_img', 'type' => 'image', 'return_format' => 'url'),

        // TAB 6: TARGET AUDIENCE
        array('key' => 'field_c_tab_6', 'label' => '6. Đối tượng', 'type' => 'tab'),
        array('key' => 'field_course_target_title', 'label' => 'Tiêu đề Đối tượng', 'name' => 'course_target_title', 'type' => 'text', 'default_value' => 'KHÓA HỌC DÀNH CHO AI?'),
        array(
            'key' => 'field_course_target_list',
            'label' => 'Danh sách Đối tượng',
            'name' => 'course_target_list',
            'type' => 'repeater',
            'layout' => 'row',
            'sub_fields' => array(
                array('key' => 'field_tar_icon', 'label' => 'Icon Class', 'name' => 'icon_class', 'type' => 'text'),
                array('key' => 'field_tar_content', 'label' => 'Nội dung', 'name' => 'content', 'type' => 'textarea', 'rows' => 3),
            )
        ),

        // TAB 7: TESTIMONIALS
        array('key' => 'field_c_tab_7', 'label' => '7. Cảm nhận học viên', 'type' => 'tab'),
        array('key' => 'field_course_testi_title', 'label' => 'Tiêu đề Section', 'name' => 'course_testi_title', 'type' => 'text', 'default_value' => 'CHIA SẺ TỪ HÀNH TRÌNH HỌC VIÊN'),
        array(
            'key' => 'field_course_testi_list',
            'label' => 'Danh sách Cảm nhận',
            'name' => 'course_testi_list',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => array(
                array('key' => 'field_tes_name', 'label' => 'Tên Học viên', 'name' => 'name', 'type' => 'text'),
                array('key' => 'field_tes_role', 'label' => 'Vai trò/Khóa', 'name' => 'role', 'type' => 'text'),
                array('key' => 'field_tes_content', 'label' => 'Nội dung chia sẻ', 'name' => 'content', 'type' => 'textarea'),
                array('key' => 'field_tes_img', 'label' => 'Ảnh đại diện', 'name' => 'image', 'type' => 'image', 'return_format' => 'url'),
            )
        ),

        // TAB 8: REGISTER FORM
        array('key' => 'field_c_tab_8', 'label' => '8. Form Đăng ký', 'type' => 'tab'),
        array('key' => 'field_course_reg_title', 'label' => 'Tiêu đề Form', 'name' => 'course_reg_title', 'type' => 'text', 'default_value' => 'GHI DANH HÔM NAY'),
        array('key' => 'field_course_reg_sub', 'label' => 'Sub Tiêu đề', 'name' => 'course_reg_sub', 'type' => 'text', 'default_value' => 'NHẬN ƯU ĐÃI LÊN ĐẾN 30% HỌC PHÍ'),

	),
	'location' => array(
		array(
			array('param' => 'page_template', 'operator' => '==', 'value' => 'page-khoa-hoc-duong-sinh.php'),
		),
	),
));


// ==========================================
// 7. TRANG CHI TIẾT SẢN PHẨM (GENERIC)
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_product_detail_page',
	'title' => 'Cài đặt Chi Tiết Sản Phẩm',
	'fields' => array(
        // Tab 1: Hero
		array(
			'key' => 'field_pd_hero_tab',
			'label' => '1. Hero Header',
			'type' => 'tab',
		),
		array(
			'key' => 'field_pd_hero_img',
			'label' => 'Ảnh nền Hero',
			'name' => 'pd_hero_img',
			'type' => 'image',
			'return_format' => 'url',
		),
        array(
			'key' => 'field_pd_hero_title',
			'label' => 'Tiêu đề Hero (H1)',
			'name' => 'pd_hero_title',
			'type' => 'textarea',
			'rows' => 2,
		),
        array(
			'key' => 'field_pd_hero_sub',
			'label' => 'Mô tả phụ Hero',
			'name' => 'pd_hero_sub',
			'type' => 'textarea',
			'rows' => 2,
		),

        // Tab 2: Content
        array(
			'key' => 'field_pd_content_tab',
			'label' => '2. Nội dung bài viết',
			'type' => 'tab',
		),
        array(
			'key' => 'field_pd_main_content',
			'label' => 'Nội dung chính',
			'name' => 'pd_main_content',
			'type' => 'wysiwyg',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
		),

        // Tab 3: Action
        array(
			'key' => 'field_pd_action_tab',
			'label' => '3. Hành động (CTA)',
			'type' => 'tab',
		),
        array(
			'key' => 'field_pd_price',
			'label' => 'Giá sản phẩm',
			'name' => 'pd_price',
			'type' => 'text',
		),
        array(
			'key' => 'field_pd_cta_link',
			'label' => 'Link mua hàng (Shopee/Zalo)',
			'name' => 'pd_cta_link',
			'type' => 'text',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-product-detail.php',
			),
		),
	),
));

// ==========================================
// 8. TRANG LIÊN HỆ
// ==========================================
acf_add_local_field_group(array(
	'key' => 'group_contact_page',
	'title' => 'Cài đặt Trang Liên Hệ',
	'fields' => array(
        // Tab 1: Hero
		array(
			'key' => 'field_contact_hero_tab',
			'label' => '1. Hero Header',
			'type' => 'tab',
		),
		array(
			'key' => 'field_contact_hero_bg',
			'label' => 'Ảnh nền Hero',
			'name' => 'contact_hero_bg',
			'type' => 'image',
			'return_format' => 'url',
		),
        array(
			'key' => 'field_contact_hero_badge',
			'label' => 'Badge nhỏ (trên tiêu đề)',
			'name' => 'contact_hero_badge',
			'type' => 'text',
			'default_value' => 'Metta Đông Y Spa',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_hero_title',
			'label' => 'Tiêu đề Hero',
			'name' => 'contact_hero_title',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_hero_desc',
			'label' => 'Mô tả Hero',
			'name' => 'contact_hero_desc',
			'type' => 'textarea',
			'rows' => 2,
			'default_value' => 'Nơi tái tạo năng lượng và cân bằng cuộc sống. Hãy để chúng tôi chăm sóc bạn.',
		),
        array(
			'key' => 'field_contact_hero_title_en',
			'label' => 'Tiêu đề Hero (EN)',
			'name' => 'contact_hero_title_en',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_hero_desc_en',
			'label' => 'Mô tả Hero (EN)',
			'name' => 'contact_hero_desc_en',
			'type' => 'textarea',
			'rows' => 2,
		),
        array(
			'key' => 'field_contact_hero_title_zh',
			'label' => 'Tiêu đề Hero (ZH)',
			'name' => 'contact_hero_title_zh',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_hero_desc_zh',
			'label' => 'Mô tả Hero (ZH)',
			'name' => 'contact_hero_desc_zh',
			'type' => 'textarea',
			'rows' => 2,
		),

        // Tab 2: Thông tin liên hệ (Info Cards)
        array(
			'key' => 'field_contact_info_tab',
			'label' => '2. Thông tin liên hệ',
			'type' => 'tab',
		),
        array(
			'key' => 'field_contact_hotline_1',
			'label' => 'Hotline 1',
			'name' => 'contact_hotline_1',
			'type' => 'text',
			'default_value' => '0911 535 339',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_hotline_2',
			'label' => 'Hotline 2',
			'name' => 'contact_hotline_2',
			'type' => 'text',
			'default_value' => '0938 431 234',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_email',
			'label' => 'Email liên hệ',
			'name' => 'contact_email',
			'type' => 'text',
			'default_value' => 'mettaspadongy@gmail.com',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_address',
			'label' => 'Địa chỉ cơ sở chính',
			'name' => 'contact_address',
			'type' => 'text',
			'default_value' => '378 Tên Lửa, Bình Tân, TP.HCM',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_hours',
			'label' => 'Giờ mở cửa',
			'name' => 'contact_hours',
			'type' => 'text',
			'default_value' => '08:00 – 21:00',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_hours_note',
			'label' => 'Ghi chú giờ mở cửa',
			'name' => 'contact_hours_note',
			'type' => 'text',
			'default_value' => 'Tất cả các ngày',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_facebook_url',
			'label' => 'Link Facebook',
			'name' => 'contact_facebook_url',
			'type' => 'url',
			'default_value' => 'https://www.facebook.com/mettaspadongy',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_facebook_label',
			'label' => 'Tên hiển thị Facebook',
			'name' => 'contact_facebook_label',
			'type' => 'text',
			'default_value' => 'Facebook Metta',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_map_url',
			'label' => 'Google Map Embed URL',
			'name' => 'contact_map_url',
			'type' => 'url',
			'instructions' => 'Dán URL embed từ Google Maps (bắt đầu bằng https://www.google.com/maps/embed...)',
		),
        array(
			'key' => 'field_contact_social_title',
			'label' => 'Tiêu đề mục mạng xã hội',
			'name' => 'contact_social_title',
			'type' => 'text',
			'default_value' => 'Kết nối với chúng tôi',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_zalo_url',
			'label' => 'Link Zalo',
			'name' => 'contact_zalo_url',
			'type' => 'url',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_instagram_url',
			'label' => 'Link Instagram',
			'name' => 'contact_instagram_url',
			'type' => 'url',
			'wrapper' => array('width' => '33'),
		),
        array(
			'key' => 'field_contact_youtube_url',
			'label' => 'Link YouTube',
			'name' => 'contact_youtube_url',
			'type' => 'url',
			'wrapper' => array('width' => '33'),
		),

        // Tab 3: Form Section
        array(
			'key' => 'field_contact_form_tab',
			'label' => '3. Phần Form Liên Hệ',
			'type' => 'tab',
		),
        array(
			'key' => 'field_contact_side_img',
			'label' => 'Ảnh bên cạnh Form',
			'name' => 'contact_side_img',
			'type' => 'image',
			'return_format' => 'url',
		),
        array(
			'key' => 'field_contact_form_label',
			'label' => 'Nhãn nhỏ trên tiêu đề Form',
			'name' => 'contact_form_label',
			'type' => 'text',
			'default_value' => 'Đặt lịch ngay',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_form_title',
			'label' => 'Tiêu đề Form',
			'name' => 'contact_form_title',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_form_title_en',
			'label' => 'Tiêu đề Form (EN)',
			'name' => 'contact_form_title_en',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_form_title_zh',
			'label' => 'Tiêu đề Form (ZH)',
			'name' => 'contact_form_title_zh',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_form_desc',
			'label' => 'Mô tả Form',
			'name' => 'contact_form_desc',
			'type' => 'textarea',
			'rows' => 3,
		),
        array(
			'key' => 'field_contact_form_desc_en',
			'label' => 'Mô tả Form (EN)',
			'name' => 'contact_form_desc_en',
			'type' => 'textarea',
			'rows' => 3,
		),
        array(
			'key' => 'field_contact_form_desc_zh',
			'label' => 'Mô tả Form (ZH)',
			'name' => 'contact_form_desc_zh',
			'type' => 'textarea',
			'rows' => 3,
		),

        // Tab 4: Branch Section
        array(
			'key' => 'field_contact_branch_tab',
			'label' => '4. Phần Chi Nhánh',
			'type' => 'tab',
		),
        array(
			'key' => 'field_contact_branch_label',
			'label' => 'Nhãn nhỏ trên tiêu đề',
			'name' => 'contact_branch_label',
			'type' => 'text',
			'default_value' => 'Hệ thống chuỗi spa',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_branch_title',
			'label' => 'Tiêu đề section chi nhánh',
			'name' => 'contact_branch_title',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_branch_title_en',
			'label' => 'Tiêu đề section chi nhánh (EN)',
			'name' => 'contact_branch_title_en',
			'type' => 'text',
		),
        array(
			'key' => 'field_contact_branch_title_zh',
			'label' => 'Tiêu đề section chi nhánh (ZH)',
			'name' => 'contact_branch_title_zh',
			'type' => 'text',
		),

        // Tab 5: CTA Section
        array(
			'key' => 'field_contact_cta_tab',
			'label' => '5. Phần CTA (Kêu gọi hành động)',
			'type' => 'tab',
		),
        array(
			'key' => 'field_contact_cta_label',
			'label' => 'Nhãn nhỏ CTA',
			'name' => 'contact_cta_label',
			'type' => 'text',
			'default_value' => 'Metta Đông Y Spa',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_cta_title',
			'label' => 'Tiêu đề CTA',
			'name' => 'contact_cta_title',
			'type' => 'text',
			'default_value' => 'Để Chúng Tôi Phục Vụ Bạn',
		),
        array(
			'key' => 'field_contact_cta_desc',
			'label' => 'Mô tả CTA',
			'name' => 'contact_cta_desc',
			'type' => 'textarea',
			'rows' => 2,
			'default_value' => 'Trải nghiệm liệu pháp dưỡng sinh Đông Y truyền thống – nơi thân và tâm được chăm sóc toàn diện.',
		),
        array(
			'key' => 'field_contact_cta_btn1_text',
			'label' => 'Nút 1: Text',
			'name' => 'contact_cta_btn1_text',
			'type' => 'text',
			'default_value' => 'Đặt Lịch Ngay',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_cta_btn1_url',
			'label' => 'Nút 1: Link',
			'name' => 'contact_cta_btn1_url',
			'type' => 'url',
			'default_value' => 'https://datlich.mettaspadongy.vn/',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_cta_btn2_text',
			'label' => 'Nút 2: Text',
			'name' => 'contact_cta_btn2_text',
			'type' => 'text',
			'default_value' => 'Gọi Ngay',
			'wrapper' => array('width' => '50'),
		),
        array(
			'key' => 'field_contact_cta_btn2_url',
			'label' => 'Nút 2: Link (tel: hoặc URL)',
			'name' => 'contact_cta_btn2_url',
			'type' => 'text',
			'default_value' => 'tel:0911535339',
			'wrapper' => array('width' => '50'),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-lien-he.php',
			),
		),
	),
));

endif;
