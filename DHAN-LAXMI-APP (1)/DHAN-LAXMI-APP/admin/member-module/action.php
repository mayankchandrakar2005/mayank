<?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/dbconnect.php");
 if($_REQUEST["actype"]=="status")
    {
        $id=$_REQUEST["mid"];
        mysqli_query($con,"update member_info set approve_status=not approve_status where mem_id=$id") or die("query error");
        header("location:members.php") ;       
        }
  else  if($_REQUEST["actype"]=="delete")
    {
        $id=$_REQUEST["mid"];
        mysqli_query($con,"delete from member_info  where mem_id=$id") or die("query error");
        header("location:members.php?resmsg=2") ;       
        }
   else  if($_REQUEST["actype"]=="insert")
    {
        $a=$_REQUEST["txtName"];    
           $b=$_REQUEST["txtAddress"];    
           $c=$_REQUEST["txtContact"];    
           $d=$_REQUEST["txtEmail"];    
           $e=$_REQUEST["txtUser"];    
           $f=$_REQUEST["txtPassword"];    
           $sql="insert into member_info(mem_name,mem_address,mem_contact,mem_email,
           user_name,user_pass,user_type,approve_status,reg_date) values('$a','$b','$c',
           '$d','$e','$f','user','1',now()) ";
           mysqli_query($con,$sql);

           header("location:members.php?resmsg=1");  
        }
        else  if($_REQUEST["actype"]=="update")
    {
        $id=$_REQUEST["txtId"];
        $a=$_REQUEST["txtName"];    
           $b=$_REQUEST["txtAddress"];    
           $c=$_REQUEST["txtContact"];    
           $d=$_REQUEST["txtEmail"];    
           $e=$_REQUEST["txtUser"];    
           $f=$_REQUEST["txtPassword"];    
           $sql="update member_info set mem_name='$a',mem_address='$b',mem_contact='$c',mem_email='$d',
           user_name='$e',user_pass='$f' where mem_id='$id'";
           mysqli_query($con,$sql);

           header("location:members.php?resmsg=3");  
        }
       




?>