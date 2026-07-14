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
 <h1 align="center">Edit Member</h1>
 <?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");

 $id=$_REQUEST["mid"];
 $rsnews=mysqli_query($con,"select * from news_info where news_id=$id");
 $row=mysqli_fetch_array($rsnews);


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
  
<form method="get" action="action.php">
  <input type="hidden" name="txtId" value="<?=$id?>">
    <label>Enter News Title </label>
    <input type="text" name='txtTitle' value="<?=$row['news_title']?>">
    <label>Enter News Detail</label>
    <textarea rows="5" name='txtDetail'><?=$row['news_desc']?></textarea>
    <label>Enter News Date</label>
    <input type="date" name='txtDate' value="<?=$row['news_date']?>">
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