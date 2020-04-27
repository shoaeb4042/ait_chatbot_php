<!DOCTYPE html> 
<html>
<head> 
	<title>Popup contact form </title>
	<meta name="robots" content="noindex, nofollow">	
	<link rel="stylesheet"  href="http://www.aorank.com/tutorial/createpopupform_livedemo/css/elements.css" />
	<script src="http://www.aorank.com/tutorial/createpopupform_livedemo/js/my_js.js"></script>	
	
</head> 
 <!-- body starts here -->
 <body id ="bdy" style="overflow:hidden;">
 
 <div id="abc">
 
	 <!-- Popup div starts here -->
 <div id="popupContact"> 

	<!-- contact us form -->
		<form action="#" method="post" id="form" >
			<img src="3.png" id="close" onclick ="div_hide()" />
			<h2>Contact Us</h2><hr/>
			<input type="text" name="name" id="name" placeholder="Name"/>
			
			<input type="text" name="email" id="email" placeholder="Email"/>
			
			<textarea name="message" placeholder="Message" id="msg"></textarea>
			
			<a id="submit" href="javascript: check_empty()">Send</a>
			
			<p><span>Note :</span> In this demo, we have stopped email sending functionality.</p>
		</form>
 </div> 
 <!-- Popup div ends here -->
 </div>
 <!-- display popup button -->
    <CENTER><h1>Click Button To Popup Form Using Javascript</h1>
	        <button id = "popup" onclick ="div_show()">Popup</button></CENTER>
<!-- Right side div -->
	<a href=http://www.formget.com/app><img id="fugo" src="images/formget.jpg" alt="Online Form Builder"/></a> 
 </body> 
 <!-- body ends here -->
 </html> 
