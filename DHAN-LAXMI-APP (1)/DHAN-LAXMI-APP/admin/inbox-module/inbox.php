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
      <?php
      if(isset($_REQUEST['reqmes'])){

        echo("<div id='reqMessage'>");
        if(($_REQUEST['reqmes'])=='1'){
          echo("Complain has been deleted");
        }
        elseif (($_REQUEST['reqmes']==2)) {
          echo("Complain been updated");
        }
        elseif (($_REQUEST['reqmes']==3)) {
          echo("Complain has been inserted");
        }
        echo("</div>");
      
      }
      ?>
        <h1 class="heading">Complains Admin</h1>
        <?php
        // echo("<a href='addcomplaint.php' class='add'>Add</a>");
         require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/dbconnect.php");
         $rsmember=mysqli_query($con,"select * from complains_info,member_info where mem_name=complain_member_id  order by complain_id desc");

         echo("<table border=1>");
         echo("<tr><th>Name</th><th>Subject</th><th>Details</th><th>Action</th></tr>");

         while($row=mysqli_fetch_array($rsmember))
            {
            $id=$row["complain_id"];
           
               
            echo("<tr>"); 
            echo("<td>");
            echo($row["mem_name"]);
            echo("</td>");

            echo("<td>");
            echo($row["complain_subject"]);
            echo("</td>");
            echo("<td>");
            echo($row["complain_subject"]);
            echo("</td>");
            
           
            echo("<td>");
              echo("<a href='compose.php' class='edit'>compose</a>");
              

            echo("</td>");
            echo("</tr>"); 
         }



         echo("</table>");
         

        
        
        ?>


    </div><!--end of rightAdmin--> 
      
  </div><!--end of parentAdmin--> 
   


</div><!--end of container--> 
<?php 
  require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/footer.php");
?>