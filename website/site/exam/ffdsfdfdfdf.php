<?php 
session_start();
include '../_import/connetion.php'; 
?>

<!DOCTYPE html>
<head>
<title>Untitled Document</title>
<?php include '../include/links.php'; ?>
<link href="../_css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
   <table cellspacing="0" cellpadding="0" width="1000px" border="0">
<tr>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td id="nav"> <?php include '../_import/headebar.php'; ?> </td>
      </tr>

				   <?php $sql= "SELECT * FROM  video";
						$result = mysql_query($sql);
						?>
						
	            <tr>
	              <?php $i=1;
						 while($row = mysql_fetch_array($result))
						  {
				    	
						 ?>
		<td valign="top" align="left">
	<table width="100%"  border="0" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td align="center" valign="middle">
                      
                 <p><?php echo $row['vcate'];?></p>    
<iframe title="YouTube video player" class="youtube-player" type="text/html" 
width="300" height="250" src="<?php  echo $row['link']  ?>"
frameborder="0" allowFullScreen></iframe>
					<p><?php echo $row['title'];?></p>    
					  </td>
                    </tr>
                  </table>
	<?php
				if($i%3==0)
				{
				echo "</tr><tr>";
				}
				$i++;?>
	                  <?php }  ?>
                      </td>
                       </tr> 
                  </table></td>
                </tr>
               
              </table>


</body>
</html>