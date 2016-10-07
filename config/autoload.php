<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

TemplateLoader::addFiles(array
(
	'mod_article'               => 'system/modules/pry_foundation/templates',
	'block_searchable'          => 'system/modules/pry_foundation/templates',
	'ce_headline'               => 'system/modules/pry_foundation/templates',
	'ce_downloads'              => 'system/modules/pry_foundation/templates',
	'ce_youtube'                => 'system/modules/pry_foundation/templates',
	'ce_fdnhr'   	        	=> 'system/modules/pry_foundation/templates',
	'ce_fdnrow_start'           => 'system/modules/pry_foundation/templates',
	'ce_fdnrow_stop'            => 'system/modules/pry_foundation/templates',
	'gallery_default'           => 'system/modules/pry_foundation/templates',

	//'form_row'   => '',
	//'form_radio'   => '',
	//'form_checkbox'   => '',
	//'form_submit'   => '',
));

ClassLoader::addNamespaces(array 
( 
    'Pry',
));

ClassLoader::addClasses(array
(
	'Pry\FdnContentHeadline'    => 'system/modules/pry_foundation/classes/FdnContentHeadline.php',
	'Pry\FdnContentText'        => 'system/modules/pry_foundation/classes/FdnContentText.php',
	'Pry\FdnContentImage'       => 'system/modules/pry_foundation/classes/FdnContentImage.php',
	'Pry\FdnContentGallery'     => 'system/modules/pry_foundation/classes/FdnContentGallery.php',
	'Pry\FdnContentMedia'       => 'system/modules/pry_foundation/classes/FdnContentMedia.php',
	'Pry\FdnContentYouTube'     => 'system/modules/pry_foundation/classes/FdnContentYouTube.php',
	'Pry\FdnContentDownload'    => 'system/modules/pry_foundation/classes/FdnContentDownload.php',
	'Pry\FdnContentDownloads'   => 'system/modules/pry_foundation/classes/FdnContentDownloads.php',
	'Pry\FdnContentHyperlink'   => 'system/modules/pry_foundation/classes/FdnContentHyperlink.php',
	'Pry\FdnContentHr'   	 	=> 'system/modules/pry_foundation/classes/FdnContentHr.php',
	'Pry\FdnContentRowStart'    => 'system/modules/pry_foundation/classes/FdnContentRowStart.php',
	'Pry\FdnContentRowStop'     => 'system/modules/pry_foundation/classes/FdnContentRowStop.php',
	
	// Form fields
	// Accordion
	// Slider
	// Button

));
