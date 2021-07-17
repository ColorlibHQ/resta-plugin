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
 * Resta elementor Resta video section widget.
 *
 * @since 1.0
 */
class Resta_Recipe_Video extends Widget_Base {

	public function get_name() {
		return 'resta-recipe-video';
	}

	public function get_title() {
		return __( 'Recipe Video', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Recipe video content ------------------------------
		$this->start_controls_section(
			'recipe_video_content',
			[
				'label' => __( 'Recipe Video content', 'resta-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'Recipe videos that never misses any portion', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'sec_text',
            [
                'label' => esc_html__( 'Section Text', 'resta-companion' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default'   => esc_html__( 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women.', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'video_label_1',
            [
                'label' => esc_html__( 'Video Label 1', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Watch Video', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'video_label_2',
            [
                'label' => esc_html__( 'Video Label 2', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'You will love our execution', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'video_url',
            [
                'label' => esc_html__( 'Video URL', 'resta-companion' ),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default'   => [
                    'url' => 'https://www.youtube.com/watch?v=lr6AMBsjxrY'
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
                'description' => esc_html__( 'Best size is 205x230', 'resta-companion' ),
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
                'description' => esc_html__( 'Best size is 205x230', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
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
    $sec_text = !empty( $settings['sec_text'] ) ? $settings['sec_text'] : '';
    $video_label_1 = !empty( $settings['video_label_1'] ) ? $settings['video_label_1'] : '';
    $video_label_2 = !empty( $settings['video_label_2'] ) ? $settings['video_label_2'] : '';
    $video_url = !empty( $settings['video_url']['url'] ) ? $settings['video_url']['url'] : '';
    $sec_img = !empty( $settings['sec_img']['id'] ) ? wp_get_attachment_image( $settings['sec_img']['id'], 'resta_video_big_thumb_457x480', '', array( 'alt' => $sec_title ) ) : '';
    $left_img = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'resta_video_small_thumb_205x230', '', array( 'alt' => $sec_title ) ) : '';
    $bottom_img = !empty( $settings['bottom_img']['id'] ) ? wp_get_attachment_image( $settings['bottom_img']['id'], 'resta_video_small_thumb_205x230', '', array( 'alt' => $sec_title ) ) : '';
    ?>

    <!-- recepie_videos   -->
    <div class="recepie_videoes_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="recepie_info">
                        <?php 
                            if ( $sec_title ) { 
                                echo '<h3>'.esc_html($sec_title).'</h3>';
                            }
                            if ( $sec_text ) { 
                                echo '<p>'.wp_kses_post( $sec_text ).'</p>';
                            }
                        ?>
                    <div class="video_watch d-flex align-items-center">
                        <a class="popup-video" href="<?php echo esc_url( $video_url )?>"> <i class="ti-control-play"></i> </a>
                        <div class="watch_text" >
                            <?php 
                                if ( $video_label_1 ) { 
                                    echo '<h4>'.esc_html($video_label_1).'</h4>';
                                }
                                if ( $video_label_2 ) { 
                                    echo '<p>'.esc_html( $video_label_2 ).'</p>';
                                }
                            ?>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="videos_thumb">
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
                                    <div class="small_thumb">
                                        '.$left_img.'
                                    </div>
                                ';
                            }
                            if ( $bottom_img ) { 
                                echo '
                                    <div class="small_thumb_2">
                                        '.$bottom_img.'
                                    </div>
                                ';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ recepie_videos   -->
    <?php
    }
}