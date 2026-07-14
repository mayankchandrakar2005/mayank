<?php 
  
  include("include/header.php");
?>
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
    <form method="get" action="memaction.php">
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
        <input type='submit' value='Add' name="btnType"><input type='reset' value='Cancel'>
    </div> <!--end of btnGroup-->

</form>

</div><!--end of trustForm-->





</div><!--end of container--> 
<?php 
  include("include/footer.php");
?>