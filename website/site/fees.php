<?php 
include_once('jcart/jcart.php');
session_start();
include '_import/connetion.php';
 
?>
<html>
<head>
<title></title>

</head>
<body>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
              <td height="10"><?php $jcart->display_cart();?></td>
            </tr>
            
            <tr> <td>   <table cellspacing="2" cellpadding="2" width="100%" border="0">
					   <?php $sql= "SELECT * FROM  subject1";
						$result = mysql_query($sql);
						?>
						
	            <tr>
	              <?php $i=1;
						 while($row = mysql_fetch_array($result))
						  {
				    	 //if($row['category']=="mobile" && $row['subcategory']=="samsung")
						 //{
						 ?>
						      <form method="post" action="">
	              <td valign="top" align="left">
	<table width="180" height="200" border="0" cellpadding="0" cellspacing="0" class="brd">
                    <tr>
                      <td align="center" valign="middle">
					
					  </td>
                    </tr>
                  </table>
				  <input type="hidden" name="jcartToken" value="<?php echo $_SESSION['jcartToken'];?>" />
				  <input type="hidden" name="my-item-id" value="<?php echo $row['id'];?>" />
	              <p><?php echo $row['productname'];?><br>
			          <strong>Fees:</strong> <?php echo $row['price'];?><br>
	                  		
						<input type="hidden" name="name" value="<?php echo $row['id'];?>" />
						<input type="hidden" name="my-item-name" value="<?php echo $row['productname'];?>" />
						<input type="hidden" name="my-item-price" value="<?php echo $row['price'];?>" />
						<input type="hidden" name="my-item-url" value="" />
							<label><strong>Qty: </strong><input type="text" name="my-item-qty" value="1" size="3" /><br></label>
						<input type="submit" name="my-add-button" value="Add to cart" class="button" />
					</form>
				 <label>
	                    
</strong>
	                
					
					
					  <?php
				if($i%3==0)
				{
				echo "</tr><tr>";
				}
				$i++;?>
	                  <?php } ?>
                       </tr> 
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
			  <script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>
                        
                        
			</table></td></tr>

    </table></td>
  </tr>
</table>
</body>
</html>
