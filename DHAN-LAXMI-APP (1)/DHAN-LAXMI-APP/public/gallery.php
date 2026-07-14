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
$rsevents=mysqli_query($con,"select * from gallery_info order by gallery_id desc");
while($row=mysqli_fetch_array($rsevents))
  {
    $a=$row["gallery_title"];
   
   
    $d="http://127.0.0.1/DHAN-LAXMI-APP//uploads//".$row["image_path"];
?>
<div class='eventinfo'>
    <img src='<?=$d ?>' border="1">
  
    <div class="titleinfo"><?=$a ?></div>
   

 </div><!--end of eventinfo--> 

 <?php 
  }
 ?>

</div><!--end of eventArea--> 

  

</div><!--end of container--> 
<?php 
  include("../include/footer.php");
?>