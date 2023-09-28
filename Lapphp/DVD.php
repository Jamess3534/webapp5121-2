<?php
    require 'conn.php';
    $sql = "SELECT * FROM ดีวีดีภาพยนตร์";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>ภาพยนตร์</title>
</head>

<body>
    <div class="container">
        <h1>ภาพยนตร์</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">วัน-เดือน-ปี</th>
                    <th scope="col-4">เวลา</th>
                    <th scope="col-4">ชื่อเรื่อง</th>
                    <th scope="col-4">เพิ่มเติม</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["sid"]."</td>"."<td>".$row["sday"]."</td>"."<td>".$row["stime"]."</td>"."<td>".$row["sname"]."</td>"."<td>"."<a class='btn btn-warning' href='เเก้ไขดีวีดีภาพยนตร์.php?sid=".$row["sid"]."'>เเก้ไข</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='เพิ่มดีวีดีภาพยนตร์.php'>เพิ่มภาพยนตร์</a>
        <a class="btn btn-success" href='main.php'>กลับ</a>
    </div>
</body>

</html>