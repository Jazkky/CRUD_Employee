<?php
require("dbconnect.php");

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
$order = 1;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header class="p-3 bg-primary text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-4 text-white fs-5">ໜ້າຫຼັກ</a></li>
                    <li><a href="insertForm.php" class="nav-link px-4 text-white fs-5">ເພີ່ມຂໍ້ມູນພະນັກງານ</a></li>
                    <li><a href="showData.php" class="nav-link px-4 text-white fs-5">ຂໍ້ມູນພະນັກງານ</a></li>
                    <li><a href="searchForm.php" class="nav-link px-4 text-white fs-5">ຄົ້ນຫາ</a></li>
                </ul>

                <div class="d-flex justify-content-end align-items-center">
                    <h3 class="me-2 mb-0">ຖານຂໍ້ມູນພະນັກງານ</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                </div>

            </div>
        </div>
    </header>
    <div class="container">
        <div class="mb-2 mt-2">
        <h3 class="text-center mt-4 mb-4">ຂໍ້ມູນພະນັກງານ</h3>
        <?php if($count > 0 ) { ?>
        <table class="table table-bordered">
            <thead>
                <tr class="table-primary text-center">
                    <th>ລຳດັບ</th>
                    <th>ຊື່ແທ້</th>
                    <th>ນາມສະກຸນ</th>
                    <th>ອາຍຸ</th>
                    <th>ເພດ</th>
                    <th>ພະແນກ</th>
                    <th>ທັກສະ</th>
                    <th>ແກ້ໄຂ</th>
                    <th>ລົບ</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr class="text-center">
                    <td><?php echo $order++; ?></td>
                    <td><?php echo $row["fname"]; ?></td>
                    <td><?php echo $row["lname"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["department"]; ?></td>
                    <td><?php echo $row["skills"]; ?></td>
                    <td>
                        <a href="editData.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">ແກ້ໄຂ</a>
                    </td>
                    <td>
                        <a href="deleteQueryString.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">ລົບຂໍ້ມູນ</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }else{ ?>
            <div class="alert alert-danger">
                <h4 class="text-center"> !!! ບໍ່ມີຂໍ້ມູນພະນັກງານ !!!</h4>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>