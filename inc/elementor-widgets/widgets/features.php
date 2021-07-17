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
 * Resta elementor features section widget.
 *
 * @since 1.0
 */
class Resta_Features extends Widget_Base {

	public function get_name() {
		return 'resta-features';
	}

	public function get_title() {
		return __( 'Features', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  features content ------------------------------
		$this->start_controls_section(
			'features_content',
			[
				'label' => __( 'Features content', 'resta-companion' ),
			]
        );

		$this->add_control(
            'features', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => __( 'Image', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default'     => __( 'Transportation', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Short Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default'     => __( 'Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture placing drawing.', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [ 
                        'item_title'    => __( 'Transporation', 'resta-companion' ),
                        'item_text'   => __( 'Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture placing drawing.', 'resta-companion' ),
                    ],
                    [ 
                        'item_title'    => __( 'Live Monitoring', 'resta-companion' ),
                        'item_text'   => __( 'Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture placing drawing.', 'resta-companion' ),
                    ],
                    [ 
                        'item_title'    => __( 'Worldwide Service', 'resta-companion' ),
                        'item_text'   => __( 'Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture placing drawing.', 'resta-companion' ),
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End features content

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
    $features  = !empty( $settings['features'] ) ? $settings['features'] : '';
    ?>

    <div class="transportaion_area">
        <div class="container">
            <div class="row">
                <?php 
                if( is_array( $features ) && count( $features ) > 0 ) {
                    foreach( $features as $item ) {
                        $item_title = ( !empty( $item['item_title'] ) ) ? $item['item_title'] : '';
                        $item_img = !empty( $item['item_img']['id'] ) ? wp_get_attachment_image( $item['item_img']['id'], 'resta_transport_thumb_62x50', '', array( 'alt' => $item_title ) ) : '';
                        $item_text = ( !empty( $item['item_text'] ) ) ? $item['item_text'] : '';
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single_transport">
                                <?php 
                                    if ( $item_img ) { 
                                        echo '
                                        <div class="icon">
                                            '.$item_img.'
                                        </div>  
                                        ';
                                    }
                                    if ( $item_title ) { 
                                        echo '<h3>'.esc_html( $item_title ).'</h3>';
                                    }
                                    if ( $item_text ) { 
                                        echo '<p>'.wp_kses_post( $item_text ).'</p>';
                                    }
                                ?>
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