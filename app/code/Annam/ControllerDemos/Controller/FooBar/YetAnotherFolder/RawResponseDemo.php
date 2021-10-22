<?php
declare(strict_types=1);

namespace Annam\ControllerDemos\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\Controller\Result\Raw;
use PHP_CodeSniffer\Generators\HTML;

class RawResponseDemo implements
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
     * Controller demos
     * https://anna-mukomela-magento.local/annam-controller-demos/foobar_yetanotherfolder/rawresponsedemo/
     *
     * @return Raw
     */
    public function execute(): Raw
    {
        $result = $this->rawFactory->create();

        $content = <<<HTML
<ul>
    <li>
        <a href="/annam-controller-demos/foobar_yetanotherfolder/redirectresponsedemo/" target="_blank">RedirectResponseDemo</a>
    </li>
    <li>
        <a href="/annam-controller-demos/foobar_yetanotherfolder/forwardresponsedemo/?vendor_name=Annam&module_name=ControllerDemos" target="_blank">ForwardResponseDemo</a>
    </li>
</ul>

<form method="get" action="/annam-controller-demos/foobar_yetanotherfolder/jsonresponsedemo/?vendor_name=value&module_name=value">
    <label for="vendor_name">Vendor name:</label>
    <input type="text" id="vendor_name" name="vendor_name" value="Annam"><br>
    <label for="module_name">Module name:</label>
    <input type="text" id="module_name" name="module_name" value="ControllerDemos"><br>
    <button type="submit">Submit</button>
</form>
HTML;

        return $result->setContents($content);
    }
}
