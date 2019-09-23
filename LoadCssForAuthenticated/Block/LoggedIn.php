<?php

namespace Bytology\LoadCssForAuthenticated\Block;

use Magento\Framework\View\Element\{Template, Template\Context};

/**
 * Class LoggedIn
 * @package Bytology\LoadCssForAuthenticated\Block
 * @author Frank Clark <mrfrankclark1@gmail.com>
 * @description Currently unused block class
 */
class LoggedIn extends Template
{
    /**
     * LoggedIn constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function _construct() {
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$page = $objectManager->get('Magento\Framework\View\Page\Config');
		$page->addPageAsset('Bytology_LoadCssForAuthenticated::css/color_homepage_search_input.css');
    }
    
    /**
     * @return string
     */
    public function getLoggedInContent()
    {
        return '';
    }
}