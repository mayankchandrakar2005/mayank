<?php 
 require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/header.php");
  $con=mysqli_connect("127.0.0.1","root","");
  mysqli_select_db($con,"DHAN-LAXMI-APP");
?>
<div id="container">
    <div id='parentAdmin'>
      <div id='leftSide'>
        
        <?php 
             include("../adminMenu.php");
        ?>
      </div>
      <div id='rightSide'>  
        <div id="container">
 <h1>Receipt</h1>

  <div class="trustForm">
    <?php 
      if(isset($_REQUEST['resmsg']))
        {
          echo("<div id='resMessage'>");
            if($_REQUEST['resmsg']==1)
              {
                  echo("Data has been saved");
              }
          echo("</div>");
        }
    ?>
    <form method="get" action="action.php">
    
            
           
                     
        <label>select name</label>
         <select name='cmdmember'>
             
            <option>choose any member</option>
             <?php
                    $con=mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($con,"trust-app");

                  $x=mysqli_query($con,"select * from member_info order by mem_id desc");
                    while($rsq=mysqli_fetch_array($x))
                       
                        {
                            $id=$rsq['mem_id']; 

                          $y=$rsq['mem_id'];  
                          echo("<option value='$id'>");
                          echo($y.'='.$rsq['mem_name']);
                          echo("</option>");  /*constant are always written without paranthisis in php
                                                  but tags and message are always written in paranthesis.*/ 

                                        
                        }

               ?>
            
            </select>
     
    <label>Enter your amount </label>
    <input type="text" name='txtContact'>

   

    <label>Enter your purpose </label>
    <input type="text" name='txtEmail'>
     <label>Enter News Date</label>
    <input type="date" name='txtDate'>
    <label>Enter remark </label>
    <input type="text" name='txtUser'>
     <label>payment mode </label>
     <select name="cmbpay">
     <option>upi</option>
     <option>cash</option>
     <option>card</option>
  

   
    <div class='btnGroup'>
        <input type='submit' value='insert' name="actype"><input type='reset' value='Cancel'>
    </div> <!--end of btnGroup-->

</form>

</div><!--end of trustForm-->
      </div>  

    </div><!--end of parentAdmin--> 
    
</div><!--end of container--> 
<?php 
   require_once($_SERVER["DOCUMENT_ROOT"] . "DHAN-LAXMI-APP/include/footer.php");
?>