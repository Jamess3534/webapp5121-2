<?php
require 'conn.php';
$sql_update="UPDATE ดารา SET sname='$_POST[sname]',slastname='$_POST[slastname]' ,age='$_POST[age]' ,moviename='$_POST[moviename]' WHERE sid='$_POST[sid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "เเก้ใขเสร็จสิ้น <br>";
header("refresh: 1; url=http://localhost/Lapphp/fuu.php");
}

?>