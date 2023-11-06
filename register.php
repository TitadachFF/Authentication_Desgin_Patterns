<?php
require_once 'db.php';
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User($db);

    if ($user->register($username, $password)) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<head>
    <title>Register</title>
</head>
<body>
    
    <div class="body-res">
    <h2>Register</h2><br>
    <form method="post" action="register.php">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
   <button class="btn btn-secondary" type="submit" value="Register">Register</button>
   <button   type="button" class="btn btn-primary"" > <a id="a2" href="index.php">Back</a></button>
    </form>
    </div>
    
</body>
</html> 
