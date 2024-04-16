<?php
namespace Custom\Checkout\Controller\Adminhtml\Queue\Update;

/**
 * Interceptor class for @see \Custom\Checkout\Controller\Adminhtml\Queue\Update
 */
class Interceptor extends \Custom\Checkout\Controller\Adminhtml\Queue\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Quote\Model\QuoteFactory $quoteFactory, \Magento\Sales\Api\Data\OrderInterface $orderinterface, \Magento\Framework\App\Request\Http $request)
    {
        $this->___init();
        parent::__construct($context, $quoteFactory, $orderinterface, $request);
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
