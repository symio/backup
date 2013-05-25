<?php

defined('ROOT_PATH')
    || define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));

$langs = array(
    'fr_FR' => 'fr_FR.utf8',
    'en_US' => 'en_US.utf8',
    'default' => 'fr_FR'
);

$lang = (isset($lang))?$langs[$lang] : $langs['default'];
$filename = 'default';
putenv("LC_ALL=$lang");
setlocale(LC_ALL, $lang);
bindtextdomain($filename, ROOT_PATH .'/locale');

bind_textdomain_codeset($filename, "UTF-8");
textdomain($filename);
