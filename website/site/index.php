<!doctype html>
<html>
<head>
<title>Acadmic Execellence</title>
<?php include 'include/links.php'; ?>
 <link rel='stylesheet' id='camera-css'  href='_css/camera.css' type='text/css' media='all'> 
 <!-- Slide Show 		-->
    <link rel="stylesheet" href="_css/styley.css" type="text/css" media="all" />
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
 <style>
		
		
		.fluid_container {
			margin:0;
			max-width: 100%;
			width: 85%;
			height:60%;
			alignment-adjust:middle;
		}
	</style>
 
 <!--  Slide show -->
 
</head>

<body>
<?php include 'include/flyingmenu.php'; ?>
<table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center">
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
    <td width="700">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
         <tr>
<td height="20">
</td>
      </tr>
 <tr>
<td height="128" width="100%"><?php include 'include/slideshow.php'; ?>

    </td>
      </tr>
    </table></td>
  </tr>
   <tr>
    <td height="19"></td>
  </tr>
  <tr>
    <td height="19">
    <table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30%" height="240"><div class="login-form"><h1>Members Login</h1>

	<form action="checkuserlogin.php" method="post">
    	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
		<input type="submit" name="login" id="login" value="login">
</form>

</div>
</td >   
     <td width="70%">
                </td> 
      
  <tr>
    <td height="50"></td>
  </tr>
   <td width="20%"><h3 class="infoheading">
</td>
        </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="217"><table width="100%" border="0" cellspacing="5px" cellpadding="5px">
      <tr>
        <td class="cont">
        <img src="_images/sec.png" alt="">
         <h3>Free Trial</h3> <p class="p2">
		You Can Try Our Web site free for 7 days and if U wish to continue then only pay and Become a Member You Can Try Our Web site free for 7 days and if U wish to continue then only pay and Become a Member</p>
      </td>
         <td class="cont">
        <img src="_images/sec.png" alt="">
         <h3>Watch. Listen. Practice. Learn.</h3> <p class="p2">
		You Can Try Our Web site free for 7 days and if U wish to continue then only pay and Become a Member You Can Try Our Web site free for 7 days and if U wish to continue then only pay and Become a Member</p>
      </td>
        
          <td class="cont">
        <img src="_images/sec.png" alt="">
         <h3>Cirtification Courses</h3> <p class="p2">
		Our WebSite provide Cirtification Courses in C C++ and Java. Join Our site Learn from professional Teachers .Submit Projects and after compliting Online Test you Will be Issued a Cirtificate.</p>
      </td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="19"></td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>

  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
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
