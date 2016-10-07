<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */


/**
 * Content elements
 */
$GLOBALS['TL_CTE']['texts']['headline']      = 'FdnContentHeadline';
$GLOBALS['TL_CTE']['texts']['text']          = 'FdnContentText';
$GLOBALS['TL_CTE']['media']['image']         = 'FdnContentImage';
$GLOBALS['TL_CTE']['media']['gallery']       = 'FdnContentGallery';
$GLOBALS['TL_CTE']['media']['player']        = 'FdnContentMedia';
$GLOBALS['TL_CTE']['media']['youtube']       = 'FdnContentYouTube';
$GLOBALS['TL_CTE']['files']['download']      = 'FdnContentDownload';
$GLOBALS['TL_CTE']['files']['downloads']     = 'FdnContentDownloads';
$GLOBALS['TL_CTE']['links']['hyperlink']     = 'FdnContentHyperlink';
$GLOBALS['TL_CTE']['foundation']['hr'] 		 = 'FdnContentHr';
$GLOBALS['TL_CTE']['foundation']['rowStart'] = 'FdnContentRowStart';
$GLOBALS['TL_CTE']['foundation']['rowStop']  = 'FdnContentRowStop';


/**
 * Wrapper elements
 */
$GLOBALS['TL_WRAPPERS']['start'][]           = 'rowStart';
$GLOBALS['TL_WRAPPERS']['stop'][]            = 'rowStop';


/**
 * CSS
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/pry_foundation/assets/css/backend.css|static';
}
