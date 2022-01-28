<?php 

namespace ArsalanAzhar\AdaptivecardPhp\Elements\Actions;

abstract class BaseAction{

    protected $type;
    protected $style;
    protected $title;
    protected $iconUrl;

    public function __construct()
    {
        $this->style = "Default";
        $this->title = "";
    }

    public function setType($type){
        $this->type = $type;
        return $this;
    }

    public function getType(){
        return $this->type;
        
    }

    public function setStyle($style){
        $this->style = $style;
        return $this;
    }

    public function getStyle(){
        return $this->style;
        
    }

    public function setTitle($title){
        $this->title = $title;
        return $this;
    }

    public function getTitle(){
        return $this->title;
        
    }

    public function setIconUrl($iconUrl){
        $this->iconUrl = $iconUrl;
        return $this;
    }

    public function getIconUrl(){
        return $this->iconUrl;
        
    }
}