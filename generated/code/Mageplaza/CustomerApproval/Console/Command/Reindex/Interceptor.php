<?php
namespace Mageplaza\CustomerApproval\Console\Command\Reindex;

/**
 * Interceptor class for @see \Mageplaza\CustomerApproval\Console\Command\Reindex
 */
class Interceptor extends \Mageplaza\CustomerApproval\Console\Command\Reindex implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Customer $customer, \Magento\Framework\App\State $appState, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface, \Magento\Framework\App\ResourceConnection $resourceConnection, $name = null)
    {
        $this->___init();
        parent::__construct($customer, $appState, $customerRepositoryInterface, $resourceConnection, $name);
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
