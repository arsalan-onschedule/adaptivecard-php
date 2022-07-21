<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements\Actions;

use JsonSerializable;

class ActionSet implements JsonSerializable{

    protected $type;
    protected $actions;

    public function __construct($actions = [])
    {
        $this->type = "ActionSet";
        $this->setActions($actions);
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }

    public function getType(){
        return $this->type;
    }

    public function setActions($actions){
        $this->actions = is_array($actions) ? $actions : [$actions];
        return $this;
    }

    public function getActions(){
        return $this->actions;
    }

    public function jsonSerialize(){
        return [
            "type" => $this->getType(),
            "actions" => $this->getActions()
        ];
    }

}