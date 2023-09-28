<?php
if(!isset($_GET['sid'])){
    header("refresh: 0; url=http://localhost/Find/DVD.php");
}
require 'conn.php';
$sql = "SELECT * FROM ดีวีดีภาพยนตร์  WHERE sid='$_GET[sid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลดีวีดีภาพยนตร์</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="บันทึกการเเก้ไขดีวีดีภาพยนตร์.php">
        <p>

            <label for="sid">id</label>
            <input type="text" name="sid" id="sid" value="<?=$row['sid'];?>" />

        </p>
        
        <p>

            <label for="sday">วันที่</label>
            <input type="date" name="sday" id="sday" value="<?=$row['sday'];?>" />

        </p>

        <p>

            <label for="stime">เวลา</label>

            <input type="time" name="stime" id="stime" value="<?=$row['stime'];?>" />

        </p>

        <p>

            <label for="sname">ชื่อเรื่อง</label>

            <input type="text" name="sname" id="sname" value="<?=$row['sname'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='DVD.php'>Home</a>
    </form>
</body>

</html>