<?php
namespace ScandiPWA\WishlistGraphQl\Model\Resolver\WishlistItemsResolver;

/**
 * Interceptor class for @see \ScandiPWA\WishlistGraphQl\Model\Resolver\WishlistItemsResolver
 */
class Interceptor extends \ScandiPWA\WishlistGraphQl\Model\Resolver\WishlistItemsResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\ResourceModel\Item\CollectionFactory $wishlistItemsFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\ProductFactory $productFactory, \ScandiPWA\Performance\Model\Resolver\Products\DataPostProcessor $productPostProcessor, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Product\CollectionProcessorInterface $collectionProcessor, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($wishlistItemsFactory, $storeManager, $productFactory, $productPostProcessor, $searchCriteriaBuilder, $collectionProcessor, $collectionFactory);
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
