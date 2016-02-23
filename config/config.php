<?php

/**
 * General settings
 */

$GLOBALS['TL_CONFIG']['advancedClassesSet'] = 'both';

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendCssClasses');
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendBackendTemplate');

/**
 * Backend Javascript
 */
if (TL_MODE == 'BE') {
    if (version_compare(VERSION, '4', '>=')) {
        $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/js/' . reset((scandir(TL_ROOT . '/assets/jquery/js', 1))) . '/jquery.min.js';
    } else {
        $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/core/' . reset((scandir(TL_ROOT . '/assets/jquery/core', 1))) . '/jquery.min.js';
    }
    $GLOBALS['TL_JAVASCRIPT']['noconflict'] = '/system/modules/advanced_classes/assets/js/jquery.noconflict.js';
    $GLOBALS['TL_JAVASCRIPT']['advanced_classes'] = '/system/modules/advanced_classes/assets/js/jquery.advanced_classes.js';
}

/**
 * Css
 */
if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS']['advanced_classes'] = '/system/modules/advanced_classes/assets/css/advanced_classes.css';
    $GLOBALS['TL_CSS']['font-awesome'] = '/system/modules/advanced_classes/assets/vendor/fontello/css/icon.css';
}
