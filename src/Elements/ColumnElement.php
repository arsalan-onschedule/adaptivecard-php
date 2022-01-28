<?php 
namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class ColumnElement extends BaseElement implements JsonSerializable
{

    protected $width;
    protected $items;
    protected $spacing;

    public function __construct($items = null)
    {
        $this->type = "Column";
        $this->items = $items;
    }

    public function setWidth($width){
        $this->width = $width;
        return $this;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setItems($items){
        $this->items = $items;
        return $this;
    }

    public function getItems(){
        return $this->items;
    }
    public function setSpacing($spacing){ 
        $this->spacing = $spacing;  
        return $this;
    }
    public function getSpacing(){
        return $this->spacing;
    }


    public function jsonSerialize(){
        return [
            'type' => $this->getType(),
            'width' => $this->getWidth(),
            'items' => $this->getItems(),
            'spacing' => $this->getSpacing()
        ];
    }
}
