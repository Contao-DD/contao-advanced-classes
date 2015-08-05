<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2015 Contao Stammtisch Dresden
 * @package advanced-classes
 * @author Mathias Arzberger <develop@pdir.de>
 * @license http://www.gnu.org/licences/lgpl-3.0.html LGPL
 */

/**
 * Dynamically add the method addAdvancedCss
 */
$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][] = array('AdvancedClassesModule','addAdvancedCss');


/**
 * Prepare the field advancedCss
 */
$dca = &$GLOBALS['TL_DCA']['tl_module'];
$arrFields = array
(
    'advancedCss' => array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['advancedCss'],
        'exclude'                 => true,
        'search'                  => false,
        'inputType'               => 'text',
        'eval'                    => array('maxlength'=>255),
        'sql'                     => "varchar(255) NOT NULL default ''"
    ),
);
$dca['fields'] = array_merge($dca['fields'], $arrFields);

/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Mathias Arzberger <develop@pdir.de>
 */
Class AdvancedClassesModule extends Backend {

  /**
   * Add advancedCss field to all palettes, which included "space"
   *
   * @param DataContainer $dc
   */
  public function addAdvancedCss(DataContainer $dc) {

    $dca = &$GLOBALS['TL_DCA']['tl_module'];
    foreach ($dca['palettes'] as $key=>$value) {
      if(!is_array ($value) && strpos($value,"space")!==false) {
        $dca['palettes'][$key] = str_replace('space', 'space;{advanced_classes_legend},advancedCss;', $value);
      }
    }

  }

}
