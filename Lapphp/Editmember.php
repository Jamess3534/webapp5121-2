<?php
if(!isset($_GET['sid'])){
    header("refresh: 0; url=http://localhost/Find/Showmember.php");
}
require 'conn.php';
$sql = "SELECT * FROM สมาชิก  WHERE sid='$_GET[sid]'";
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
    <title>เพิ่มข้อมูล</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="Savemember.php">
        <p>

            <label for="sid">id</label>
            <input type="text" name="sid" id="sid" value="<?=$row['sid'];?>" />

        </p>
        <p>

            <label for="sname">ชื่อ</label>
            <input type="text" name="sname" id="sname" value="<?=$row['sname'];?>" />

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label for="slastname">นามสกุล</label>

            <input type="text" name="slastname" id="slastname" value="<?=$row['slastname'];?>" />

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>

        <p>

             <label for="buymoviename">หนังที่ซื้อไป</label>

             <input type="text" name="buymoviename" id="buymoviename">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='Showmember.php'>Home</a>
    </form>
</body>

</html>