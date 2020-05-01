<?php
$con=mysqli_connect("localhost","root","","payment");
$query_rec="select rec_no from bill order by id DESC LIMIT=1";
$get_last_data=mysqli_query($con,$query_rec);
$data=mysqli_fetch_assoc($get_last_data);
$rce_no++;
$rec_no=$data['rec_no'];
$name=$_POST['name'];
$class=$_POST['class'];
$regno=$_POST['reg_num'];
$depositor=$_POST['depositor'];
$particular="".$_POST['admission']."".$_POST['admission']."".$_POST['dairy']."".$_POST['tie']."".$_POST['belt']."".$_POST['adform'].
  "".$_POST['icard'];
$depositor=$_POST['deposite'];
$date=$_POST['date'];
$month="".$_POST['apr']."".$_POST['may']."".$_POST['jun']."".$_POST['jul']."".$_POST['sep']."".$_POST['oct'].
"".$_POST['nov'] "".$_POST['des']."".$_POST['jan']."".$_POST['feb']."".$_POST['march']."".$_POST['aug'];
$run=mysqli_query($con,"insert into bill (name,reg_no,class,depositor,date,particular,fee_month) values ('$name','$regno','$class','$depositor',
    '$date','$particular','$month')");
$get_fee_month="select fee_month from bill where rec_no=$rec_no"; 
$fee_data=mysqli_query($con,$get_fee_month);
$fee_fetch=mysqli_fetch_assoc($fee_data);
$fee_string=$fee_fetch['fee_month'];
$fee_string=string_replace(" ",""$fee_string);
$lenth=strlen($fee_string);
$no_of_month=$lenth/3;
?>
<div align="center">
    <table>
        <tr>
            <td colspan="4" style="text-align:center"><b style="font-size:bold">Nursery school</b></td>

        </tr>
        <tr>
            <td rowspan="2" style="text-transform:uppercase">student name:<b style="text-transform:uppercase"><?php echo 
            "" .$_POST['name']."/".$_POST['reg_no'];?></b><br>
            paid by:<?php echo"".$_POST['depositor']; ?><br>
            class:<b>Nursery</b>
        </td>
        <td colspan="2">Date:<?php echo"".$_POST['date'];?></td>
        </tr>
        <tr>
            <td colspan="3">R.c no:<b><?php echo $rec_no; ?></b></td>
        <tr>
            <td><b>particular</b></td>
            <td><b>Fee (250)</b></td>
            <td>Total</td>
            <td>Balance</b>
          </tr>
          <tr>
              <td style="padding-bottom: 150px" max-width:25px>
            <?php
            if($_POST['diary'])
            {
               echo ""."Diary"."50Rs";
               $amount=50;
            }
            if($_POST['tie'])
            {
               echo ""."tie"."40Rs";
               $amount=$amount+40;
            }
            if($_POST['belt'])
            {
               echo ""."belt"."40Rs";
               $amount=$amount+40;
            }

            if($_POST['adform'])
            {
               echo ""."ad form"."50Rs";
               $amount=$amount+50;
            } 
            if($_POST['icard'])
            {
               echo ""."icard"."30Rs";
               $amount=$amount+30;
            } 
            if($_POST['yearly'])
            {
               echo ""."yearly"."250Rs";
               $amount=$amount+250;
            }
            if($_POST['admission'])
            {
               echo ""."admission"."450Rs";
               $amount=$amount+450;
            }
            else{
                echo "<br><div align=center>----------<br>";
                echo"-------</div>";

            }
            ?>
            <td style="padding-bottom:150px; max-width:15ch">
            <?php
            echo "<div style="text-transform:uppercase">;
            echo $_fetch['fee_month'];
            ?>
           </td>
           <td style="padding-bottom:150px;">
           <?php
           echo $amount;
           ?>+<?php echo 150* $no_no_of_month;?>
           </td>
            </td>
             </tr>
             <tr>
             <td colspan="2">Total:</td>
             <td><?php echo $total=$amount *150*$no_of_month;?></td>
             </tr>
              
        
    </table>
</div>