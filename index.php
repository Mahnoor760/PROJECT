<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con) {
    die("connection is failed" . mysqli_connect_error());
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=DM+Serif+Text:ital@0;1&family=Nerko+One&display=swap" rel="stylesheet">

    <title>Document</title>
    
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
<div class="container">

    
        <form action="index.php" method="post">
        <h2><center>LOGIN</center></h2>
           
                        <div>
                            
                            <input type="email" name="email" class="form-control" id="emailV" placeholder="Email">
                        </div>
                        <div>
                            
                            <input type="password" name="password" class="form-control" id="passwordV" placeholder="Password">
                        </div>
                        <center><h5><a href="">Forgot password?</a></h5></center>
                        <br>
                        <center><button  class="button" value="Submit" name="submit" type="submit" >Login</button></center>
                          <br>
                           <center><h5>Don't have an account?<a href="signup.php">Sign up</a></h5></center>
        </form>
    </div>
</body>
</html>