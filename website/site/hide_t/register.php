<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>

<link href="_css/stylesheet.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="_css/horizontalaccordion.css" type="text/css" />




<link rel="stylesheet" href="_css/login-form.css" media="screen">

<link rel="stylesheet" href="_css/style.css" type="text/css" media="screen">
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
		
		 if(document.getElementById("date").value=="dd")
	{
		alert("Enter your dob date");
		return false;
	}
	else if(document.getElementById("month").value=="mm")
	{
		alert("Enter your dob month");
		return false;
	}
	else if(document.getElementById("year").value=="yyyy")
	{
		alert("Enter your dob year");
		return false;
	}
		
  return true;
  }
  
</script>
<!--   horzont according		-->

</head>

<body>
<table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="">
  <tr>
    <td width="700">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="128"><img src="_images/e_learning.jpg" width="966" height="180"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="97%" border="0" cellspacing="0" cellpadding="0">
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


<li><a href="#">Support</a>
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
    <td height="19"><table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="68%" height="231">
	<div class="bg">
		<div class="container_24">
			<div class="wrapper">
				<div class="grid_24 padtop33">
					<h4>Registration Form</h4>
                    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <table width="301" border="0" align="left">
         <tr>
           <td><div align="left" class="style7">Login Id </div></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td class="style7">Password</td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td class="style7">Confirm Password </td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td class="style7">Name</td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Address</td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td valign="top" class="style7">City</td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">Phone</td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td valign="top" class="style7">E-mail</td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         <tr>
         <td><strong>Date of Birth</strong></td>
                  <td width="21"><select name="date" id="date">
             

			 <option  value="dd" >dd</option>
                    <?php 
			  	   for($d=1;$d<=31;$d++)
                echo "<option value=".$d.">".$d."</option>"; ?>
                  </select>            
               <select name="month" id="month">
                  <option value="mm">mm</option>
                  <?php 
			   for($m=1;$m<=12;$m++)
                echo "<option value=".$m.">".$m."</option>"; ?>
                  </select>
               <select name="year" id="year">
                  <option  value="yyyy">yyyy</option>
                  <?php
			   for($y=1910;$y<=2012;$y++)
                echo "<option value=".$y.">".$y."</option>"; ?>
                  </select>
                  <input type="hidden" name="dob" id="dob" value="" />                  </td>
                <td>&nbsp;</td>
              </tr>
         
           <td>&nbsp;</td>
           <td><input type="submit" name="Submit" value="Signup">
           </td>
         </tr>
       </table>
     </form>


</td>
        <td width="32%"><h3 class="infoheading">
</p></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td height="217"><table width="85%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="344"></td>
        </tr>
    </table></td>
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
        <li><a href="#"><span>User Profile</span></a></li>
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
   
    <table width="95%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td> <div id="templatemo_wrapper">

	<div id="templatemo_top">
  <p class="fb">&nbsp;</p>
    	<ul id="social">
        	<li><a href="http://www.templatemo.com" target="_parent"><img src="_images/rss.png" alt="rss" width="73" height="77" /></a></li>
            <li><a href="http://www.facebook.com/templatemo" target="_parent"><img src="_images/facebook.png" alt="facebook" width="80" height="76" /></a></li>
            <li><a href="http://www.templatemo.com" target="_parent"><img src="_images/twitter.png" alt="twitter" width="74" height="77" /></a></li>
            <li><a href="#"><img src="_images/myspace.png" alt="myspace" width="74" height="80" /></a></li>
              
              
                  <li><a href="#"><img src="_images/gmail.png" alt="gmail" width="74" height="77" /></a></li>
                
              
        </ul>
    	
        
    </div></td>
  </tr>
</table>

   
</td>
  </tr>
  <tr>
    <td height="19">
</td>
  </tr><tr>
    <td height="19">
</td></td>
  </tr>
</table>
</body>
</html>
