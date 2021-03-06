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
        if (isset($objTemplate->advancedCss) && $objTemplate->advancedCss != '') {
            $objTemplate->class .= ' ' . $objTemplate->advancedCss;
        }
    }

    /*
     * manipulate the given form to add advanced css to the existing css class
     */
    public function extendFormCssClasses(Widget $objWidget, $strForm, $arrForm)
    {
        if (isset($objWidget->advancedCss) && $objWidget->advancedCss != '') {
            $objWidget->class .= ' ' . $objWidget->advancedCss;
            return $objWidget;
        }
    }

    /*
     * add the varibale for dataset source file to backend
     */
    public function extendBackendTemplate($strContent, $strTemplate)
    {
        if ($strTemplate == 'be_main')
        {
            $strScript = "<script>var advancedClassesSet = '".$GLOBALS['TL_CONFIG']['advancedClassesSet']."';var defaultColumnWidth = '".$GLOBALS['TL_CONFIG']['ac_defaultColumnWidth']."'</script>\n\r</body>";
            return str_replace('</body>', $strScript, $strContent);
        }
        return $strContent;
    }
}