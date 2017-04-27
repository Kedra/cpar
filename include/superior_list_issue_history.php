<?php
$sql_stmt = 'SELECT * FROM ISS, USR WHERE ISS.ISS_USR_ISSR_ID = '. $_SESSION['usr_id'] .' AND ISS.ISS_USR_CNCRN_ID=USR.USR_ID ORDER BY ISS.ISS_DT DESC, ISS.ISS_TM DESC';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		if (empty($row['ISS_APPRVL_STS'])) {
			$apprvl_sts = 'Pending';
		} else {
			$apprvl_sts = $row['ISS_APPRVL_STS'];
		} // date("m/d/y", strtotime($row['ISS_DT']))
		echo '<tr>
				<td data-title="Date">'.date("m/d/Y", strtotime($row['ISS_DT'])).'</td>
				<td data-title="Time">'.date("g:i A", strtotime($row['ISS_TM'])).'</td>
				<td data-title="Issuer">'.$_SESSION['usr_nm'].'</td>
				<td data-title="Issue Name To">'.$row['USR_NM'].'</td>
				<td data-title="Issue Department To">'.$row['USR_DPRTMNT'].'</td>
				<td data-title="Disposition">'.$apprvl_sts.'</td>
				<td>
					<a href="'. HTTP_ROOT . 'superior-view-issue.php?issue_id_to_view='.$row['ISS_ID'].'">
						<button id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="width: 100%">
							View
						</button>
					</a>
				</td>
			</tr>';
	}
}
?>