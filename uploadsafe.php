<?php


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "ironmountain", "jumpship", "riceshelter");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$namez = mysqli_real_escape_string($link, $_REQUEST['namein']);
$addz = mysqli_real_escape_string($link, $_REQUEST['locationin']);
$phonez = mysqli_real_escape_string($link, $_REQUEST['phonein']);
$notesz = mysqli_real_escape_string($link, $_REQUEST['notesin']);



$sql = "INSERT INTO  `riceshelter`.`safe` (`sid` ,`sname`,`sloc`,`sphone`,`snotes`,`sdate` ) VALUES (NULL ,  '$namez',  '$addz',  '$phonez',  '$notesz',CURRENT_TIMESTAMP)";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=safe.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>