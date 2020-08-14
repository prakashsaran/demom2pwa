<?php
namespace ScandiPWA\CatalogGraphQl\Model\Resolver\Aggregations\SwatchData;

/**
 * Interceptor class for @see \ScandiPWA\CatalogGraphQl\Model\Resolver\Aggregations\SwatchData
 */
class Interceptor extends \ScandiPWA\CatalogGraphQl\Model\Resolver\Aggregations\SwatchData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\ScandiPWA\CatalogGraphQl\Model\Resolver\Aggregations\DataProvider\Swatches $swatches, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Framework\GraphQl\Query\FieldTranslator $fieldTranslator)
    {
        $this->___init();
        parent::__construct($swatches, $valueFactory, $fieldTranslator);
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
