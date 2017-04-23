<?php

require_once('connect/connect.php');

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
	/*if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS_APPRVL_STS = "Approved" AND ISS_VLDT_STS = "VALIDATED" LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_approved'] = "*Issue already been approved.";
			header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	if($sql = mysqli_query($con, 'SELECT * FROM ISS WHERE ISS_ID = ' . $_POST['issue_to_reject'] . ' AND ISS_APPRVL_STS = "Denied" AND ISS_VLDT_STS = "" AND ISS_RSN_FR_DNL IS NOT NULL LIMIT 1')or die(mysqli_error($con))){
		if($row_cnt = mysqli_num_rows($sql)) {
			$_SESSION['issue_already_rejected'] = "*Issue already been rejected.";
			header('location: superior-reject-cpar.php?issue_id_to_reject='.$_POST['issue_to_reject']);
			exit();
		}
	}
	
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