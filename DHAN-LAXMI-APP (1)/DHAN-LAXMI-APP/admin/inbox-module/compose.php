<?php 
  require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/header.php");
?>

<div id="container">
  <div id="parentAdmin">
    <div id="leftAdmin">
      <?php
       require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/admin/adminMenu.php");
      ?>
    </div><!--end of leftAdmin--><div id="rightAdmin">
        <h1 class="heading">Add New Complaints</h1>
        <?php
       
         require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/dbconnect.php");
        $nm = $_SESSION["uname"];
          $rsmember = mysqli_query($con,"SELECT * FROM member_info where user_name='$nm'") or die("query error");
          $rowmem = mysqli_fetch_array($rsmember);
          $memid = $rowmem['mem_name'];

         
        
        
        ?>
        <div class="trustForm">
        <!-- <?php 
        // if(isset($_REQUEST['reqmes'])){

        //   echo("<div id='reqMessage'>");

        //   if($_REQUEST['reqmes']==1){
        //         echo("Data has been registered");
        //     }
          
        //   echo("</div>");
        // }
        ?> -->

        <form action="aaction.php" method="get">

      
            <input type="hidden" name="complainid" value="<?=$memid?>">

            

            <label for="">Enter your Subject</label>
            <input type="text" name="txtName">

            <label for="">Enter your complaint detail</label>
            <textarea name="txtAddress" rows = '5'></textarea>

             


            <div class="btnGroup">
                <button type="submit" value="insert" name="actype" >Ok</button> <button type="reset" value="Cancel">Cancel</button>
            </div><!--  end of btnGroup div -->
        </form>
    </div><!--  end of trustForm div -->


    </div><!--end of rightAdmin--> 
      
  </div><!--end of parentAdmin--> 
   


</div><!--end of container--> 
<?php 
  require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/footer.php");
?>



