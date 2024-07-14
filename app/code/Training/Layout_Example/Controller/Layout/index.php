<?php 

declare(strict_types=1); 
namespace Training\Layout_Example\Controller\index ; 
use Magento\Framework\App\ActionInterface;

class index implements ActionInterface { 
protected $resultFactory;

public function __construct(\Magento\Framework\View\Result\PageFactory $resultFactory){
    $this->resultFactory=$resultFactory;
} 

public function execute() {
    return  $this->resultFactory->create(); 
} 

} 
