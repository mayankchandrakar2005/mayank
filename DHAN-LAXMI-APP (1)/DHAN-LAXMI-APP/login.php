<?php 
  include("include/header.php");
?>
<div id="container">
 <h1>Login Form</h1>

  <div class="trustForm">
    <?php 
      if(isset($_REQUEST['resmsg']))
        {
          echo("<div id='resMessage'>");
            if($_REQUEST['resmsg']==1)
              {
                  echo("Wrong User Name");
              }
          else if($_REQUEST['resmsg']==2)
              {
                  echo("Wrong Password");
              }
          else if($_REQUEST['resmsg']==3)
              {
                  echo("Not Authorised to login, please contact to Admin");
              }
    

              echo("</div>");

        }
    ?>
    <form method="get" action="checkLogin.php">
    <label>Enter your user name </label>
    <input type="text" name='txtUser'>
    <label>Enter your password </label>
    <input type="password" name='txtPassword'>
    <div class='btnGroup'>
        <input type='submit' value='Ok'><input type='reset' value='Cancel'>
    </div> <!--end of btnGroup-->
</form>

</div><!--end of trustForm-->


</div><!--end of container--> 
<?php 
  include("include/footer.php");
?>