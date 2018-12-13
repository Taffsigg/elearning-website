
<?php
include '_import/connetion.php';

?>


<?php

 	
if(isset($_POST['submit']))
 {
$qry="INSERT INTO  `websitedata`.`register1` (
`name` ,
`email` ,
`education` ,
`address` ,
`phoneno` ,
`password`
)
VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['edu']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['password']."'
  
);";
mysql_query($qry);

echo '<script>
 alert("thank for registration");
 </script>';
 	
}
else echo "no";



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>

<link href="_css/stylesheet.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="_css/horizontalaccordion.css" type="text/css" />

<link rel="stylesheet" href="_css/style.css" type="text/css" media="screen">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/forms.js"></script>


<script>
$(function(){
	$('#contact-form').forms({ownerEmail:'#'});
});
</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->


<!--   horzont according		-->

</head>

<body>
<table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="">
  <tr>
    <td width="700">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="128"><img src="_images/e_learning.jpg" width="993" height="180"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="nav">  <ul >
<li><a href="#">Home</a></li>
<li><a href="#">Courses</a>
        <ul>
        
        
        <li><a href="#">Photography</a></li>
        <li><a href="#">Certification Course</a>
                <ul>
                <li><a href="#">C</a></li>
                <li><a href="#">c++</a></li>
                <li><a href="#">java</a></li>
                
               </ul>
        </li>
        <li><a href="#">Web Devloper</a></li>
        
       
        </ul>
</li>
<li><a href="#">Register</a>

</li>


<li><a href="#">Free Trial</a></li>
<li><a href="#">Online Exam</a></li>
<li><a href="#">Project Submision</a></li>
<li><a href="#">Downloads</a></li>


<li><a href="#"> Support</a>
        <ul>
        <li><a href="#">How to use site</a></li>
        <li><a href="#">ask questions</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">About Us</a></li>
          <li><a href="#">Send Feedback</a></li>
       
       
        </ul>
</li>

</ul> </td>
      </tr>
    </table></td>
  </tr>
 
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
  <tr>
   
  </tr>
 
  
  <tr>
    <td height="19"><form name="form1" method="post" action="">
      <table width="66%" border="0" cellpadding="2" cellspacing="0" class="signup">
        <tr>
          <td width="24%" class="signup">NAME</td>
          <td width="76%"><label for="name"></label>            <input name="name" type="text" id="name" tabindex="10" value=""></td>
        </tr>
        <tr>
          <td class="signup">EMAIL</td>
          <td><label for="email"></label>
            <input type="text" name="email" id="email" tabindex="20"></td>
        </tr>
        <tr>
          <td class="signup">ADDRESS</td>
          <td><label for="address"></label>
            <input type="text" name="address" id="address" tabindex="30"></td>
        </tr>
        <tr>
          <td class="signup">CONTACT NO</td>
          <td><label for="phone"></label>
            <input type="text" name="phone" id="phone" tabindex="40"></td>
        </tr>
        <tr>
          <td class="signup">EDUCATION</td>
          <td><label for="edu"></label>
            <input type="text" name="edu" id="edu" tabindex="50"></td>
        </tr>
        <tr>
          <td class="signup">PASSWORD</td>
          <td><label for="password"></label>
            <input type="text" name="password" id="password" tabindex="60"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="submit" id="submit" value="Submit" tabindex="70"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
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
    <td height="19"> <div class="main">
        <header>
        <nav class="menu-top">
        <ul class="main-ul">
        <li class="test"><a href="#"><span>Home</span></a></li>
        <li><a href="#"><span>Online Exam</span></a></li>
        
        <li><a href="#"><span>Gallery</span></a></li>
        <li><a href="#"><span>project Submission</span></a></li>
        <li><a href="#"><span>Register</span></a></li>
        <li><a href="#"><span>Downloads</span></a></li>
        <li><a href="#"><span>Alumini</span></a></li>
        <li><a href="#"><span>Portfolio</span></a></li>
        </ul>
        </nav>
         
        
</header>
        </div>
    </td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
  </tr>
</table>
</body>
</html>
