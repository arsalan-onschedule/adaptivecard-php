<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class MediaElement extends BaseElement implements JsonSerializable{
 
    protected $poster;
    protected $sources;
    protected $height;
    protected $spacing;
    

    public function __construct()
    {
        $this->type = "Media";
        $this->spacing = "Default";
        $this->height = "Automatic";
        $this->poster = "";
    }

    public function setSources($sources){
        $this->sources= $sources;
        return $this;
    }

    public function getSources(){
        return $this->sources;
    }

    public function setPoster($poster){
         $this->poster = $poster;
         return $this;
    }

    public function getPoster(){
        return $this->poster;
    }

    public function setHorizontalAlignment($horizontalAlignment){
        $this->horizontalAlignment = $horizontalAlignment;
        return $this;
    }

    public function getHorizontalAlignment(){
        return $this->horizontalAlignment;
    }

    public function jsonSerialize(){
        return [
            "type" => $this->getType(),
            "poster" => $this->getPoster(),
            "sources" => $this->sources
        ];
    }
}