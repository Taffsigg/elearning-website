
<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// This file demonstrates a basic checkout page

// If your page calls session_start() be sure to include jcart.php first
include_once('jcart/jcart.php');

session_start();
?>


<HTML>
<HEAD>
<TITLE>Untitled-1</TITLE>
<script src="js/jquery-1.2.1.min.js" type="text/javascript"></script>
	<script src="js/menu.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="js/style.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--[if lt IE 8]>
   <style type="text/css">
   li a {display:inline-block;}
   li a {display:block;}
   </style>
   <![endif]-->

<link rel="stylesheet" type="text/css" media="screen, projection" href="style.css" />

		<link rel="stylesheet" type="text/css" media="screen, projection" href="jcart/css/jcart.css" />

<link href="css/stylemenu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.center, .item  {
width:200px;
}

.item, .title {
width:auto;
padding:4px;
background-color:#999999;
margin:2px 0 2px 0;
}

.subitem {
height:40px;
line-height:40px;
text-align:center;
}

ul { list-style-type:none; }
-->
</style>


<link href="css/format.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {
	color: #999999;
	font-weight: bold;
}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</HEAD>



<BODY BGCOLOR=#FFFFFF LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (Untitled-1.psd) -->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="top">
<TABLE WIDTH=1000 BORDER=0 align="center" CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD COLSPAN=2 bgcolor="#242424"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="81%" align="left" valign="top" bgcolor="#0E0E0E" class="bttmtext style3">To Order Call : 0120-4455918 (Open 24Hrs) or SMS ES18WEB to 51818</td>
            <td width="8%" align="left" valign="top" bgcolor="#0E0E0E" class="bttmtext style4"><a href="memlgn.php">Login</a></td>
              <td width="11%" align="left" valign="top" bgcolor="#0E0E0E"><span class="bttmtext style4"><a href="signout.php">Sign out</a></span> </td>
          </tr>
        </table></TD>
		<TD width="1">
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=12 ALT=""></TD>
	</TR>
	<TR>
		<TD COLSPAN=2 align="left" valign="top" bgcolor="#242424"><table width="100%" height="77" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="left" valign="top"><table width="100%" height="77" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="225" height="77" align="left" valign="top"><img src="images/eshop.jpg" width="226" height="104"></td>
                <td width="611" bgcolor="#0E0E0E"><table width="97%" height="50" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="18%" align="left" valign="top">
					<table width="98%" height="50" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center" valign="middle">
					
					<script type="text/javascript">

// Google Internal Site Search script- By JavaScriptKit.com (http://www.javascriptkit.com)
// For this and over 400+ free scripts, visit JavaScript Kit- http://www.javascriptkit.com/
// This notice must stay intact for use

//Enter domain of site to search.
var domainroot="www.eshopping.com"

function Gsitesearch(curobj){
curobj.q.value="site:"+domainroot+" "+curobj.qfront.value
}

</script>


<form action="http://www.eshopping.com/search" method="get" onSubmit="Gsitesearch(this)">

<p><br />
<input name="q" type="hidden" />
<input name="qfront" type="text" class="bx" style="width: 500px" /> 
<input type="submit" class="btn" value="Search" />
</p>
</form>

<p style="font: normal 11px Arial"><br />
<a href="http://www.eshopping.com"></a></p>					</td>
                  </tr>
                </table>					</td>
                    </tr>
                </table></td>
              <td width="164" align="left" valign="middle" bgcolor="#0E0E0E"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" valign="top"><img src="images/mycart.jpg" width="50" height="50"></td>
                    <td align="center" valign="middle"><span class="style3">My Cart </span></td>
                  </tr>
                  
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=77 ALT=""></TD>
	</TR>
	<TR>
		<TD width="225" ROWSPAN=2 align="left" valign="top">	
		<ul id="menu">
		<li>
			<a href="#">Mobile</a>
			<ul>
				<li><a href="nokia.php">Nokia</a></li>
				<li><a href="samsung.php">Samsung</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Laptop</a>
			<ul>
				<li><a href="dell.php">Dell</a></li>
				<li><a href="sony.php">Sony</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Camera</a>
			<ul>
				<li><a href="canon.php">Canon</a></li>
				<li><a href="nikon.php">Nikon</a></li>
			</ul>
		</li>
		<li>
			<a href="tablet.php">Tablet</a>		</li>
	</ul>
</div></TD>

	  <TD width="776" height="238" align="left" valign="top">
	  <?php
	  include 'header.php';
	  ?>	  	  </TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=82 ALT=""></TD>
	</TR>
	<TR>
		<TD align="left" valign="top">
		<!-- TemplateBeginEditable name="EditRegion1" -->
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>
					  <div id="wrapper">
			<h2>Checkout</h2>

			<div id="sidebar">			</div>

			<div id="content">
				<div id="jcart"><?php $jcart->display_cart();?></div>

				<p>
				  <label>
				  <div align="center">
				    <a href="payment.php"><input name="payment" type="submit" class="marg" id="payment" value="Payment with other">			      </a></div>
				  </label>
				</p>
				<p><a href="products.php">&larr; Continue shopping</a></p>
				<?php
					//echo '<pre>';
					//var_dump($_SESSION['jcart']);
					//echo '</pre>';
				?>
			</div>

			<div class="clear"></div>
		</div>

		<script type="text/javascript" src="jcart/js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="jcart/js/jcart.min.js"></script>					   </td>
                    </tr>
                  </table>
                <!-- TemplateEndEditable -->		</TD>
		<TD height="376">
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=271 ALT=""></TD>
	</TR>
	
	
	<TR>
		<TD COLSPAN=2>
			<IMG SRC="images/index_08.jpg" WIDTH=1000 HEIGHT=123 ALT=""></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=123 ALT=""></TD>
	</TR>
	<TR>
	  <TD COLSPAN=2 align="left" valign="top" background="images/bottm.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" height="355" align="left" valign="top"><table width="100%" height="125" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="left" valign="middle" class="style2">Our Achievements </td>
            </tr>
            <tr>
              <td align="center" valign="middle"><img src="images/award.jpg" width="91" height="72"></td>
            </tr>
          </table></td>
          <td width="51%" align="left" valign="top"><table width="99%" height="345" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="31%" height="247" align="left" valign="top"><table width="100%" height="240" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="37" align="left" valign="middle"><span class="style2">Company</span></td>
                </tr>
               <tr>
                  <td height="34" class="bttmtext"><a href="aboutus.php">About us </a></td>
                </tr>
                <tr>
                  <td class="bttmtext"><a href="contactus.php">Contact us </a></td>
                </tr>
                <tr>
                  <td class="bttmtext"><a href="t&c.php">Term &amp; Condition </a></td>
                </tr>
                <tr>
                  <td class="bttmtext">Blog</td>
                </tr>
                <tr>
                  <td class="bttmtext">Meet the team </td>
                </tr>
              </table></td>
              <td width="34%" align="left" valign="top"><table width="100%" height="114" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="38" class="style2">Do more </td>
                </tr>
                <tr>
                  <td height="34" class="bttmtext">Readeem GV </td>
                </tr>
                <tr>
                  <td height="39" class="bttmtext">Get Featured </td>
                </tr>
              </table></td>
              <td width="35%" align="left" valign="top"><table width="100%" height="237" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="38" class="style2">Need Help </td>
                </tr>
                <tr>
                  <td height="34" class="bttmtext">FAQ</td>
                </tr>
                <tr>
                  <td height="43" class="bttmtext">SMS unsubscription </td>
                </tr>
                <tr>
                  <td height="34" class="bttmtext">How to use SD Cash? </td>
                </tr>
                <tr>
                  <td height="44" class="bttmtext">How to use promo code? </td>
                </tr>
                <tr>
                  <td height="44" class="bttmtext">How E-shopping work? </td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td height="32" colspan="3"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="33%" align="left" class="style2">Follow us </td>
                  <td width="15%" align="center" valign="middle"><img src="images/tw.jpg" width="45" height="40"></td>
                  <td width="15%" align="center" valign="middle"><img src="images/fb.jpg" width="45" height="40"></td>
                  <td width="15%" align="center" valign="middle"><img src="images/gm.jpg" width="45" height="40"></td>
                  <td width="15%" align="center" valign="middle"><img src="images/yt.jpg" width="45" height="40"></td>
                </tr>
              </table></td>
              </tr>
            <tr>
              <td height="37" colspan="3"><table width="94%" height="35" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="35%" class="style2">Payment method </td>
                  <td width="17%" align="center" valign="middle"><img src="images/mc.jpg" width="65" height="40"></td>
                  <td width="17%" align="center" valign="middle"><img src="images/mm.jpg" width="65" height="40"></td>
                  <td width="17%" align="center" valign="middle"><img src="images/visa.jpg" width="65" height="40"></td>
                  <td width="17%" align="center" valign="middle"><img src="images/wu.jpg" width="65" height="40"></td>
                  </tr>
              </table></td>
              </tr>
          </table></td>
          <td width="29%">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3" class="bttmtext"><div align="justify" class="bttmtext style3">E-shopping.com features a wide range of products and services from thousand of national, international and regional brands. There is a wide assortment of products across categories like Mobiles, Laptop, Camera, Tablet and Spas amongst others. E-shopping is the shopping destination for millions of online users across the country.</div></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center" class="bttmtext style3">Copyright &copy; 2012 E-shopping.com. All rights reserved</div></td>
        </tr>
      </table></TD>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=1 HEIGHT=363 ALT=""></TD>
	</TR>
</TABLE>
</td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</BODY>
</HTML>