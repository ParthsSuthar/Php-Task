<?php
include "db.php";
if ($connection->connect_error){
die("Could not connect to the server: " . $connection->connect_error);
}
$id = $_GET['delete'];
$query = "DELETE FROM standards WHERE standard_id = '$id' ";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Cannot Delete!!".mysqli_error($connection)) ;
}
else{
    echo "<script> window.location.href='standard_view.php';</script>";
}
?>