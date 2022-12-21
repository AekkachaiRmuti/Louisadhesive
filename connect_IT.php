<!DOCTYPE html>
<html lang="en">
<?php
ini_set('max_execution_time', 700);
date_default_timezone_set("Asia/Bangkok");


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IT Connect</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&family=Mali:ital,wght@1,200&family=Mitr:wght@200;400&family=Noto+Sans+Thai:wght@200;500&display=swap"
        rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">



    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
        integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
.txtarea {
    width: 500px;
    height: 100px;
    /* font-size: 20px; */
}

.card {
    background: rgb(2, 0, 36);
    background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(30, 30, 171, 1) 0%, rgba(0, 212, 255, 1) 100%);
}

.btns {
    background: rgb(81, 10, 246);
    background: linear-gradient(90deg, rgba(81, 10, 246, 1) 0%, rgba(255, 244, 0, 1) 0%, rgba(213, 42, 238, 0.938813025210084) 100%);
}

html,
body {
    background-image: url("img/it.jpeg");

    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    -o-background-size: 100% 100%, auto;
    -moz-background-size: 100% 100%, auto;
    -webkit-background-size: 100% 100%, auto;
    background-size: 100% 100%, auto;
}

* {
    font-family: 'Kanit', sans-serif;
    font-family: 'Mali', cursive;
    font-family: 'Mitr', sans-serif;
    font-family: 'Noto Sans Thai', sans-serif;
}

/* หิมะ */

.snowflake {
    color: #fff;
    font-size: 1em;
    font-family: Arial;
    text-shadow: 0 0 1px #000;
}

@-webkit-keyframes snowflakes-fall {
    0% {
        top: -10%
    }

    100% {
        top: 100%
    }
}

@-webkit-keyframes snowflakes-shake {
    0% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px)
    }

    50% {
        -webkit-transform: translateX(80px);
        transform: translateX(80px)
    }

    100% {
        -webkit-transform: translateX(0px);
        transform: translateX(0px)
    }
}

@keyframes snowflakes-fall {
    0% {
        top: -10%
    }

    100% {
        top: 100%
    }
}

@keyframes snowflakes-shake {
    0% {
        transform: translateX(0px)
    }

    50% {
        transform: translateX(80px)
    }

    100% {
        transform: translateX(0px)
    }
}

.snowflake {
    position: fixed;
    top: -10%;
    z-index: 9999;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: default;
    -webkit-animation-name: snowflakes-fall, snowflakes-shake;
    -webkit-animation-duration: 18s, 5s;
    -webkit-animation-timing-function: linear, ease-in-out;
    -webkit-animation-iteration-count: infinite, infinite;
    -webkit-animation-play-state: running, running;
    animation-name: snowflakes-fall, snowflakes-shake;
    animation-duration: 18s, 5s;
    animation-timing-function: linear, ease-in-out;
    animation-iteration-count: infinite, infinite;
    animation-play-state: running, running
}

.snowflake:nth-of-type(0) {
    left: 1%;
    -webkit-animation-delay: 0s, 0s;
    animation-delay: 0s, 0s
}

.snowflake:nth-of-type(1) {
    left: 10%;
    -webkit-animation-delay: 1s, 1s;
    animation-delay: 1s, 1s
}

.snowflake:nth-of-type(2) {
    left: 20%;
    -webkit-animation-delay: 6s, .5s;
    animation-delay: 6s, .5s
}

.snowflake:nth-of-type(3) {
    left: 30%;
    -webkit-animation-delay: 4s, 2s;
    animation-delay: 4s, 2s
}

.snowflake:nth-of-type(4) {
    left: 40%;
    -webkit-animation-delay: 2s, 2s;
    animation-delay: 2s, 2s
}

.snowflake:nth-of-type(5) {
    left: 50%;
    -webkit-animation-delay: 8s, 3s;
    animation-delay: 8s, 3s
}

.snowflake:nth-of-type(6) {
    left: 60%;
    -webkit-animation-delay: 6s, 2s;
    animation-delay: 6s, 2s
}

.snowflake:nth-of-type(7) {
    left: 70%;
    -webkit-animation-delay: 2.5s, 1s;
    animation-delay: 2.5s, 1s
}

.snowflake:nth-of-type(8) {
    left: 80%;
    -webkit-animation-delay: 1s, 0s;
    animation-delay: 1s, 0s
}

.snowflake:nth-of-type(9) {
    left: 90%;
    -webkit-animation-delay: 3s, 1.5s;
    animation-delay: 3s, 1.5s
}

.snowflake:nth-of-type(10) {
    right: 5%;
    -webkit-animation-delay: 10s, 10s;
    animation-delay: 10s, 10s
}

.snowflake:nth-of-type(11) {
    right: 15%;
    -webkit-animation-delay: 10s, 10s;
    animation-delay: 10s, 10s
}

.snowflake:nth-of-type(12) {
    right: 25%;
    -webkit-animation-delay: 60s, 50s;
    animation-delay: 60s, 50s
}

.snowflake:nth-of-type(13) {
    right: 35%;
    -webkit-animation-delay: 40s, 20s;
    animation-delay: 40s, 20s
}

.snowflake:nth-of-type(14) {
    right: 45%;
    -webkit-animation-delay: 20s, 20s;
    animation-delay: 20s, 20s
}

.snowflake:nth-of-type(15) {
    right: 55%;
    -webkit-animation-delay: 8.5s, 3.5s;
    animation-delay: 8.5s, 3.5s
}

.snowflake:nth-of-type(16) {
    right: 65%;
    -webkit-animation-delay: 60.5s, 20.5s;
    animation-delay: 60.5s, 20.5s
}

.snowflake:nth-of-type(17) {
    right: 75%;
    -webkit-animation-delay: 30s, 10.5s;
    animation-delay: 30s, 10.5s
}

.snowflake:nth-of-type(18) {
    right: 85%;
    -webkit-animation-delay: 10.5s, 0.5s;
    animation-delay: 10.5s, 0.5s
}

.snowflake:nth-of-type(19) {
    right: 95%;
    -webkit-animation-delay: 30.5s, 20s;
    animation-delay: 30.5s, 20s
}

.animate-charcter {

    border-color: #fff;
    text-transform: uppercase;
    background-image: linear-gradient(-225deg,
            #231557 0%,
            #44107a 29%,
            #ff1361 67%,
            #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    /* text-fill-color: transparent; */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 80px;
}

@keyframes textclip {
    to {
        background-position: 200% center;
    }
}

.img-phone img {
    position: absolute;
    opacity: 1;
    display: block;
    transition: .5s ease;
    backface-visibility: hidden;

}

.img-qrcode img {
    position: absolute;
    border-radius: 5px;
    left: 300px;
    bottom: 20px;
    border: DeepSkyBlue 3px solid ;
    transition: 1s ease;
  
}
.img-qrcode img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}
.text-howto{
    position: absolute;
    color:white;
    bottom: -150px;
    left:190px;
}
.ps{
    position: absolute;
    bottom: -500px;
  color : #000;
}

/* .card {
        background-color: #fff;
    } */
</style>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <div class="img-phone"><img src="./image_problem/phone.png" /></div>
        <div>
           
            <div class="img-qrcode"><img style="width: 150px;" src="./image_problem/qr-code.png" /></div>
        </div>
        <div class="text-howto">
            <p>การใช้งานผ่านอุปกรณ์สมาร์ทโฟน</p>
            <li>เชื่อมต่ออินเตอร์เน็ตหรือ WIFI ภายในบริษัท</li>
            <li>กรณี Work From Home ให้เชื่อมต่อ VPN</li>
            <li>เมื่อเชื่อมต่ออินเทอร์เน็ตแล้ว ให้ทำการ Scan QR-CODE ผ่าน Line</li>
            <li>แล้วทำการ ดำเนินการแจ้ง</li>
             
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <div class="container">

            <div class="row pt-10 mt-5">
                <div class="col-12">

                    <div class="">
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data">
                                <?PHP
                                if (@$_GET['accept'] == 'yes') {
                                    echo "<script>
    window.open('','_self').close()
    </script>";
                                }
                                if (@$_GET['accept'] == 'no') {
                                    echo "<script>
    window.open('','_self').close()
    </script>";
                                }

                                ?>
                                <center>
                                    <div class="col-md-12 text-center">
                                        <h3 class="animate-charcter"><span class=""> แจ้งปัญหาไอที</span></h3>
                                        <br>

                                        <h3 style="color: white;"> <span class="badge badge-success"><a
                                                    href="files/connect_it.rar" download style="color:white">Your IP
                                                    Address: <?= $ip = $_SERVER['REMOTE_ADDR']; ?></a></span></h3>
                                    </div>


                                    <div class="col-lg-4 col-md-8 col-sm-12 mb-2">
                                        <label for="" style="color:white" class="badge badge-warning">
                                            <h6>แนบรูปภาพ</h6>
                                        </label>
                                        <input type="file" id="fileupload" name="fileupload" class="form-control"
                                            accept="image/gif, image/jpeg, image/png" />
                                    </div>

                                    <div class="col-lg-4 col-md-8 col-sm-12 mb-2">
                                        <select class="form-select" aria-label="Default select example" name="dept"
                                            id="dept" onchange="getdept()">

                                            <option value="">--Select Department--</option>
                                            <?php

                                            include 'connect_db.php';
                                            $sql_po = "SELECT * FROM department";
                                            $qr_po = mysqli_query($conn, $sql_po);

                                            while ($rs = mysqli_fetch_array($qr_po)) {
                                            ?>

                                            <option value="<?= $rs['dept_id'] ?>"><?= $rs['dept_name'] ?>
                                                (<?= $rs['dept_description'] ?>)</option>
                                            <?php
                                            }
                                            ?>

                                        </select>

                                    </div>
                                    <div class="col-lg-4 col-md-8 col-sm-12">
                                        <div id="ajax_connect">
                                            <select class="form-select" aria-label="Default select example"
                                                name="user_name" id="user_id" onchange="id_us()">

                                                <option value="0" id="">--Select Username--</option>

                                            </select>
                                        </div>
                                    </div>



                                    <script>
                                    // $(document).ready(function() {
                                    function getdept() {
                                        let id_dept = document.getElementById("dept").value;
                                        console.log("Dept_Key =>>" + id_dept);

                                        $.ajax({
                                            url: 'ajax/get_connect.php?key=' + id_dept,
                                            type: 'get',
                                            success: function(result) {
                                                $('#ajax_connect').html(result);
                                                console.log("Get DATA Successfully");
                                                // console.log(result);


                                            }
                                        });

                                    }

                                    function id_us() {
                                        let user_id = document.getElementById("user_id").value;
                                        console.log(user_id);
                                    }

                                    // });
                                    </script>
                                    <br>
                                    <div class="col-lg-6 col-md-8 col-sm-8">
                                        <Textarea name="txtar" class="txtarea" placeholder="--รายละเอียด--"></Textarea>
                                    </div>
                                    <br>
                                    <button name="next" type="submit"
                                        class="btn btn-warning btns">ดำเนินการแจ้ง</button>
                                    <br>
                                    <br>
                                    <?= @$path_link ?>
                                </center>


                                <div class="col-lg-12 col-md-12 col-sm-12 ">
                                    <table class="table table-striped table-bordered ps" id="example"
                                        style=" width: 100%;">
                                        <thead>
                                            <tr>

                                                <th style="text-align: center; color:white;">วันที่แจ้งปัญหา</th>
                                                <th style="text-align: center; color:white;">แผนก</th>
                                                <th style="text-align: center; color:white;">ชื่อผู้แจ้ง</th>
                                                <th style="text-align: center; color:white;">รายละเอียดปัญหา</th>
                                                <th style="text-align: center; color:white;">IP Address</th>
                                                <th style="text-align: center; color:white;">จัดการ</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                        // $servername = 'localhost';
                                        // $username = 'root';
                                        // $password = '';
                                        // $db_name = 'louis_db';

                                        // $conn = mysqli_connect($servername, $username, $password, $db_name);
                                        $i = 1;
                                        $sql_rp = "SELECT * FROM it_problem order by itp_id desc LIMIT 5;";
                                        $qr_rp = mysqli_query($conn, $sql_rp);

                                        while ($rs_rp = mysqli_fetch_assoc($qr_rp)) {
                                        ?>
                                            <tr>

                                                <td style="color:white;"><?= $rs_rp['itp_date'] ?></td>
                                                <td style="color:white;"><?= $rs_rp["itp_dept"] ?></td>
                                                <td style="color:white;"><?= $rs_rp["itp_name"] ?></td>
                                                <td style="color:white;"><?= $rs_rp["itp_detail"] ?></td>
                                                <td style="color:white;">
                                                    <p style="font-size: 17px;"><span
                                                            class="badge badge-warning"><?= $rs_rp['itp_ip'] ?></span>
                                                    </p>
                                                </td>
                                                <td style="text-align:center ;">
                                                    <?php
                                                    if ($rs_rp['itp_status'] == 1)
                                                        echo "<button type='button' onClick='momo()' class='btn btn-primary submit' data-bs-toggle='modal' data-id='{$rs_rp['itp_id']}'  data-bs-target='#exampleModal'>
                                                แก้ไขปัญหา
                                            </button>";
                                                    if ($rs_rp['itp_status'] == 2) {
                                                        echo "<button type='button' class='btn btn-success'>
                                                สำเร็จ
                                            </button>";
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                        }

                                        ?>
                                        </tbody>
                                    </table>
                                </div> 
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">IT Support </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div><input type="text" name="ddd" id="ddd"
                                                        class="form-control"></div>
                                                <script>
                                                function momo() {
                                                    $(document).ready(function() {
                                                        let key_id = document.getElementById("ddd").value;
                                                        console.log(key_id);
                                                        $.ajax({
                                                            url: 'ajax/image.php?key=' + key_id,
                                                            type: 'get',
                                                            success: function(result) {
                                                                $('#imgmomo').html(result);
                                                                console.log("Image");


                                                            }
                                                        });
                                                    });
                                                }
                                                </script>
                                                <label for="" class="label-control">วิธีแก้ไขปัญหา</label>
                                                <input type="text" name="problem" id="" class="form-control">
                                                <label for="" class="label-control">ผู้ดำเนินการ</label>
                                                <input type="text" name="user" class="form-control">

                                                <center>
                                                    <div id="imgmomo"></div>
                                                </center>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="btn_save" class="btn btn-primary">Save
                                                    changes</button>
                                            </div>
                                            <?php
                                            if (isset($_POST['btn_save'])) {
                                                $sql_update = "UPDATE it_problem SET itp_status = '2', itp_problem = '{$_POST['problem']}', itp_user = '{$_POST['user']}' Where itp_id = '{$_POST['ddd']}'";
                                                $qr_update = mysqli_query($conn, $sql_update);

                                                if ($qr_update) {
                                                    echo "<script>swal({
                                                        title: 'ดำเนินการสำเร็จ', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                                    //  text: 'กรุณารอสักครู่ ไอทีได้รับข้อความที่คุณส่งแล้ว', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                                        type: 'success', //success, warning, danger
                                                        timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                                        showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                                    }, function(){
                                                        window.location.href ='get_connect_it.php?update={$_POST['ddd']}'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                                        })</script>";
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                $(document).ready(function() {
                                    $('.submit').click(function() {
                                        // $('#ddd').text($(this).data('id'));
                                        let id = document.getElementById("ddd").value = $(this).data(
                                            'id');
                                        console.log('kk');
                                    });
                                })
                                </script>
                            </form>
                            <?php
                            $date = date("Y-m-d H:i:s");
                            @$dept = $_POST['dept'];
                            @$name = $_POST['user_name'];
                            @$txtar = $_POST['txtar'];


                            @$sql_get = "SELECT * FROM department where dept_id = '{$_POST['dept']}'";
                            $qr_get = mysqli_query($conn, $sql_get);
                            $rs_get = mysqli_fetch_array($qr_get);

                            @$dept_id = $rs_get['dept_id'];
                            @$dept_dept = $rs_get['dept_name'];
                            @$upload = $_FILES['fileupload']['name'];
                            if (isset($_POST['next'])) {


                                if ($name == '' || $dept = '') {
                                    echo "<script>swal({
                                        title: 'Please select Department and Username...', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                    //  text: 'กรุณารอสักครู่ ไอทีได้รับข้อความที่คุณส่งแล้ว', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                        type: 'warning', //success, warning, danger
                                        timer: 5000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                        showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                    }, function(){
                                        window.location.href ='connect_it.php'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                        })</script>";
                                } else {
                                   

                                    if ($upload <> '') {   //not select file
                                        //โฟลเดอร์ที่จะ upload file เข้าไป 
                                        $path = "image_problem/";

                                        //เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
                                        $remove_these = array(
                                            ' ', '`', '"', '\'', '\\', '/', '_', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a',
                                            'b',
                                            'c',
                                            'd',
                                            'h',
                                            'k',
                                            'l',
                                            'm',
                                            'o',
                                            'q',
                                            'r',
                                            's',
                                            't',
                                            'u',
                                            'v',
                                            'x',
                                            'y',
                                            'z', 'A',
                                            'B',
                                            'C',
                                            'D',
                                            'H',
                                            'K',
                                            'L',
                                            'M',
                                            'O',
                                            'Q',
                                            'R',
                                            'S',
                                            'T',
                                            'U',
                                            'V',
                                            'X',
                                            'Y',
                                            'Z',
                                        );
                                        $newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);

                                        //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
                                        $jod_id = 'pic' . date("Ymd") . rand(0, 999);
                                        $newname = $jod_id . basename($newname);
                                        $path_copy = $path . $newname;
                                        $path_link = $path . $newname;
                                        echo basename($newname);
                                        //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์

                                        move_uploaded_file($_FILES['fileupload']['tmp_name'], $path_copy);
                                        // echo $path_link;
                                        // echo "<br>";
                                        // echo $newname;
                                        // echo "<br>";
                                        // echo $_FILES['fileupload']['tmp_name'], $path_copy;
                                        // echo "<br>";
                                        // echo $upload;
                                    }
                                    if($upload == null){
                                        $path_link = '1';
                                        }
                                    $sql_line = "INSERT INTO it_problem (itp_date,itp_dept,itp_dept_id,itp_name,itp_detail,itp_ip,itp_anydesk,itp_status,itp_problem,itp_user,itp_picture) VALUES ('$date','$dept_dept','$dept_id','$name','$txtar','$ip','$anydesk','1','','','$path_link')";
                                    $qr_line = mysqli_query($conn, $sql_line);
                                    if ($qr_line) {

                                                                    echo "<script>swal({
                                        title: 'แจ้งสำเร็จ กรุณารอสักครู่...', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                    //  text: 'กรุณารอสักครู่ ไอทีได้รับข้อความที่คุณส่งแล้ว', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                        type: 'success', //success, warning, danger
                                        timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                        showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                    }, function(){
                                        window.location.href ='get_connect_it.php?line=yes'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                        })</script>";

                                   
                                }
                            }
                             }

                            ?>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <!-- <div class="snowflakes" aria-hidden="true">
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>
            <div class="snowflake">
                ❅
            </div>
            <div class="snowflake">
                ❆
            </div>
            <div class="snowflake">
                ❄
            </div>

        </div> -->
    </div>


    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                    'excel', 'print'
                ]
            });
        });
    </script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
</body>

</html>