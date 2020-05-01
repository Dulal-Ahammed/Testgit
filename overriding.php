<?php
class dad{
public function bike()
{
echo "bike";

}


}
class son extends dad{
public function bike()
{
    echo "new car";
}

}
$obj=new son;
echo $obj->bike();


?>