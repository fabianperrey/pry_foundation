<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

// Palettes
$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'useFoundation';

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace
(
	'{template_legend:hide}',
	'{foundation_legend},useFoundation;{template_legend:hide}',
	$GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

// Subpalettes
$GLOBALS['TL_DCA']['tl_article']['subpalettes']['useFoundation'] = 'fdn_equalizer,fdn_rowExpanded,fdn_classes,fdn_attributes';
//TODO complete subpalettes to be defined

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['useFoundation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['useFoundation'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'default'                 => 1,
	'eval'                    => array('submitOnChange'=>true),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['fdn_equalizer'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fdn_equalizer'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['fdn_rowExpanded'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fdn_rowExpanded'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['fdn_classes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fdn_classes'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'long clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['fdn_attributes'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_article']['fdn_attributes'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('maxlength'=>255, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>'ace', 'tl_class'=>'long clr'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);
