<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('root_img_legend', 'title_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('root_img_logo','root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('root_img_headerbg', 'root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('root_img_custom', 'root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('root', 'tl_page') 
    ->applyToPalette('rootfallback', 'tl_page') 
;

$GLOBALS['TL_DCA']['tl_page']['fields'] += [    
    'root_img_logo' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['root_img_logo'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],
    'root_img_headerbg' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['root_img_headerbg'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],   
    'root_img_custom' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['root_img_custom'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],
];
