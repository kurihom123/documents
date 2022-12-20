<?php 
include('connect.php');

if(isset($_POST['save'])){
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $std = $_POST['std'];

    //validating passwords
    if($password != $cpassword){
        echo '<script>
        alert("Password do not match");
        window.location="../partials/registration.php";
        </script>';
    }
    else {
        //hashing the password
        $hpassword = sha1($password);
        move_uploaded_file($tmp_name, "../uploads/$image");

        //preparing the querry
        $sql_result = "INSERT INTO `userdata`(username,mobile,password,photo,standard,status,votes)
            VALUES('$username','$mobile','$hpassword','$image','$std',0,0)";

        //running the querry
        $result = mysqli_query($conn,$sql_result);

        if($result){
            echo '<script>
            alert("registration successfully");
            window.location="../";
            </script>';
        }
        else{
            die(mysqli_error($conn));
        }        
    }
}

else{
    echo "Bad access";
}
?>