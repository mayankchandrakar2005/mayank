<?php

$con=mysqli_connect("127.0.0.1","root","") or die("Database connection error") ;

mysqli_select_db($con,"trust-app") or die("Database Selection Error");

@session_start();

?>