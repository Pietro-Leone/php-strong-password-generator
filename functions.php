<?php
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";

$passwordLength = $_GET['passwordLength'] ?? null;
if ($passwordLength != null) {
  $password = substr(str_shuffle($characters), 0, $passwordLength);
} else {
  $password = null;
}
?>