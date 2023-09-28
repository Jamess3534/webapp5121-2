<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มดีวีดีภาพยนตร์</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="บันทึกดีวีดีภาพยนตร์.php">
        <p>

        <label for="sid">id</label>
        <input type="text" name="sid" id="sid">

        </p>
       
        <p>

            <label for="sday">วันที่</label>

            <input type="date" name="sday" id="sday">

        </p>

        <p>

            <label for="stime">เวลา</label>

            <input type="time" name="stime" id="stime">

        </p>

        <p>

            <label for="sname">ชื่อเรื่อง</label>
            <input type="text" name="sname" id="sname">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='DVD.php'>Home</a>
    </form>
</body>

</html>