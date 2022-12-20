<?php 

$conn = mysqli_connect("localhost", "root", "", "votingsy_stem");
if(!$conn){
    die(mysqli_error($conn));
}
?>