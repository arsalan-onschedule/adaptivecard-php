<?php 
namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class ImageElement extends BaseElement implements JsonSerializable{
 
    protected $url;
    protected $size;
    protected $style;
    protected $horizontalAlignment;

    public function __construct($url = null)
    {
        $this->type = "Image";
        $this->url = $url;
        $this->style = "Default";
        $this->horizontalAlignment = "Left";
        $this->size = "Auto";

    }

    public function setUrl($url){
         $this->url = $url;
         return $this;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setStyle($style){
        $this->style = $style;
        return $this;
    }
    
    public function getStyle(){
        return $this->style;
    }

    public function setHorizontalAlignment($horizontalAlignment){
        $this->horizontalAlignment = $horizontalAlignment;
        return $this;
    }

    public function getHorizontalAlignment(){
        return $this->horizontalAlignment;
    }

    public function setSize($size){
        $this->size = $size;
        return $this;
    }

    public function getSize(){
        return $this->size;
    }


    public function jsonSerialize(){
        return [
            "type" => $this->getType(),
            "url" => $this->getUrl(),
            "size" => $this->getSize(),
            "style" => $this->getStyle(),
            "horizontalAlignment" => $this->getHorizontalAlignment()
        ];
    }
}