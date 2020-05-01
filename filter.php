<?php
$con=mysqli_connect("localhost","root","","crud");
if(isset($_POST['search'])){
$search=$_POST['search'];
$search=preg_replace("#[^0-9a-z]#i","",$search);
$query=mysql_query($con,"select * from emp where name like '%$search%' ");
$count = mysql_num_rows($query);
if($count == 0){
    $output='there was no search result';
}
else{
    while($row = mysql_fetch_array($query))
    {
        $name=$row['name'];
    }

}

}


?>
<form action="" method="post">
<input type="text" name="search" placehoder="search">
<input type="submit" value=">>">
</form>
