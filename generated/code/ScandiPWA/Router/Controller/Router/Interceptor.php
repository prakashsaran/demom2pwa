<?php
namespace ScandiPWA\Router\Controller\Router;

/**
 * Interceptor class for @see \ScandiPWA\Router\Controller\Router
 */
class Interceptor extends \ScandiPWA\Router\Controller\Router implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Router\ActionList $actionList, \Magento\Framework\App\ActionFactory $actionFactory, \Magento\Framework\App\DefaultPathInterface $defaultPath, \Magento\Framework\App\ResponseFactory $responseFactory, \Magento\Framework\App\Route\ConfigInterface $routeConfig, \Magento\Framework\UrlInterface $url, \Magento\Framework\Code\NameBuilder $nameBuilder, \Magento\Framework\App\Router\PathConfigInterface $pathConfig, \ScandiPWA\Router\ValidationManagerInterface $validationManager, \Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider, array $ignoredURLs = [])
    {
        $this->___init();
        parent::__construct($actionList, $actionFactory, $defaultPath, $responseFactory, $routeConfig, $url, $nameBuilder, $pathConfig, $validationManager, $urlFinder, $storeManager, $scopeConfig, $themeProvider, $ignoredURLs);
    }

    /**
     * {@inheritdoc}
     */
    public function match(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'match');
        if (!$pluginInfo) {
            return parent::match($request);
        } else {
            return $this->___callPlugins('match', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionClassName($module, $actionPath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionClassName');
        if (!$pluginInfo) {
            return parent::getActionClassName($module, $actionPath);
        } else {
            return $this->___callPlugins('getActionClassName', func_get_args(), $pluginInfo);
        }
    }
}
