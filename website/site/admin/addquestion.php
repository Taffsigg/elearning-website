<?php
include 'connetion.php'; 
include 'menu.php';
session_start();
?>
<!DOCTYPE html>

<head>
<title>Delete Question</title>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css"/>
</head>
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table cellpadding="20" cellspacing="20" style="text-align:left;"">
     
      <tr>
        <td> 
          <form name="form1" method="post" action="addquedatabase.php">
            <table width="100%" border="0" cellspacing="10" cellpadding="10">
              <tr>
                <td>Category</td>
                <td><label for="cate"></label>
                  <input type="text" name="cate" id="cate"></td>
              </tr>
              <tr>
                <td>Question</td>
                <td><label for="ques"></label>
                  <textarea name="ques" id="ques"></textarea></td>
              </tr>
              <tr>
                <td>Option A</td>
                <td><label for="a"></label>
                  <input type="text" name="a" id="a"></td>
              </tr>
              <tr>
                <td>Option B</td>
                <td><label for="b"></label>
                  <input type="text" name="b" id="b"></td>
              </tr>
              <tr>
                <td>Option C</td>
                <td><label for="c"></label>
                  <input type="text" name="c" id="c"></td>
              </tr>
              <tr>
                <td>Option D</td>
                <td><label for="d"></label>
                  <input type="text" name="d" id="d"></td>
              </tr>
              <tr>
                <td>True Ans</td>
                <td><label for="trueans"></label>
                  <input type="text" name="trueans" id="trueans"></td>
              </tr>
              <tr>
                <td>Submit Details</td>
                <td><input type="submit" name="submit" id="submit" value="Submit"></td>
              </tr>
             
            </table>
          </form></td>
      </tr>
  
    </table></td>
  </tr>
</table>
</body>
</html>