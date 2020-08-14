<?php
namespace ScandiPWA\ReviewsGraphQl\Model\Resolver\Product\Reviews;

/**
 * Interceptor class for @see \ScandiPWA\ReviewsGraphQl\Model\Resolver\Product\Reviews
 */
class Interceptor extends \ScandiPWA\ReviewsGraphQl\Model\Resolver\Product\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Review\Model\ResourceModel\Review\CollectionFactory $reviewCollectionFactory)
    {
        $this->___init();
        parent::__construct($reviewFactory, $storeManager, $reviewCollectionFactory);
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
