<!DOCTYPE html>
 <html>
 <body>

 <?php
 class car {
  public $model;
  public $modelno;
  public $price;
  function demo($model,$number,$price) {
     echo   $this->model=$model;
     echo  $this->modelno=$number;
     echo  $this->price=$price;
  }
  
}
$apple = new car("honda","2233","122333");
echo "<pre>";
print_r($apple);
?>

 
</body>
</html>