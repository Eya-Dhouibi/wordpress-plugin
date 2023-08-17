<?php
/*
Plugin Name: Dhouibi Eya
PluginURI: www.tsmm.com
Description: Collectedes CVs enligne.
Author: dhouibi eya
Version: 1.0
AuthorURI: https://dev-eyatsmm320.pantheonsite.io/
*/

register_activation_hook(__FILE__, 'dhouibi_eya_activate');
register_deactivation_hook(__FILE__, 'dhouibi_eya_deactivate');

function dhouibi_eya_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/dhouibi_eya_loader.php';
    $loader = new DhouibiEyaLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function dhouibi_eya_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/dhouibi_eya_loader.php';
    $loader = new DhouibiEyaLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
