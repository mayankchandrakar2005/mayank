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
                  echo("Member has been inserted");
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
        <h1> Member List </h1><a href="addmem.php">Add Member</a>
        </div>
        <?php 
           require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");
           $rsmember=mysqli_query($con,"select * from member_info  order by mem_id desc");
           echo("<table border='1'>");
           echo("<tr><th>Name</th><th>Address</th><th>Contact</th><th>Mem Status</th><th>Action</th></tr>");
           while($row=mysqli_fetch_array($rsmember))
            {
                $id=$row["mem_id"];
                echo("<tr>");
                echo("<td>");
                echo($row["mem_name"]);
                echo("</td>");
                echo("<td>");
                echo($row["mem_address"]);
                echo("</td>");
                echo("<td>");
                echo($row["mem_contact"]);
                echo("</td>");
                echo("<td>");
                
                if($row["approve_status"]==0)
                    echo("<a href='action.php?mid=$id&actype=status' class='enable'>Enable</a>");
                else 
                    echo("<a href='action.php?mid=$id&actype=status' class='disable'>Disable</a>");


                echo("</td>");
                echo("<td>");
                echo("<a href='action.php?mid=$id&actype=delete' class='disable'>Delete</a>");
                echo("<a href='editmem.php?mid=$id' class='disable'>Edit</a>");
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