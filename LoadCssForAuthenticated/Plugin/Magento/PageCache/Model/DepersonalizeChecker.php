<?php

namespace Bytology\LoadCssForAuthenticated\Plugin\Magento\PageCache\Model;

use Magento\Customer\Model\Session;

class DepersonalizeChecker
{
    /**
     * @var Session
     */
    protected $customerSession;

    /**
     * DepersonalizeChecker constructor.
     * @param Session $customerSession
     */
    public function __construct(
        Session $customerSession
    )
    {
        $this->customerSession = $customerSession;
    }

    /**
     * @param \Magento\PageCache\Model\DepersonalizeChecker $subject
     * @param bool $result
     * @return bool
     */
    public function afterCheckIfDepersonalize(
        \Magento\PageCache\Model\DepersonalizeChecker $subject,
        bool $result
    )
    {
        if ($result === true) {
            return $this->customerSession->isLoggedIn() ? false : $result;
        }

        return $result;
    }
}