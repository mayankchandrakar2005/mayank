<?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/header.php");
?>
<div id="container">
    <div id='parentAdmin'>
      <div id='leftSide'>
        
        <?php 
             include("../adminMenu.php");
        ?>
      </div>
      <div id='rightSide'>  
        <div id="container">
 <h1 align="center">Edit Event</h1>
 <?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");

 $id=$_REQUEST["mid"];
 $rsevent=mysqli_query($con,"select * from events_info where event_id=$id");
 $row=mysqli_fetch_array($rsevent);

 if($row["first_page"]==0)
    $chkmsg="";
 else 
    $chkmsg="checked";


 ?>

  <div class="trustForm">
    <?php 
      if(isset($_REQUEST['resmsg']))
        {
          echo("<div id='resMessage'>");
            if($_REQUEST['resmsg']==1)
              {
                  echo("Data has been saved");
              }
          echo("</div>");
        }
    ?>
  
<form method="post" enctype="multipart/form-data" action="action.php">
  <input type="hidden" name="txtId" value="<?=$id?>">
    <label>Enter Event Title </label>
    <input type="text" name='txtTitle' value="<?=$row['event_title']?>">
    <label>Enter Event Detail</label>
    <textarea rows="5" name='txtDetail'><?=$row['event_desc']?></textarea>
    <br>
<?php     $img="http://127.0.0.1/DHAN-LAXMI-APP//uploads//".$row["img_path"];
                
                echo("<img src='$img' width='100' height='100' border='1'>");
                ?>
    <label>Choose Event Image</label>
    <input type="file" name='flImage'>
    <label>Want to show in first page ? </label>
    <input type="checkbox" <?=$chkmsg?> name='chkFirstpage' value='1'>

    <label>Enter Event Date</label>
    <input type="date" name='txtDate' value="<?=$row['event_date']?>">
    <div class='btnGroup'>
        <input type='submit' value='update' name="actype"><input type='reset' value='Cancel'>
    </div> <!--end of btnGroup-->

</form>

</div><!--end of trustForm-->
      </div>  

    </div><!--end of parentAdmin--> 
    
</div><!--end of container--> 
<?php 
   require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/footer.php");
?>