<?php

if(isset($_SESSION['text_field_empty'])) {
    echo $_SESSION['text_field_empty'];
}
if(isset($_SESSION['email_invalid'])) {
	echo $_SESSION['email_invalid'];
}

if(isset($_SESSION['user_exists'])) {
	echo $_SESSION['user_exists'];
}

if(isset($_SESSION['email_in_used'])) {
	echo $_SESSION['email_in_used'];
}

if(isset($_SESSION['user_type_error'])) {
	echo $_SESSION['user_type_error'];
}

unset($_SESSION['text_field_empty']);
unset($_SESSION['email_invalid']);
unset($_SESSION['user_exists']);
unset($_SESSION['email_in_used']);
unset($_SESSION['user_type_error']);
?>