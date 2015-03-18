<?php

/**
 * Hooks
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\ContaoDD\AdvancedClassesHooks', 'extendCssClasses');

/**
 * Javascript
 */
/*
if (TL_MODE == 'BE') {
    $GLOBALS['TL_JAVASCRIPT']['advanced_classes'] = '/system/modules/advanced_classes/assets/js/app.js';
}
*/

/**
 * Javascript
 */
/*
if (TL_MODE == 'BE') {
    $GLOBALS['TL_CSS']['advanced_classes'] = '/system/modules/advanced_classes/assets/css/app.css';
}
*/