<?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/header.php");
?>
<div id="container">
    <div id='parentAdmin'>
      <div id='leftSide'>
        
        <?php 
             include("userMenu.php");
        ?>
      </div>
      <div id='rightSide'> 
        <div style="width:100%; margin-top:20px;">
    <iframe
        src="https://s.tradingview.com/widgetembed/?symbol=NSE:NIFTY&interval=D&theme=light&style=1"
        width="100%"
        height="500"
        frameborder="0">
    </iframe>
</div> 
      </div>  

    </div><!--end of parentAdmin--> 
    
</div><!--end of container--> 
<?php 
   require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/footer.php");
?>