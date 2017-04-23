<?php
$issrs_arry = array();
$sql_stmt = 'SELECT * FROM ISS, USR WHERE ISS.ISS_USR_CNCRN_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_ISSR_ID=USR.USR_ID ORDER BY ISS.ISS_DT DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
		$array[] = $row;
	}
}


$sql_stmt = 'SELECT * FROM ISS, USR, ISS_CNCRN WHERE ISS.ISS_USR_CNCRN_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID AND ISS.ISS_ID=ISS_CNCRN.ISS_CNCRN_ISS_ID ORDER BY ISS.ISS_DT DESC, ISS.ISS_TM DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	$iter = 0;
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		if (empty($row['ISS_APPRVL_STS'])) {
			$apprvl_sts = '';
		} else {
			$apprvl_sts = $row['ISS_APPRVL_STS'];
		}
		if ($row['ISS_VLDT_STS'] == 'VALIDATED' && $row['ISS_APPRVL_STS'] && 'Approved' && empty($row['ISS_RT_CSE']) && empty($row['ISS_CRRCTN']) && empty($row['ISS_CRRCTN_ACTN'])) {
			$sts = '<a style="text-decoration: none" href="'. HTTP_ROOT .'employee-respond-cpar.php?issue_id_to_answer='.$row['ISS_ID'].'">Respond</a>';
			$apprvl_sts = '';
		} else if ($row['ISS_APPRVL_STS'] == 'Denied') {
			$sts = 'Closed';
		} 
		echo '<tr>
				<td data-title="Date">'.date("m/d/Y", strtotime($row['ISS_DT'])).'</td>
				<td data-title="Time">'.date("g:i A", strtotime($row['ISS_TM'])).'</td>
				<td data-title="Issuer">'.$array[$iter]['USR_NM'].'</td>
				<td data-title="Issue Name To">'.$row['USR_NM'].'</td>
				<td data-title="Issue Dept To">'.$row['USR_DPRTMNT'].'</td>
				<td data-title="Status">'.$sts.'</td>
				<td data-title="Disposition">'.$apprvl_sts.'</td>
			</tr>';
		$iter++;
	}
}
?>