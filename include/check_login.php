<?php
session_start();
require_once('connect/connect.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header('location: index.php');
    exit();
}

if(isset($_POST['username']) && isset($_POST['password'])) {

    if(empty($_POST['username'])) {
        $_SESSION['username_empty'] = 'Username field is empty.<br />';
        header('location: login-template.php');
        exit();
    }

    if(empty($_POST['password'])) {
        $_SESSION['password_empty'] = 'Password field is empty.<br />';
        header('location: login-template.php');
        exit();
    }

  
    if(filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) == false){
			$_SESSION['invalid_email'] = 'Invalid Username';
			header('location: login-template.php');
			exit();	
	}
    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if($sql = mysqli_query($con, 'SELECT * FROM ACCNT WHERE ACCNT_USR_NM = "' . $username . '" AND ACCNT_PSSWD = "' . $password . '" LIMIT 1')) {
        $row_cnt = mysqli_num_rows($sql);
        if($row_cnt == 0) {
            $_SESSION['account_notfound'] = 'User not found in database.';
			header('location: login-template.php');
			exit();	
        }
        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
            $id = $row['ACCNT_ID'];
        }
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        mysqli_free_result($sql);
        mysqli_close($con);
        header('location: index.php');
        exit();

    } 
    

}
?>