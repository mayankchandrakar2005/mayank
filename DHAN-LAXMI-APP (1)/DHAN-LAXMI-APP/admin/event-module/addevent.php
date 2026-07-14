

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
 <h1 align='center'>Event Registration</h1>

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
    <label>Enter Event Title </label>
    <input type="text" name='txtTitle'>
    <label>Enter Event Detail</label>
    <textarea rows="5" name='txtDetail'></textarea>
    <label>Choose Event Image</label>
    <input type="file" name='flImage'>
    <label>Want to show in first page ? </label>
    <input type="checkbox" name='chkFirstpage' value='1'>
   
   
    <label>Enter Event Date</label>
    <input type="date" name='txtDate'>
    <div class='btnGroup'>
        <input type='submit' value='insert' name="actype"><input type='reset' value='Cancel'>
    </div> <!--end of btnGroup-->

</form>

</div><!--end of trustForm-->
      </div>  

    </div><!--end of parentAdmin--> 
    
</div><!--end of container--> 
<?php 
   require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/footer.php");
?>