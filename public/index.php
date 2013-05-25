<?php
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
