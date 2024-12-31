<?php
require("dbconnect.php");

$id = $_GET["id"];
$sql = "SELECT * FROM employees WHERE id = $id ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$skill_arr = array("HTML", "CSS", "Javascript", "PHP");


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
        <div class="mt-2 mb-2">
            <h3 class="text-center mt-4 ">ແກ້ໄຂຂໍ້ມູນພະນັກງານ</h3>
            <form action="updateData.php" method="post">
                <input type="hidden" value="<?php echo $row["id"]?>" name="id">
                <label for="" class="form-label mb-2 fs-5">ຊື່ແທ້</label>
                <input type="text" name="fname" class="form-control mb-2" value="<?php echo $row["fname"]; ?>">
                <label for="" class="form-label mb2 fs-5">ນາມສະກຸນ</label>
                <input type="text" name="lname" class="form-control mb-2" value="<?php echo $row["lname"]; ?>">
                <label for="" class="form-label mb2 fs-5">ອາຍຸ</label>
                <input type="number" name="age" class="form-control mb-2" min="0" max="99" value="<?php echo $row["age"]; ?>">
                <label for="" class="fs-5">ເພດ</label>
                <br>
                <?php if ($row["gender"] == 'ຊາຍ') { ?>
                    <input type="radio" name="gender" value="ຊາຍ" checked>
                    <label for="">ຊາຍ</label>
                    <input type="radio" name="gender" value="ຍິງ">
                    <label for="">ຍິງ</label>
                    <input type="radio" name="gender" value="ອື່ນໆ">
                    <label for="">ອື່ນໆ</label>
                <?php } else if ($row["gender"] == 'ຍິງ') { ?>
                    <input type="radio" name="gender" value="ຊາຍ">
                    <label for="">ຊາຍ</label>
                    <input type="radio" name="gender" value="ຍິງ" checked>
                    <label for="">ຍິງ</label>
                    <input type="radio" name="gender" value="ອື່ນໆ">
                    <label for="">ອື່ນໆ</label>
                <?php } else { ?>
                    <input type="radio" name="gender" value="ຊາຍ">
                    <label for="">ຊາຍ</label>
                    <input type="radio" name="gender" value="ຍິງ">
                    <label for="">ຍິງ</label>
                    <input type="radio" name="gender" value="ອື່ນໆ" checked>
                    <label for="">ອື່ນໆ</label>
                <?php } ?>
                <br>
                <div class="mt-3">
                    <label for="department" class="form-label fs-5">ພະແນກ :</label>
                    <?php if ($row["department"] == 'ອອກແບບສິ່ງພິມ') { ?>
                        <select name="department" class="form-select">
                            <option value="ອອກແບບສິ່ງພິມ" name="department" selected>ອອກແບບສິ່ງພິມ</option>
                            <option value="ຈັກພິມ" name="department">ຈັກພິມ</option>
                            <option value="ສຳເລັດຮູບ" name="department">ສຳເລັດຮູບ</option>
                        </select>
                    <?php } else if ($row["department"] == 'ຈັກພິມ') { ?>
                        <select name="department" class="form-select">
                            <option value="ອອກແບບສິ່ງພິມ" name="department">ອອກແບບສິ່ງພິມ</option>
                            <option value="ຈັກພິມ" name="department" selected>ຈັກພິມ</option>
                            <option value="ສຳເລັດຮູບ" name="department">ສຳເລັດຮູບ</option>
                        </select>
                    <?php } else { ?>
                        <select name="department" class="form-select">
                            <option value="ອອກແບບສິ່ງພິມ" name="department">ອອກແບບສິ່ງພິມ</option>
                            <option value="ຈັກພິມ" name="department">ຈັກພິມ</option>
                            <option value="ສຳເລັດຮູບ" name="department" selected>ສຳເລັດຮູບ</option>
                        </select>
                    <?php } ?>
                </div>
                <label for="" class="mb-2 mt-2 fs-5">ທັກສະ</label>
                <br>
                <?php
                $skills = explode(", ", $row["skills"]);
                foreach ($skill_arr as $value) {
                    if (in_array($value, $skills)) {
                        echo "<div class='form-check'>
                <input type='checkbox' name='skills[]' value='$value' class='form-check-input' checked>
                <label for='' class='form-check-label'>$value</label>
                </div>";
                    } else {
                        echo "<div class='form-check'>
                <input type='checkbox' name='skills[]' value='$value' class='form-check-input'>
                <label for='' class='form-check-label'>$value</label>
                </div>";
                    }
                }
                ?>
                <input type="submit" value="ແກ້ໄຂຂໍ້ມູນ" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>