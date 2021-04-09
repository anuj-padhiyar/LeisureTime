<?php

namespace Model\Core;
class Filter Extends \Model\Core\Session{

    public function setFilter($filter){
        $this->filter = $filter;
        return $this;
    }
    public function getFilter(){
        if($this->hasFilter()){
            return $this->filter;
        }
        return false;
    }
    public function clearFilter(){
        if($this->hasFilter()){
            unset($this->filter);
        }
        return $this;
    }
    public function hasFilter(){
        if(!$this->filter){
            return false;
        }
        return true;
    }
}

?>