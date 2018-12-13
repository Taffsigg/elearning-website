<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>

<link href="_css/stylesheet.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="_css/flying_menu.css" />
<script src="js/jquery-1.7.1.min.js"type="text/javascript"></script>
<script src="js/flying_menu.js" type="text/javascript"></script>
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
<style>

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}
.par {
	text-align: right;
}
</style>

<!--			Date picker						*/		-->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<!--			Date picker						*/		-->

<!--       Certification  -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>     
<script type="text/javascript">     
$(document).ready(function() {     
$('#cat').change(function(){     
if($('#cat').val() === 'certification')     
   {     
   $('#certification').show();      
   }     
else    
   {     
   $('#certification').hide();        
   }     
});     
});     

<!--       Certification  -->
</script>     






</head>

<body>

<div class="menu_wrap">
	<div class="menu_links">
      <ul>
        <li><a class="first" href="#">Home</a></li>
        <li><a href="#">User Profile</a></li>
        <li><a href="#">Free Trial</a></li>
        <li><a href="#">Links</a></li>
      </ul>
	</div>
    <div class="menu_buttons">
          <ul>
        <li><a class="first" href="#"><img src="_images/facebook.png" alt="Facebook" width="32" height="32" border="0"></a></li>
        <li><a href="#"><img src="_images/twitter.png" alt="Twitter" width="32" height="32" border="0"></a></li>
        <li><a href="#"><img src="_images/delicious.png" alt="Delicious" width="32" height="32" border="0"></a></li>
        <li><a href="#"><img src="_images/rss.png" alt="RSS" width="32" height="32" border="0"></a></li>
      </ul>
    </div>
</div>
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
    <td><table width="99%" border="0" cellspacing="0" cellpadding="0">
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
 <ul>
                <li><a href="#">Certification Course</a></li>
                <li><a href="#">Others</a></li>
                <li><a href="#">Free Trial</a></li>
                
               </ul>
</li>


<li><a href="#">Free Trial</a></li>
<li><a href="#">Online Exam</a></li>
<li><a href="#">Project Submission</a></li>
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
    <td height="19"><p class="par">Sign Up:Step 1</p></td>
  </tr>
  <tr>
    <td height="19"><table width="970" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="99%" height="554" align="center" valign="middle">
		
		
			<h2><strong> Submit Details</strong></h2>
                    <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
       <table width="767" border="1" align="center" class="bordered">
       <tr>
       <td>
    <thead>
		<tr>
       <th width="173"> Subscription Plan</th>
        <th width="220">Price (USD)</th>
    </tr>
    </thead>
    <tr>

        <td><input type="radio" name="plan" value="Monthsub"><strong>Monthly Subscription</strong></td>        
        <td>$25.00/month</td>

        
    </tr>        
     <tr>

        <td><input type="radio" name="plan" value="Monthprsub"><strong>Monthly Premium Subscription</strong></td>        
        <td>$40.00/month</td>

        
    </tr> 
   <tr>

        <td><input type="radio" name="plan" value="anulsub"><strong>Annual Subscription</strong></td>        
        <td>$250.00/month</td>

        
    </tr>   
    <tr>

        <td><input type="radio" name="plan" value="anulprsub"><strong>Annual Premium Subscription</strong></td>        
        <td>$350.00/month</td>

        
    </tr> 
   


       
         <tr>
           <td width="331" align="center" valign="middle"class="bordered"><strong>Login Id</strong></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td align="center" valign="middle"   ><strong>Password</strong></td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" ><strong>Confirm Password </strong></td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" ><strong>Name</strong></td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td align="center" valign="middle"><strong>Address</strong></td>
           <td><textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td align="center" valign="middle" ><strong>City</strong></td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" ><strong>Phone</strong></td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" ><strong>E-mail</strong></td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         
         
         
         
          <tr>
           <td align="center" valign="middle" ><strong>Categary</strong></td>
           <td> <select name="cat" id="cat">
                  <option value="free Trail">free Trail</option>
                  <option value="other">other</option>
                  <option value="certification" selected="selected">certification</option>
                </select></td>
         </tr>
         
         
          <tr>
           <td align="center" valign="middle" ><strong>Subject</strong></td>
           <td> <select name="subcat" id="certification" >
                  <option value="c">c</option>
                  <option value="c++">c++</option>
                  <option value="java">java</option>
                </select></td>
         </tr>
          <tr>
         <td><strong>Date of Birth</strong></td>
                  <td width="420"><input name="datepicker" type="text" align="center" id="datepicker"></td>
               
              </tr>
         
          
           <td colspan="2" class="formlabel"><input type="submit" name="Submit" value="Signup">
           </td>
           </tr>
       </table>
     </form>


</td>
        <td width="1%"><h3 class="infoheading">
</p></td>
        </tr>
    </table></td>
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
