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
 <h1>Member Registration</h1>

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
    <label>Enter your name </label>
    <input type="text" name='txtName'>
    <label>Enter your address </label>
    <textarea rows="5" name='txtAddress'></textarea>
    <label>Enter your contact number </label>
    <input type="text" name='txtContact'>
    <label>Enter your email id </label>
    <input type="text" name='txtEmail'>
    <label>Enter your user name </label>
    <input type="text" name='txtUser'>
    <label>Enter your password </label>
    <input type="password" name='txtPassword'>
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