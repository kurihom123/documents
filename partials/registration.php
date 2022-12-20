<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Registration Page</title>
            <!-- Bootstrap css link -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
            <!-- css file link -->
        <link rel="stylesheet" href="../voting.css">

</head>
<body class="bg-light">
    <h1 class="text-center p-3">Mzumbe University Voting System<h1>
        <div class="bg-light py-4">
            <h2 class="text-center text-primary">Register Acount</h2>
            <div class="container text-center">
                <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 ">
                        <input required type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username">
                    </div>
                    <div class="mb-3 ">
                        <input required type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number" maxLenth="10" minLength="10">
                    </div>
                    <div class="mb-3 ">
                        <input required type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3 ">
                        <input required type="password" class="form-control w-50 m-auto" name="cpassword" placeholder="Comfirm password">
                    </div>
                    <div class="mb-3 ">
                        <input required type="file" class="form-control w-50 m-auto" name="photo">
                    </div>
                    <div class="mb-3 ">
                        <select name="std" class="form-select w-50 m-auto">
                            <option value="group">Group</option>
                            <option value="voter">Voter</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-4" name="save">Register</button>
                    <h6>Already have acount? <a href="../" class="text-green">login here</a></h6>
                </form>
            </div>
        </div>
</body>
</html>