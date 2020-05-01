<!DOCTYPE html>
<html>
<body>

<?php
class car {
    public $model;
    public $modelno;
    public $price;
    function honda($name) {
    $this->model=$name;
    echo "The car model name is $this->model <br>";
   
  }
   function modelno($number) {
    $this->modelno=$number;
    echo "The car model number is $this->modelno <br>";
   
  }
  function modelprice($number) {
    $this->price=$number;
    echo "The car price is $this->price";
   
  }
}
$apple = new car;
$apple->honda("honda");
$apple->modelno("1233");
$apple->modelprice("110200");
?>
 
</body>
</html>