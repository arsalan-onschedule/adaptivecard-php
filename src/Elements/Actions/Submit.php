<?php

namespace ArsalanAzhar\AdaptivecardPhp\Elements\Actions;

use JsonSerializable;

class Submit extends BaseAction implements JsonSerializable
{

    public $data;

    public function __construct()
    {
        $this->iconUrl = "";
        $this->type = "Action.Submit";
        $this->style = "Default";
        $this->data = [];
    }

    public function setData($data){
        $this->data = $data;
        return $this;
    }

    public function getData(){
        return $this->data;
    }
  
    public function jsonSerialize()
    {
        return [
            "type" => $this->getType(),
            "title" => $this->getTitle(),
            "style" => $this->getStyle(),
            "data" => $this->getData()
        ];
    }
}
