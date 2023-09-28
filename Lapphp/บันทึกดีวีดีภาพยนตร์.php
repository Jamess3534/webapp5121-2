<?php
require 'conn.php';
$sql_update="INSERT INTO ดีวีดีภาพยนตร์(sid,sday,stime,sname) VALUES ('$_POST[sid]','$_POST[sday]','$_POST[stime]' ,'$_POST[sname]' )";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "บันทึกเรียบร้อย  <br>";
header("refresh: 1; url=http://localhost/Lapphp/DVD.php");
}

?>