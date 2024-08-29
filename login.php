<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $email = $_POST['email'];  
    $password = $_POST['password'];  


    $sqlinsert = "INSERT INTO `class` (`email`, `password`) VALUES ('$email','$password')";
    
    if (mysqli_query($con, $sqlinsert)) {
        echo "Data inserted successfully";
        
    } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="login.php" method="post">
        <h2><center>LOGIN</center></h2>
        <div>
            <input type="Email" name="email" class="form-control" id="emailV" placeholder="Email">
        </div>
        <div>
            <input type="Password" name="password" class="form-control" id="passwordV" placeholder="Password">
        </div>
        <button class="button" value="Submit" name="submit" type="submit">Submit</button>
    </form>
</div>
</body>
</html>
