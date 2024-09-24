
<?php

if (isset($_POST['submit'])) {
//the user has press submit button
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username =='Dilshan' && $password=='pass') {
        echo "Loging Successful";
    }else{
        echo "Invalid User name or Password";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging</title>
</head>
<body>
    <form action="loging.php" method="post">
        UserName : <input type="text" name="username" id=""><br>
        Password : <input type="password" name="password" id=""><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>