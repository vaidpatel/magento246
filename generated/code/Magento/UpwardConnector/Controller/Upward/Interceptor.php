<?php
namespace Magento\UpwardConnector\Controller\Upward;

/**
 * Interceptor class for @see \Magento\UpwardConnector\Controller\Upward
 */
class Interceptor extends \Magento\UpwardConnector\Controller\Upward implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\HTTP\PhpEnvironment\Response $response, \Magento\UpwardConnector\Controller\UpwardControllerFactory $upwardFactory, \Magento\UpwardConnector\Model\Prerender $prerender)
    {
        $this->___init();
        parent::__construct($response, $upwardFactory, $prerender);
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
