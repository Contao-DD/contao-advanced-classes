<?php

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendCssClasses');

/**
 * Backend Javascript
 */
if (TL_MODE == 'BE') {

    $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/core/' . reset((scandir(TL_ROOT . '/assets/jquery/core', 1))) . '/jquery.min.js';
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
