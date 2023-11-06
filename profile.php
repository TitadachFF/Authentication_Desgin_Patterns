<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">
<head>
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
       <button  type="button" class="btn btn-warning" > <a id="a2" href="logout.php">Logout</a></button>
       <button   type="button" class="btn btn-primary"" > <a id="a2" href="index.php">Back</a></button>
       
    </div>
</body>
</html>
