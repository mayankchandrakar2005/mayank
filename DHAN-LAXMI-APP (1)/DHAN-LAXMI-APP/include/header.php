

<?php
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/config.php"); 
 @session_start();
 
 ?>

<html>
<head>
<link href="<?php echo(BASE_URL); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    
    <div id="header">
        <div id="leftlogo"> <img src="<?php echo(BASE_URL); ?>assets/images/logo1s.jpg"> </div>
        <div id="title"><h1><a href='<?php echo(BASE_URL); ?>index.php'>DHAN LAXMI APP</a></h1>
                       <h3>We does everything for our society </h3>
                       <?php
                        if(isset($_SESSION["uname"]))
                            {
                                $nm=$_SESSION["uname"];
                                echo("<h5>WELCOME $nm, <a href='".BASE_URL."logout.php'>logout</a></h5>");
                            }
                            ?>
         </div>
        <div id="rightlogo"> <img src="<?php echo(BASE_URL); ?>assets/images/logo2y.jpeg"> </div>    
    </div><!--end of header-->

