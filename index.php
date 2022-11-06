<?php 
/**
 * Plugin Name:       Wave Cover
 * Plugin URI:        https://smultreonstalle.com/wave-cover
 * Description:       Dynamic block that allows you to add waves to your page.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.9
 * Author:            Kimberlee Dickinson
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       smultronstalle
 */


use function Genesis\CustomBlocks\add_block;

function add_emd_waves_block() {
    
    // One long array with lots defined. 
    add_block(
        'wave-cover', 
        array( 
            'title'    => 'Waves Cover', 
            'category' => 'design', 
            'icon'     => 'admin-customizer', 
            'keywords' => array( 'waves', 'cover', 'background' ), 
            'fields'   => array( 
                'number-of-waves' => array( 
                    'label'   => __( 'Number of Waves', 'smt' ), 
                    'control' => 'number', 
                    'width'   => '50', 
                ), 
                'colors' => array( 
                    'label'   => 'Color of the Waves', 
                    'control' => 'color', 
                    'width'   => '50', 
                ), 
                
            ), 
        ) 
    ); 
}
add_action( 'genesis_custom_blocks_add_blocks', 'add_emd_waves_block');

function waves_block_get_alternate_template_path( $path ) {
    unset( $path );
    return __DIR__;
}

add_filter( 'genesis_custom_blocks_template_path', 'waves_block_get_alternate_template_path' );