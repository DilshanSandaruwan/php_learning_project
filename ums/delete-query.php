<?php require_once('inc/connection.php')?>

<?php

$query = "DELETE FROM user  WHERE Id=3 LIMIT 1";
$results_set = mysqli_query($connection,$query);

if ($results_set) {
    echo mysqli_affected_rows($connection) . "Recodes Deleted " ;
}else{
    echo "Database Failed .";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Query</title>
</head>
<body>
    
</body>
</html>

<?php mysqli_close($connection);?>