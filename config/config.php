<?php

$modulePath = '/system/modules/advanced_classes/';

/**
 * General settings
 */

$GLOBALS['TL_CONFIG']['advancedClassesSet'] = 'both';

/**
 * add default sets
 *
 * hint: add update save json files via own extension or use default localconfig.php file
 * use $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = '/files/theme/myCssSet.json';
 *
 */
if(TL_MODE == 'BE')
{
    if (!isset($GLOBALS['TL_CONFIG']['advancedClassesSets']))
    {
        $GLOBALS['TL_CONFIG']['advancedClassesSets'] = array();
    }
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'assets/sets/bootstrap2.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'assets/sets/bootstrap3.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'assets/sets/bootstrap4-alpha.json';
    $GLOBALS['TL_CONFIG']['advancedClassesSets'][] = $modulePath . 'assets/sets/bootstrap4.json';
}

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendCssClasses');
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendBackendTemplate');

/**
 * Backend Javascript
 */
if (TL_MODE == 'BE' & !$GLOBALS['TL_JAVASCRIPT']['jquery']) {
    if (version_compare(VERSION, '4', '>=')) {
        $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/js/' . reset((scandir(TL_ROOT . '/assets/jquery/js', 1))) . '/jquery.min.js';
    } else {
        $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/core/' . reset((scandir(TL_ROOT . '/assets/jquery/core', 1))) . '/jquery.min.js';
    }
    $GLOBALS['TL_JAVASCRIPT']['noconflict'] = $modulePath . 'assets/js/jquery.noconflict.js';
    $GLOBALS['TL_JAVASCRIPT']['advanced_classes'] = $modulePath . 'assets/js/jquery.advanced_classes.js';
}

/**
 * Css
 */
if (TL_MODE == 'BE') {
    if($GLOBALS['TL_CONFIG']['ac_disableCSS'] == 0) {
        $GLOBALS['TL_CSS']['advanced_classes'] = $modulePath . 'assets/css/advanced_classes.css';
        $GLOBALS['TL_CSS']['font-awesome'] = $modulePath . 'assets/vendor/fontello/css/icon.css';
    }
    $GLOBALS['TL_CSS']['advanced_classes_settings'] = $modulePath . 'assets/css/advanced_classes_settings.css';
}
