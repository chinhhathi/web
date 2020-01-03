<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 8:31 PM
 */


include "company_profile.php";
include($_SERVER['DOCUMENT_ROOT'].'/web/company/company_profile_student_card.php');

if (isset($_SESSION['tax_number'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <title>Hồ sơ doanh nghiệp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Times New Roman", sans-serif
        }

        body {
            font-size: 20px;
        }

        img {
            margin-bottom: -8px;
        }
    </style>

    <body id="myPage" style="background-color: #f5f5f5">
    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-theme-d2 w3-left-align">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2"
               href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a href="company_home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Trang chủ</a>
            <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Hồ sơ doanh nghiệp</a>
            <a href="company_home.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Phiếu tuyển dụng</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Bảng phân công</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Khác</a>
            <div style="float: right" class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-teal " title="Notifications"><?php echo $company_profile['organization_name'] ?><i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block" >
                    <a href="profile.php" class="w3-bar-item w3-button">Hồ sơ doanh nghiệp</a>
                    <a href="logout.php" class="w3-bar-item w3-button">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <form action="edit_profile_sql.php" method="post">
    <div class="w3-content w3-padding-top  w3-white w3-margin-bottom w3-margin-top" style="max-width:1200px;">
        <div class="w3-center w3-card w3-opacity" style="background:#353535 url(https://techtalk.vn/wp-content/uploads/2017/08/PHP-696x392.jpg); height: 150px;"></div>
        <div class="w3-card w3-padding">
            <i class="fa fa-home w3-margin-right"><a href="#" style="text-decoration: none" class="w3-hover-opacity"></i>Trang chủ</a> /
            <a style="text-decoration: none" class="w3-hover-opacity" href="student_home.php">Hồ sơ doanh nghiệp</a>
        </div>
        <div class="w3-col m12 w3-card w3-round-large w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme">
                    <p class="w3-large"><h4>Hồ sơ doanh nghiệp</h4>
                </li>
                <li>
                    <p><b>Tên doanh nghiệp:</b></p>
                    <p><input class="w3-input w3-block w3-round" value="<?php echo $company_profile['organization_name']; ?>" name="organization_name"></p>
                </li><li>
                    <p><b>Quy mô:</b></p>
                    <p><input class="w3-input w3-block w3-round" value="<?php echo $company_profile['employee_count']; ?>" name="employee_count"></p>
                </li>
                <li>
                    <p><b>Doanh số:</b></p>
                    <p><input class="w3-input w3-block w3-round" value="<?php echo $company_profile['gross_revenue']; ?>" name="gross_revenue"></p>
                </li>
                <li>
                    <p><b>Địa chỉ:</b></p>
                    <p><input class="w3-input w3-block w3-round" value="<?php echo $company_profile['address']; ?>" name="address"></p>
                </li>
                <li>
                    <p><b>Trang web công ty:</b></p>
                    <p><input class="w3-input w3-block w3-round" value="<?php echo $company_profile['home_page']; ?>" name="home_page"></p>
                </li>
                <li class="w3-padding"><b>Mã số thuế</b><?php echo $company_profile['tax_number'];?></li>

                <li>
                    <input type="submit" class="w3-button w3-block w3-round w3-green" name="login" value="Lưu thay đổi">
                </li>
            </ul>
        </div>
    </div>
    </form>
    </body>
    </html>

    <?php
}
else
    header('Location: /web/login/login.php');
?>