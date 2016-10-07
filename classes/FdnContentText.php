<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

namespace Pry;


/**
 * Front end content element "text".
 */
class FdnContentText extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_text';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		/** @var \PageModel $objPage */
		global $objPage;

		// Clean the RTE output
		if ($objPage->outputFormat == 'xhtml')
		{
			$this->text = \StringUtil::toXhtml($this->text);
		}
		else
		{
			$this->text = \StringUtil::toHtml5($this->text);
		}

		// Add the static files URL to images
		if (TL_FILES_URL != '')
		{
			$path = \Config::get('uploadPath') . '/';
			$this->text = str_replace(' src="' . $path, ' src="' . TL_FILES_URL . $path, $this->text);
		}

		$this->Template->text = \StringUtil::encodeEmail($this->text);
		$this->Template->addImage = false;

		// Add an image
		if ($this->addImage && $this->singleSRC != '')
		{
			$objModel = \FilesModel::findByUuid($this->singleSRC);

			if ($objModel === null)
			{
				if (!\Validator::isUuid($this->singleSRC))
				{
					$this->Template->text = '<p class="error">'.$GLOBALS['TL_LANG']['ERR']['version2format'].'</p>';
				}
			}
			elseif (is_file(TL_ROOT . '/' . $objModel->path))
			{
				$this->singleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);
			}
		}

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
