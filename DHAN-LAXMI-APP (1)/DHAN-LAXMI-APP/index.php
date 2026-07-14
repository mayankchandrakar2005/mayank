<?php 
  
  include("include/header.php");
?>
<div id="container">
<?php 
  include("include/menubar.php");
?>

<div style="width:100%; margin-top:20px;">
    <iframe
        src="https://s.tradingview.com/widgetembed/?symbol=NSE:NIFTY&interval=D&theme=light&style=1"
        width="100%"
        height="500"
        frameborder="0">
    </iframe>
</div>

  <div style="padding:5px; text-align:right;">
    <a href='login.php'>Login</a>  | <a href='register.php'>New Member</a>

  </div>

  

</div><!--end of container--> 
<?php 
  include("include/footer.php");
?>