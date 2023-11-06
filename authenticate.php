<?php
require_once 'AuthenticationStrategy.php';
require_once 'LocalAuthStrategy.php';
require_once 'db.php'; // Database configuration

$authenticationStrategy = new LocalAuthStrategy($db); // Use the LocalAuthStrategy

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loggedInUser = $authenticationStrategy->authenticate($username, $password);

    if ($loggedInUser) {
        session_start();
        $_SESSION['user_id'] = $loggedInUser['id'];
        $_SESSION['username'] = $loggedInUser['username'];
        header("Location: profile.php");
    } else {
        echo "Login failed. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="authenticate.php">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
