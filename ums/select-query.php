<?php require_once('inc/connection.php')?>

<?php

$query = "SELECT first_name,last_name,email FROM user";

$results_set = mysqli_query($connection,$query);

if ($results_set) {
    echo mysqli_num_rows($results_set) . "Recods Found";

  $table = '<table>';
  $table .= '<tr><th>First Name<th><th>Last Name<th><th>Email<th></tr>';

  while($recods = mysqli_fetch_assoc($results_set)){
    $table .= '<tr>';

    $table .= '<td>' . $recods['first_name']. '</td>';
    $table .= '<td>' . $recods['last_name']. '</td>';
    $table .= '<td>' . $recods['email']. '</td>';
    
    $table .= '</tr>';

}

$table .= '</table>';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>

    <style>
        td,th{border: 1px solid black;}
    </style>
</head>
<body>
    <?php echo $table;?>
</body>
</html>

<?php mysqli_close($connection);?>