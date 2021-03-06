<?php

include "ConnectDB.php";

// Query status OPEN
$sql = "SELECT `template_version`,count(`action`)FROM sugarcrm_hr.email_tracking WHERE template_version='DBS2017V4' && `action`='open'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {

        /*echo "OPEN = " . $row['count(`action`)'];*/

        $_SESSION['templateVersion'] = $row['template_version'];
        $_SESSION['ActionCount'] = $row['count(`action`)'];

    }
} else {
    echo "0 results";
}
// Query status Unread
$sql = "SELECT `template_version`,count(`action`)FROM sugarcrm_hr.email_tracking WHERE template_version='DBS2017V4' && `action`='unread'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        /*echo "Unread  = " . $row['count(`action`)'];*/

        /*$_SESSION['templateVersion'] = $row['template_version'];*/
        $_SESSION['ActionCountUnread'] = $row['count(`action`)'];

    }
} else {
    echo "0 results";
}
// Query status Repiled
$sql = "SELECT `template_version`,count(`action`)FROM sugarcrm_hr.email_tracking WHERE template_version='DBS2017V4' && `action`='replied'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {
        /*echo "Unread  = " . $row['count(`action`)'];*/

        /*$_SESSION['templateVersion'] = $row['template_version'];*/
        $_SESSION['ActionCountReplied'] = $row['count(`action`)'];

    }
} else {
    echo "0 results";
}
// Query status Click
$sql = "SELECT `template_version`,count(`action`)FROM sugarcrm_hr.email_tracking WHERE template_version='DBS2017V4' && `action`='click'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while ($row = $result->fetch_assoc()) {

        /*echo "OPEN = " . $row['count(`action`)'];*/
        $_SESSION['ActionCountClick'] = $row['count(`action`)'];

    }
} else {
    echo "0 results";
}
// Calculate all of thing ------------------------------------------
$Read4 = $_SESSION['ActionCountClick']+$_SESSION['ActionCount'];
$Unread4 = $_SESSION['ActionCountUnread'];
$Replied4 = $_SESSION['ActionCountReplied'];
$Total4 = $_SESSION['ActionCountUnread'] + $_SESSION['ActionCount']+$_SESSION['ActionCountClick'] + $_SESSION['ActionCountReplied'];