<?php
if(isset($_GET["m"]))
{
   if($_GET["m"]=="Thank you for your Teaching") 
   {
      echo"<script>alert('Thank you for your Teaching'); window.location.href = '/'; </script>";
      
   }
   if($_GET["m"]=="feedback") 
   {
      echo"<script>alert('Thanks for your Feedback!!'); window.location.href = '/'; </script>";
      
   }
   if($_GET["m"]=="empty") 
   {
      echo"<script>alert('Feild Cannot Be Empty!!'); window.location.href = '/'; </script>";
      
   }
    
    
}
?>
<html>
    <head>
        <title>Chat Robot</title>
        <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/martz90/hex/512/messenger-icon.png">
        <meta charset="UTF-8">
        <meta property="og:type"          content="website" />
       <meta property="og:title"         content="AI Chat Robot"/>
       <meta property="og:description"   content= "AI Chat Robot"/>
       <meta property="og:image"         content="http://icons.iconarchive.com/icons/martz90/hex/512/messenger-icon.png" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet"  href="css.css" />
     	<script src="pop.js"></script>
     	<style>
body  {
    background-image: url("http://4.bp.blogspot.com/-Fl02h0l97qk/Tb4pW4zeejI/AAAAAAAAAMw/leuRcps0g78/s1600/android.png");
    
}
h1,h3 {
    color:white;
    
}
</style>
    </head>
    <body id ="bdy" style="overflow:hidden;">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <center><h1>Chat Robot</h1></center>

                  <br>

                 <center><div id="result"></div></center>
                 <br>

    <div class="messages"></div>

    <div class="controls">

        
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message"><h3>Chat With Me</h3></label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Type a Message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send message" onclick="check();">
            </div>
        </div>
        <div class="row">
           
        </div>
    </div>


<script>
function check(){

 var text=document.getElementById("form_message").value;
  // alert(text);
 $.ajax({
 url:"ans.php",
 method:"POST",
 data:{q:text},
 success: function(data){
 $('#result').html(data);
 }
 });
 
}

function teachme(){
    
    alert();
}
</script>

                </div>

            </div>

        </div>

<!--tech me-->
<div id="abc">
 
	 <!-- Popup div starts here -->
 <div id="popupContact"> 

	<!-- contact us form -->
		<form action="send.php" method="post" id="form" >
			<img src="3.png" id="close" onclick ="div_hide()" />
			<h2>Teach Me</h2><hr/>
			<input type="text" name="q" id="name" placeholder="Your Query"/>
	
			<textarea name="reply" placeholder="The Answer" id="msg"></textarea>
			<center><input type="submit" style="padding:5px; background-color:green; color:white; text-align:center;" value="Teach Me"></input></center>
			
		</form>
 </div> 
 <!-- Popup div ends here -->
 </div>
<!--tech me-->
                 <center><footer class="btn btn-success btn-send" style="margin-top:10%; "><b>By Code71</b></footer></center>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
    </body>
</html>