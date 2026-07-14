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

        <form action="action.php" method="get">

      
            <input type="hidden" name="complainid" value="<?=$memid?>">

            <label>select name</label>
         <select name='cmdmember'>
             
            <option>choose any member</option>
             <?php
                    $con=mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($con,"DHAN-LAXMI-APP");

                  $x=mysqli_query($con,"select * from member_info where user_type='admin'");
                    while($rsq=mysqli_fetch_array($x))
                       
                        {
                            $id=$rsq['mem_name']; 

                          $y=$rsq['mem_id'];  
                          echo("<option value='$id'>");
                          echo($y.'='.$rsq['mem_name']);
                          echo("</option>");  /*constant are always written without paranthisis in php
                                                  but tags and message are always written in paranthesis.*/ 

                                        
                        }

               ?>
            
            </select>

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



