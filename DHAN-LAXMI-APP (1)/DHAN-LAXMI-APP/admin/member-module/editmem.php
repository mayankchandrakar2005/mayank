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
 $rsmember=mysqli_query($con,"select * from member_info where mem_id=$id");
 $row=mysqli_fetch_array($rsmember);


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
      <input type="hidden" name='txtId' value="<?=$id?>">
    <label>Enter your name </label>
    <input type="text" name='txtName' value="<?=$row['mem_name']?>">
    <label>Enter your address </label>
    <textarea rows="5" name='txtAddress'><?=$row['mem_address']?></textarea>
    <label>Enter your contact number </label>
    <input type="text" name='txtContact' value="<?=$row['mem_contact']?>">
    <label>Enter your email id </label>
    <input type="text" name='txtEmail' value="<?=$row['mem_email']?>">
    <label>Enter your user name </label>
    <input type="text" name='txtUser' value="<?=$row['user_name']?>">
    <label>Enter your password </label>
    <input type="password" name='txtPassword' value="<?=$row['user_pass']?>">
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