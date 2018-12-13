<?php 
include '_import/connetion.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="_css/downlistlogin.css"/>
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});
</script>


<title>Acadmic Execellence Downloads Pdf Books Ppts All other Study material</title>

<?php include 'include/links.php'; ?>

</head>

<body>
<table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="">
   <tr>
    <td width="700">
    <table width="1000px" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="_images/logo.png"  id="headerimage" width="300" height="150"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="nav"> <?php include '_import/headebar.php'; ?> </td>
      </tr>
    </table></td>
  </tr>
 
   <tr>
    <td height="19"><table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="231">
  <table cellspacing="2" cellpadding="2" width="100%" border="0">
					   <?php $sql= "SELECT * FROM  notes";
						$result = mysql_query($sql);
						?>
						
	            <tr>
	              <?php $i=1;
						 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
						      
	              <td valign="top" align="left">
	<table width="180" height="200" border="0" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td align="center" valign="middle">
                      <div class="container">
					<div id="content">
    				<div class="post">
    				<div class="btn-sign">
<p>
        <a href="#login-box" class="login-window">Download<img border="0" src="admin/images/pdf.png" width="30" height="40"/></a></p>
        <a href="#login-box" class="login-window"><?php echo $row['name'];?><br/></a>
        </div>
		</div>
        
        
        <div id="login-box" class="login-popup">
        <p><a href="#" class="close"><img src="_images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></p>
        
    <strong> Download File</strong><br>
        </a>
          <form method="post" class="signin" action="checkuserlogin.php">
                <fieldset class="textbox">
            	<label class="username">
                <span>please Login</span>
                <input id="username"  value="" type="text" name="username" autocomplete="on" placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password"  value="" type="password" name="password" placeholder="Password">
                </label>
                <input type="submit" name="login" id="login" value="login" class="submit">
                
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
		</div>
    
    </div>
</div>

       
					  </td>
                    </tr>
                  </table>
			<?php
				if($i%4==0)
				{
				echo "</tr><tr>";
				}
				$i++;?>
	                  <?php }  ?>
                       </tr> 
                  </table></td>
                </tr>
                
              </table></td>
        </tr>
  <!-- TemplateEndEditable -->
  <tr>
    <td height="19"><?php include 'include/footer.php'; ?></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td height="19">
</td>
  </tr><tr>
    <td height="19">
</td>
  </tr>
</table>
</body>
</html>
