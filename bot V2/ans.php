<?php
//Insert Data
$hostname = "localhost";
$username = "adbd_bot";
$password = ",@K,D*!JAWIc";
$databasename = "adbd_bot";
try
{
 
 if(isset($_POST["q"]) && !empty($_POST["q"]))
 {
  $conn = mysqli_connect($hostname, $username, $password, $databasename);
  $conn->set_charset("utf8");
  $q=$_POST["q"];
 $query = 'SELECT reply,score,id FROM text WHERE  query="'.$q.'" and pub=1  ORDER  BY score DESC';
 $result = mysqli_query($conn,  $query);
 if (mysqli_num_rows($result) > 0) {
     $reply=[];
    // output data of each row 
    while($row = mysqli_fetch_assoc($result)) {
        $reply[]=$row;
    }
    echo'<audio controls autoplay style="visibility:hidden;"><source src="noti.mp3" type="audio/mpeg"></audio>';
    echo"<pre><b style='font-size:20px'>Robot:  ".$reply[0]["reply"]."   </b>";
    echo ' <a class="btn btn-success btn-send" href="rate.php?p=1&id='.$reply[0]["id"].'">Like</a>';   
    echo '  <a class="btn btn-success btn-send" style=" background-color:red ;" href="rate.php?p=0&id='.$reply[0]["id"].'">Dislike</a> Or Please <a class="btn btn-success btn-send" id = "popup"  onclick ="div_show()">Teach Me</a>'; 
    echo"</pre>";
   
    
} else {
   
   $query = 'SELECT reply,score,id FROM text WHERE  query LIKE "%'.$q.'%" and pub=1  ORDER  BY score DESC';
   $result = mysqli_query($conn,  $query);
   
   
    if (mysqli_num_rows($result) > 0) {
     $reply=[];
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $reply[]=$row;
    }
    echo'<audio controls autoplay style="visibility:hidden;"><source src="noti.mp3" type="audio/mpeg"></audio>';
    echo"<pre><b style='font-size:20px'>Robot:  ".$reply[0]["reply"]."   </b>";
    echo ' <a class="btn btn-success btn-send" href="rate.php?p=1&id='.$reply[0]["id"].'">Like</a>';   
    echo '  <a class="btn btn-success btn-send" style=" background-color:red ;" href="rate.php?p=0&id='.$reply[0]["id"].'">Dislike</a> Or Please <a class="btn btn-success btn-send" id = "popup"  onclick ="div_show()">Teach Me</a>'; 
    echo"</pre>";
} else {
    echo'<audio controls autoplay style="visibility:hidden;"><source src="noti.mp3" type="audio/mpeg"></audio>';
    echo '<pre id="reply"><b style="font-size:20px">Robot:  I am Confused!! Please </b> <a class="btn btn-success btn-send" id = "popup"  onclick ="div_show()">Teach Me</a></pre>'; 
}
   
}
 
 
}

    
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>