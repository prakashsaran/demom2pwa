<?php
namespace ScandiPWA\QuoteGraphQl\Model\Resolver\SaveCartItem;

/**
 * Interceptor class for @see \ScandiPWA\QuoteGraphQl\Model\Resolver\SaveCartItem
 */
class Interceptor extends \ScandiPWA\QuoteGraphQl\Model\Resolver\SaveCartItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\Webapi\ParamOverriderCartId $overriderCartId, \Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Catalog\Model\Product\Attribute\Repository $attributeRepository, \Magento\Quote\Model\ResourceModel\Quote\QuoteIdMask $quoteIdMaskResource, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurableType, \Magento\CatalogInventory\Api\StockStatusRepositoryInterface $stockStatusRepository, \Magento\InventorySalesApi\Model\GetStockItemDataInterface $getStockItemData, \Magento\InventoryReservationsApi\Model\GetReservationsQuantityInterface $getReservationsQuantity, \Magento\InventoryConfigurationApi\Api\GetStockItemConfigurationInterface $getStockItemConfiguration)
    {
        $this->___init();
        parent::__construct($quoteIdMaskFactory, $quoteRepository, $overriderCartId, $productRepository, $attributeRepository, $quoteIdMaskResource, $configurableType, $stockStatusRepository, $getStockItemData, $getReservationsQuantity, $getStockItemConfiguration);
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
