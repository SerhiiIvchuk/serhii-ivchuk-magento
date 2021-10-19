<?php
declare(strict_types=1);

namespace Ivchuk\IvchukControllerDemos\Controller\Middle;

use Magento\Framework\App\ResponseInterface;

class ForwardResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\ForwardFactory $forward;


    /**
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forward
     */
    public function __construct(
        \Magento\Framework\Controller\Result\ForwardFactory $forward
    ) {

        $this->forward = $forward;
    }
    /**
     * @return void
     */
    public function execute()
    {
        $result=$this->forward->create();
        return $result->forward('jsonresponsedemo');

    }
}

