<?php
declare(strict_types=1);

namespace Ivchuk\IvchukControllerDemos\Controller\Middle;

class RedirectResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\RedirectFactory $redirect;

    /**
     * @param \Magento\Framework\Controller\Result\RedirectFactory $redirect
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RedirectFactory $redirect
    ) {

        $this->redirect = $redirect;
    }
    /**
     * @return void
     */
    public function execute()
    {
        $result = $this->redirect->create();
        return $result->setUrl('https://bitbucket.org/SergiiIvchuk/serhii-ivchuk-magento-beta/src/master/');
    }
}
