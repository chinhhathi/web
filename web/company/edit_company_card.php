<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/23/2019
 * Time: 9:06 AM
 */

?>

<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 11/23/2019
 * Time: 9:12 AM
 */
?>

<div class="w3-card w3-padding ">
    <i class="fa fa-home w3-margin-right"><a href="#" style="text-decoration: none" class="w3-hover-opacity"></i>Trang chủ</a> /
    <a style="text-decoration: none" class="w3-hover-opacity" href="#">Phiếu yêu cầu</a>
</div>
<div class="w3-card">
    <button class="w3-teal w3-padding w3-round-large"><a href="edit_company_card.php" style="text-decoration: none">Tạo mới Phiếu tuyển dụng</a></button>
</div>
<div class="w3-col m5 w3-card w3-margin-bottom w3-round-large">
    <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
            <p class="w3-large"><h4>Doanh nghiệp</h4>
        </li>
        <li class="w3-padding"><b>Tên doanh nghiệp: </b><?php echo $company_profile['organization_name'];?></li>
        <li class="w3-padding"><b>Mô tả công việc: </b> <?php echo $company_request['short_description'];?></li>
        <li class="w3-padding"><b>Số lượng: </b><?php echo $company_request['amount'];?></li>
        <li class="w3-padding"><b>Ngày đăng: </b><?php echo $company_request['date_submitted'];?></li>
        <li class="w3-padding"><b>Trạng thái: </b><?php if($company_request['status']==1) echo "Đang tuyển dụng"; if($company_request['status']==0) echo "Ngừng tuyển dụng";?></li>
        <li class="w3-theme-l5 w3-padding">
            <button class="w3-button w3-teal w3-padding-large w3-round-large"><i class="fa fa-check"></i>Cập nhật</button>
            <button class="w3-button w3-teal w3-padding-large w3-round-large"><i class="fa fa-check"></i>Quay lại</button>
        </li>
        <li class="w3-theme-l5 w3-padding" style="height: 73px"></li>
    </ul>
</div>

