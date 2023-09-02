<?php

namespace Custom\HrefLang\Service\HrefLang;

use Magento\Framework\App\Request\Http as HttpRequest;
use Magento\Store\Model\Store;
use Custom\HrefLang\Api\CmsPageUrlRetrieverInterface;

class AlternativeUrlService
{
    /**
     * @var CmsPageUrlRetrieverInterface
     */
    private $cmsPageUrlRetriever;
    /**
     * @var HttpRequest
     */
    private $request;

    public function __construct(
        CmsPageUrlRetrieverInterface $cmsPageUrlRetriever,
        HttpRequest $request
    ) {
        $this->cmsPageUrlRetriever = $cmsPageUrlRetriever;
        $this->request = $request;
    }

    /**
     * @param Store $store
     * @return string
     */
    public function getAlternativeUrl($store)
    {
        switch ($this->request->getFullActionName()) {
            case 'cms_page_view':
                return $this->cmsPageUrlRetriever->getUrl($this->request->getParam('page_id'), $store);
            case 'cms_index_index':
                return $store->getBaseUrl();
        }
        return '';
    }
}
