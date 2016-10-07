<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

namespace Pry;

/**
 * Front end content element "headline".
 */
class FdnContentHeadline extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_headline';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{

		// Add Foundation markup
		$this->Template->fdnClass = '';
		$this->Template->fdnAttributes = '';
		
		if($this->useFoundation)
		{
			$this->Template->fdnClass  = 'small-'.$this->fdn_small.' '.'medium-'.$this->fdn_medium.' '.'large-'.$this->fdn_large.' columns';
			
			if($this->fdn_end) {
				$this->Template->fdnClass .= ' end';
			}

			if($this->fdn_textAlign) {
				$this->Template->fdnClass .= ' ' . $this->fdn_textAlign;
			}

			if(!empty($this->fdn_classes)) {
				$this->Template->fdnClass .= ' ' . trim($this->fdn_classes);
			}

			if ($this->fdn_equalizer)
			{
				$this->Template->fdnAttributes .= 'data-equalizer-watch';
			}

			if (!empty($this->fdn_attributes))
			{
				$this->Template->fdnAttributes .= (empty($this->Template->fdnAttributes) ? '' : ' ') . trim($this->fdn_attributes);
			}
		}
	}
}
