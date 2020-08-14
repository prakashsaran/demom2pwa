<?php
namespace ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGalleryEntries;

/**
 * Interceptor class for @see \ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGalleryEntries
 */
class Interceptor extends \ScandiPWA\CatalogGraphQl\Model\Resolver\Product\MediaGalleryEntries implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Helper\Image $helperFactory, \Magento\Store\Model\App\Emulation $emulation)
    {
        $this->___init();
        parent::__construct($valueFactory, $storeManager, $helperFactory, $emulation);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : \Magento\Framework\GraphQl\Query\Resolver\Value
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        if (!$pluginInfo) {
            return parent::resolve($field, $context, $info, $value, $args);
        } else {
            return $this->___callPlugins('resolve', func_get_args(), $pluginInfo);
        }
    }
}
