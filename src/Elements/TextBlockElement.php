<?php

namespace ArsalanAzhar\AdaptivecardPhp\Elements;

use JsonSerializable;

class TextBlockElement extends BaseElement implements JsonSerializable
{
    protected $text;
    protected $wrap;
    protected $fontType;
    protected $weight ;
    protected $color ;
    protected $horizontalAlignment ;
    protected $subtle;
    protected $height;
    protected $spacing;
    

    public function __construct($text = "")
    {
        $this->type = "TextBlock";
        $this->text = $text;
        $this->fontType = "Default";
        $this->horizontalAlignment = "Left";
        $this->size = "Default";
        $this->weight = "Default";
        $this->subtle = false;
        $this->color = "Default";
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    public function getSize()
    {
        return $this->size;
    }
    public function setSpacing($spacing)
    {
        $this->spacing = $spacing;
        return $this;
    }
    public function getSpacing()
    {
        return $this->spacing;
    }
    public function setFontType($fontType)
    {
        $this->fontType = $fontType;
        return $this;
    }
    public function getFontType()
    {
        return $this->fontType;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }
    public function getWeight()
    {
        return $this->weight;
    }
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }
    public function getHeight()
    {
        return $this->height;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setHorizontalAlignment($horizontalAlignment)
    {
        $this->horizontalAlignment = $horizontalAlignment;
        return $this;
    }
    public function getHorizontalAlignment()
    {
        return $this->horizontalAlignment;
    }

    public function setText(String $text)
    {
        $this->text = $text;
        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setWrap(Bool $wrap = true)
    {
        $this->wrap = $wrap;
        return $this;
    }

    public function getWrap()
    {
        return $this->wrap;
    }

    public function setSubtle(bool $subtle){
        $this->subtle = $subtle;
        return $this;
    }

    public function getSubtle(){
        return $this->subtle;
    }

    public function jsonSerialize()
    {
        return [
           'type' => $this->getType(),
           "text" => $this->getText(),
           "fontType" => $this->getFontType(),
           "horizontalAlignment" => $this->getHorizontalAlignment(),
           'spacing' => $this->getSpacing(),
           "size" => $this->getSize(),
           "weight" => $this->getWeight(),
           'height' => $this->getHeight(),
           "color" =>  $this->getColor(),
           "wrap" => $this->getWrap(),
           "isSubtle" => $this->getSubtle()
        ];
    }
}
