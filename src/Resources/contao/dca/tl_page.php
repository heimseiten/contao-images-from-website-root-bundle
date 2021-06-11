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
        'reference' => &$GLOBALS['TL_LANG']['tl_page'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql' => "blob NULL"
    ],
    'root_img_headerbg' => [
        'reference' => &$GLOBALS['TL_LANG']['tl_page'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql' => "blob NULL"
    ],   
    'root_img_custom' => [
        'reference' => &$GLOBALS['TL_LANG']['tl_page'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql' => "blob NULL"
    ],
];
