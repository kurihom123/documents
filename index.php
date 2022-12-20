<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Voting System</title>
        <!-- Bootstrap css link -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- css file link -->
    <link rel="stylesheet" href="voting.css">
    
</head>
<body class="bg-light">
    <h1 class="text-center p-3">Mzumbe University Voting System</h1>
    <div class="bg-light py-3">
        <h2 class="text-primary text-center">Login</h2>
        <div class="container text-center">
            <form action="actions/login.php" method="POST">
                <div class="mb-3">
                    <input required type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <input required type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number" maxLenth="10" minLength="10">
                </div>
                <div class="mb-3">
                    <input required type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary my-4" name="save">login</button>
                <p>Don't have an acount? <a href="./partials/registration.php" class="text-primary">Register here</a></p>
            </form>
        </div>
    </div>
</body>
</html>