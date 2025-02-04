<?php
/*
Plugin Name:  Autoload Wonderwp
Plugin URI:   http://wonderwp.com/autoload
Description:  Wonderwp Autoload mechanism
Version:      1.0.0
Author:       Wonderful
Author URI:   http://digital.wonderful.fr
License:      MIT License
*/

//Try to load composer autoload
$composerAutoLoaderFile = ABSPATH.'/vendor/autoload.php';
if(file_exists($composerAutoLoaderFile)){
    $loader = include_once($composerAutoLoaderFile);
}

// Parse loaded bundles to init them
$wonderwpDir = ABSPATH . '/vendor/wonderwp';
if (!is_dir($wonderwpDir) && defined('ROOT_DIR')) {
    $wonderwpDir = ROOT_DIR . '/vendor/wonderwp';
}

if (is_dir($wonderwpDir)) {
    $bundles = scandir($wonderwpDir);
    foreach ($bundles as $bundle) {
        if ($bundle !== '.' && $bundle !== '..' && is_dir($wonderwpDir . '/' . $bundle)) {
            $initFile = $wonderwpDir . '/' . $bundle . '/init.php';
            if (file_exists($initFile)) {
                include_once($initFile);
            }
        }
    }
}

// Then load the WonderWp loader
\WonderWp\Bundle\Loader::getInstance();
