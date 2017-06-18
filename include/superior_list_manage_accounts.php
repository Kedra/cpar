<?php
$sql_stmt ='SELECT * FROM usr, accnt, accnt_typ WHERE usr.USR_ACCNT_ID=accnt.ACCNT_ID AND usr.USR_ACCNT_TYP_ID=accnt_typ.ACCNT_TYP_ID ORDER BY usr.USR_NM';
if($sql = mysqli_query($con, $sql_stmt)) {
	while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		if($row['ACCNT_TYP_NM'] == 'SUPERIOR') {
			$type = 'Issuer Superior';
		} else if ($row['ACCNT_TYP_NM'] == 'ISSUER') {
			$type = 'Issuer';
		} else if ($row['ACCNT_TYP_NM'] == 'CONCERN') {
			$type = 'Employee';
		} else {
			$type = 'Administrator';
		}
		/*<?php echo HTTP_ROOT.'superior-manage-account.php?delete_user=1&usr_id='.$row['USR_ID'].'&accnt_id='.$row['ACCNT_ID']?>*/
		echo '<tr>
                      <td data-title="Date">'.$row['USR_NM'].'</td>
                      <td data-title="Time">'.$row['USR_DPRTMNT'].'</td>
                        <td data-title="Issuer">'.$type.'</td>
                               </td>
                    </tr>';
	}
}
?>