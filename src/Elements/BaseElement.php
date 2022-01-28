<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements;

abstract class BaseElement{

    protected $type;
    protected $data;

    public function setType($type){
        $this->type = $type;
        return $this;
    }

    public function getType(){
        return $this->type;
        
    }
}