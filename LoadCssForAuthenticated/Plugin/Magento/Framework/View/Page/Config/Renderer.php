<?php

namespace Bytology\LoadCssForAuthenticated\Plugin\Magento\Framework\View\Page\Config;

use Magento\Customer\Model\Session;

class Renderer
{
    /**
     * @var Session
     */
    protected $customerSession;

    /**
     * Renderer constructor.
     * @param Session $customerSession
     */
    public function __construct(
        Session $customerSession
    )
    {
        $this->customerSession = $customerSession;
    }

    /**
     * @param \Magento\Framework\View\Page\Config\Renderer $subject
     * @param callable $proceed
     * @param string $elementType
     * @return string
     */
    public function aroundRenderElementAttributes(
        \Magento\Framework\View\Page\Config\Renderer $subject,
        callable $proceed,
        string $elementType
    )
    {
        $result = $proceed($elementType);

        if ($elementType === \Magento\Framework\View\Page\Config::ELEMENT_TYPE_BODY) {
            // Prepend CSS class:
            if ($this->customerSession->isLoggedIn()) {
                $result = str_replace(
                    'class="', 
                    'class="logged-in ', 
                    $result
                );
            }
        }

        return $result;
    }
}