<?php
declare(strict_types=1);

namespace Annam\ControllerDemos\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\Controller\Result\Forward;

class ForwardResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory;

    /**
     * @param \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
    ) {
        $this->forwardFactory = $forwardFactory;
    }

    /**
     * Controller demos
     * https://anna-mukomela-magento.local/annam-controller-demos/foobar_yetanotherfolder/forwardresponsedemo/
     *
     * @return Forward
     */
    public function execute(): Forward
    {
        return $this->forwardFactory->create()->forward('jsonresponsedemo');
    }
}
