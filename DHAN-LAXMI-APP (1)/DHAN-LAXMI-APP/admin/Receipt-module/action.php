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
        $a=$_REQUEST["cmdmember"];
        //echo("$_REQUEST["cmdmember"]");    
           $b=$_REQUEST["txtContact"];    
             $z=$_REQUEST["txtEmail"];
           $c=$_REQUEST["txtDate"];    
           $d=$_REQUEST["txtUser"];    
           $e=$_REQUEST["cmbpay"];    
               
           $sql="insert into receipt_info(mem_rec_id,receipt_amount,receipt_purpose,receipt_remark,
           payment_mode,receipt_date) values('$a','$b','$z','$d','$e','$c')";
           mysqli_query($con,$sql);

           header("location:receipt.php?resmsg=1");  
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