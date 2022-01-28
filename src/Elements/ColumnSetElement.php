<?php 
namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class ColumnSetElement extends BaseElement implements JsonSerializable
{

    protected $columns;

    public function __construct($columns = null)
    {
     $this->type = "ColumnSet" ;
     $this->columns = $columns;
    }

    public function setColumns($columns){
        $this->columns = $columns;
        return $this;
    }

    public function getColumns(){
        return $this->columns;
    }

    
    public function jsonSerialize(){
        return [
            "type" => $this->getType(),
            "columns" => $this->columns
        ];
    }
}

