<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}

// logging out
if (isset($_GET['logout'])) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['id']);
    $_SESSION['success_logout'] = 'You have logged out.';
    header('location: login.php');
    exit();
}

// check if credentials are the same as in the database
require_once('connect/connect.php');

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$id = $_SESSION['id'];

if($sql = mysqli_query($con, 'SELECT * FROM ACCNT WHERE ACCNT_ID = ' . $id . ' AND ACCNT_USR_NM = "' . $username . '" AND ACCNT_PSSWD = "'. $password . '"')) {
    $row_cnt = mysqli_num_rows($sql);
    if ($row_cnt == 0) {
        $_SESSION['user_notmatch'] = 'Your login session data is not on the record in the database';
        header('location: login.php');
        exit();
    }
    mysqli_free_result($sql);
    mysqli_close($con);
}

echo '<pre>';
echo print_r($_SESSION);
echo '</pre>';
?>