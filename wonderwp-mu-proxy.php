<?php
/**
 * Plugin Name: WonderWp
 * Plugin URI: https://github.com/wonderwp/wonderwp
 * Description: Activating WonderWp through a must use plugin
 * Version: 1.0.0
 * Author: WonderWp
 * Author URI: http://wonderwp.net
 * License: MIT License
 */

$wonderwpMuPlugins = apply_filters('wonderwp.mu.plugins',[
    __DIR__."/autoload-wwp/autoload-wwp.php",
    __DIR__."/generator-wwp/generator-wwp.php"
]);

if(!empty($wonderwpMuPlugins)){
    foreach($wonderwpMuPlugins as $wonderwpMuPlugin){
        if(file_exists($wonderwpMuPlugin)){
            include_once $wonderwpMuPlugin;
        }
    }
}
