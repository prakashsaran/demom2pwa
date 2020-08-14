<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\EstimateShippingCosts;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\EstimateShippingCosts
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\EstimateShippingCosts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Model\ShippingMethodManagement $shippingMethodManagement, \Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId, \Magento\Quote\Api\Data\EstimateAddressInterfaceFactory $addressInterfaceFactory)
    {
        $this->___init();
        parent::__construct($quoteIdMaskFactory, $shippingMethodManagement, $overriderCartId, $addressInterfaceFactory);
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
