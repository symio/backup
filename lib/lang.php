<?php

/**
 * Définition des paramètres de la langue à utiliser
 *
 * @license http://www.opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @link http://loamok.org/projects/backup
 *
 * @package Backup
 * @version v0.1_beta_1 préversion 1 béta 1
 *
 * @author Huby Franck <franck.huby@loamok.org>
 */


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
