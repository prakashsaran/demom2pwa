<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\SetBillingAddressOnCart;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\SetBillingAddressOnCart
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\SetBillingAddressOnCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Magento\QuoteGraphQl\Model\Cart\SetBillingAddressOnCart $setBillingAddressOnCart, \Magento\QuoteGraphQl\Model\Cart\CheckCartCheckoutAllowance $checkCartCheckoutAllowance)
    {
        $this->___init();
        parent::__construct($getCartForUser, $cartManagement, $setBillingAddressOnCart, $checkCartCheckoutAllowance);
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
