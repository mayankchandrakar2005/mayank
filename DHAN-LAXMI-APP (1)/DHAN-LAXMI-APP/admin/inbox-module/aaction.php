<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/DHAN-LAXMI-APP/include/dbconnect.php");

if($_REQUEST["actype"]=="status"){
    $id = $_REQUEST["mid"];
    mysqli_query($con,"update member_info set approve_status = not approve_status where mem_id=$id") or die("error in the status query");
    header("location:members.php");
}
else if($_REQUEST["actype"]=="delete"){
    $id = $_REQUEST["mid"];
    mysqli_query($con,"delete from complains_info where complain_id=$id")or die("error in the delete query");
    header("location:complaint.php?reqmes=1");


}
else if($_REQUEST["actype"]=="update"){
    $a = $_REQUEST["txtName"];
    $b = $_REQUEST["txtAddress"];
    $c = $_REQUEST["txtContact"];
    $d = $_REQUEST["txtEmail"];
    $e = $_REQUEST["txtUser"];
    $f = $_REQUEST["txtPassword"];

   
    $id=$_REQUEST["txtId"];

    // $sql = "update students set sName = '$b' , sAddress = '$c' , sMobile = '$d' where Sid = '$a' ";

    $sql = "update member_info set mem_name='$a',mem_address='$b',mem_contact='$c',mem_email='$d',user_name='$e',user_pass='$f' where mem_id=$id " or die(" error in the insert query");

           mysqli_query($con,$sql);

           header("location:members.php?reqmes=2");
    


    
}
else if($_REQUEST["actype"]=="insert")
    {
    $a = $_REQUEST["complainid"];
    $b = $_REQUEST["txtName"];
    $c = $_REQUEST["txtAddress"];
    $z = $_REQUEST["cmdmember"];
   
    




     $sql = "insert into complains_info(complain_member_id,complain_subject,complain_detail,reg_date,admin_name) values('$a','$b','$c',now(),'$z')" ;

           mysqli_query($con,$sql)or die(" error in the insert query");

         //  header("location:complaint.php?reqmes=3");
    
}


?>