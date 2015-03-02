<?php
/**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 02.03.2015
 * Time: 12:48
 */

header('Content-Type: text/plain; charset=utf-8');
error_reporting(E_ALL);
ini_set("display_errors", 1);
defined('DEBUG') or define('DEBUG', true);

require_once('../restful.class.php');

define('ACTION', 'test');
//$rest = new RESTful(ACTION); // Фильтры по умолчанию
//$rest = new RESTful(ACTION, array()); // Пустой массив вторым параметром отключает фильтрацию
$rest = new RESTful(ACTION, array('aaa', 'Hash')); // Фильтры по умолчанию + пользовательские фильтры

print "Scope:\n";
print_r($rest->get('scope'));

//print "Headers:\n";
//print_r($rest->get('headers'));

print "Filter:\n";
print_r($rest->get('filter'));
