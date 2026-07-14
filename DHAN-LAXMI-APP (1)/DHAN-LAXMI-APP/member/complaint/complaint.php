<?php 
  require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/header.php");
?>

<div id="container">
  <div id="parentAdmin">
    <div id="leftAdmin">
      <?php
       require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/member/userMenu.php");
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
        <h1 class="heading">Complains submitted</h1>
        <?php
        echo("<a href='addcomplaint.php' class='add'>compose</a>");
         require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/dbconnect.php");
          $nm = $_SESSION["uname"];
          $rsmember = mysqli_query($con,"SELECT * FROM member_info where user_name='$nm'") or die("query error");
          $rowmem = mysqli_fetch_array($rsmember);
          $memid = $rowmem['mem_name'];


        $rsmem = mysqli_query($con,"SELECT * FROM complains_info where complain_member_id = '$memid' ORDER BY complain_id DESC") or die("query error 2");

        

         echo("<table border=1>");
         echo("<tr><th>complain_id</th><th>admin_name</th><th>complain_member_id</th><th>complain_subject</th><th>complain_detail</th><th>reg_date</th><th>Action</th></tr>");

         while($row=mysqli_fetch_array($rsmem)){
            $id=$row["complain_id"];

            echo("<tr>"); 
            echo("<td>");
            echo($row["complain_id"]);
            echo("</td>");
            echo("<td>");
            echo($row["admin_name"]);
            echo("</td>");
            echo("<td>");
            echo($row["complain_member_id"]);
            echo("</td>");
            echo("<td>");
            echo($row["complain_subject"]);
            echo("</td>");
            echo("<td>");
            echo($row["complain_detail"]);
            echo("</td>");
            echo("<td>");
            echo($row["reg_date"]);
            echo("</td>");
            
           
            echo("<td>");
              echo("<a href='editmember.php?mid=$id ' class='edit'>print</a>");
              echo("<a href='action.php?mid=$id&actype=delete' class='delete'>Delete</a>");


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