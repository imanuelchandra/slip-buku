<?php
/**
 * Plugin Name: Slip Buku
 * Plugin URI: -
 * Description: Plugin slip buku oleh Arie Nugraha
 * Version: 1.0.0
 * Author: Arie Nugraha, plugin oleh Imanuel Chandra Lefta, ST
 * Author URI: -
 */
use SLiMS\Plugins;

$plugin = Plugins::getInstance();

Plugins::getInstance()->registerAutoload(__DIR__);

$path =  __DIR__ . '/pages/slip_buku.php';
 // Make default group menu
Plugins::group('Kelengkapan Bahan Pustaka', function() use($path) {
            // Scan all file inside module directory as menu
Plugins::menu('bibliography', 'Slip Buku', $path);
});