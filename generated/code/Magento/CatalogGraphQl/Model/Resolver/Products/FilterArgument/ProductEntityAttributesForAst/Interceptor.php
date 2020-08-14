<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\FilterArgument\ProductEntityAttributesForAst;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\FilterArgument\ProductEntityAttributesForAst
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\FilterArgument\ProductEntityAttributesForAst implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\ConfigInterface $config, array $additionalAttributes = [])
    {
        $this->___init();
        parent::__construct($config, $additionalAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityAttributes() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityAttributes');
        if (!$pluginInfo) {
            return parent::getEntityAttributes();
        } else {
            return $this->___callPlugins('getEntityAttributes', func_get_args(), $pluginInfo);
        }
    }
}
