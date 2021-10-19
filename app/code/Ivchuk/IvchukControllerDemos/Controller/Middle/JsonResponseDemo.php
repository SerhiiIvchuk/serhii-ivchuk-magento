<?php
declare(strict_types=1);

namespace Ivchuk\IvchukControllerDemos\Controller\Middle;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Json;

class JsonResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\App\RequestInterface $request;
    private \Magento\Framework\Controller\Result\JsonFactory $jsonFactory;

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        $this->request = $request;
        $this->jsonFactory = $jsonFactory;
    }
    /**
     * @return Json
     */
    public function execute(): Json
    {
        return $this->jsonFactory->create()
            ->setData([
                'parameter 1.' => $this->request->getParam('v-name', 'Ivchuk'),
                'parameter 2.' => $this->request->getParam('m-name', 'IvchukControllerDemos')
            ]);
    }
}
