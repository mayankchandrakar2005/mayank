<?php 
  
  include("../include/header.php");
?>
<div id="container">
<?php 
  include("../include/menubar.php");
?>


<div id='eventArea'>

<?php 
include("..\include\dbconnect.php");
$rsevents=mysqli_query($con,"select * from news_info order by news_id desc");
while($row=mysqli_fetch_array($rsevents))
  {
    $a=$row["news_title"];
    $b=$row["news_desc"];
    $c=$row["news_date"];
    //$d="http://127.0.0.1/DHAN-LAXMI-APP//uploads//".$row["img_path"];
?>
<div class='eventinfo'>
   
    <div class="dateinfo"><?=$c ?></div>
    <div class="titleinfo"><?=$a ?></div>
    <div class="description"><?=$b ?></div>

 </div><!--end of eventinfo--> 

 <?php 
  }
 ?>

</div><!--end of eventArea--> 

  

</div><!--end of container--> 
<?php 
  include("../include/footer.php");
?>