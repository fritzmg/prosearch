<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Pro Search
 * @author    Alexander Naumov http://www.alexandernaumov.de
 * @license   CC BY-NC-ND 4.0
 * @copyright 2016 Alexander Naumov
 */

$GLOBALS['TL_DCA']['tl_user']['palettes']['login'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['login']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['admin'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['admin']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['default'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['group'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['group']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['extend'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['extend']);
$GLOBALS['TL_DCA']['tl_user']['palettes']['custom'] = str_replace('backendTheme;', 'backendTheme;{prosearch_user_legend:hide},keyboard_shortcut;', $GLOBALS['TL_DCA']['tl_user']['palettes']['custom']);

$GLOBALS['TL_DCA']['tl_user']['fields']['keyboard_shortcut'] = [

    'label' => &$GLOBALS['TL_LANG']['tl_user']['keyboard_shortcut'],
    'inputType' => 'text',

    'eval' => [

        'tl_class' => 'w50',
        'helpwizard' => true
    ],

    'explanation' => 'keyboard_shortcut',
    'exclude' => true,
    'sql' => "varchar(12) NOT NULL default ''"
];