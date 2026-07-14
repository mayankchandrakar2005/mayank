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
        <h1> Receipt List </h1><a href="addrec.php">Add RECEIPT</a>
        </div>
        <?php 
           require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");
           $rsmember=mysqli_query($con,"select * from member_info,receipt_info where mem_id=mem_rec_id order by receipt_id desc");
           echo("<table border='1'>");
           echo("<tr><th>member_name</th><th>receipt_purpose</th><th>receipt_date</th><th>receipt_amount</th><th>Action</th></tr>");
           while($row=mysqli_fetch_array($rsmember))
            {
               $id=$row["receipt_id"];
                echo("<tr>");
                echo("<td>");
                echo($row["mem_name"]);
                echo("</td>");
                echo("<td>");
                echo($row["receipt_purpose"]);
                echo("</td>");
                echo("<td>");
                echo($row["receipt_date"]);
                echo("</td>");
                
                echo("<td>");
                echo($row["receipt_amount"]);
                echo("</td>");
                
               
               
                echo("<td>");
                echo("<a href='action.php?mid=$id&actype=delete' class='disable'>Delete</a>");
                echo("<a href='editrec.php?mid=$id' class='disable'>Edit</a>");
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
        