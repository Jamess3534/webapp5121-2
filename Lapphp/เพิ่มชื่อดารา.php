<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มชื่อดารา</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="บันทึกเพิ่มชื่อดารา.php">
        <p>

            <label for="sid">id</label>
            <input type="text" name="sid" id="sid">

        </p>
       
        <p>

            <label for="sname">ชื่อ</label>
            <input type="text" name="sname" id="sname">

        </p>

        <p>

            <label for="slastname">นามสกุล</label>

            <input type="text" name="slastname" id="slastname">

        </p>

        <p>

            <label for="age">อายุ</label>

            <input type="number" name="age" id="age">

        </p>

        <p>

            <label for="moviename">ชื่อเรื่องที่เเสดง</label>
            <input type="text" name="moviename" id="moviename">

        </p>

        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='fuu.php'>Home</a>
    </form>
</body>

</html>