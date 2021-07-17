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
 * Resta elementor app section widget.
 *
 * @since 1.0
 */
class Resta_App_Section extends Widget_Base {

	public function get_name() {
		return 'resta-app-section';
	}

	public function get_title() {
		return __( 'App Section', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  App Section content ------------------------------
        $this->start_controls_section(
            'apps_content',
            [
                'label' => __( 'App Section Settings', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'sec_img',
            [
                'label' => esc_html__( 'Section Image', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 1920x456', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Get start from now <br> and increase productivity',
            ]
        );
        $this->add_control(
            'ios_url',
            [
                'label' => esc_html__( 'IOS App URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url' => '#'
                ],
            ]
        );
        $this->add_control(
            'android_url',
            [
                'label' => esc_html__( 'Android App URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url' => '#'
                ],
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

    public function resta_left_contents( $sec_title, $sec_text, $btn_label, $btn_url, $style_type ) {
        $dynamic_class = ( $style_type == 'style_1' ) ? 'features_info2' : 'features_info';
        $col_class = ( $style_type == 'style_1' ) ? 'col-xl-5 col-lg-5 col-md-6' : 'col-xl-6 col-lg-6 col-md-6';
        ?>
        <div class="<?=esc_attr($col_class)?>">
            <div class="<?=esc_attr($dynamic_class)?>">
                <?php 
                    if ( $sec_title ) { 
                        echo '<h3>'.wp_kses_post( nl2br($sec_title) ).'</h3>';
                    }
                    if ( $sec_text ) { 
                        echo wpautop( $sec_text );
                    }
                    if ( $btn_label ) { 
                        echo '<div class="about_btn">';
                            echo '<a class="boxed-btn4" href="'.esc_url( $btn_url ).'">'.esc_html( $btn_label ).'</a>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <?php
    }


    public function resta_right_contents( $sec_img, $style_type ) {
        $dynamic_class = ( $style_type == 'style_1' ) ? 'about_draw fadeInUp' : 'about_image fadeInLeft';
        ?>
        <div class="col-xl-5 col-lg-5 offset-xl-1 offset-lg-1 col-md-6 ">
            <div class="<?=esc_attr($dynamic_class)?> wow" data-wow-duration=".7s" data-wow-delay=".5s">
                <?php 
                    if ( $sec_img ) { 
                        echo $sec_img;
                    }
                ?>
            </div>
        </div>
        <?php
    }


	protected function render() {
    $settings   = $this->get_settings();  
    $sec_img    = !empty( $settings['sec_img']['url'] ) ? $settings['sec_img']['url'] : '';
    $sec_title   = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $ios_url    = !empty( $settings['ios_url']['url'] ) ? $settings['ios_url']['url'] : '';
    $android_url    = !empty( $settings['android_url']['url'] ) ? $settings['android_url']['url'] : '';
    $ios_app_path = RESTA_DIR_ICON_IMG_URI . 'ios-app.svg';
    $android_app_path = RESTA_DIR_ICON_IMG_URI . 'android-app.svg';
    ?>
    
    <!-- productivity_area  -->
    <div class="productivity_area" <?php echo resta_inline_bg_img( esc_url( $sec_img ) ); ?>>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <?php 
                        if ( $sec_title ) { 
                            echo '<h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">'.wp_kses_post( nl2br($sec_title) ).'</h3>';
                        }
                    ?>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="app_download wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                        <?php 
                            if ( $ios_url ) { 
                                echo '<a href="'.esc_url( $ios_url ).'" ><img src="'.esc_url( $ios_app_path ).'" alt="ios app"></a>';
                            }
                            if ( $android_url ) { 
                                echo '<a href="'.esc_url( $android_url ).'" ><img src="'.esc_url( $android_app_path ).'" alt="android app"></a>';
                            }
                        ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ productivity_area  -->

    <?php
    }
}