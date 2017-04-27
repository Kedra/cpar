<?php

require_once('connect/connect.php');

$cpar_no = '';
$cpar_date = '';

if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID='.$_GET['issue_id_to_answer'].' LIMIT 1')) {
		if(!$row_cnt = mysqli_num_rows($sql)) {
			header('location: employee.php');
			exit();
		}
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$date = date_create_from_format('Y-m-d', $row['ISS_DT_APPRVD']);
			$date = date_format($date, 'd-m-Y');
			$cpar_date = $date;
		}
}

if(isset($_POST['submit'])) {
	
	if(empty($_POST['cpar_no'])) {
		 $_SESSION['cpar_no_empty'] = '*CPAR No field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['cpar_date'])) {
		 $_SESSION['cpar_date_empty'] = '*CPAR Date field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['cpar_date'])) {
		 $_SESSION['cpar_date_empty'] = '*CPAR Date field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['root_cause'])) {
		 $_SESSION['root_cause_empty'] = '*Root Cause field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['correction'])) {
		 $_SESSION['correction_empty'] = '*Correction field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	if(empty($_POST['correction_action'])) {
		 $_SESSION['correction_action_empty'] = '*Correction Action field is empty.';
		 header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
		 exit();
	}
	
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_answer'] . ' AND ISS_APPRVL_STS = "Denied" AND ISS_VLDT_STS = "" AND ISS_RSN_FR_DNL IS NOT NULL LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_rejected'] = "*Issue already been rejected.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();
		}
	}
	$sql_stmt = 'SELECT *
				 FROM ISS, ISS_CNCRN
				 WHERE ISS.ISS_ID = ISS_CNCRN.ISS_CNCRN_ISS_ID
				 AND ISS.ISS_ID = '.$_POST['issue_to_answer'].'
				 AND ISS.ISS_APPRVL_STS = "Approved"
				 AND ISS.ISS_VLDT_STS = "VALIDATED"
				 AND ISS_CNCRN.ISS_CNCRN_APPRVL_STS = "Approved"
				 AND ISS_CNCRN.ISS_CNCRN_VLDT_STS = "VALIDATED"
				 LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		if($row_cnt = mysqli_num_rows($sql)){
			$_SESSION['issue_concern_already_approved'] = "*Issue concern already been approved.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();
		}
	}
	$sql_stmt = 'SELECT *
				 FROM ISS, ISS_CNCRN
				 WHERE ISS.ISS_ID = ISS_CNCRN.ISS_CNCRN_ISS_ID
				 AND ISS.ISS_ID = '.$_POST['issue_to_answer'].'
				 AND ISS.ISS_APPRVL_STS = "Approved"
				 AND ISS.ISS_VLDT_STS = "VALIDATED"
				 AND ISS_CNCRN.ISS_CNCRN_APPRVL_STS = "Denied"
				 AND ISS_CNCRN.ISS_CNCRN_VLDT_STS = ""
				 AND ISS_CNCRN_RSN_FR_DNL IS NOT NULL
				 LIMIT 1';
	if($sql = mysqli_query($con, $sql_stmt)or die(mysqli_error($con))) {
		if($row_cnt = mysqli_num_rows($sql)){
			$_SESSION['issue_concern_already_rejected'] = "*Issue concern already been rejected.";
			header('location: employee-answer-cpar.php?issue_id_to_answer='.$_POST['issue_to_answer']);
			exit();	
		}
	}
	
	$root_cause = test_input($con, $_POST['root_cause']);
	$correction = test_input($con, $_POST['correction']);
	$correction_action = test_input($con, $_POST['correction_action']);
	
	$sql_stmt = 'UPDATE ISS_CNCRN
				SET ISS_CNCRN_NMBR = ' . $cpar_no . ' 
					AND ISS_RT_CSE = ' . $root_cause . ' 
					AND ISS_CRRCTN = '. $correction . ' 
					AND ISS_CRRCTN_ACTN = ' . $correction_action . ' 
					AND ISS_CNCRN_APPRVL_STS = ""
					AND ISS_CNCRN_VLDT_STS = "VALIDATE"';
	/* if($sql = mysqli_query($con, 'UPDATE ISS, ISS_CNCRN') */
	
	
	/*
	$reason_for_rejection_desc = test_input($con, $_POST['reason_for_denial_desc']);
	
	if($sql = mysqli_query($con, 'UPDATE ISS SET ISS_RSN_FR_DNL = "'.$reason_for_rejection_desc.'", ISS_APPRVL_STS = "Denied", ISS_VLDT_STS = "" WHERE ISS_ID = ' . $_POST['issue_to_reject'] .'')or die(mysqli_error($con))){
	}
	
	if($sql = mysqli_query($con, 'SELECT * FROM ISS, USR WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID LIMIT 1')) {
		while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$issr_array[] = $row;
		}
	}
	
	$sql_stmt = 'INSERT INTO NTFCTN
					(NTFCTN_DSC, NTFCTN_STS, NTFCTN_USR_ID, NTFCTN_DT, NTFCTN_TM)
					VALUES ("Your CPAR issue has been rejected by Issuer Superior, '.$_SESSION['usr_nm'].', with the reason of rejection of: '.$reason_for_rejection_desc.'.", "Unread",
					'.$issr_array[0]["USR_ID"].', CURDATE(), CURTIME())';
	echo $sql_stmt;
	if($sql = mysqli_query($con, $sql_stmt)) {
		
		$_SESSION['issue_sent_successfully'] = 'ISSUE CPAR has rejected been successfully.';
		header('location: superior.php');
		exit();
		
	} */
}

function test_input($con, $data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		$data = mysqli_real_escape_string($con, $data);
		return $data;
	}
?>