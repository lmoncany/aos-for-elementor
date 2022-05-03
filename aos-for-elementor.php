<?php
/**
 * Elementor AOS WordPress Plugin
 *
 * @package ElementorAwesomesauce
 *
 * Plugin Name: Animate on Scroll for Elementor
 * Description: Simple Elementor plugin to anable animate on scroll animations (AOS.js)
 * Plugin URI:  https://www.flowragency.com
 * Version:     1.0.0
 * Author:      Loic Moncany
 * Author URI:  https://www.flowragency.com
 * Text Domain: elementor-aos
 */

define( 'ELEMENTOR_AOS', __FILE__ );

/**
 * Include the Elementor_Awesomesauce class.
 */
require plugin_dir_path( ELEMENTOR_AOS ) . 'class-elementor-aos.php';
