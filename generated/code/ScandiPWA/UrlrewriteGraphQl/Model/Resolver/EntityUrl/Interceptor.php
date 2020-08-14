<?php
namespace ScandiPWA\UrlrewriteGraphQl\Model\Resolver\EntityUrl;

/**
 * Interceptor class for @see \ScandiPWA\UrlrewriteGraphQl\Model\Resolver\EntityUrl
 */
class Interceptor extends \ScandiPWA\UrlrewriteGraphQl\Model\Resolver\EntityUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite\CustomUrlLocatorInterface $customUrlLocator, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory)
    {
        $this->___init();
        parent::__construct($urlFinder, $storeManager, $customUrlLocator, $productCollectionFactory);
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
