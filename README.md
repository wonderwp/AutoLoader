# WonderWP Autoloader

This mu plugin is there to help you run WonderWP on your WordPress site.

## Installation

The install should be automatic as this mu plugin is a WonderWP composer dependency.

If you want to do a manual install via a composer environment : `composer require wonderwp/autoloader`

you can also download the repo from [github](https://github.com/agencewonderful/wonderwp-autoloader), then place it under you mu plugins folder.

### Extra note on must use plugins

If your WordPress install does not support must use subfolder plugins (it's the case on a default WordPress install), we've created a proxy for you that includes all subfolders. It's called wonderwp-mu-proxy.php. 

Copy this wonderwp-mu-proxy.php file and place it at the root of your must use plugins folder.


