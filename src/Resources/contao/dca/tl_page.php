<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('images_from_website_root_legend', 'title_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('images_from_website_root_logo','images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('images_from_website_root_header_bg',    'images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('images_from_website_root_custom',    'images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('root', 'tl_page') 
    ->applyToPalette('rootfallback', 'tl_page') 
;

$GLOBALS['TL_DCA']['tl_page']['fields'] += [    
    'images_from_website_root_logo' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['images_from_website_root_logo'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],
    'images_from_website_root_header_bg' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['images_from_website_root_header_bg'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],   
    'images_from_website_root_custom' => [
        'label'     => &$GLOBALS['TL_LANG']['tl_article']['images_from_website_root_custom'],
        'inputType' => 'fileTree',
        'eval' => array( 'fieldType' => 'radio', 'filesOnly' => true, 'extensions' => \Config::get('validImageTypes') ),
        'sql'       => "blob NULL"
    ],
];
