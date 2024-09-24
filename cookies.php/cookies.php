<?php

// setcookie(name,value,expiration); me thiyena oder ekata thamai value denna ona 


if (isset($_COOKIE['language'])) {
    $language = $_COOKIE['language'];
    echo "Selected Language : {$language}";
}else{

    setcookie('language','Sinhala',time()+60*60*24*7);//me cookie eka sathiyak yanakm expire wenne nathi widiyata time eka dala thiyenne
}

//how to remove a cookie

// setcookie('language', NULL, time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
</body>
</html>