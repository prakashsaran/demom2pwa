<?php
namespace ScandiPWA\CustomerGraphQl\Model\Resolver\GenerateCustomerToken;

/**
 * Interceptor class for @see \ScandiPWA\CustomerGraphQl\Model\Resolver\GenerateCustomerToken
 */
class Interceptor extends \ScandiPWA\CustomerGraphQl\Model\Resolver\GenerateCustomerToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Api\CustomerTokenServiceInterface $customerTokenService, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->___init();
        parent::__construct($customerTokenService, $eventManager);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
