<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class MediaSourceElement extends BaseElement  implements JsonSerializable
{
    protected $mimeType;
    protected $url;
    

    public function setMimeType($mimeType){
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getMimeType(){
        return $this->mimeType;
    }


    public function setUrl($url){
        $this->url = $url;
        return $this;
   }

   public function getUrl(){
       return $this->url;
   }


    public function jsonSerialize()
    {
        return [
            'mimeType' => $this->getMimeType(),
            'url' => $this->getUrl()
        ];
    }
}