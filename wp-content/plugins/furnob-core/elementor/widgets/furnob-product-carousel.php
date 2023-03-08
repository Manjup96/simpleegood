<?php

namespace Elementor;

class Furnob_Product_Carousel_Widget extends Widget_Base {
    use Furnob_Helper;

    public function get_name() {
        return 'furnob-product-carousel';
    }
    public function get_title() {
        return 'Product Carousel (K)';
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'furnob' ];
    }

	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'furnob-core' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control( 'auto_play',
			[
				'label' => esc_html__( 'Auto Play', 'furnob-core' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'furnob-core' ),
				'label_off' => esc_html__( 'False', 'furnob-core' ),
				'return_value' => 'true',
				'default' => 'false',
			]
		);
		
        $this->add_control( 'auto_speed',
            [
                'label' => esc_html__( 'Auto Speed', 'chakta' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '1600',
                'pleaceholder' => esc_html__( 'Set auto speed.', 'chakta' ),
				'condition' => ['auto_play' => 'true']
            ]
        );
		
		$this->add_control( 'arrows',
			[
				'label' => esc_html__( 'Arrows', 'furnob-core' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'furnob-core' ),
				'label_off' => esc_html__( 'False', 'furnob-core' ),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control( 'dots',
			[
				'label' => esc_html__( 'Dots', 'furnob-core' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'True', 'furnob-core' ),
				'label_off' => esc_html__( 'False', 'furnob-core' ),
				'return_value' => 'true',
				'default' => 'true',
			]
		);
		
        $this->add_control( 'slide_speed',
            [
                'label' => esc_html__( 'Slide Speed', 'furnob-core' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => '600',
                'pleaceholder' => esc_html__( 'Set slide speed.', 'furnob-core' ),
            ]
        );
		
		$this->end_controls_section();
		/*****   END CONTROLS SECTION   ******/
		
		/***** START QUERY CONTROLS SECTION *****/
		$this->furnob_query_elementor_controls($post_count = 8, $column = 4);
		/***** END QUERY CONTROLS SECTION *****/

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$output = '';
		
		$output .= '<div class="site-module module-products">';
		$output .= '<div class="module-body">';
		$output .= '<div class="site-slider carousel owl-carousel products" data-desktop="'.esc_attr($settings['column']).'" data-tablet="3" data-mobile="'.esc_attr($settings['mobile_column']).'" data-speed="'.esc_attr($settings['slide_speed']).'" data-loop="true" data-gutter="30" data-dots="'.esc_attr($settings['dots']).'" data-nav="'.esc_attr($settings['arrows']).'" data-autoplay="'.esc_attr($settings['auto_play']).'" data-autospeed="'.esc_attr($settings['auto_speed']).'" data-autostop="true">';
					
		$output .= $this->furnob_elementor_product_loop($settings);

		$output .= '</div><!-- owl-carousel -->';
		$output .= '</div><!-- module-body -->';
		$output .= '</div><!-- site-module -->';


		echo $output;
	}

}
