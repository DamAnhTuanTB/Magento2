<?php
namespace Magento\MediaGalleryCmsUi\Controller\Adminhtml\Block\Search;

/**
 * Interceptor class for @see \Magento\MediaGalleryCmsUi\Controller\Adminhtml\Block\Search
 */
class Interceptor extends \Magento\MediaGalleryCmsUi\Controller\Adminhtml\Block\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\Result\JsonFactory $resultFactory, \Magento\Cms\Api\BlockRepositoryInterface $blockRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($resultFactory, $blockRepository, $searchCriteriaBuilder, $context);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
