<?php
namespace Block\Core;
class Layout extends Template{
	public function __construct(){
        $this->setTemplate('View/core/layout/one_column.php');
    	$this->prepareChildren();
	}

    public function prepareChildren(){
        $this->addChild(\Leisure::getBlock('Core\Layout\Header'),'header');
	    $this->addChild(\Leisure::getBlock('Core\Layout\Content'),'content');
        $this->addChild(\Leisure::getBlock('Core\Layout\Footer'),'footer');
    }

    public function getHeader(){
        return $this->getChild('header');
    }
    public function getContent(){
        return $this->getChild('content');
    }
    public function getFooter(){
        return $this->getChild('footer');
    }
}

?>