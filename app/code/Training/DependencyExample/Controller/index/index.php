<?php 

declare(strict_types=1); 
namespace Training\DependencyExample\Controller\index ; 
use Magento\Framework\App\ActionInterface;

class index implements ActionInterface { 
protected $pageFactory;

public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory){
    $this->pageFactory=$pageFactory;
} 

public function execute() {
    $page= $this->pageFactory->create(); 
    $page->getConfig()->getTitle()->set('Dependency Injection in magento 2'); 
    return $page;
} 

} 
