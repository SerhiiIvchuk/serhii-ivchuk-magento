<?php
declare(strict_types=1);

namespace Ivchuk\ControllersDemo\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\Controller\Result\Raw;

class ControllerClass implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\App\RequestInterface $request;
    private \Magento\Framework\Controller\Result\RawFactory $rawFactory;

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\RawFactory $rawFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        $this->request = $request;
        $this->rawFactory = $rawFactory;
    }

    /**
     * @return Raw
     */
    public function execute(): Raw
    {

      $result=$this->rawFactory->create();
       return $result->setHeader('Content-Type','text/plain')
           ->setContents(
               'Demo int:' . (int) $this->request->getParam('demo-int', 10) . '<br>' .
                $this->request->getParam('parameter-name-1') . '<br>'
           );

//        echo 'Demo int:' . (int) $this->request->getParam('demo-int', 10) . '<br>';
//        echo 'parameter-name-1:' . $this->request->getParam('parameter-name-1') . '<br>';
//        echo 'parameter-name-2:' . $this->request->getParam('parameter-name-2') . '<br>';
//        echo 'Testing controller for Ivchuk';
//        exit;
    }
}

