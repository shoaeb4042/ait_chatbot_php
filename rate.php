<?php
//Insert Data
$hostname = "localhost";
$username = "adbd_bot";
$password = ",@K,D*!JAWIc";
$databasename = "adbd_bot";
try
{
 
 if(isset($_GET["p"]) && !empty($_GET["id"]))
 {
 $conn = mysqli_connect($hostname, $username, $password, $databasename);   
 $p=$_GET["p"];
 $id=$_GET["id"];
 if($p==1){
 $query = "UPDATE text SET score=score+1 WHERE id='".$id."'";
 }
 if($p==0){
 $query = "UPDATE text SET score=score-1 WHERE id=$id";
 }
 
 
 if ($conn->query($query) === TRUE) {
    header('Location: index.php?m=feedback');
   

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