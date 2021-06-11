<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('images_from_website_root_legend', 'sections_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('logo_from_website_root_size_id',  'images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('header_bg_from_website_root_size_id',  'images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('custom_from_website_root_size_id',  'images_from_website_root_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_layout') 
;

$GLOBALS['TL_DCA']['tl_layout']['fields'] += [    
    'logo_from_website_root_size_id' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
];

$GLOBALS['TL_DCA']['tl_layout']['fields'] += [    
    'header_bg_from_website_root_size_id' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
];

$GLOBALS['TL_DCA']['tl_layout']['fields'] += [    
    'custom_from_website_root_size_id' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
];
