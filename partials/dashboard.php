<?php 
session_start();
$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Dashboard</title>
            <!-- Bootstrap css link -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
             <!-- css file link -->
        <link rel="stylesheet" href="../voting.css">
</head>
<body class="bg-light text-dark">
    <div class="container my-5">
        <a href="../"><button class="btn btn-primary px-4">Back</button></a>
        <a href="logout.php"><button class="btn btn-primary px-3">Logout</button></a>
        <h1 class="my-3">Mzumbe University Voting System</h1>
        <div class="row my-5">
            <div class="col md-7">
                 <!-- groups -->
                <?php 
                    if(isset($_SESSION['groups'])){     
                        $groups = $_SESSION['groups'];
                        for($i = 0; $i < count($groups); $i++){
                            ?>
                            <div class="row">
                            <div class="col md-4">
                                <img src="../uploads/<?php echo $groups[$i]['photo'] ?>" alt="Group image">
                            </div>
                            <div class="col md-8">
                                <strong class="h5">Group:name</strong>
                                <?php echo $groups[$i]['username'] ?>
                                <br>
                                <strong class="h5">Votes:</strong>
                                <?php echo $groups[$i]['votes'] ?>
                            </div>
                        </div>
                        <hr>
                        <?php
                        }
                    }
                    ?>
                <hr>
                <form action="../actions/voting.php">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes'] ?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id'] ?>">
                </form>
            </div>
            <div class="col-md-5">
                <!-- user profiles -->
                <div class="round mb-3"> 
                        <img src="../uploads/<?php echo $data['photo'] ?>" alt="User image">
                </div>
                <strong class="h5">Name:</strong> <?php echo $data['username'];?><br><br>
                <strong class="h5">Mobile:</strong> <?php echo $data['mobile'];?><br><br>
                <strong class="h5">Status:</strong> <?php echo $data['status'];?><br><br>
            </div>
        </div>
    </div>
</body>
</html>

<style>
  
</style>