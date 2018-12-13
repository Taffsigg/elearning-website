


<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Untitled Document</title>

<?php include 'include/links.php'; ?>
 <link rel='stylesheet' id='camera-css'  href='_css/camera.css' type='text/css' media='all'> 
 <!-- Slide Show 		-->
    
<!--
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
	color: #000000;
}
.par {
	text-align: right;
}
</style>
<script type="text/javascript" src="jquery-1.3.2.js"></script>     
<script type="text/javascript">     
$(document).ready(function() {     
$('.cat').change(function(){  

   
if($('.cat').val() === 'certification')     
   {     
   $('.certification').show();      
   }     
else    
   {     
   $('.certification').hide();        
   }     

   

      
if($('.cat').val() === 'other')     
   {     
   $('.other').show();      
   }     
else    
   {     
   $('.other').hide();        
   }     



   if($('.cat').val() === 'free')     
   {     
   $('.free').hide();      
   }     
else    
   {     
   $('.free').hide();        
   }     

   
   
   });     
});     
</script>  
-->   
 
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
<table width="1000px" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="">
  <tr>
    <td width="700">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="128"><img src="_images/logo.png"  id="headerimage" width="300" height="100"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="nav"> <?php include '_import/headebar.php';?></td>
      </tr>
    </table></td>
  </tr>
 

  <tr>
    <td height="19"><table width="970" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="99%" height="554" align="center" valign="middle">
		
		
			<h2><strong> Submit Details</strong></h2>
      <form action="uploadimage/signupuser.php" method="post" enctype="multipart/form-data" name="form1" onSubmit="return check();">
       <table width="525" border="0" align="center" class="bordered" >
       <tr>
           <td width="204" align="center" valign="middle" class="bordered"><strong>Login Id</strong></td>
           <td><input type="text" name="lid"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered"   ><strong>Password</strong></td>
           <td><input type="password" name="pass"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered"  ><strong>Confirm Password </strong></td>
           <td><input name="cpass" type="password" id="cpass"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered" ><strong>Name</strong></td>
           <td><input name="name" type="text" id="name"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered" ><strong>Address</strong></td>
           <td> <textarea name="address" id="address"></textarea></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered" ><strong>City</strong></td>
           <td><input name="city" type="text" id="city"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered" ><strong>Phone</strong></td>
           <td><input name="phone" type="text" id="phone"></td>
         </tr>
         <tr>
           <td align="center" valign="middle" class="bordered" ><strong>E-mail</strong></td>
           <td><input name="email" type="text" id="email"></td>
         </tr>
         
         
         
         
        <tr>
              <td class="bordered">Categary</td>
              <td><label>
                <select name="cat" class="cat">
                <option  selected="selected" value="sel">select</option>
	                    <option value="other">other</option>
              <option value="certification">certification</option>
              <option value="free">freeTrial</option>

                </select>
              </label></td>
            </tr>
           <tr>
                 <td class="bordered"><span class="certification"> subject</span></td>
             <td><label>
                <select name="subcats" class="certification" >
				
                  <option value="c">c</option>
                  <option value="c++">c++</option>
                  <option value="java">java</option>
                </select>
              </label></td>
            </tr>
	<tr>
              <td class="bordered"> <span class="other" >Subscription Plan</span> </td>
              <td><label>
                <select name="subcato" class="other">
			<option value="php">php</option>
                <option value="photoshop">photoshop</option>
              </select>
              </label></td>
            </tr>
            
          <tr>
                 <td class="bordered"><span class="free"> Free Trial</span></td>
             <td><label>
                <select name="subcatfree" class="free" >
				<option value="trial">free</option>
               </select>
              </label></td>
            </tr>
            
            
                 
			<tr>
         <td class="bordered"><strong>Upload photo</strong></td>
                  <td width="305"><label for="image"></label>
                  <input name="image" type="file" class="bordered" id="image"></td>
               
              </tr>
         
          
           <td colspan="2" class="formlabel"><input type="submit" name="Submit" value="Signup">
           </td>
           </tr>
       </table>
     </form>


</td></tr>

        
         </table></td>
  </tr>
  
  
  <!-- TemplateEndEditable -->
  <tr>
    <td height="19"><?php include 'include/footer.php';?>
    </td>
  </tr>
  <tr>
   
   
   
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
