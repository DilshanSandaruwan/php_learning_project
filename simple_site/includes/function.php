<?php

function display_greeting(){

    $hour = date('h'); //gives the hours  of current time

    if($hour >=0 and $hour <=11){
        echo "Good morning !";
    }elseif($hour >=12 and $hour <=17){
        echo "Good afternoon !";
    }else{
        echo "Good evening !";
    }

}

?>