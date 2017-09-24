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
$addz = mysqli_real_escape_string($link, $_REQUEST['addressin']);
$phonez = mysqli_real_escape_string($link, $_REQUEST['phonein']);
$notesz = mysqli_real_escape_string($link, $_REQUEST['notesin']);



$sql = "INSERT INTO  `riceshelter`.`volunteer` (`vid` ,`vname`,`vadd`,`vphone`,`vnotes` ) VALUES (NULL ,  '$namez',  '$addz',  '$phonez',  '$notesz')";


if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("refresh:2; url=offerhelp.php");

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>