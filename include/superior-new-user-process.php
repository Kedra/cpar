<?php

if(isset($_POST['submit'])) {
	if(empty($_POST['user_type'])) {
		 $_SESSION['text_field_empty'] = '*User Type field is empty.';
		 header('location: superior-new-user.php');
		 exit();
	}
	
	if($_POST['user_type'] == 'Blank') {
			$_SESSION['text_field_empty'] = '*User Type field is blank.';
			header('location: superior-new-user.php');
			exit();
	}
	
	if(empty($_POST['user_name'])) {
		 $_SESSION['text_field_empty'] = '*User Name field is empty.';
		 header('location: superior-new-user.php');
		 exit();
	}
	if(empty($_POST['user_email'])) {
		 $_SESSION['text_field_empty'] = '*User Email field is empty.';
		 header('location: superior-new-user.php');
		 exit();
	}
	if(empty($_POST['user_department'])) {
		 $_SESSION['text_field_empty'] = '*User Department field is empty.';
		 header('location: superior-new-user.php');
		 exit();
	}
	if(empty($_POST['user_password'])) {
		 $_SESSION['text_field_empty'] = '*User Password field is empty.';
		 header('location: superior-new-user.php');
		 exit();
	}
	
	if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['email_invalid'] = '*User Email field is invalid.';
		header('location: superior-new-user.php');
		exit();
	}
	
	$usr_typ =  test_input($con, $_POST['user_type']);
	$usr_nm = test_input($con, $_POST['user_name']);
	$usr_eml = test_input($con, $_POST['user_email']);
	$usr_dprtmnt = test_input($con, $_POST['user_department']);
	$usr_psswrd = test_input($con, $_POST['user_password']);
	
	/* echo $usr_typ . '<br/>';
	echo $usr_nm . '<br/>';
	echo $usr_eml . '<br/>';
	echo $usr_dprtmnt . '<br/>';
	echo $usr_psswrd . '<br/>'; */
	
	if($sql = mysqli_query($con, 'SELECT * FROM USR WHERE USR_NM = "' . $usr_nm . '"  LIMIT 1')) {
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['user_exists'] = '*User name already exists.';
			mysqli_free_result($sql);
			mysqli_close($con);
			header('location: superior-new-user.php');
			exit();
		}
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM USR WHERE USR_EML = "' . $usr_eml . '"  LIMIT 1')) {
		if($row_cnt = mysqli_num_rows($sql)) {
			if($sql = mysqli_query($con, 'SELECT * FROM ACCNT WHERE ACCNT_USR_NM = "' . $usr_eml . '"  LIMIT 1')) {
					if($row_cnt = mysqli_num_rows($sql)) {
						$_SESSION['email_in_used'] = '*Email Address already in use.';
						mysqli_free_result($sql);
						mysqli_close($con);
						header('location: superior-new-user.php');
						exit();
				}
			}
		}
	}
	
	$usr_typ_id = 0;
	
	if($usr_typ == 'superior') {
		$usr_typ_id = 1;
	} else if ($usr_typ == 'issuer') {
		$usr_typ_id = 3;
	} else if ($usr_typ == 'employee') {
		$usr_typ_id = 2;
	} else if ($usr_typ == 'Blank') {
		$_SESSION['user_type_error'] = '*Incorrect User Type.';
		header('location: superior-new-user.php');
		exit();
	} else {
		$_SESSION['user_type_error'] = '*Incorrect User Type.';
		header('location: superior-new-user.php');
		exit();
	}
	
	
	
	$sql_stmt = 'INSERT INTO ACCNT
					(ACCNT_USR_NM, ACCNT_PSSWD)
					 VALUES ("' . $usr_eml . '", "'. $usr_psswrd. '")';
				 
	if($sql = mysqli_query($con, $sql_stmt)) {
		// success adding inserting to accnt table
	}
	
	 $sql_stmt = 'SELECT * FROM ACCNT WHERE ACCNT_USR_NM = "' . $usr_eml . '"';
	
	$accnt_id = 0;
	
	if($sql = mysqli_query($con, $sql_stmt)) {
		// get accnt id of newly added row
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
			$accnt_id = $row['ACCNT_ID'];
		}
	}
	
	$sql_stmt = 'INSERT INTO USR
					(USR_NM, USR_EML, USR_DPRTMNT, USR_ACCNT_ID, USR_ACCNT_TYP_ID)
					 VALUES ("'.$usr_nm.'", "'.$usr_eml.'", "'.$usr_dprtmnt.'",  '.$accnt_id .', '.$usr_typ_id.')';
	
	if($sql = mysqli_query($con, $sql_stmt)) {
		// insert into usr table
		$_SESSION['added_user_successfully'] = 'Added user: "'.$usr_nm.'" successfully!';
		header('location: superior-manage-account.php');
		exit();
	} 
}


function test_input($con, $data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($con, $data);
		return $data;
}

?>