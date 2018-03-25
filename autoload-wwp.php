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

\WonderWp\Bundle\Loader::getInstance();
