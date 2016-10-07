<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'useFoundation';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'useFoundationBlockGrid';

$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['headline']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['text'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['text']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['image'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundationBlockGrid;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);
//TODO: load_callback to change palettes
//$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery'] = '{type_legend},type,headline;{source_legend},multiSRC,sortBy,metaIgnore;{image_legend},size,imagemargin,fullsize,perPage,numberOfItems;{foundation_legend},useFoundationBlockGrid;{template_legend:hide},galleryTpl,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,useHomeDir,cssID,space;{invisible_legend:hide},invisible,start,stop',

$GLOBALS['TL_DCA']['tl_content']['palettes']['player'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['player']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube']
);
//TODO Remove poster, add widescreen

$GLOBALS['TL_DCA']['tl_content']['palettes']['download'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['download']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['downloads'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundationBlockGrid;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['downloads']
);

$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']
);

//TODO: all other elements

// Foundation hr
$GLOBALS['TL_DCA']['tl_content']['palettes']['hr'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Foundation Row start
$GLOBALS['TL_DCA']['tl_content']['palettes']['rowStart'] = '{type_legend},type;{foundation_legend},fdn_small,fdn_medium,fdn_large,fdn_equalizer,fdn_rowExpanded,fdn_classes,fdn_attributes;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Foundation Row stop
$GLOBALS['TL_DCA']['tl_content']['palettes']['rowStop'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';


/*
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['useFoundation'] = 'fdn_small,fdn_medium,fdn_large,fdn_equalizer,fdn_end,fdn_textAlign,fdn_classes,fdn_attributes';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['useFoundationBlockGrid'] = 'fdn_small,fdn_medium,fdn_large,fdn_smallBlock,fdn_mediumBlock,fdn_largeBlock,fdn_equalizer,fdn_classes,fdn_attributes';


/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['useFoundation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['useFoundation'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'default'                 => 1,
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_small'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_small'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_gridSize'],
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_medium'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_medium'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_gridSize'],
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_large'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_large'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(12, 11, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_gridSize'],
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['useFoundationBlockGrid'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['useFoundationBlockGrid'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'default'                 => 1,
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_smallBlock'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_smallBlock'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_blockGridSize'],
	'default'                 => 1,
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_mediumBlock'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_mediumBlock'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_blockGridSize'],
	'default'                 => 2,
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_largeBlock'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_largeBlock'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array(1, 2, 3, 4, 5, 6, 7, 8),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content']['fdn_blockGridSize'],
	'default'                 => 4,
	'eval'                    => array('tl_class'=>'w33'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_equalizer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_equalizer'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'clr w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_end'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_end'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_textAlign'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_textAlign'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('text-center', 'text-left', 'text-right', 'text-justify'),
	'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
	'eval'                    => array('includeBlankOption' => true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(32) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_classes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_classes'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'long clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_attributes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_attributes'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'long clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fdn_rowExpanded'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fdn_rowExpanded'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);
