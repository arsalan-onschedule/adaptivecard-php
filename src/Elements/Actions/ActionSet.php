<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements\Actions;

use JsonSerializable;

class ActionSet implements JsonSerializable{

    protected $type;
    protected $actions;

    public function __construct($actions = [])
    {
        $this->type = "ActionSet";
        
        $this->actions = [];
        if($this->isAssoc($actions)){
            $this->actions[] = $actions;
        }
        else{
            $this->actions = array_merge($this->actions, $actions);
        }
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }

    public function getType(){
        return $this->type;
    }

    public function setActions($actions){
        if($this->isAssoc($actions)){
            $this->actions[] = $actions;
        }
        else{
            $this->actions = array_merge($this->actions, $actions);
        }

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

    //TODO: helper function, should be placed at some other appropriate place
    private function isAssoc(array $arr)
    {
    if (array() === $arr) return false;
    return array_keys($arr) !== range(0, count($arr) - 1);
    }
}