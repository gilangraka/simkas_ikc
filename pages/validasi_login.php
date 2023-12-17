<?php
include "config.php";
$db = new Database();
$email = $_POST['email'];
$password = $_POST['password'];

$db->loginUser($email, $password);
