<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

namespace Pry;


/**
 * Front end content element "Separating line".
 */
class FdnContentHr extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fdnhr';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';

			/** @var \BackendTemplate|object $objTemplate */
			$objTemplate = new \BackendTemplate($this->strTemplate);

			$this->Template = $objTemplate;
		}
	}
}
