<?php
require 'conn.php';
$sql_update="INSERT INTO สมาชิก(sid,sname,slastname,address,telephone,buymoviename) VALUES ('$_POST[sid]','$_POST[sname]','$_POST[slastname]' ,'$_POST[address]' ,'$_POST[telephone]' ,'$_POST[buymoviename]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "บันทึกเรียบร้อย  <br>";
header("refresh: 1; url=http://localhost/Lapphp/Showmember.php");
}

?>