<?php
$passwordLength = $_GET['passwordLength'] ?? null;

$lowerChar = "abcdefghijklmnopqrstuvwxyz";
$upperChar = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "0123456789";
$symbols = "!?@#[]{}/$%&*_";


if (isset($_GET['numbers'])) {
  $num = substr(str_shuffle($numbers), 0, 2);
}else{
  $num = "";
}
if (isset($_GET['symbols'])) {
  $symb = substr(str_shuffle($symbols), 0, 2);
}else{
  $symb = "";
}
if (isset($_GET['upperChar'])) {
  $char = substr(str_shuffle($lowerChar . $upperChar), 0, ($passwordLength - (strlen($num) + strlen($symb))));
} else {
  $char = substr(str_shuffle($lowerChar), 0, ($passwordLength - (strlen($num) + strlen($symb))));
}

if ($passwordLength != null) {
  $password = substr(str_shuffle($char . $num . $symb ), 0, $passwordLength);
} else {
  $password = null;
}
