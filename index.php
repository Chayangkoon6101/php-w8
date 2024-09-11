<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "01students";
    $conn = mysqli_connect($server, $user, $password, $db);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
    $sql = "SELECT * FROM students ORDER BY class ASC";
    $data = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chayangkoon6101</title>
    <link href="https://bootswatch.com/5/solar/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container pb-4 px-2">
        <h3 class="display-7 p-5 text-center">รายชื่อ</h3>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fetch = mysqli_fetch_assoc($data)) {?>
                    <tr>
                        <td><?php echo $fetch["s_id"]?></td>
                        <td><?php echo $fetch["fname"]." ".$fetch["lname"]?></td>
                        <td><?php echo $fetch["class"]?></td>
                        <td><?php echo $fetch["email"]?></td>
                        <td><?php echo $fetch["username"]?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
