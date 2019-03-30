<?php
/**
 * Bootstrap the library
 *
 * PHP version 5.5
 *
 * @category   OpCacheGUI
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk <https://github.com/PeeHaa>
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace OpCacheGUI;

use Dotenv\Dotenv;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::create(__DIR__ . '/../../');
$dotenv->load();
