<?php
//Insert Data
$hostname = "localhost";
$username = "adbd_bot";
$password = ",@K,D*!JAWIc";
$databasename = "adbd_bot";
try
{
 
 if(isset($_POST["q"]) && !empty($_POST["reply"]))
 {
 $conn = mysqli_connect($hostname, $username, $password, $databasename);
 $conn->set_charset("utf8");
 $q=$_POST["q"];
 $r=$_POST["reply"];
 $query = "INSERT INTO text (query, reply, pub,score) VALUES ('".$q."', '".$r."', '1','100')";
 
 if ($conn->query($query) === TRUE) {
    header('Location: index.php?m=Thank you for your Teaching');

}
$conn->close();
 
 
}
 else{
    header('Location: index.php?m=empty');
}
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>