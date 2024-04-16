<?php
namespace Magento\UpwardConnector\Console\Command\UpwardPathCommand;

/**
 * Interceptor class for @see \Magento\UpwardConnector\Console\Command\UpwardPathCommand
 */
class Interceptor extends \Magento\UpwardConnector\Console\Command\UpwardPathCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UpwardConnector\Api\UpwardPathManagerInterface $pathManager)
    {
        $this->___init();
        parent::__construct($pathManager);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
