<?php

/**
 * Script de protection anti-parcours.
 * Redirige systématiquement vers le répertoire parent.
 *
 * @license http://www.opensource.org/licenses/GPL-3.0 GNU General Public License, version 3 (GPL-3.0)
 * @link http://loamok.org/projects/backup
 *
 * @package Backup
 * @version v0.1_beta_1 préversion 1 béta 1
 *
 * @author Huby Franck <franck.huby@loamok.org>
 */

header("location: ../");
