<?php
namespace Mageplaza\CustomerApproval\Controller\Adminhtml\Index\MassApprove;

/**
 * Interceptor class for @see \Mageplaza\CustomerApproval\Controller\Adminhtml\Index\MassApprove
 */
class Interceptor extends \Mageplaza\CustomerApproval\Controller\Adminhtml\Index\MassApprove implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $collectionFactory, \Mageplaza\CustomerApproval\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $helperData);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
