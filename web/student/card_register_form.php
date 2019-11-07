<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/4/2019
 * Time: 8:31 PM
 */

?>
    <div class="w3-content w3-padding-top  w3-white w3-margin-bottom w3-margin-top" style="max-width:1200px;">
        <div class="w3-center w3-card w3-opacity" style="background:#353535 url(https://techtalk.vn/wp-content/uploads/2017/08/PHP-696x392.jpg); height: 150px;"></div>
        <div class="w3-card w3-padding">
            <i class="fa fa-home w3-margin-right"><a href="#" style="text-decoration: none" class="w3-hover-opacity"></i>Trang chủ</a> /
            <a style="text-decoration: none" class="w3-hover-opacity" href="#">Việc làm</a> /
            <a style="text-decoration: none" class="w3-hover-opacity" href="#">Phiếu đăng ký sinh viên</a>
        </div>
        <div class="w3-col m8 w3-card w3-round-large w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme">
                    <p class="w3-large"><h4>PHIẾU ĐĂNG KÝ</h4>
                </li>
                <li class="w3-padding"><b>Mã sinh viên: </b><?php echo $student_profile['student_code']; ?></li>
                <li class="w3-padding"><b>Họ và tên: </b> <?php echo $student_profile['first_name']; echo " "; echo $student_profile['sur_name']; echo " "; echo $student_profile['last_name']; ?></li>
                <li class="w3-padding"><b>Ngày sinh: </b><?php echo $student_profile['date_of_birth'];?></li>
                <li class="w3-padding"><b>Chuyên ngành: </b><?php echo $student_profile['class_name'];?></li>
                <li class="w3-padding"><b>Công ty đăng ký: </b><?php echo $company_profile['organization_name'];?></li>
                <li class="w3-padding"><b>Thời gian đăng ký: </b><?php echo $student_register['submit_date'];?></li>
                <li class="w3-padding"><b>Trạng thái: </b><?php if($student_register['status']==1) echo "Chờ thực hiện"; if($student_register['status']==2) echo "Đang thực hiện";if($student_register['status']==0) echo "Hoàn thành";?></li>
                <li class="w3-theme-l5 w3-padding">
                    <button class="w3-button w3-teal w3-padding-large w3-round-large"><i class="fa fa-check"></i>Thực hiện</button>
                    <button class="w3-button w3-teal w3-padding-large w3-round-large"><i class="fa fa-check"></i>Hủy đăng ký</button>
                </li>
            </ul>
        </div>
        <div class="w3-col m4 w3-card w3-margin-bottom w3-round-large">
            <ul class="w3-ul w3-border w3-hover-shadow">
                <li class="w3-theme-l2">
                    <p class="w3-large"><h4>Doanh nghiệp</h4>
                </li>
                <li class="w3-padding"><b>Tên doanh nghiệp: </b><?php echo $company_profile['organization_name'];?></li>
                <li class="w3-padding"><b>Mô tả công việc: </b> <?php echo $organization_request['short_description'];?></li>
                <li class="w3-padding"><b>Số lượng: </b><?php echo $organization_request['amount'];?></li>
                <li class="w3-padding"><b>Ngày đăng: </b><?php echo $organization_request['date_submitted'];?></li>
                <li class="w3-padding"><b>Trạng thái: </b><?php if($organization_request['status']==1) echo "Đang tuyển dụng"; if($organization_request['status']==0) echo "Ngừng tuyển dụng";?></li>
                <li class="w3-theme-l5 w3-padding" style="height: 73px">
                </li>
            </ul>

        </div>

</div>
