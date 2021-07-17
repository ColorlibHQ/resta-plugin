<?php
namespace Restaelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Resta elementor download app section widget.
 *
 * @since 1.0
 */
class Resta_Download_App extends Widget_Base {

	public function get_name() {
		return 'resta-download-app';
	}

	public function get_title() {
		return __( 'Download App', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Download App content ------------------------------
		$this->start_controls_section(
			'download_app_content',
			[
				'label' => __( 'Download App content', 'resta-companion' ),
			]
        );
        $this->add_control(
            'sec_img',
            [
                'label' => esc_html__( 'Big Image', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 457x480', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'left_img',
            [
                'label' => esc_html__( 'Left Small Image', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 195x220', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'bottom_img',
            [
                'label' => esc_html__( 'Bottom Small Image', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 195x220', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->add_control(
            'right_sections_separator',
            [
                'label' => esc_html__( 'Right Sections', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Download app to get resta from Everywhere', 'resta-companion' ),
            ]
        );

        $this->add_control(
            'apple_sections_separator',
            [
                'label' => esc_html__( 'Apple Sections', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'apple_big_text',
            [
                'label' => esc_html__( 'Big Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Available', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'apple_small_text',
            [
                'label' => esc_html__( 'Small Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'on App Store', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'apple_url',
            [
                'label' => esc_html__( 'Apple Store URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url' => '#'
                ]
            ]
        );

        $this->add_control(
            'playstore_sections_separator',
            [
                'label' => esc_html__( 'Play Store Sections', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'playstore_big_text',
            [
                'label' => esc_html__( 'Big Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Download', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'playstore_small_text',
            [
                'label' => esc_html__( 'Small Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'from Play Store', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'playstore_url',
            [
                'label' => esc_html__( 'Play Store URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url' => '#'
                ]
            ]
        );
		$this->end_controls_section(); // End service content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'resta-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'big_title_col', [
                'label' => __( 'Section Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .doctors_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_name_col', [
                'label' => __( 'Member Name Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'member_desig_color', [
                'label' => __( 'Member Designation Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_item_bg_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Bg Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'member_bg_color', [
                'label' => __( 'Bg Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'hover_member_bg_color', [
                'label' => __( 'Item Hover Bg Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .expert_doctors_area .single_expert:hover .experts_name' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
    $settings  = $this->get_settings();
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sec_img = !empty( $settings['sec_img']['id'] ) ? wp_get_attachment_image( $settings['sec_img']['id'], 'resta_video_big_thumb_457x480', '', array( 'alt' => $sec_title ) ) : '';
    $left_img = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'resta_download_app_small_thumb_195x220', '', array( 'alt' => $sec_title ) ) : '';
    $bottom_img = !empty( $settings['bottom_img']['id'] ) ? wp_get_attachment_image( $settings['bottom_img']['id'], 'resta_download_app_small_thumb_195x220', '', array( 'alt' => $sec_title ) ) : '';
    $apple_big_text = !empty( $settings['apple_big_text'] ) ? $settings['apple_big_text'] : '';
    $apple_small_text = !empty( $settings['apple_small_text'] ) ? $settings['apple_small_text'] : '';
    $apple_url = !empty( $settings['apple_url']['url'] ) ? $settings['apple_url']['url'] : '';
    $playstore_big_text = !empty( $settings['playstore_big_text'] ) ? $settings['playstore_big_text'] : '';
    $playstore_small_text = !empty( $settings['playstore_small_text'] ) ? $settings['playstore_small_text'] : '';
    $playstore_url = !empty( $settings['playstore_url']['url'] ) ? $settings['playstore_url']['url'] : '';

    ?>

    <!-- download_app_area -->
    <div class="download_app_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="download_thumb">
                        <?php 
                            if ( $sec_img ) { 
                                echo '
                                    <div class="big_img">
                                        '.$sec_img.'
                                    </div>
                                ';
                            }
                            if ( $left_img ) { 
                                echo '
                                    <div class="small_01">
                                        '.$left_img.'
                                    </div>
                                ';
                            }
                            if ( $bottom_img ) { 
                                echo '
                                    <div class="small_02">
                                        '.$bottom_img.'
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="download_text">
                        <?php 
                            if ( $sec_title ) { 
                                echo '<h3>'.wp_kses_post($sec_title).'</h3>';
                            }
                            if ( $apple_url || $playstore_url ) { 
                                echo '<div class="download_android_apple">';
                                if ( $apple_url ) {
                                    echo '<a class="active" href="'.esc_url( $apple_url ).'">
                                    <div class="download_link d-flex">
                                        <i class="fa fa-apple"></i>
                                        <div class="store">
                                        <h5>'.esc_html( $apple_big_text ).'</h5>
                                        <p>'.esc_html( $apple_small_text ).'</p>
                                        </div>
                                    </div>
                                    </a>';
                                }
                                if ( $playstore_url ) {
                                    echo '<a href="'.esc_url( $playstore_url ).'">
                                    <div class="download_link d-flex">
                                        <i class="fa fa-android"></i>
                                        <div class="store">
                                            <h5>'.esc_html( $playstore_big_text ).'</h5>
                                            <p>'.esc_html( $playstore_small_text ).'</p>
                                        </div>
                                    </div>
                                    </a>';
                                }
                                echo '</div>';
                            }
                        ?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ download_app_area -->
    <?php
    }
}