<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\SaveAddressInformation;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\SaveAddressInformation
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\SaveAddressInformation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Api\ShippingInformationManagementInterface $shippingInformationManagement, \Magento\Checkout\Api\GuestShippingInformationManagementInterface $guestShippingInformationManagement, \Magento\Checkout\Api\Data\ShippingInformationInterfaceFactory $shippingInformation, \Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId, \Magento\Quote\Api\Data\AddressInterfaceFactory $addressInterfaceFactory)
    {
        $this->___init();
        parent::__construct($shippingInformationManagement, $guestShippingInformationManagement, $shippingInformation, $overriderCartId, $addressInterfaceFactory);
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
