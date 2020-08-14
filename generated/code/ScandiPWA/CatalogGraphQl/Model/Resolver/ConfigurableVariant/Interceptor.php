<?php
namespace ScandiPWA\CatalogGraphQl\Model\Resolver\ConfigurableVariant;

/**
 * Interceptor class for @see \ScandiPWA\CatalogGraphQl\Model\Resolver\ConfigurableVariant
 */
class Interceptor extends \ScandiPWA\CatalogGraphQl\Model\Resolver\ConfigurableVariant implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\ScandiPWA\CatalogGraphQl\Model\Variant\Collection $variantCollection, \Magento\ConfigurableProductGraphQl\Model\Options\Collection $optionCollection, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\CatalogGraphQl\Model\Resolver\Products\Attributes\Collection $attributeCollection, \Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $collectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \ScandiPWA\Performance\Model\Resolver\Products\DataPostProcessor $productPostProcessor)
    {
        $this->___init();
        parent::__construct($variantCollection, $optionCollection, $valueFactory, $attributeCollection, $metadataPool, $collectionFactory, $storeManager, $productPostProcessor);
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
