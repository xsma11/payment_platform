<?php


session_start();
include 'engine.php';

// echo "hellow world";

$function = $_GET['func'];

if (function_exists($function)) {

      $function();

} else{
    echo "no such function";
}


