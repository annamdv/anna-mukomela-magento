<?php
declare(strict_types=1);

namespace Annam\ControllerDemos\Controller\FooBar\YetAnotherFolder;

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
     * Controller demos
     * https://anna-mukomela-magento.local/annam-controller-demos/foobar_yetanotherfolder/jsonresponsedemo/
     *
     * @return \Magento\Framework\Controller\Result\Json
     */
    public function execute(): \Magento\Framework\Controller\Result\Json
    {
        $result = $this->jsonFactory->create();

        return $result->setData(
            [
                'vendor_name' => $this->request->getParam('vendor_name'),
                'module_name' => $this->request->getParam('module_name')
            ]
        );
    }
}
