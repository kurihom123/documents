<?php 
session_start();
include('connect.php');

if(isset($_POST['save'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $std = $_POST['std'];
    $password = sha1($password);

    //preparing the querry
    $sql = "SELECT * FROM `userdata` WHERE username='$username' AND mobile='$mobile' 
            AND password='$password' AND standard='$std'";

    //running the querry
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $qsl = "SELECT username,photo,votes,id FROM userdata WHERE standard='group'";
        $resultgroup = mysqli_query($conn,$sql);
        if(mysqli_num_rows($resultgroup) > 0){
            $groups = mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            //creating session for groups
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        
        
        echo '<script>
             window.location = "../partials/dashboard.php";
             </script>';
    }
    else{
        echo '<script>
            alert("Invalid credentials");
            window.location=("../index.php");
            </script>';
    }
}
else{
    echo "bad access";
}
