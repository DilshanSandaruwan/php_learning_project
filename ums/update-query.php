<?php require_once('inc/connection.php')?>


<?php

$query = "UPDATE user SET first_name='Chamindu',last_name='Prasanna' WHERE id=4";
$results_set = mysqli_query($connection,$query);

if ($results_set) {
    echo mysqli_affected_rows($connection) . "Recodes Updated " ;
}else{
    echo "Database Failed .";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Query </title>
</head>
<body>
    
</body>
</html>

<?php mysqli_close($connection);?>