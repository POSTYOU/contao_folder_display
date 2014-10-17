<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Postyou_file_display
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'postYou',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'postYou\FolderDisplay' => 'system/modules/folder_display/classes/FolderDisplay.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_folder_display_list' => 'system/modules/folder_display/templates',
    'ce_folder_display_cell' => 'system/modules/folder_display/templates',
));
