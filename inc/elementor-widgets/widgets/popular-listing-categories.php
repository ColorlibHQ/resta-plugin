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
 * Resta elementor Resta categories section widget.
 *
 * @since 1.0
 */
class Resta_Listing_Categories extends Widget_Base {

	public function get_name() {
		return 'resta-listing-categories';
	}

	public function get_title() {
		return __( 'Popular Listing Cat.', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  Resta categories content ------------------------------
		$this->start_controls_section(
			'resta_content',
			[
				'label' => __( 'Popular Listing Cat. content', 'resta-companion' ),
			]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => esc_html__( 'Sub Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Discover', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Most Popular Categories', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'selected_cats',
            [
                'label' => esc_html__( 'Select Categories To Show', 'resta-companion' ),
                'type' => Controls_Manager::SELECT2,
                'label_block' => true,
                'multiple' => true,
                // 'options'   => resta_get_taxonomies(),
                // 'options'   => [
                //     '1' => 'eita',
                //     '2' => 'oita'
                // ],
            ]
        );
		$this->add_control(
			'cat_order',
			[
				'label'         => esc_html__( 'Category Order', 'resta-companion' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'DESC',
				'label_off'     => 'ASC',
                'default'       => 'yes',
			]
		);
		$this->add_control(
			'cat_item',
			[
				'label'         => esc_html__( 'Item To Show', 'resta-companion' ),
				'type'          => Controls_Manager::NUMBER,
				'default'      => 8,
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
    $sub_title = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $selected_cats = !empty( $settings['selected_cats'] ) ? $settings['selected_cats'] : '';
    $cat_order = !empty( $settings['cat_order'] ) ? $settings['cat_order'] : '';
    $cat_item = !empty( $settings['cat_item'] ) ? $settings['cat_item'] : '';
    // $post_order = $settings['post_order'] == 'yes' ? 'DESC' : 'ASC';
    // $post_item = !empty( $settings['post_item'] ) ? $settings['post_item'] : '';
    // resta_related_items('', $post_item, $post_order);
    ?>

    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        <?php
                            if ( $sub_title ) {
                                echo '<p>'.esc_html( $sub_title ).'</p>';
                            }
                            if ( $sec_title ) {
                                echo '<h3>'.esc_html( $sec_title ).'</h3>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    foreach ( $selected_cats as $cat ) {
                    $category = get_term_by('id', $cat, 'listing_category');
                    ?>
                    <div class="col-xl-3 col-md-4 col-lg-3">
                        <div class="single_catagory">
                            <div class="thumb">
                                <?php
                                    if (function_exists('get_wp_term_image')) {
                                        $cat_image = get_wp_term_image($category->term_id); 
                                        echo '<img src="'.$cat_image.'">';
                                    }  
                                ?>
                            </div>
                            <div class="hover_overlay">
                                <div class="hover_inner">
                                    <a href="<?php echo get_term_link($category->slug, $category->taxonomy)?>"><h4><?php echo $category->name?></h4></a>
                                    <span><?php echo $category->count?> Listings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <?php
    }
}