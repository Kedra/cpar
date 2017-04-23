<?php

if(isset($_SESSION['cpar_no_empty'])) {
    echo $_SESSION['cpar_no_empty'];
}
if(isset($_SESSION['cpar_date_empty'])) {
    echo $_SESSION['cpar_date_empty'];
}
if(isset($_SESSION['root_cause_empty'])) {
    echo $_SESSION['root_cause_empty'];
}
if(isset($_SESSION['correction_empty'])) {
    echo $_SESSION['correction_empty'];
}
if(isset($_SESSION['correction_action_empty'])) {
    echo $_SESSION['correction_action_empty'];
}


unset($_SESSION['cpar_no_empty']);
unset($_SESSION['cpar_date_empty']);
unset($_SESSION['root_cause_empty']);
unset($_SESSION['correction_empty']);
unset($_SESSION['correction_action_empty']);
?>