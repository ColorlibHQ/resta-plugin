<?php
namespace Restaelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Resta elementor about section widget.
 *
 * @since 1.0
 */
class Resta_About_Section extends Widget_Base {

	public function get_name() {
		return 'resta-about-us';
	}

	public function get_title() {
		return __( 'About Section', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  About Us content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Us Settings', 'resta-companion' ),
            ]
        );

        $this->add_control(
            'icon_1',
            [
                'label' => esc_html__( 'BG Shape 1', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 199x196', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'icon_2',
            [
                'label' => esc_html__( 'BG Shape 2', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 251x232', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'icon_3',
            [
                'label' => esc_html__( 'BG Shape 3', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 179x203', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'hr',
            [
                'type' => Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => 'Sed ut perspiciatis unde  <br> omnis iste natus',
            ]
        );
        $this->add_control(
            'sec_text',
            [
                'label' => esc_html__( 'Section Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam delectus, marfa eiusmod pinterest.', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'specialtie_sec',
            [
                'label' => esc_html__( 'Specialties', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_control(
            'spec_1_icon',
            [
                'label' => esc_html__( 'Select Specialty 1 Icon', 'resta-companion' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'default'   => 'salad',
                'options'   => resta_themify_icon(),
            ]
        );
        $this->add_control(
            'spec_1_title',
            [
                'label' => esc_html__( 'Specialty 1 Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Fresh Ingredients', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'spec_2_icon',
            [
                'label' => esc_html__( 'Select Specialty 2 Icon', 'resta-companion' ),
                'type' => Controls_Manager::SELECT,
                'label_block' => true,
                'default'   => 'tray',
                'options'   => resta_themify_icon(),
            ]
        );
        $this->add_control(
            'spec_2_title',
            [
                'label' => esc_html__( 'Specialty 2 Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Expert cooker', 'resta-companion' ),
            ]
        );

        $this->add_control(
            'about_imgs_hr',
            [
                'label' => esc_html__( 'Image Section', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );

        $this->add_control(
            'img_1',
            [
                'label' => esc_html__( 'Image 1', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 490x469', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'img_2',
            [
                'label' => esc_html__( 'Image 2', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 351x324', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        
        $this->end_controls_section(); // End left content

        //------------------------------ Style title ------------------------------
        
        // Top Section Styles
        $this->start_controls_section(
            'about_sec_style', [
                'label' => __( 'About Section Styles', 'resta-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_title_col', [
                'label' => __( 'Sec Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_text_col', [
                'label' => __( 'Sec Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'list_circle_col', [
                'label' => __( 'List Item Icon Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info ul li::before' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_txt_col', [
                'label' => __( 'Button Text & Border Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info .boxed-btn3-white-2' => 'color: {{VALUE}} !important; border-color: {{VALUE}}',
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info .boxed-btn3-white-2:hover' => 'background: {{VALUE}} !important; border-color: transparent',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_col', [
                'label' => __( 'Button Hover Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .welcome_resta_area .welcome_resta_info .boxed-btn3-white-2:hover' => 'color: {{VALUE}} !important',
                ],
            ]
        );

        $this->end_controls_section();

    }

	protected function render() {
    $settings   = $this->get_settings();  
    $icon_1    = !empty( $settings['icon_1']['id'] ) ? wp_get_attachment_image( $settings['icon_1']['id'], 'full', '', array( 'alt' => resta_image_alt( $settings['icon_1']['url'] ) ) ) : '';
    $icon_2    = !empty( $settings['icon_2']['id'] ) ? wp_get_attachment_image( $settings['icon_2']['id'], 'full', '', array( 'alt' => resta_image_alt( $settings['icon_2']['url'] ) ) ) : '';
    $icon_3    = !empty( $settings['icon_3']['id'] ) ? wp_get_attachment_image( $settings['icon_3']['id'], 'full', '', array( 'alt' => resta_image_alt( $settings['icon_3']['url'] ) ) ) : '';
    $sec_title  = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sec_text   = !empty( $settings['sec_text'] ) ? $settings['sec_text'] : '';
    $img_1    = !empty( $settings['img_1']['id'] ) ? wp_get_attachment_image( $settings['img_1']['id'], 'resta_about_1_thumb_490x469', '', array( 'alt' => resta_image_alt( $settings['img_1']['url'] ) ) ) : '';
    $img_2    = !empty( $settings['img_2']['id'] ) ? wp_get_attachment_image( $settings['img_2']['id'], 'resta_about_2_thumb_351x324', '', array( 'alt' => resta_image_alt( $settings['img_2']['url'] ) ) ) : '';
    $spec_1_icon   = !empty( $settings['spec_1_icon'] ) ? RESTA_DIR_ICON_IMG_URI . $settings['spec_1_icon'] . '.svg' : '';
    $spec_1_title   = !empty( $settings['spec_1_title'] ) ? $settings['spec_1_title'] : '';
    $spec_2_icon   = !empty( $settings['spec_2_icon'] ) ? RESTA_DIR_ICON_IMG_URI . $settings['spec_2_icon'] . '.svg' : '';
    $spec_2_title   = !empty( $settings['spec_2_title'] ) ? $settings['spec_2_title'] : '';
    ?>
    <!-- about_area_start -->
    <div class="about_area">
        <?php 
            if ( $icon_1 ) { 
                echo '
                    <div class="icon_1 d-none d-md-block">
                        '.$icon_1.'
                    </div>
                ';
            }
            if ( $icon_2 ) { 
                echo '
                    <div class="icon_2 d-none d-md-block">
                        '.$icon_2.'
                    </div>
                ';
            }
            if ( $icon_3 ) { 
                echo '
                    <div class="icon_3 d-none d-md-block">
                        '.$icon_3.'
                    </div>
                ';
            }
        ?>
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_info_wrap">
                        <?php 
                        if ( $sec_title ) { 
                            echo '<h3>'.wp_kses_post($sec_title).'</h3>';
                            echo '<span class="long_dash"></span>';
                        }

                        if ( $sec_text ) { 
                            echo '<p>'.wp_kses_post( $sec_text ).'</p>';
                        }

                        if ( $spec_1_icon || $spec_1_title || $spec_2_icon || $spec_2_title ) { 
                            ?>
                            <ul class="food_list">
                                <?php
                                if ($spec_1_title) {
                                    echo '
                                    <li>
                                        <img src="'.esc_url( $spec_1_icon ).'" alt="speacialty 1 icon">
                                        <span>'.esc_html( $spec_1_title ).'</span>
                                    </li>
                                    ';
                                }
                                if ($spec_2_title) {
                                    echo '
                                    <li>
                                        <img src="'.esc_url( $spec_2_icon ).'" alt="speacialty 2 icon">
                                        <span>'.esc_html( $spec_2_title ).'</span>
                                    </li>
                                    ';
                                }
                                echo '
                            </ul>
                            ';
                        }                            
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <?php 
                            if ( $img_1 ) { 
                                echo '
                                    <div class="img_1">
                                        '.$img_1.'
                                    </div>
                                ';
                            }
                            if ( $img_2 ) { 
                                echo '
                                    <div class="small_img">
                                        '.$img_2.'
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->
    <?php
    }
}