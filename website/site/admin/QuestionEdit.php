<?php 

include'menu.php';
include 'connetion.php'; 

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



<table width="80%" border="1" align="center" cellpadding="2" cellspacing="0"   bgcolor="ffffff">
 
  
  <tr class=style2 padding-bottom=1ptx>
    <td width="122" ><span class="menu">id</span></td>
    <td width="186"><span class="menu">Category</span></td>
    <td width="151" ><span class="menu">Question</span></td>
    <td width="129"><span class="menu">Option A</span></td>
     <td width="67"><span class="menu">Option B</span></td>
    <td width="179" ><span class="menu">Option C</span></td>
    <td width="82" ><span class="menu">Option D</span></td>
    <td width="179" ><span class="menu">True Ans</span></td>
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
    <td >&nbsp;</td> <td >&nbsp;</td>    <td >&nbsp;</td> 
  </tr>
  <?php 
 $qry= mysql_query("select * from exam ");
  while($row=mysql_fetch_array($qry))
	{
		
  $id=$row['id'];
  $cat=$row['category'];
	 $que=$row['que'];
	 $ans1=$row['ans1'];
	 $ans2=$row['ans2'];
	 $ans3=$row['ans3'];
	 $ans4=$row['ans4'];
	 $true=$row['true'];
	 ?>
  
  <tr class=style8>
    <td  >
      <span class="data">
      <?php  echo $id; ?>
    </span></td>
    <td  >
      <span class="data">
      <?php  echo $cat; ?>
    </span></td>
    <td  >
      <span class="data">
      <?php  echo $que; ?>
    </span></td>
     
     <td >
       <span class="data">
       <?php  echo $ans1; ?>
       
    </span></td>
			<td >
       <span class="data">
       <?php  echo $ans2; ?>
    </span></td>
    <td >
       <span class="data">
       <?php  echo $ans3; ?>
    </span></td>
    <td >
       <span class="data">
       <?php  echo $ans4; ?>
    </span></td>
     <td >
       <span class="data">
       <?php  echo $true; ?>
    </span></td>
     
       
    <td  class="df"><span class="data"><a href="updatequestion.php?<?php echo "id=" ,$id; ?>"><img src="images/Cut.gif" width="20"></a></span></td>
    <td width="36"class="df"><a href="questiondelete.php? <?php echo "id=",$id;?>"><img src="images/x.gif" width="28" height="21" alt="delete"></a></td>
  </tr>
  
  
  <?php 
 
	}
 ?>
 
</table> <br/><br/><br/><br/><br/><br/><br/><br/><br/>
</body>
</html>