<?php 
  
  require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/header.php");
?>
<div id="container">
    <div id='parentAdmin'>
      <div id='leftSide'>
        
        <?php 
             include("userMenu.php");
        ?>
      </div>
      <div id='rightSide'>
         <?php 
      if(isset($_REQUEST['resmsg']))
        {
          echo("<div id='resMessage'>");
            if($_REQUEST['resmsg']==1)
              {
                  echo("receipt has been inserted");
              }
              else if($_REQUEST['resmsg']==2)
              {
                  echo("Member has been deleted");
              }
            else if($_REQUEST['resmsg']==3)
              {
                  echo("Member has been updated");
              }
            
            
          echo("</div>");
        }
    ?>  
        <div id="addmember">
        <h1> Stock Histroy</h1>
        </div>
        <?php 
           require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");

           $nm=$_SESSION["uname"];
           
           $rsmember=mysqli_query($con,"select * from member_info,receipt_info where user_name='$nm'"   );
           $rowmem=mysqli_fetch_array($rsmember);
           $memid=$rowmem['mem_id'];
           $rsmem=mysqli_query($con,"select * from receipt_info where mem_rec_id=$memid order by receipt_id desc");
           echo("<table border='1'>");
           echo("<tr><th>AMOUNT</th><th>METHOD</th><th>PURPOSE</th><th>STOCK ID</th><th>Action</th></tr>");
           while($row=mysqli_fetch_array($rsmember))
            {
               $id=$row["receipt_id"];
                echo("<tr>");
                echo("<td>");
                echo($row["receipt_amount"]);
                echo("</td>");
                echo("<td>");
                echo($row["payment_mode"]);
                echo("</td>");
                echo("<td>");
                echo($row["receipt_purpose"]);
                echo("</td>");
                
                echo("<td>");
                echo($row["receipt_remark"]);
                echo("</td>");
                
               
               
                echo("<td>");
                echo("<a href='action.php?mid=$id&actype=delete' class='disable'>Delete</a>");
                
                echo("</td>");

                echo("</tr>");

            }
            echo("</table>");


       ?>


      </div>  

    </div><!--end of parentAdmin--> 
    
</div><!--end of container--> 
<?php 
  require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/footer.php");
?>
        