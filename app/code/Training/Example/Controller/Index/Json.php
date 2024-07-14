<?php 

declare(strict_types=1); 
namespace training\example\controller\index ; 
use Magento\Framework\App\ActionInterface;

class Json implements ActionInterface { 
protected $jsonFactory;

public function __construct(\Magento\Framework\Controller\Result\JsonFactory $jsonFactory){
    $this->jsonFactory=$jsonFactory;
} 

public function execute() {
    $page= $this->jsonFactory->create()->setHeader('Content-Type', 'application/json')->setData(['name'=> 'naveen','job'=>'sde']);
 return $page;
} 

} 
