<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home page</h1>

    <?php

    $news_item = 32;
    $category = urlencode("sports & hobbies");
    $url = "news.php?news_item{$news_item}&category{$category}";
    ?>
    <a href="<?php echo $url;?>">Read news Item 01</a>
</body>
</html>