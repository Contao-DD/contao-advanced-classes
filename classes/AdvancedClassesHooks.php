<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 Contao Stammtisch Dresden
 * @package advanced-classes
 * @author Mathias Arzberger <develop@pdir.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

namespace ContaoDD;

class AdvancedClassesHooks extends \Controller
{
    /*
     * manipulate the given template object to add advanced css to the existing css class
     */
    public function extendCssClasses($objTemplate)
    {
        $arrData = $objTemplate->getData();
        if (isset($arrData['advancedCss'])) {
            $objTemplate->class .= ' ' . $arrData['advancedCss'];
        }
    }
}