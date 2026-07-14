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
        mysqli_query($con,"delete from news_info  where news_id=$id") or die("query error");
        header("location:news.php?resmsg=2") ;       
        }
   else  if($_REQUEST["actype"]=="insert")
    {
        $a=$_REQUEST["txtTitle"];    
           $b=$_REQUEST["txtDetail"];    
           $c=$_REQUEST["txtDate"];    
           $sql="insert into news_info(news_title,news_desc,news_date,reg_date) 
           values('$a','$b','$c',now()) ";
           mysqli_query($con,$sql);

           header("location:news.php?resmsg=1");  
        }
        else  if($_REQUEST["actype"]=="update")
    {
        $id=$_REQUEST["txtId"];
         $a=$_REQUEST["txtTitle"];    
           $b=$_REQUEST["txtDetail"];    
           $c=$_REQUEST["txtDate"];   
           $sql="update news_info set news_title='$a',news_desc='$b',news_date='$c' where news_id='$id'";
           mysqli_query($con,$sql);

           header("location:news.php?resmsg=3");  
        }
       




?>