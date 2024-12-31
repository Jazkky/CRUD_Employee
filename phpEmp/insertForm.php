<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header class="p-3 bg-primary text-white sticky-top">
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
        <h3 class="text-center mt-4 ">ບັນທຶກຂໍ້ມູນພະນັກງານ</h3>
        <form action="insertData.php" method="post">
            <label for="" class="form-label mb-2 fs-5">ຊື່ແທ້</label>
            <input type="text" name="fname" class="form-control mb-2">
            <label for="" class="form-label mb2 fs-5">ນາມສະກຸນ</label>
            <input type="text" name="lname" class="form-control mb-2">
            <label for="" class="form-label mb2 fs-5">ອາຍຸ</label>
            <input type="number" name="age" class="form-control mb-2" min="0" max="99">
            <label for="" class="fs-5">ເພດ</label>
            <br>
                <input type="radio" name="gender" value="ຊາຍ">
                <label for="">ຊາຍ</label>
                <input type="radio" name="gender" value="ຍິງ">
                <label for="">ຍິງ</label>
                <input type="radio" name="gender" value="ອື່ນໆ">
                <label for="">ອື່ນໆ</label>
            <br>
            <div class="mt-3">
                <label for="department" class="form-label fs-5">ພະແນກ :</label>
                <select name="department" class="form-select">
                    <option value="ອອກແບບສິ່ງພິມ" name="department">ອອກແບບສິ່ງພິມ</option>
                    <option value="ຈັກພິມ" name="department">ຈັກພິມ</option>
                    <option value="ສຳເລັດຮູບ" name="department">ສຳເລັດຮູບ</option>
                </select>
            </div>
            <label for="" class="mb-2 mt-2 fs-5">ທັກສະ</label>
            <br>
            <div class="form-check">
                <input type="checkbox" name="skills[]" value="HTML" class="form-check-input">
                <label for="" class="form-check-label">HTML</label>
            </div>
            <div class="form-check">
            <input type="checkbox" name="skills[]" value="CSS" class="form-check-input">
            <label for="" class="form-check-label">CSS</label>
            </div>
            <div class="form-check">
            <input type="checkbox" name="skills[]" value="Javascript" class="form-check-input">
            <label for="" class="form-check-label">Javascript</label>
            </div>
            <div class="form-check">
            <input type="checkbox" name="skills[]" value="PHP" class="form-check-input">
            <label for="" class="form-check-label">PHP</label>
            </div>
            <input type="submit" value="ບັນທຶກຂໍ້ມູນ" class="btn btn-primary mb-2 mt-5 me-2">
            <button type="reset" class="btn btn-warning mb-2 mt-5">ລ້າງຂໍ້ມູນ</button>
        </form>
    </div>
</div>
</body>
</html>