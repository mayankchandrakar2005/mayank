<?php 
@session_start();
include(".\include\dbconnect.php");
 
$a=$_REQUEST["txtUser"];
$b=$_REQUEST["txtPassword"];

$rsuser=mysqli_query($con,"select * from member_info where user_name='$a'");
if(mysqli_num_rows($rsuser)==0)
    {
         header("location:login.php?resmsg=1");
    }
else 
    {
        $row=mysqli_fetch_array($rsuser);
        if($row["user_pass"]==$b)
            {
                        if($row["approve_status"]==1)
                            {
                                if($row["user_type"]=="admin")
                                    {
                                        $_SESSION["uname"]=$a;
                                        $_SESSION["utype"]="admin";

                                        header("location:admin\dashboard.php");
                                          
                                    }
                                else if($row["user_type"]=="user")
                                    {
                                        $_SESSION["uname"]=$a;
                                        $_SESSION["utype"]="user";

                                       header("location:member\dashboard.php");
                                    }    

                            }
                            else 
                                {
                                   header("location:login.php?resmsg=3");
                                }
            }
            else 
                {
                    header("location:login.php?resmsg=2");
                }
    }







?>