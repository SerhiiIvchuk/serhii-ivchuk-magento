<?php
declare(strict_types=1);

namespace Ivchuk\IvchukControllerDemos\Controller\Middle;

use Magento\Framework\App\ResponseInterface;

class RawResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{

    /**
     * @return void
     */
    public function execute()
    {
        echo <<<'HTML'
           <html>
           <body>
               <ul>
               <li><a href="https://serhii-ivchuk-magento.local/ivchuk-ivchuk-controller-demos/middle/redirectresponsedemo">RedirectResponseDemo</a></li>
               <li><a href="forwardresponsedemo">ForwardResponseDemo</a></li>
               </ul>
               <form action="jsonresponsedemo" method="get">
               <p>First parameter:<input name="v-name" type="text"></p>
               <p>Second parameter:<input name="m-name" type="text"></p>
               <p><button type="submit">Send</button></p>
               </form>

           </body>
           </html>
        HTML;
        exit;
    }
}
