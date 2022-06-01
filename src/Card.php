<?php 

namespace ArsalanAzhar\AdaptivecardPhp;

use JsonSerializable;

class Card implements JsonSerializable{

    public $elements = [];
    protected $actions = [];
    protected $schema;
    protected $type;
    protected $version;

    public function __construct($elements = [], $schema = null, $version = null)
    {
        $this->schema = $schema ?? "http://adaptivecards.io/schemas/adaptive-card.json";
        $this->type =  "AdaptiveCard";
        $this->version = $version ?? "1.3";
        $this->elements = $elements;

        
    }

    public function setElement( $element){
        $this->elements[] = $element;
        return $this;
    }

    public function setElements ($elements){
        $this->elements = $elements;
    }

    public function getElements(){
        return $this->elements;
    }


    public function jsonSerialize(){
        return [
                    '$schema' => $this->schema,
                    "type" => $this->type,
                    "version" => $this->version,
                    "body" => $this->getElements()
        ];
    }
}