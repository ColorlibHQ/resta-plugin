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
 * Resta elementor service section widget.
 *
 * @since 1.0
 */
class Resta_Services extends Widget_Base {

	public function get_name() {
		return 'resta-service';
	}

	public function get_title() {
		return __( 'Services', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Services content ------------------------------
		$this->start_controls_section(
			'service_content',
			[
				'label' => __( 'Services content', 'resta-companion' ),
			]
        );

		$this->add_control(
            'services', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_title',
                        'label' => __( 'Item Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Planing', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Item Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_img',
                        'label' => __( 'Item Bg Image', 'resta-companion' ),
                        'description' => __( 'The theme preffered for the Bg Image size 640x570px ', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                    ],
                ],
                'default'   => [
                    [
                        'item_title' => __( 'Planing', 'resta-companion' ),
                        'item_text'  => __( 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet', 'resta-companion' ),
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                    ],
                    [
                        'item_title' => __( 'Architecture', 'resta-companion' ),
                        'item_text'  => __( 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet', 'resta-companion' ),
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                    ],
                    [
                        'item_title' => __( '3D Design', 'resta-companion' ),
                        'item_text'  => __( 'Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet', 'resta-companion' ),
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                    ],
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
    $services = !empty( $settings['services'] ) ? $settings['services'] : '';
    
    ?>

    <!-- prise_area_start  -->
    <div class="prise_area">
        <style>
            <?php
            $counter = 0;
            if( is_array( $services ) && count( $services ) > 0 ){
                foreach ( $services as $service ) {
                    $item_img_url = !empty( $service['item_img']['url'] ) ? $service['item_img']['url'] : '';
                    $counter++;
                    ?>
                        .prise_area .col-xl-4:nth-child(<?php echo $counter?>n) .single_prise::before{background-image:url(<?php echo esc_url($item_img_url)?>);}
                    <?php
                }
            }
            ?>
        </style>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <?php
                $counter = 0;
                if( is_array( $services ) && count( $services ) > 0 ){
                    foreach ( $services as $service ) {
                        $item_title    = !empty( $service['item_title'] ) ? $service['item_title'] : '';
                        $item_text = !empty( $service['item_text'] ) ? $service['item_text'] : '';
                        $counter++;
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="single_prise">
                                <div class="prise_header">
                                    <?php 
                                        if ( $item_title ) { 
                                            echo '<h5>'.esc_html( $item_title ).'</h5>';
                                        }
                                        if ( $item_text ) { 
                                            echo '<p class="prise_text">'.esc_html( $item_text ).'</p>';
                                        }
                                        echo '<div class="prise_number">0'.esc_html( $counter ).'</div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    }
}