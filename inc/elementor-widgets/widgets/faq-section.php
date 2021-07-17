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
 * Resta elementor faq section section widget.
 *
 * @since 1.0
 */
class Resta_Faq_Section extends Widget_Base {

	public function get_name() {
		return 'resta-faq-section';
	}

	public function get_title() {
		return __( 'Faq Section', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Faq content ------------------------------
		$this->start_controls_section(
			'faq_contents',
			[
				'label' => __( 'Faq content', 'resta-companion' ),
			]
        );

        $this->add_control(
            'sec_img',
            [
                'label' => esc_html__( 'Faq Image', 'resta-companion' ),
                'description' => esc_html__( 'Best size is 490x480', 'resta-companion' ),
                'type' => Controls_Manager::MEDIA,
                'label_block' => true,
                'default'     => [
                    'url'   => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->add_control(
            'faq_settings_seperator',
            [
                'label' => esc_html__( 'Faq Items', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );

        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Faq Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Frequently ask', 'resta-companion' )
            ]
        );
		$this->add_control(
            'faq_items', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ faq_title }}}',
                'fields' => [
                    [
                        'name' => 'faq_title',
                        'label' => __( 'Faq Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Adieus who direct esteem It esteems luckily?', 'resta-companion' ),
                    ],
                    [
                        'name' => 'faq_text',
                        'label' => __( 'Faq Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'faq_title' => 'Adieus who direct esteem It esteems luckily?',
                        'faq_text'  => 'Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.',
                    ],
                    [      
                        'faq_title' => 'Who direct esteem It esteems?',
                        'faq_text'  => 'Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.',
                    ],
                    [      
                        'faq_title' => 'Duis consectetur feugiat auctor?',
                        'faq_text'  => 'Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.',
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
            'sec_title_col', [
                'label' => __( 'Section Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_area .accordion_heading h3' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'inner_styles_seperator',
            [
                'label' => esc_html__( 'Inner Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'item_icon_col', [
                'label' => __( 'Item Icon Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_area #accordion .card h5 button i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'item_title_col', [
                'label' => __( 'Item Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_area #accordion .card h5 button' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'item_text_col', [
                'label' => __( 'Item Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq_area #accordion .card .card-body' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}
    
	protected function render() {
    $settings  = $this->get_settings();
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $sec_img = !empty( $settings['sec_img']['id'] ) ? wp_get_attachment_image( $settings['sec_img']['id'], 'resta_accordion_thumb_490x480', '', array( 'alt' => $sec_title ) ) : '';
    $faq_items = !empty( $settings['faq_items'] ) ? $settings['faq_items'] : '';
    ?>
    
    <!-- accordion  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <?php 
                        if ( $sec_img ) { 
                            echo "
                            <div class='accordion_thumb'>
                                {$sec_img}
                            </div>
                            ";
                        }
                    ?>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <?php 
                            if ( $sec_title ) { 
                                echo "<h3>{$sec_title}</h3>";
                            }
                        ?>

                        <div id="accordion">
                            <?php 
                            if( is_array( $faq_items ) && count( $faq_items ) > 0 ) {
                                foreach( $faq_items as $item ) {
                                    $faq_id    = ( !empty( $item['_id'] ) ) ? esc_attr($item['_id']) : '';
                                    $faq_title = ( !empty( $item['faq_title'] ) ) ? wp_kses_post( nl2br($item['faq_title']) ) : '';
                                    $faq_text  = ( !empty( $item['faq_text'] ) ) ? wp_kses_post( nl2br($item['faq_text']) ) : '';
                                    ?>
                                    <div class="card">
                                        <div class="card-header" id="heading<?=$faq_id?>">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapse<?=$faq_id?>" aria-expanded="false" aria-controls="collapse<?=$faq_id?>">

                                                    <?=$faq_title?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapse<?=$faq_id?>" class="collapse" aria-labelledby="heading<?=$faq_id?>" data-parent="#accordion">
                                            <div class="card-body"><?=$faq_text?></div>
                                        </div>
                                    </div>
                                    <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq_area_end -->
    <?php
    }
}