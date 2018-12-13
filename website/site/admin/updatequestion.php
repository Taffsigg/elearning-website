<?php 

include'menu.php';
include '../_import/connetion.php'; 


$id=$_GET['id'];
echo $id;

if(isset($_POST['button']))
{
echo "hello world";
$qry= mysql_query( "update  exam set category='".$_POST['cat']."' , que='".$_POST['ques']."',ans1='".$_POST['ansa']."',ans2='".$_POST['ansb']."',ans3='".$_POST['ansc']."',ans4='".$_POST['ansd']."',true='".$_POST['right']."'  where id='".$id."'");




echo '<script>
 alert ("update sussfully...");
 </script>';
redirecturl('QuestionEdit.php');
}	

?>




<!DOCTYPE html>
<head>

<title>MemberEdit</title>
<style type="text/css">
.form1 table tr td {
	text-align: center;
}
</style>
</head>

<body>



 <?php 
 
 $id=$_GET['id'];
 $qry= mysql_query("select * from exam where id='".$id."'");
  while($row=mysql_fetch_array($qry))
	{
		
  
	 $category=$row['category'];
	 $que=$row['que'];
		 $ans1=$row['ans1'];
		   $ans2=$row['ans2'];
		    $ans3=$row['ans3'];
			 $ans4=$row['ans4'];
			  $true=$row['true'];
			   

	}


?>


<table width="423" border="0" align="center" cellpadding="1" cellspacing="0">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <table width="85%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="38%">&nbsp;</td>
          <td width="62%">&nbsp;</td>
        </tr>
        <tr>
          <td>Category</td>
          <td><label>
            <input type="text" name="cat" id="cat" value="<?php echo $category;?>" />
          </label></td>
        </tr>
        <tr>
          <td>question</td>
          <td><label>
            <input type="text" name="ques" id="que" value="<?php echo $que;?>" />
          </label></td>
        </tr>
        <tr>
          <td>option A</td>
          <td><label>
            <input type="text" name="ansa" id="ansa" value="<?php echo $ans1;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>Option B</td>
          <td><label>
            <input type="text" name="ansb" id="ansb" value="<?php echo $ans2;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>Option C</td>
          <td><label>
            <input type="text" name="ansc" id="ansc" value="<?php echo $ans3;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>Option d</td>
          <td><label>
            <input type="text" name="ansd" id="ansd" value="<?php echo $ans4;?>"/>
          </label></td>
        </tr>
         <tr>
          <td>True ans</td>
          <td><label for="right"></label>
            <input type="text" name="right" id="right" value="<?php echo $true;?>"></td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" name="button" id="button" value="UpDate" />
          </label></td>
        </tr>
        <tr>
          <td></td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</body>
</html>