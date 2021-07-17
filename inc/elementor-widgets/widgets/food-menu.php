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
 * Resta elementor food menu section widget.
 *
 * @since 1.0
 */
class Resta_Food_Menu extends Widget_Base {

	public function get_name() {
		return 'resta-food-menu';
	}

	public function get_title() {
		return __( 'Food Menus', 'resta-companion' );
	}

	public function get_icon() {
		return 'eicon-settings';
	}

	public function get_categories() {
		return [ 'resta-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------  food menu content ------------------------------
		$this->start_controls_section(
			'dinner_content',
			[
				'label' => __( 'Dinner Section', 'resta-companion' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label' => esc_html__( 'Section Title', 'resta-companion' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__( 'Delicious Food For You', 'resta-companion' ),
            ]
        );
        $this->add_control(
            'dinner_separator',
            [
                'label' => esc_html__( 'Dinner Items', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'label_block' => true,
                'separator'   => 'after',
            ]
        );
		$this->add_control(
            'dinner_menu', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => __( 'Item Image', 'resta-companion' ),
                        'description' => __( 'Menu image size should be 166x166', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Item Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '#12. Chicken Chilis', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Item Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_price',
                        'label' => __( 'Item Price', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '$20', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#12. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#10. Fried Rice', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#02. Burger Cury', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#16. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#08. Vegetable fry', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#01. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

        // Brakfast
		$this->start_controls_section(
			'brakfast_content',
			[
				'label' => __( 'Brakfast Section', 'resta-companion' ),
			]
        );
        $this->add_control(
            'brakfast_separator',
            [
                'label' => esc_html__( 'Brakfast Items', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'label_block' => true,
                'separator'   => 'after',
            ]
        );
		$this->add_control(
            'brakfast_menu', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => __( 'Item Image', 'resta-companion' ),
                        'description' => __( 'Menu image size should be 166x166', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Item Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '#12. Chicken Chilis', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Item Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_price',
                        'label' => __( 'Item Price', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '$20', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#12. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#10. Fried Rice', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#02. Burger Cury', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#16. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#08. Vegetable fry', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#01. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                ]
            ]
		);
		$this->end_controls_section(); // End service content

        // Lunch
		$this->start_controls_section(
			'lunch_content',
			[
				'label' => __( 'Lunch Section', 'resta-companion' ),
			]
        );
        $this->add_control(
            'lunch_separator',
            [
                'label' => esc_html__( 'Lunch Items', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'label_block' => true,
                'separator'   => 'after',
            ]
        );
		$this->add_control(
            'lunch_menu', [
                'label' => __( 'Create New', 'resta-companion' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name' => 'item_img',
                        'label' => __( 'Item Image', 'resta-companion' ),
                        'description' => __( 'Menu image size should be 166x166', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Utils::get_placeholder_image_src()
                        ]
                    ],
                    [
                        'name' => 'item_title',
                        'label' => __( 'Item Title', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '#12. Chicken Chilis', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_text',
                        'label' => __( 'Item Text', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXTAREA,
                        'default' => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                    ],
                    [
                        'name' => 'item_price',
                        'label' => __( 'Item Price', 'resta-companion' ),
                        'label_block' => true,
                        'type' => Controls_Manager::TEXT,
                        'default' => __( '$20', 'resta-companion' ),
                    ],
                ],
                'default'   => [
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#12. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#10. Fried Rice', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#02. Burger Cury', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#16. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#08. Vegetable fry', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
                    ],
                    [      
                        'item_img'   => [
                            'url' => Utils::get_placeholder_image_src()
                        ],
                        'item_title' => __( '#01. Chicken Chilis', 'resta-companion' ),
                        'item_text'  => __( 'Craft beer elit seitan exercitation photo booth et 8-bit kale chips.', 'resta-companion' ),
                        'item_price'   => __( '$20', 'resta-companion' ),
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
            'sec_bg_col', [
                'label' => __( 'Section Bg Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'big_title_col', [
                'label' => __( 'Big Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .section_title h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sub_title_col', [
                'label' => __( 'Sub Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .section_title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'single_styles_seperator',
            [
                'label' => esc_html__( 'Single Item Styles', 'resta-companion' ),
                'type' => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );
        $this->add_control(
            'title_col', [
                'label' => __( 'Title Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content h3 a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'title_hover_col', [
                'label' => __( 'Title Hover Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content h3 a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'text_col', [
                'label' => __( 'Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'anchor_text_col', [
                'label' => __( 'Anchor Text Color', 'resta-companion' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_department_area .single_department .department_content a.learn_more' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

    public function resta_get_tablist_menu( $menu_content, $active = '', $name = 'dinner' ) {
        if( is_array( $menu_content ) && count( $menu_content ) > 0 ) {
            echo '
            <li class="nav-item">
                <a class="nav-link'.esc_attr($active=='active'?' active':'').'" id="pills-'.esc_attr($name).'-tab" data-toggle="pill" href="#pills-'.esc_attr($name).'" role="tab" aria-controls="pills-'.esc_attr($name).'" aria-selected="'.esc_attr($active=='active'?'true':'false').'">
                    <div class="single_menu text-center">
                        <div class="icon">
                            <i class="flaticon-'.esc_attr($name=='dinner'?'lunch':($name=='breakfast'?'food':'kitchen')).'"></i>
                        </div>
                        <h4>'.esc_html(ucfirst($name)).'</h4>
                    </div>
                </a>
            </li>
            ';
        }
    }

    public function resta_get_tab_content( $menu_content, $active = '', $name = 'dinner' ) {
        if( is_array( $menu_content ) && count( $menu_content ) > 0 ) {
            echo '
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade'.esc_attr($active=='active'?' show active':'').'" id="pills-'.esc_attr($name).'" role="tabpanel" aria-labelledby="pills-'.esc_attr($name).'-tab">
                    <div class="row">';
                        foreach ( $menu_content as $single ) {
                            $item_img = !empty( $single['item_img']['id'] ) ? wp_get_attachment_image( $single['item_img']['id'], 'resta_menu_thumb_166x166', '', array( 'alt' => resta_image_alt( $single['item_img']['url'] ) ) ) : '';
                            $item_title = !empty( $single['item_title'] ) ? $single['item_title'] : '';
                            $item_text = !empty( $single['item_text'] ) ? $single['item_text'] : '';
                            $item_price = !empty( $single['item_price'] ) ? $single['item_price'] : '';
                        ?>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <?php
                                    if ( $item_img ) {
                                        echo '
                                        <div class="thumb">'.$item_img.'</div>
                                        ';
                                    }
                                ?>

                                <div class="info">
                                    <?php
                                        if ( $item_title ) {
                                            echo '<h3>'.esc_html( $item_title ).'</h3>';
                                        }
                                        if ( $item_text ) {
                                            echo '<p>'.wp_kses_post( $item_text ).'</p>';
                                        }
                                        if ( $item_price ) {
                                            echo '<span>'.esc_html( $item_price ).'</span>';
                                        }
                                    ?>
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


	protected function render() {
    $settings  = $this->get_settings();
    $sec_title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $dinner_menu = !empty( $settings['dinner_menu'] ) ? $settings['dinner_menu'] : '';
    $breakfast_menu = !empty( $settings['brakfast_menu'] ) ? $settings['brakfast_menu'] : '';
    $lunch_menu = !empty( $settings['lunch_menu'] ) ? $settings['lunch_menu'] : '';
    ?>

    <!-- Delicious area start  -->
    <div class="Delicious_area">
        <div class="container">
            <?php 
            if ( $sec_title ) { 
                echo '
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-50">
                            <h3>'.esc_html( $sec_title ).'</h3>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>

            <div class="tablist_menu">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                            <?php 
                                $this->resta_get_tablist_menu( $dinner_menu, 'active', 'dinner' );
                                $this->resta_get_tablist_menu( $breakfast_menu, '', 'breakfast' );
                                $this->resta_get_tablist_menu( $lunch_menu, '', 'lunch' );
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <?php 
                $this->resta_get_tab_content( $dinner_menu, 'active', 'dinner' );
                $this->resta_get_tab_content( $breakfast_menu, '', 'breakfast' );
                $this->resta_get_tab_content( $lunch_menu, '', 'lunch' );
            ?>

        </div>
    </div>
    <?php
    }
}