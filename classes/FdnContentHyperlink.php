<?php

/**
 * @package   pry_foundation
 * @author    Fabian Perrey (f.perrey@gmx.de)
 * @license   LGPL-3.0+
 */

namespace Pry;


/**
 * Front end content element "hyperlink".
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class FdnContentHyperlink extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_hyperlink';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		/** @var \PageModel $objPage */
		global $objPage;

		if (substr($this->url, 0, 7) == 'mailto:')
		{
			$this->url = \StringUtil::encodeEmail($this->url);
		}
		else
		{
			$this->url = ampersand($this->url);
		}

		$embed = explode('%s', $this->embed);

		if ($this->linkTitle == '')
		{
			$this->linkTitle = $this->url;
		}

		// Use an image instead of the title
		if ($this->useImage && $this->singleSRC != '')
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
				/** @var \FrontendTemplate|object $objTemplate */
				$objTemplate = new \FrontendTemplate('ce_hyperlink_image');

				$this->Template = $objTemplate;
				$this->Template->setData($this->arrData);

				$this->singleSRC = $objModel->path;
				$this->addImageToTemplate($this->Template, $this->arrData);

				$this->Template->linkTitle = specialchars($this->linkTitle);
			}
		}

		if (strncmp($this->rel, 'lightbox', 8) !== 0 || $objPage->outputFormat == 'xhtml')
		{
			$this->Template->attribute = ' rel="'. $this->rel .'"';
		}
		else
		{
			$this->Template->attribute = ' data-lightbox="'. substr($this->rel, 9, -1) .'"';
		}

		$this->Template->rel = $this->rel; // Backwards compatibility
		$this->Template->href = $this->url;
		$this->Template->embed_pre = $embed[0];
		$this->Template->embed_post = $embed[1];
		$this->Template->link = $this->linkTitle;
		$this->Template->linkTitle = specialchars($this->titleText ?: $this->linkTitle);
		$this->Template->target = '';

		// Override the link target
		if ($this->target)
		{
			$this->Template->target = ($objPage->outputFormat == 'xhtml') ? ' onclick="return !window.open(this.href)"' : ' target="_blank"';
		}

		// Unset the title attributes in the back end (see #6258)
		if (TL_MODE == 'BE')
		{
			$this->Template->title = '';
			$this->Template->linkTitle = '';
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
