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
 * Resta elementor Countdown section widget.
 *
 * @since 1.0
 */
class Resta_Countdown extends Widget_Base {

	public function get_name() {
		return 'resta-countdown';
	}

	public function get_title() {
		return __( 'Countdown', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-column';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Countdown content ------------------------------
        $this->start_controls_section(
            'countdown_content',
            [
                'label' => __( 'Countdown Settings', 'resta-companion' ),
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
            'counters', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ counter_label }}}',
                'fields' => [
                    [
                        'name' => 'counter_val',
                        'label' => __( 'Counter Value', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '42', 'resta-companion' ),
                    ],
                    [
                        'name' => 'counter_suffix',
                        'label' => __( 'Counter Suffix', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '+', 'resta-companion' ),
                    ],
                    [
                        'name' => 'counter_label',
                        'label' => __( 'Counter Label', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( 'Countries Covered', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'counter_val'    => __( '42', 'resta-companion' ),
                        'counter_suffix' => __( '+', 'resta-companion' ),
                        'counter_label'  => __( 'Countries Covered', 'resta-companion' ),
                    ],
                    [      
                        'counter_val'    => __( '97', 'resta-companion' ),
                        'counter_suffix' => __( '+', 'resta-companion' ),
                        'counter_label'  => __( 'Business Success', 'resta-companion' ),
                    ],
                    [      
                        'counter_val'    => __( '2342', 'resta-companion' ),
                        'counter_label'  => __( 'Happy Client', 'resta-companion' ),
                    ],
                    [      
                        'counter_val'    => __( '3245', 'resta-companion' ),
                        'counter_label'  => __( 'Business Done', 'resta-companion' ),
                    ],
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


	protected function render() {

    // call load widget script
    $this->load_widget_script(); 

    $settings = $this->get_settings();      
    $bg_img   = !empty( $settings['bg_img']['url'] ) ? $settings['bg_img']['url'] : '';
    $counters = !empty( $settings['counters'] ) ? $settings['counters'] : '';
    ?>

    <!-- counter_area  -->
    <div class="counter_area">
        <div class="container">
            <div class="offcan_bg" <?php echo resta_inline_bg_img( esc_url( $bg_img ) ); ?>>
                <div class="row">
                    <?php 
                    if( is_array( $counters ) && count( $counters ) > 0 ) {
                        foreach( $counters as $item ) {
                            $counter_val = ( !empty( $item['counter_val'] ) ) ? $item['counter_val'] : '';
                            $counter_suffix = ( !empty( $item['counter_suffix'] ) ) ? '<span>'.$item['counter_suffix'].'</span>' : '';
                            $counter_label = ( !empty( $item['counter_label'] ) ) ? $item['counter_label'] : '';
                            ?>
                            <div class="col-xl-3 col-md-3">
                                <div class="single_counter text-center">
                                    <?php 
                                        if ( $counter_val ) { 
                                            echo '
                                                <h3> <span class="counter">'.esc_html( $counter_val ).'</span> '.wp_kses_post($counter_suffix).' </h3>
                                            ';
                                        }
                                        if ( $counter_label ) { 
                                            echo '
                                                <p>'.esc_html( $counter_label ).'</p>
                                            ';
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
    </div>
    <!-- /counter_area  -->
    <?php
    }
    
    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // counter 
            $('.counter').counterUp({
              delay: 10,
              time: 10000
            });
        })(jQuery);
        </script>
        <?php 
        }
    }	
}