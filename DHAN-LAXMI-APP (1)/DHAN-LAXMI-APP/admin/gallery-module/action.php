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
        mysqli_query($con,"delete from gallery_info  where gallery_id=$id") or die("query error");
        header("location:gallery.php?resmsg=2") ;       
        }
   else  if($_REQUEST["actype"]=="insert")
    {
        $a=$_REQUEST["txtTitle"];    
          
           
           $c=$_FILES["flImage"];

           $tm=time();

           $nm=$c["name"];

           $imgname=$tm."_".$nm;

             $path = $_SERVER["DOCUMENT_ROOT"] . "/trust-app/uploads/" . $imgname;

                move_uploaded_file($c["tmp_name"], $_SERVER["DOCUMENT_ROOT"] . "trust-app\\uploads\\$imgname");

          
           $sql="insert into gallery_info(gallery_title,image_path,gallery_reg_date) 
           values('$a','$imgname',now()) ";
           mysqli_query($con,$sql);

           header("location:gallery.php?resmsg=1");  
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
           move_uploaded_file($c["tmp_name"],$_SERVER["DOCUMENT_ROOT"] . "trust-app\\uploads\\$imgname");
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