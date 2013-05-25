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
        <link rel="icon" type="image/png" href="/images/favicon.ico" />
        
        <link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.8.16.custom.css" />
        <link rel="stylesheet" type="text/css" href="/css/default.css" />
        
        <script charset="utf-8" type="text/javascript" src="/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script charset="utf-8" type="text/javascript" src="/js/jquery.timer.js"></script>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="<?= _("Systèmes de sauvegardes pour serveurs dédiés."); ?>" />
        
        <title><?= _("Loamok Backup"); ?></title>
    </head>
    <body>
        <!-- start header -->
        <div id="header">
            <div id="logo">
                <h1><a href="/"><?= sprintf(_("%sLoamok%s Backup"),"<span>", "</span>"); ?></a></h1>
                <p>&nbsp;</p>
            </div>
            <div id="menu">
               <a href="/"><?= _("État"); ?></a>
               <a href="/backup.php"><?= _("Faire une sauvegarde"); ?></a>
               <a href="/config.php"><?= _("Configuration"); ?></a>
               <a href="/modules.php"><?= _("Modules"); ?></a>
            </div>
        </div>
        <div id="breadCrumb">
            <a href="/"><?= _("Loamok Backup"); ?> > <?= _("État"); ?></a>
        </div>
        <!-- end header -->
        <div id="wrapper">
            <!-- start page -->
            <div id="page">
                <div class="sidebar" id="sidebar1"></div>
                <!-- start content -->
                <div id="content">
                    <div class="post">
                        <h1 class="title"><a href="#">Titre principal</a></h1>
                        <p class="byline"><small>Date <a href="#">Nom </a></small></p>
                        <div class="entry">
                            <p>
                                <strong>Dupliquer</strong> ce bloc div pour multiplier les blocs.
                            </p>
                        </div>
                    </div>
                </div>
                <div style="clear: both;">&nbsp;</div>
                <!-- end content -->
            </div>
            <!-- end page -->
        </div>
        <div id="footer">
            <p class="copyright">
                &copy;&nbsp;&nbsp;2013 <?= sprintf(_(
"Loamok et ses contributeurs. 
Voir le fichier %s'COPYRIGHT'%s"), 
"<a href=\"https://www.loamok.org/projects/backup/repository\" target=\"_blank\">", "</a>"); ?>
                &nbsp;&bull;&nbsp; <?= sprintf(_(
"%s@licence%s GNU General Public License, version 3 (GPL-3.0). Voir le fichier %s'LICENSE.txt'%s"), 
"<a href=\"http://www.opensource.org/licenses/GPL-3.0\" target=\"_blank\">", "</a>", 
"<a href=\"https://www.loamok.org/projects/backup/repository\" target=\"_blank\">", "</a>"); ?>
            </p>
            <p class="link">
                &nbsp;
            </p>
        </div>
    </body>
</html>
