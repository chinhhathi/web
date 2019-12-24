<!DOCTYPE html>
<html>
<title>Tạo phiếu yêu cầu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<body class="w3-light-grey w3-content" style="max-width:1600px">
<div style=" margin-top: 55px;">
    <div class="w3-main" style="margin-left:350px;">
        <form action="check_insert.php"  method="post">
            <div class="w3-container">
                <h4 style="margin-left: 200px"><strong>THÔNG TIN</strong></h4>
                <div class="w3-row-padding">
                    <div>
                        <label><i class="fas fa-map-pin" style="text"></i><i> Vị trí tuyển dụng:</i></label>
                        <p><input class="w3-input w3-border" style="width: 60%" type="text" placeholder="Enter position" name="position"  required></p>
                    </div>
                    <div>
                        <label><i class="fas fa-male" style="margin-right: 5px"></i><i>Số lượng cần tuyển:</i></label>
                        <p><input class="w3-input w3-border" style="width: 60%" type="text" name="amount" placeholder="Enter amout" required></p>
                    </div>
                    <!--                        <div class="w3-row-padding">-->
                    <div >
                        <label><i class="fas fa-chalkboard-teacher"></i><i> Hình thức làm việc:</i></label>
                        <p>
                              <span>
                                <input class="w3-radio" type="radio" name="typeOfWork" value="fulltime" checked>
                                <label>Full Time</label>
                              </span>
                            <span class="w3-padding">
                                <input class="w3-radio" type="radio" name="typeOfWork" value="parttime">
                                <label>Part Time</label>
                              </span>
                        </p>
                    </div>
                    <div>
                        <label><i class="fas fa-map-marker-alt"></i><i> Địa chỉ làm việc:</i></label>
                        <p><textarea rows="4" style="width: 60%" name="address" placeholder="Nhập địa chỉ làm việc" ></textarea></p>
                    </div>

                    <div>
                        <label><i class="far fa-calendar-check"></i><i> Thời gian làm việc:</i></label>
                        <p><input class="w3-input w3-third" style="width: 100px" name="time_start" type="time" value="09:00">
                            <span class="w3-center w3-padding w3-third" style="width:65px;">đến</span>
                            <input class="w3-input w3-third" style="width: 100px" name="time_final" type="time"value="17:00">
                        </p>
                    </div>
                    <hr>
                    <hr>
                    <div>
                        <label><i class="fas fa-tasks"></i><i> Mô tả công việc:</i></label>
                        <p><textarea rows="4" style="width: 60%" name="descript"  placeholder="Nhập mô tả công việc" ></textarea></p>
                    </div>

                    <hr>
                    <hr>

                    <p class="w3-center">
                        <button type="submit" class="w3-button w3-teal" name="submit" value="save">Lưu thông tin</button>
                        <button type="reset" class="w3-button w3-dark-grey">Hủy</button>
                    </p>
        </form>
    </div>
</div>
