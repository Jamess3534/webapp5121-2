<?php
require 'conn.php';
$sql_update="UPDATE ดีวีดีภาพยนตร์ SET sday='$_POST[sday]',stime='$_POST[stime]' ,sname='$_POST[sname]' WHERE sid='$_POST[sid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "เเก้ใขเสร็จสิ้น <br>";
header("refresh: 1; url=http://localhost/Lapphp/DVD.php");
}

?>