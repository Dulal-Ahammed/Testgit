<?php
class rect{
public $width;
public $height;
public   function __construct($width,$height)
{
  $this->width =$width;
  $this->height =$height;

}
public function getarea()
{
    return $this->width * $this->height;

}
function getprice(){
    return $obj->getarea() * 0.57;
}
}

$obj=new rect(5,9);
echo $obj->getprice();
?>