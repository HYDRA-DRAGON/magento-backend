<?php 

declare(strict_types=1); 

namespace Training\PluginExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class index implements ActionInterface  {

protected PageFactory $pageFactory; 
public function  __construct(PageFactory $pageFactory) {
    $this->pageFactory=$pageFactory;
} 

public function execute() {
    $page=$this->pageFactory->create(); 
    $page->getConfig()->getTitle()->set('Plugin Example in magento2'); 
    return $page;
}



}