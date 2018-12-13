<?php 

include '_import/connetion.php'; 
session_start();
$id=$_SESSION['id'];
?>


<!doctype html>
<html>
<head>
<title>Acadmic Execellence Online Payment</title>
	<?php include 'include/links.php'; ?>
 <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="js/ccvalidate.js" type="text/javascript"></script>
<link href="_css/ccvalidate.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript">
        $(document).ready(function() {
            $('.cc-container').ccvalidate({ onvalidate: function(isValid) {
                if (!isValid) {
                    alert('Incorrect Credit Card format');
                    return false;
                }
            }
            });
            $('.cc-ddl-contents').css('display', 'none');
            $('.cc-ddl-header').toggle(function() {
                toggleContents($(this).parent().find('.cc-ddl-contents'));
            }, function() { toggleContents($(this).parent().find('.cc-ddl-contents')); });

            function toggleContents(el) {
                $('.cc-ddl-contents').css('display', 'none');
                if (el.css('display') == 'none') el.fadeIn("slow");
                else el.fadeOut("slow");
            }
            $('.cc-ddl-contents a').click(function() {
                $(this).parent().parent().find('.cc-ddl-o select').attr('selectedIndex', $('.cc-ddl-contents a').index(this));
                $(this).parent().parent().find('.cc-ddl-title').html($(this).html());
                $(this).parent().parent().find('.cc-ddl-contents').fadeOut("slow");
            });
            $(document).click(function() {
                $('.cc-ddl-contents').fadeOut("slow");
            });


            $('#check').click(function() {
                var cnumber = $('#cnumber').val();
                var type = $('#ctype').val();
                alert(isValidCreditCard(cnumber, type) ? 'Valid' : 'Invalid');
            });
        });
    </script>


</head>

<body>
<table width="954" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>	
        <td width="954" height="128"><img src="_images/e_learning.jpg" width="869" height="220"></td>
  		  <h4 class="welcome"> <marquee behavior="alternate" > Welcome <?php  echo $_SESSION['name'];?> </marquee></h4>
  </tr>
  <tr>
        <td id="nav">     <ul>
<li><a href="profile.php">Profile Home</a></li>
<li><a href="userlogin.php?<?php echo "id=",$id;?>">Update Profile</a> </li>
<li><a href="#">Payment</a></li>
<li><a href="exam/lecture.php">Lecture</a></li>
<li><a href="exam/test.php">Online Exam</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="Downloads.php">Downloads</a></li>
</ul>
    </td>
  </tr>
 <tr>
 <td  height="304" align="center">
	<form method="POST,GET" id="form" action="checkout.htm">
    
            <div class="cc-container">
                <div class="cc-header" align="center">
                    Please enter your billing information</div>
                <div class="cc-contents">
                    <table cellpadding="4" cellspacing="0">
                        <tr>
                            <td style="width: 97px">
                                <label>
                                    Card Type</label>
                            </td>
                            <td style="width: 270px">
                                <div class="cc-ddl">
                                    <div class="cc-ddl-o">
                                        <select id="cc-types" class="cc-ddl-type">
                                            <option value="mcd">Master Card</option>
                                            <option value="vis">Visa Card</option>
                                            <option value="amx">American Express</option>
                                            <option value="dnr">Diner Club</option>
                                            <option value="dis">Discover</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Select Card Type</div>
                                    </div>
                                    <div class="cc-ddl-contents">
                                        <a href="javascript:return void(0)">Master Card</a> <a href="javascript:return void(0)">
                                            Visa Card</a> <a href="javascript:return void(0)">American Express</a> <a href="javascript:return void(0)">
                                                Diners Club</a> <a href="javascript:return void(0)">Discover</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Card Number</label>
                            </td>
                            <td>
                                <input type="text" id="card-number" class="large cc-card-number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    Expires on</label>
                            </td>
                            <td>
                                <div class="cc-ddl" style="width: 110px; float: left;">
                                    <div class="cc-ddl-o">
                                        <select id="cc-month">
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Month</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 108px">
                                        <a href="javascript:return void(0)">January</a> <a href="javascript:return void(0)">
                                            February</a> <a href="javascript:return void(0)">March</a> <a href="javascript:return void(0)">
                                                April</a> <a href="javascript:return void(0)">May</a> <a href="javascript:return void(0)">
                                                    June</a> <a href="javascript:return void(0)">July</a> <a href="javascript:return void(0)">
                                                        August</a> <a href="javascript:return void(0)">September</a> <a href="javascript:return void(0)">
                                                            October</a> <a href="javascript:return void(0)">November</a>
                                        <a href="javascript:return void(0)">December</a>
                                    </div>
                                </div>
                                <div class="cc-ddl" style="width: 80px; float: left; margin-left: 4px;">
                                    <div class="cc-ddl-o">
                                        <select id="Select1">
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                        </select>
                                    </div>
                                    <div class="cc-ddl-header">
                                        <div class="cc-ddl-title">
                                            Year</div>
                                    </div>
                                    <div class="cc-ddl-contents" style="width: 78px">
                                        <a href="javascript:return void(0)">2011</a> <a href="javascript:return void(0)">2012</a>
                                        <a href="javascript:return void(0)">2013</a> <a href="javascript:return void(0)">2014</a>
                                        <a href="javascript:return void(0)">2015</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>
                                    CVV</label>
                            </td>
                            <td>
                                <input type="text" class="small" />
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;
                                
                            </td>
                            <td>
                                <input type="submit" value="Checkout" class="cc-checkout" id="check-out" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>  </td>
        </tr>
    </table></td>
  </tr>
   
</table>
</td>
  </tr>
</table>
</body>
</html>
