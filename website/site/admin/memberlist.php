<?php 

include'menu.php';
include '/connetion.php'; 

?>

<!DOCTYPE html>
<head>

<title>Member list</title>
<link rel="stylesheet" type="text/css" href="css/search.css"/>

<style type="text/css">
.menubar {
	color: #333;
}
.menu {
	color: #000;
}
.menu {
	color: #333;
}
.data {
	color: #000;
}
 
 a
{
text-decoration:none;
color:#F00;
}
 a:hover {
	 color:#00F;
 }


.style2 {
	color: #990000;
	font-weight: bold;
	padding-bottom: 5em;
}
.style8 {
	color: #6633CC;
	font-weight: bold;
}


</style>
</head>
<body>


<p>
  <form class="form-wrapper cf">
        <input type="text" placeholder="Search here..." required>
        <button type="submit">Search</button>
    </form></p>



<table width="50%" border="1" align="center" cellpadding="0" cellspacing="0"  align=center bgcolor="ffffff">
 
  
  <tr class=style2 padding-bottom=1ptx>
    <td width="122" ><span class="menu">User_id</span></td>
    <td width="186"><span class="menu">Login Name</span></td>
    <td width="151" ><span class="menu">Password</span></td>
    <td width="129"><span class="menu">Address</span></td>
     <td width="67"><span class="menu">City</span></td>
    <td width="179" ><span class="menu"> ContactNO</span></td>
    <td width="82" ><span class="menu">email</span></td>
    <td width="179" ><span class="menu"> Course Type</span></td>
    <td width="82" ><span class="menu">Subject/subscription Type</span></td>
        <td width="82" ><span class="menu">Image</span></td>
    <td width="69" ><span class="menu">Edit</span></td>
    <td><span class="menu">Delete</span></td>
  </tr>
  <tr>
    <td > </td>
    <td >&nbsp;</td><td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td>
    <td >&nbsp;</td> <td >&nbsp;</td>    <td >&nbsp;</td> <td >&nbsp;</td>
    <td>&nbsp;</td> <td >&nbsp;</td>
  </tr>
  <?php 
 $qry= mysql_query("select * from user ");
  while($row=mysql_fetch_array($qry))
	{
		
  $id=$row['id'];
	 $loginid=$row['login'];
	 $password=$row['pass'];
		 $name=$row['username'];
		  $address=$row['address'];
		   $city=$row['city'];
		    $phone=$row['phone'];
			 $email=$row['email'];
				$category=$row['category'];
			   $subjectorplan=$row['subjectorplan'];
				$image=$row['image'];











?>
  
  <tr class=style8>
    <td  >
      <span class="data">
      <?php  echo $id; ?>
    </span></td>
    <td  >
      <span class="data">
      <?php  echo $loginid; ?>
    </span></td>
    <td  >
      <span class="data">
      <?php  echo $password; ?>
    </span></td>
     
     <td >
       <span class="data">
       <?php  echo $address; ?>
       
    </span></td>
			<td >
       <span class="data">
       <?php  echo $city; ?>
    </span></td>
    <td >
       <span class="data">
       <?php  echo $phone; ?>
    </span></td>
    <td >
       <span class="data">
       <?php  echo $email; ?>
    </span></td>
     <td >
       <span class="data">
       <?php  echo $category; ?>
    </span></td>
     <td >
       <span class="data">
       <?php  echo  $subjectorplan; ?>
    </span></td>
     <td >
       <span class="data">
       <?php  echo  $image; ?>
    </span></td>
    
    <td  class="df"><span class="data"><a href="memberedit.php?<?php echo "id=" ,$id; ?>"><img src="images/Cut.gif" width="20"></a></span></td>
    <td width="36"class="df"><a href="delete.php? <?php echo "id=",$id;?>"><img src="images/x.gif" width="28" height="21" alt="delete"></a></td>
  </tr>
  
  
  <?php 
 
	}
 ?>
 
</table> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>