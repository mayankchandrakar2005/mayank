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
        <h1> News List </h1><a href="addnews.php">Add News</a>
        </div>
        <?php 
           require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");
           $rsmember=mysqli_query($con,"select * from news_info  order by news_id desc");
           echo("<table border='1'>");
           echo("<tr><th>Title</th><th>Description</th><th>News Date</th><th>Action</th></tr>");
           while($row=mysqli_fetch_array($rsmember))
            {
                $id=$row["news_id"];
                echo("<tr>");
                echo("<td>");
                echo($row["news_title"]);
                echo("</td>");
                echo("<td>");
                echo($row["news_desc"]);
                echo("</td>");
                echo("<td>");
                echo($row["news_date"]);
                echo("</td>");
                echo("<td>");
                echo("<a href='action.php?mid=$id&actype=delete' class='disable'>Delete</a>");
                echo("<a href='editnews.php?mid=$id' class='disable'>Edit</a>");
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