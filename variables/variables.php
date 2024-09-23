<?php

//create variables 

$first_name = "Saman";

$last_name = "Kumara";
echo $first_name . " " . $last_name;
echo "<br>";

echo "Full name -" .$first_name." ".$last_name;
echo "<br>";
echo "Full name - {$first_name}  {$last_name}s";
echo "<br>";
echo "<br>";


$first = "the five boxing wizard ";
$second = "jump quickly";

$sentence = $first;
$sentence .= $second;

echo $sentence;
?>
<br>

All simple : <?php  echo strtolower($sentence);?><br>
All capitol : <?php echo strtoupper($sentence);?><br>
First latter capitol in all words : <?php echo ucwords($sentence);?><br>
Number of characters  : <?php echo strlen($sentence);?><br>
Search string or character : <?php echo strstr($sentence,"box");?><br>
Replace string   : <?php echo str_replace("five","seven",$sentence);?><br>  

