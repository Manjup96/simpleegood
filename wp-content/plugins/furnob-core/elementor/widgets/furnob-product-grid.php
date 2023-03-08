<?php

namespace Elementor;

class Furnob_Product_Grid_Widget extends Widget_Base {
    use Furnob_Helper;

    public function get_name() {
        return 'furnob-product-grid';
    }
    public function get_title() {
        return 'Product Grid (K)';
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return [ 'furnob' ];
    }

	protected function register_controls() {
		
		/***** START QUERY CONTROLS SECTION *****/
		$this->furnob_query_elementor_controls($post_count = 8, $column = 4);
		/***** END QUERY CONTROLS SECTION *****/
		
	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		$output = '';
		
		$output .= '<ul class="products spacing grid-views mobile-'.esc_attr($settings['mobile_column']).' column-'.esc_attr($settings['column']).'">';
		
		$output .= $this->furnob_elementor_product_loop($settings);
		
		$output .= '</ul>';



		echo $output;
	}

}
