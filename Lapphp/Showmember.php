<?php
    require 'conn.php';
    $sql = "SELECT * FROM สมาชิก";
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
    <title>สมาชิก</title>
    <style>
        .button-container
        {
            display: flex;
        }
        .button-container p
        {
            margin: 3px;
            padding: 5px 10px;
            cursor: pointer;
            background-color: transparent ;
            transition: background-color 0.3s;
        }
        p:hover
        {
            background-color: orange;
            transform: scale(1);
            transition-delay: 50ms;
        }
    </style>
</head>

<body>
    </div>
    <div class="container">
        <h1>สมาชิก</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col-4">ID</th>
                    <th scope="col-4">ชื่อ-นามสกุล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">เบอร์โทร</th>
                    <th scope="col-4">หนังที่ซื้อไป</th>
                    <th scope="col-4">เพิ่มเติม</th>
                </tr>
            </thead>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["sid"]."</td>"."<td>".$row["sname"]." ".$row["slastname"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["telephone"]."</td>"."<td>".$row["buymoviename"]."</td>"."<td>"."<a class='btn btn-warning' href='Editmember.php?sid=".$row["sid"]."'>เพิ่มข้อมูล</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success" href='Addmember.php'>เพิ่มสมาชิก</a>
        <a class="btn btn-success" href='main.php'>กลับ</a>
    </div>
</body>

</html>"