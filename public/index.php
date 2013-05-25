<?php

/**
 * Page d'accueil.
 *
 * @license http://www.opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @link http://loamok.org/projects/backup
 *
 * @package Backup
 * @version v0.1_beta_1 préversion 1 béta 1
 *
 * @author Huby Franck <franck.huby@loamok.org>
 */

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__)));
// Define path to root directory
defined('ROOT_PATH')
    || define('ROOT_PATH', realpath(dirname(__FILE__) . '/..'));

require_once ROOT_PATH .'/config/configuration.php';
require_once ROOT_PATH .'/lib/lang.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="<?= _("Systèmes de sauvegardes pour serveurs dédiés."); ?>" />
        <title><?= _("Loamok Backup"); ?></title>
    </head>
    <body>
        <pre>
        <?php
            var_dump($filename);
            var_dump($lang);
        ?>
        </pre>
    </body>
</html>
