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
 * Resta elementor Project section widget.
 *
 * @since 1.0
 */
class Resta_Projects extends Widget_Base {

	public function get_name() {
		return 'resta-projects';
	}

	public function get_title() {
		return __( 'Project Section', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Project content ------------------------------
		$this->start_controls_section(
			'project_content',
			[
				'label' => __( 'Project content', 'resta-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => __( 'Section Title', 'resta-companion' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Our Works', 'resta-companion' )
            ]
        );
		$this->add_control(
			'post_order',
			[
				'label'         => esc_html__( 'Project Order', 'resta-companion' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'DESC',
				'label_off'     => 'ASC',
                'default'       => 'yes',
			]
		);
		$this->end_controls_section(); // End right case content

    /**
     * Style Tab
     * ------------------------------ Style Section Heading ------------------------------
     *
     */

        $this->start_controls_section(
            'style_room_section', [
                'label' => __( 'Style Service Section', 'resta-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'style_type' => 'style_1'
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title .sub_heading' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_title_col', [
                'label' => __( 'Section Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title h3' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .lastest_project .section_title .seperator' => 'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'singl_item_styles_seperator',
            [
                'label' => esc_html__( 'Single Project Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'proj_loc_col', [
                'label' => __( 'Project Location Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title .sub_heading2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'proj_title_col', [
                'label' => __( 'Project Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'proj_txt_col', [
                'label' => __( 'Project Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'singl_item_btn_styles_seperator',
            [
                'label' => esc_html__( 'Button Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'btn_line_txt_col', [
                'label' => __( 'Button Border & Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title .boxed-btn' => 'color: {{VALUE}} !important; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_col', [
                'label' => __( 'Button Hover Bg & Border Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title .boxed-btn:hover' => 'background: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_col', [
                'label' => __( 'Button Hover Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .lastest_project .section_title .boxed-btn:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );

        $this->end_controls_section();

		//------------------------------ Services Item Style ------------------------------
		$this->start_controls_section(
			'style_serv_items_sec', [
				'label' => __( 'Style Single Item', 'resta-companion' ),
                'tab' => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'style_type' => 'style_2'
                ],
			]
		);
		$this->add_control(
			'big_titles_color', [
				'label' => __( 'Big Titles Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .project_details .project_details_left .single_details h3, .project_details .projects_details_info .details_info h3' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'texts_color', [
				'label' => __( 'Text Color', 'resta-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .project_details .project_details_left .single_details p' => 'color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();

    }
    

	protected function render() {
    $settings       = $this->get_settings();
    $sec_title  = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $post_order = $settings['post_order'] == 'yes' ? 'DESC' : 'ASC';
    ?>

    <!-- works_area-start  -->
    <div class="works_area">
        <div class="container">
            <?php
                if ( $sec_title ) {
                    echo '
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title mb-70">
                                <h3>'.esc_html( $sec_title ).'</h3>
                            </div>
                        </div>
                    </div>
                    ';
                }

                if( function_exists( 'resta_get_projects' ) ) {
                    resta_get_projects( $post_order );
                }
            ?>
        </div>
    </div>
    <!--/ works_area-end  -->
    <?php
    }   
}