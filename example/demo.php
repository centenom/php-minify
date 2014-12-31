<?php
/**
 * @link      https://github.com/basselin/php-minify
 * @copyright (c) 2014, Benoit Asselin contact(at)ab-d.fr
 * @license   MIT Licence
 */

require 'vendor/autoload.php';

use Drabajs\PhpMinify\PhpMinify;

$phpMinify = new PhpMinify(array(
    'source' => './input/',
    'target' => './output/',
));
var_dump($phpMinify->run());
