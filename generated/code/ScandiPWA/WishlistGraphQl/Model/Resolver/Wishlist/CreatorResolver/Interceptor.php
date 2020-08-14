<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\Wishlist\CreatorResolver;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\Wishlist\CreatorResolver
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\Wishlist\CreatorResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\ResourceModel\CustomerRepository $customerRepository)
    {
        $this->___init();
        parent::__construct($customerRepository);
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
