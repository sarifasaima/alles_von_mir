<?php
$number=$_POST['number'];
echo identifyEvenOrOddNumber($_POST['number']);

function identifyEvenOrOddNumber ($number){
    if( ($number%2)==0){
        return "even";

    }else{
        return "odd";
    }
}