<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


session_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cloud </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>



<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">Cloud APP <small></small></a></h1> 
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.html">Home</a></li>
          
          <li><a href="logout.php">Sign out</a></li><br>

<?php




$display = $_SESSION['login'] ;
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo " WELCOME" ;
echo'&nbsp;&nbsp;&nbsp;';

echo '<strong><font color=red style="text-transform:uppercase;" >';

echo $display;
echo '</font></strong>';

?>
 



        </ul>
		
      </div>

      <div class="clr"></div>
      <div class="htext">
        <h2>ASSURANCE ON DATA STORAGE SECURITY IN CLOUD COMPUTING</h2>
        <p></p>
        <p></p>
        <p></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
  <div class="main">

    
      <div class="logo">
	  <h1>SIMPLE E-VALLET INFO APP</h1>
      <h2>Enter Your Credit card Details :</h2>
      </div>


   </div>


		  
		  <div class="clr"></div>
<div class="article">
          
          <div class="clr"></div>



			
 <FORM METHOD=POST ACTION="sccistore.php">


		  
         <OL>
         	<LI>User Name(For security) </br><INPUT TYPE="text" NAME="username"class="text"></LI></br>
         	<B>Enter Your Card(sample) Details :</br></B>

			<LI>Card No</br><INPUT TYPE="text" NAME="cardnumber"class="text" ></LI></br>
            <LI>Card Type</br><SELECT NAME="cardtype">
			<option value="VISA">VISA</option>

               <option value="MASTER">MASTER</option>
			  <option value="MAESTRO">MAESTRO</option>
			  <option value="RUPAY">RUPAY</option>
			  <option value="OTHER">OTHER</option>
			
			</SELECT></LI></br>
			<LI>Name on Card</br><INPUT TYPE="text" NAME="nameoncard"class="text"> </LI></br>
			<LI>Expiry Date</br><INPUT TYPE="text" NAME="expirydate"class="text"> </LI>MM/YY</br>
			<LI>CVV </br><INPUT TYPE="text" NAME="cvv"class="text"> </LI></br></br>
			<LI>3D Secured Password (optional)</br><INPUT TYPE="text" NAME="securedpassword"class="text"> </LI></br></br>
			
		 
<INPUT TYPE="submit" value="Encrypt & Store">

</FORM><br/>  
<a href=cancel.php> <div><IMG SRC="images/cancel1.jpg" WIDTH="100" HEIGHT="80" style="border-style: none" ALT="Cancel"> </div></a>

   </div>
		</div>
      </div>
     
      <div class="clr"></div>
    </div>
  </div>





  <div class="fbg">
    <div class="fbg_resize">
	<p class="lf">&copy; Copyright ->ASSURANCE ON DATA STORAGE SECURITY IN CLOUD COMPUTING.</p>
     </div>
	 </div>
      
  </div>
</div>

</body>
</html>
