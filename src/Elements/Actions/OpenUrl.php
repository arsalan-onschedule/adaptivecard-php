<?php

namespace ArsalanAzhar\AdaptivecardPhp\Elements\Actions;

use JsonSerializable;

class OpenUrl extends BaseAction implements JsonSerializable
{

    public $url;

    public function __construct($url = "")
    {
        $this->url = $url;
        $this->iconUrl = "";
        $this->type = "Action.OpenUrl";
        $this->style = "Default";
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
    public function jsonSerialize()
    {
        return [
            "type" => $this->getType(),
            "title" => $this->getTitle(),
            "style" => $this->getStyle(),
            "url" => $this->getUrl()
        ];
    }
}
