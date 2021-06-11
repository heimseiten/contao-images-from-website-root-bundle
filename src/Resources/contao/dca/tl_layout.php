<?php

use Contao\Config;
use Contao\CoreBundle\DataContainer\PaletteManipulator;

PaletteManipulator::create()
    ->addLegend('root_img_legend', 'sections_legend', PaletteManipulator::POSITION_AFTER)
    ->addField('root_img_logo_size',  'root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('root_img_headerbg_size',  'root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->addField('root_img_custom_size',  'root_img_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_layout') 
;

$GLOBALS['TL_DCA']['tl_layout']['fields'] += [    
    'root_img_logo_size' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
    'root_img_headerbg_size' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
    'root_img_custom_size' => [
        'inputType'        => 'imageSize',
        'options'          => \System::getImageSizes(),
        'reference'        => &$GLOBALS['TL_LANG']['MSC'],
        'eval'             => array( 'rgxp' => 'digit', 'includeBlankOption' => true, 'tl_class'  => 'clr' ),
        'sql'              => "varchar(64) NOT NULL default ''"
    ],
];
