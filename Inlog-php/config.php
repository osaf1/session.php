<?php
session_start();

$users = [
    'admin' => 'password123', 
    'obida' => '24102004AFG',
    'sara' => '24102014'
];

function isLoggedIn() {
    return isset($_SESSION['username']);
}
//unset($users['admin']);

?>
 