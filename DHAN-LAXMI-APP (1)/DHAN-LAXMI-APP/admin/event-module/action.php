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
        mysqli_query($con,"delete from events_info  where event_id=$id") or die("query error");
        header("location:events.php?resmsg=2") ;       
        }
   else  if($_REQUEST["actype"]=="insert")
    {
        $a=$_REQUEST["txtTitle"];    
           $b=$_REQUEST["txtDetail"];  
           
           $c=$_FILES["flImage"];

           $tm=time();

           $nm=$c["name"];

           $imgname=$tm . "_" . $nm;

           move_uploaded_file($c["tmp_name"],$_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP\\uploads\\$imgname");

           $d=$_REQUEST["chkFirstpage"];

           $e=$_REQUEST["txtDate"];    
           $sql="insert into events_info(event_title,event_desc,event_date,img_path,first_page,reg_date) 
           values('$a','$b','$e','$imgname','$d',now()) ";
           mysqli_query($con,$sql);

           header("location:events.php?resmsg=1");  
        }
        else  if($_REQUEST["actype"]=="update")
    {
          $id=$_REQUEST["txtId"];
           $a=$_REQUEST["txtTitle"];    
           $b=$_REQUEST["txtDetail"];  
            $d=$_REQUEST["chkFirstpage"];
           $e=$_REQUEST["txtDate"];    
           $c=$_FILES["flImage"];

           if($c["name"]!="")
            {
           $tm=time();
           $nm=$c["name"];
           $imgname=$tm . "_" . $nm;
           move_uploaded_file($c["tmp_name"],$_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP\\uploads\\$imgname");
           $sql="update events_info set img_path='$imgname', first_page='$d',event_title='$a',event_desc='$b',event_date='$c' where event_id='$id'";
   
           }
            else
                {
                   $sql="update events_info set first_page='$d',event_title='$a',event_desc='$b',event_date='$c' where event_id='$id'";
   
                }
           

           
           mysqli_query($con,$sql);

           header("location:events.php?resmsg=3");  
        }
       




?>