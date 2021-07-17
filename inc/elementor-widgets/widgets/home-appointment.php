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
 * Resta elementor home appointment section widget.
 *
 * @since 1.0
 */
class Resta_Contact_Project extends Widget_Base {

	public function get_name() {
		return 'contact-for-project-section';
	}

	public function get_title() {
		return __( 'Contact for Project', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-play-o';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Home Appointment Section content ------------------------------
        $this->start_controls_section(
            'home_appointment_content',
            [
                'label' => __( 'Contact for Project Settings', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'bg_img',
            [
                'label' => esc_html__( 'BG Image', 'resta-companion' ),
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
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Let’s discuss for a project', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua.',
            ]
        );
        
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( '+10 672 457 356', 'resta-companion' ),
            ]
        );
        
        $this->add_control(
            'btn_url',
            [
                'label' => esc_html__( 'Button URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'url' => '#'
                ]
            ]
        );

        $this->add_control(
            'form_shortcode',
            [
                'label' => esc_html__( 'Form Shortcode', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
            ]
        );
        
        $this->end_controls_section(); // End about us content

        //------------------------------ Style title ------------------------------
        
        // Home Contact Section Styles
        $this->start_controls_section(
            'home_contact_sec_style', [
                'label' => __( 'Home Contact Section Styles', 'resta-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'sub_title_col', [
				'label' => __( 'Sub title Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .messege_area .section_title .sub_heading' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'sec_title_col', [
				'label' => __( 'Big Title Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .messege_area .section_title h3' => 'color: {{VALUE}};',
					'{{WRAPPER}} .messege_area .section_title .seperator' => 'background: {{VALUE}};',
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
			'btn_border_txt_col', [
				'label' => __( 'Button Border & Text Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .messege_area .messege .boxed-btn' => 'color: {{VALUE}} !important; border-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'btn_hvr_border_bg_col', [
				'label' => __( 'Button Hover Border & Bg Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .messege_area .messege .boxed-btn:hover' => 'background: {{VALUE}}; border-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
			'btn_hvr_txt_col', [
				'label' => __( 'Button Hover Text Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .messege_area .messege .boxed-btn:hover' => 'color: {{VALUE}} !important;;',
				],
			]
        );
        $this->end_controls_section();

	}
    
	protected function render() {
    $settings         = $this->get_settings();
    $bg_img           = !empty( $settings['bg_img']['url'] ) ?  $settings['bg_img']['url'] : '';
    $sec_title        = !empty( $settings['sec_title'] ) ?  $settings['sec_title'] : '';
    $sub_title        = !empty( $settings['sub_title'] ) ?  $settings['sub_title'] : '';
    $btn_text         = !empty( $settings['btn_text'] ) ?  $settings['btn_text'] : '';
    $btn_url          = !empty( $settings['btn_url']['url'] ) ?  $settings['btn_url']['url'] : '';
    $form_shortcode   = !empty( $settings['form_shortcode'] ) ?  $settings['form_shortcode'] : '';
    $inner_page_class = is_front_page() ? 'attending_area' : 'attending_area plus_padding';
    ?>

    <!-- Estimate_area start  -->
    <div class="Estimate_area overlay" <?php echo resta_inline_bg_img( esc_url( $bg_img ) ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="Estimate_info">
                        <?php
                            if ( $sec_title ) { 
                                echo '<h3>'.esc_html( $sec_title ).'</h3>';
                            }
                            if ( $sub_title ) { 
                                echo '<p>'.wp_kses_post( $sub_title ).'</p>';
                            }
                            if ( $btn_text ) { 
                                echo '<a class="boxed-btn3" href="'.esc_url( $btn_url ).'">'.esc_html( $btn_text ).'</a>';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="form">
                        <?php
                            if ( $form_shortcode ) { 
                                echo do_shortcode( $form_shortcode );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Estimate_area end  -->
    <?php

    }
}
