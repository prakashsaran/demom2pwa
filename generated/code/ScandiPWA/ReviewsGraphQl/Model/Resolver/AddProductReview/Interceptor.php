<?php
namespace ScandiPWA\ReviewsGraphQl\Model\Resolver\AddProductReview;

/**
 * Interceptor class for @see \ScandiPWA\ReviewsGraphQl\Model\Resolver\AddProductReview
 */
class Interceptor extends \ScandiPWA\ReviewsGraphQl\Model\Resolver\AddProductReview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Review\Model\RatingFactory $ratingFactory, \Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($productRepository, $reviewFactory, $storeManager, $ratingFactory, $customerSession);
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
