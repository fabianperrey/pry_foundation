<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

namespace Pry;


/**
 * Front end content element "Row Start" (wrapper start).
 */
class FdnContentRowStart extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_fdnrow_start';


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

		// Add Foundation markup
		$this->Template->fdnColumns  = 'small-'.$this->fdn_small.' '.'medium-'.$this->fdn_medium.' '.'large-'.$this->fdn_large.' columns';

		$this->Template->fdnClass = $this->fdn_classes;

		if ($this->fdn_rowExpanded)
		{
			$this->Template->fdnClass .= (empty($this->Template->fdnClass) ? '' : ' ') . 'expanded';
		}

		$this->Template->fdnAttributes = '';

		if ($this->fdn_equalizer)
		{
			$this->Template->fdnAttributes .= 'data-equalizer';
		}

		if (!empty($this->fdn_attributes))
		{
			$this->Template->fdnAttributes .= (empty($this->Template->fdnAttributes) ? '': ' ').trim($this->fdn_attributes);
		}
	}
}
