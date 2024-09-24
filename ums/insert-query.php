<?php require_once('inc/connection.php')?>


<?php

$first_name = 'Yasmin';
$last_name = 'yashoda';
$email = 'yasmin123@gmail.com';
$password = 'pass';
$is_deleted = 0;

$hashed_password = sha1($password);
// echo "Hash password : {$hashed_password}";

$query = "INSERT INTO user (first_name,last_name,email,password,is_delete) VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$is_deleted}')"; 

$result = mysqli_query($connection,$query);

if ($result) {
    echo "1 Recode added";
}else{
    echo "Database faild";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Query </title>
</head>
<body>
    
</body>
</html>

<?php mysqli_close($connection);?>