<?php
//Insert Data
$hostname = "localhost";
$username = "adbd_bot";
$password = ",@K,D*!JAWIc";
$databasename = "adbd_bot";
try
{
 
 if(isset($_POST["q"]) && !empty($_POST["r"]))
 {
 $conn = mysqli_connect($hostname, $username, $password, $databasename);
 $conn->set_charset("utf8");
 $q=$_POST["q"];
 $r=$_POST["r"];
 $query = "INSERT INTO text (query, reply, pub,score) VALUES ('".$q."', '".$r."', '1','100')";
 
 if ($conn->query($query) === TRUE) {
    header('Location: input.html?m=true');

}
$conn->close();
 
 
}
 else{
    header('Location: input.html?m=false');
}
}
catch(PDOException $error)
{
 echo $error->getMessage();
}
?>