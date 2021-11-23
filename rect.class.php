<?php
class Rect extends Shape{
    private $width=0;
    private $height=0;
    function __construct()
    {
        $this->shapeName="Rect ";
        if($this->validate($_POST["width"],'矩形的宽度') & $this->validate($_POST["height"],'矩形的高度'))
        {
            $this->width=$_POST["width"];
            $this->height=$_POST["height"];
        }
        else{
            exit;
        }
    }
    function area(){
        return $this->width*$this->height;
    }
    function perimeter()
    {
        return 2 * ($this->width + $this->height);
    }
}
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/4/15
 * Time: 17:02
 */