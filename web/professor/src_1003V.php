<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 10/16/2019
 * Time: 9:46 PM
 */
include "professor_profile.php";
include($_SERVER['DOCUMENT_ROOT'].'/web/company/company_profile_student_card.php');

if (isset($_SESSION['professor_code'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <title>Phiếu tuyển dụng</title>
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
            <a href="professor_home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Trang chủ</a>
            <a href="list_company.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Doanh nghiệp</a>
            <a href="list_student.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sinh viên</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Bảng phân công</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Khác</a>
            <div style="float: right" class="w3-dropdown-hover w3-hide-small">
                <button class="w3-button w3-teal " title="Notifications"><?php echo $professor_profile['full_name'] ?><i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-card-4 w3-bar-block" >
                    <a href="logout.php" class="w3-bar-item w3-button">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <form action="scr_1002E_change.php" method="post">
        <div class="w3-content w3-padding-top  w3-white w3-margin-bottom w3-margin-top" style="max-width:1200px;">
            <div class="w3-center w3-card w3-opacity" style="background:#353535 url(https://techtalk.vn/wp-content/uploads/2017/08/PHP-696x392.jpg); height: 150px;"></div>
            <div class="w3-card w3-padding">
                <i class="fa fa-home w3-margin-right"><a href="#" style="text-decoration: none" class="w3-hover-opacity"></i>Trang chủ</a> /
                <a style="text-decoration: none" class="w3-hover-opacity" href="#">Phiếu tuyển dụng</a>
            </div>
            <div class="w3-col m12 w3-card w3-round-large w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                        <p class="w3-large"><h4>PHIẾU TUYỂN DỤNG</h4>
                    </li>
                    <input type="hidden" id="card_id" name="card_id" value="<?php echo $_SESSION['org_request']['id'];?>">
                    <li class="w3-padding"><b>Tên doanh nghiệp: </b><?php echo $_SESSION['org_pr']['organization_name'];?></li>
                    <li>
                        <p><b>Tuyển dụng:</b></p>
                        <p><input class="w3-input w3-block w3-round" value="<?php echo $_SESSION['org_request']['subject'];?>" name="subject"></p>
                    </li>

                    <li>
                        <p><b>Mô tả công việc:</b></p>
                        <p><input class="w3-input w3-block w3-round" value="<?php echo $_SESSION['org_request']['short_description'];?>" name="short_description"></p>
                    </li>
                    <li>
                        <p><b>Số lượng:</b></p>
                        <p><input class="w3-input w3-block w3-round" value="<?php echo $_SESSION['org_request']['amount'];?>" name="amount"></p>
                    </li>
                    <li>
                        <p><b>Ngày đăng:</b></p>
                        <p><input class="w3-input w3-block w3-round" value="<?php echo $_SESSION['org_request']['date_submitted'];?>" name="date_submitted"></p>
                    </li>
                    <li class="w3-padding"><b>Trạng thái: </b><?php if($_SESSION['org_request']['status']==1) echo "Đang tuyển dụng"; if($_SESSION['org_request']['status']==0) echo "Ngừng tuyển dụng";?></li>

                    </li>
                    <li class="w3-theme-l5 w3-padding">
                        <a class="w3-button w3-teal w3-padding-large w3-round-large" href="professor_home.php"><i class="fa fa-check"></i>Trở về</a>
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