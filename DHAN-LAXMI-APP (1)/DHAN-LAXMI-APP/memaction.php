<?php
include(".\include\dbconnect.php");
if(isset($_REQUEST["btnType"]))
 {
    if($_REQUEST["btnType"]=="Add")
        {
           //insert code     
           $a=$_REQUEST["txtName"];    
           $b=$_REQUEST["txtAddress"];    
           $c=$_REQUEST["txtContact"];    
           $d=$_REQUEST["txtEmail"];    
           $e=$_REQUEST["txtUser"];    
           $f=$_REQUEST["txtPassword"];    
           $sql="insert into member_info(mem_name,mem_address,mem_contact,mem_email,
           user_name,user_pass,user_type,approve_status,reg_date) values('$a','$b','$c',
           '$d','$e','$f','user','0',now()) ";
           mysqli_query($con,$sql);

           header("location:register.php?resmsg=1");


        }
      else if($_REQUEST["btnType"]=="Delete")  
        {
             // delete code
        }
      else if($_REQUEST["btnType"]=="Update")
        {
               //update code
        }  


    }

?>