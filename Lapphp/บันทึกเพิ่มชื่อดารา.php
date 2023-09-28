<?php
require 'conn.php';
$sql_update="INSERT INTO ดารา(sid,sname,slastname,age,moviename) VALUES ('$_POST[sid]','$_POST[sname]','$_POST[slastname]' ,'$_POST[age]' ,'$_POST[moviename]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "บันทึกเรียบร้อย  <br>";
header("refresh: 1; url=http://localhost/Lapphp/fuu.php");
}

?>