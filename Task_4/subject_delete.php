<?php
$connection = mysqli_connect("localhost", "root", "root", "task_4");
if ($connection->connect_error){
die("Could not connect to the server: " . $connection->connect_error);
}
$id = $_GET['delete'];
$query = "DELETE FROM subjects WHERE subject_id = '$id' ";
$result = mysqli_query($connection,$query);
if(!$result){
    die("Cannot Delete!!".mysqli_error($connection)) ;
}
else{
    echo "<script> window.location.href='subject_view.php';</script>";
}
?>