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
                  echo("Events has been inserted");
              }
              else if($_REQUEST['resmsg']==2)
              {
                  echo("Event has been deleted");
              }
            else if($_REQUEST['resmsg']==3)
              {
                  echo("Events has been updated");
              }
            
            
          echo("</div>");
        }
    ?>  
        <div id="addmember">
        <h1> Events List </h1><a href="addevent.php">Add Event</a>
        </div>
        <?php 
           require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");
           $rsmember=mysqli_query($con,"select * from events_info  order by event_id desc");
           echo("<table border='1'>");
           echo("<tr><th>Image</th><th>First Page</th><th>Title</th><th>Description</th><th>Events Date</th><th>Action</th></tr>");
           while($row=mysqli_fetch_array($rsmember))
            {
                $id=$row["event_id"];
                echo("<tr>");
                echo("<td>");
                $img="http://127.0.0.1/DHAN-LAXMI-APP//uploads//".$row["img_path"];
                
                echo("<img src='$img' width='100' height='100' border='1'>");
                echo("</td>");

                echo("<td>");
                echo($row["first_page"]);
                echo("</td>");


                echo("<td>");
                echo($row["event_title"]);
                echo("</td>");
                echo("<td>");
                echo($row["event_desc"]);
                echo("</td>");
                echo("<td>");
                echo($row["event_date"]);
                echo("</td>");
                echo("<td>");
                echo("<a href='action.php?mid=$id&actype=delete' class='disable'>Delete</a>");
                echo("<a href='editevent.php?mid=$id' class='disable'>Edit</a>");
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