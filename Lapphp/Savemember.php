<?php
require 'conn.php';
$sql_update="UPDATE สมาชิก SET sname='$_POST[sname]',slastname='$_POST[slastname]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' ,buymoviename='$_POST[buymoviename]' WHERE sid='$_POST[sid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "เเก้ใขเสร็จสิ้น <br>";
header("refresh: 1; url=http://localhost/Lapphp/Showmember.php");
}

?>