<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Inventory</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">Inventory</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">

                                                <?php
                                                $sql_count = "SELECT COUNT(invt_id) as invt FROM inventory_repair";
                                                $query_count = mysqli_query($conn, $sql_count);
                                                $rs_count = mysqli_fetch_assoc($query_count);
                                                ?>
                                                <h3><?= $rs_count['invt'] ?></h3>
                                                <h4>ส่งซ่อมทั้งหมด</h4>
                                            </div>
                                            <div class="icon">
                                                <!-- https://themeon.net/nifty/v2.9/icons-ionicons.html? -->
                                                <i class="ion ion-settings"></i>
                                                <!-- <i class="ion ion-bag"></i> -->
                                            </div>
                                            <a href="index.php?page=inventory" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <?php
                                                 $date_success = date("Y-m-d H:i:s");
                                                $sql_count1 = "SELECT COUNT(invt_id) as invt1 FROM inventory_repair WHERE invt_status = '3'";
                                                $query_count1 = mysqli_query($conn, $sql_count1);
                                                $rs_count1 = mysqli_fetch_assoc($query_count1);
                                                ?>
                                                <h3><?= $rs_count1['invt1'] ?></h3>

                                                <h4>สำเร็จ</h4>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-checkmark-circled"></i>
                                            </div>
                                            <a href="index.php?page=inventory&repair=equipment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-primary">
                                            <div class="inner">
                                                <?php
                                                $sql_count1 = "SELECT COUNT(invt_id) as invt1 FROM inventory_repair WHERE invt_status = '1'";
                                                $query_count1 = mysqli_query($conn, $sql_count1);
                                                $rs_count1 = mysqli_fetch_assoc($query_count1);
                                                ?>
                                                <h3><?= $rs_count1['invt1'] ?></h3>

                                                <h4>รอตรวจสอบ</h4>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-clipboard"></i>
                                            </div>
                                            <a href="index.php?page=inventory&repair=equipment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>

                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <?php
                                                $sql_count2 = "SELECT COUNT(invt_id) as invt2 FROM inventory_repair WHERE invt_status = '2'";
                                                $query_count2 = mysqli_query($conn, $sql_count2);
                                                $rs_count2 = mysqli_fetch_assoc($query_count2);
                                                ?>
                                                <h3><?= $rs_count2['invt2'] ?></h3>

                                                <h4>กำลังดำเนินการ</h4>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-medkit"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <?php
                                                $sql_count3 = "SELECT COUNT(invt_id) as invt3 FROM inventory_repair WHERE invt_status = '4'";
                                                $query_count3 = mysqli_query($conn, $sql_count3);
                                                $rs_count3 = mysqli_fetch_assoc($query_count3);
                                                ?>
                                                <h3><?= $rs_count3['invt3'] ?></h3>

                                                <h4>ยกเลิกการซ่อม</h4>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-close-circled"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <hr>

                                <h3 class="card-title p-2"> <a href="index.php?page=inventory" class="btn btn-primary">
                                <i class="fa fa-area-chart" aria-hidden="true"></i>
                                        <p>ข้อมูลการทำงาน</p>
                                    </a></h3>
                                <h3 class="card-title p-2"> <a href="index.php?page=inventory&repair=equipment" class="btn btn-success">
                                <i class="fa fa-server" aria-hidden="true"></i>
                                        <p>ทะเบียนอุปกรณ์</p>
                                    </a></h3>
                            </div>
                            <div class="card-body">

                                <div class="">


                                    <?php
                                    if ($_GET['line'] == 'notify') {
                                        echo "<script>window.location.href='?page=line_notify&id={$_GET['idetail']}'</script>";
                                    
                                    }
                                    if ($_GET['line1'] == 'notify') {
                                        echo "<script>window.location.href='?page=line_notify&id=add'</script>";
                                    
                                    }
                                    if ($_GET['repair'] == 'add_equipment') {
                                        include 'add_equipment.php';
                                        $hidden = "display: none";
                                    }
                                    if ($_GET['repair'] == 'equipment') {
                                        include 'equipment.php';
                                        $hidden = "display: none";
                                    }
                                    if ($_GET['repair'] !== 'add_equipment' and $_GET['repair'] !== 'equipment' and $_GET['idetail'] == '') {
                                        include 'index_repair.php';
                                        $hidden = "display: none";
                                    }
                                    if ($_GET['idetail'] !== '') {
                                        $sql_inventory = "SELECT * FROM `inventory_repair` LEFT OUTER JOIN branch ON branch.brn_id = inventory_repair.invt_branch LEFT OUTER JOIN department_repair ON department_repair.dept_id = inventory_repair.invt_dept LEFT OUTER JOIN user_repair ON user_repair.user_id = inventory_repair.invt_user LEFT OUTER JOIN category_it ON category_it.cate_id = inventory_repair.invt_equipment LEFT OUTER JOIN status_repair ON status_repair.sts_id = inventory_repair.invt_status WHERE invt_id='{$_GET['idetail']}'";
                                        $qr_inventory = mysqli_query($conn, $sql_inventory);
                                        $rs_inventory = mysqli_fetch_assoc($qr_inventory);

                                        if ($rs_inventory['sts_id'] == 1) {
                                            $status = "<span class='badge badge-info'>สถานะ รอตรวจสอบ</span>";
                                            $hid1 = 'display: none;';
                                        }
                                        if ($rs_inventory['sts_id'] == 2) {
                                            $status = "<span class='badge badge-warning'>สถานะ กำลังดำเนินการ</span>";
                                            $hid1 = 'display: none;';
                                        }
                                        if ($rs_inventory['sts_id'] == 3) {
                                            $status = "<span class='badge badge-success'>สถานะ สำเร็จ</span>";
                                        }
                                        if ($rs_inventory['sts_id'] == 4) {
                                            $status = "<span class='badge badge-danger'>สถานะ ยกเลิกการแจ้งซ่อม</span>";
                                        }
                                    ?>
                                        <form method="POST">
                                            <div style="<?= $hidden ?>">

                                                <h3>รายละเอียด <?= $status ?></h3>
                                                <center>
                                                    <table class="display nowrap ">

                                                        <tbody>
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tr>
                                                                <td style="width: 200px;"><b>วันที่แจ้ง :</b></td>
                                                                <td> <?= $rs_inventory['invt_date'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>ผู้แจ้ง :</b></td>
                                                                <td> <?= $rs_inventory['user_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>ตำแหน่ง :</b></td>
                                                                <td> <?= $rs_inventory['user_position'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>แผนก :</b></td>
                                                                <td> <?= $rs_inventory['dept_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>หน่วยงาน/สาขา :</b></td>
                                                                <td> <?= $rs_inventory['brn_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>อุปกรณ์ที่แจ้งซ่อม :</b></td>
                                                                <td> <?= $rs_inventory['cate_name'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width: 200px;"><b>ปัญหา :</b></td>
                                                                <td> <?= $rs_inventory['invt_problem'] ?> </td>
                                                            </tr>
                                                            <?php

                                                            ?>


                                                            <tr style="<?= $hid1 ?>">
                                                                <td style="width: 200px;"><b>สาเหตุ/วิธีแก้ไข :</b></td>
                                                                <td> <?= $rs_inventory['invt_solution'] ?></td>
                                                            </tr>
                                                            <tr style="<?= $hid1 ?>">
                                                                <td style="width: 200px;"><b>รายละเอียดเพิ่มเติม :</b></td>
                                                                <td> <?= $rs_inventory['invt_solution_detail'] ?></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </center>
                                                <br>
                                        <a href="my_pdf.php?id=<?=$rs_inventory['invt_id']?>" targer="_blank">Print To PDF</a>
                                                <?php
                                                if ($rs_inventory['sts_id'] == 3) {
                                                    $hid = 'display: none;';
                                                }
                                                if ($rs_inventory['sts_id'] == 4) {
                                                    $hid = 'display: none;';
                                                }
                                                ?>
                                                <div style="<?= $hid ?>">
                                                    <button type="submit" class="btn btn-warning" name="btn_next">ดำเนินการ</button>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">สำเร็จ</button>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancel" name="btn_cancle">ยกเลิกการแจ้งซ่อม</button>
                                                </div>
                                            <?php
                                        }

                                            ?>
                                            </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <?php
                 $user_process = $_SESSION['user_user'];
                if (isset($_POST['btn_next'])) {
                   
                    $sql_next = "UPDATE inventory_repair SET invt_status ='2', invt_process = '$user_process', invt_solution = 'กำลังดำเนินการ..', invt_success = '$date_success' WHERE invt_id ='{$_GET['idetail']}'";
                    $qr_next = mysqli_query($conn, $sql_next);
                    if ($qr_next) {

                        echo "<script>swal({
                                title: 'กำลังดำเนินการ', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                           //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                type: 'success', //success, warning, danger
                                timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                            }, function(){
                                window.location.href ='?page=inventory&idetail={$_GET['idetail']}&line=notify'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                })</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" width="100%">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ยกเลิกการแจ้งซ่อม</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="col-md-12">
                        <p><b>ข้อมูลการแจ้งปัญหา</b></p>
                        <table id="w0" class="table table-striped table-bordered detail-view">
                            <tbody>
                                <tr>
                                    <th width="20%">วันที่แจ้ง</th>
                                    <td><?= $rs_inventory['invt_date'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ชื่อผู้แจ้ง</th>
                                    <td><?= $rs_inventory['user_name'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ตำแหน่ง</th>
                                    <td><?= $rs_inventory['user_position'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ชื่อหน่วยงาน/สาขา</th>
                                    <td><?= $rs_inventory['brn_name'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ปัญหา</th>
                                    <td><?= $rs_inventory['invt_problem'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">รายละเอียด</th>
                                    <td>******</td>
                                </tr>
                                <tr>
                                    <th width="20%">สาเหตุการยกเลิก</th>
                                    <td><textarea type="text" name="solution1" style="width: 500px;"></textarea></td>
                                </tr>
                                <tr>
                                    <th width="20%">รายละเอียดเพิ่มเติม</th>
                                    <td><textarea type="text" name="solution_detail1" style="width: 500px;"></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit" name="cancle">ยืนการยกเลิก</button>
                    <a class="btn btn-default pull-right" data-dismiss="modal">ปิด</a>
                </div>
                </from>
                <?php
                if (isset($_POST['cancle'])) {
                    $solution1 = $_POST['solution1'];
                    $solution_detail1 = $_POST['solution_detail1'];

                    $sql_accept = "UPDATE inventory_repair SET invt_status = '4', invt_solution = '$solution1',invt_process = '$user_process', invt_solution_detail = '$solution_detail1', invt_success = '$date_success' WHERE invt_id = '{$_GET['idetail']}'";
                    $qr_accept = mysqli_query($conn, $sql_accept);
                    if ($qr_accept) {
                        echo "<script>swal({
                            title: 'ยกเลิกการซ่อมแล้ว', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                       //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                            type: 'success', //success, warning, danger
                            timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                            showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                        }, function(){
                            window.location.href ='?page=inventory&idetail={$_GET['idetail']}&line=notify'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                            })</script>";
                    }
                }
                ?>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" width="100%">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">ยืนการซ่อมสำเร็จ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="col-md-12">
                        <p><b>ข้อมูลการแจ้งปัญหา</b></p>
                        <table id="w0" class="table table-striped table-bordered detail-view">
                            <tbody>
                                <tr>
                                    <th width="20%">วันที่แจ้ง</th>
                                    <td><?= $rs_inventory['invt_date'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ชื่อผู้แจ้ง</th>
                                    <td><?= $rs_inventory['user_name'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ตำแหน่ง</th>
                                    <td><?= $rs_inventory['user_position'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ชื่อหน่วยงาน/สาขา</th>
                                    <td><?= $rs_inventory['brn_name'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">ปัญหา</th>
                                    <td><?= $rs_inventory['invt_problem'] ?></td>
                                </tr>
                                <tr>
                                    <th width="20%">รายละเอียด</th>
                                    <td>******</td>
                                </tr>
                                <tr>
                                    <th width="20%">สาเหตุ/การแก้ไข</th>
                                    <td><textarea type="text" name="solution" style="width: 500px;"></textarea></td>
                                </tr>
                                <tr>
                                    <th width="20%">รายละเอียดเพิ่มเติม</th>
                                    <td><textarea type="text" name="solution_detail" style="width: 500px;"></textarea></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="submit" name="accept">ยืนการซ่อมสำเร็จ</button>
                    <a class="btn btn-default pull-right" data-dismiss="modal">ปิด</a>
                </div>
                </from>
                <?php
                if (isset($_POST['accept'])) {
                    $date_success = date("Y-m-d H:i:s");
                    $solution = $_POST['solution'];
                    $solution_detail = $_POST['solution_detail'];

                    $sql_accept = "UPDATE inventory_repair SET invt_status = '3', invt_solution = '$solution',invt_process = '$user_process', invt_solution_detail = '$solution_detail',invt_success = '$date_success' WHERE invt_id = '{$_GET['idetail']}'";
                    $qr_accept = mysqli_query($conn, $sql_accept);
                    if ($qr_accept) {
                        echo "<script>swal({
                            title: 'ซ่อมสำเร็จ', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                       //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                            type: 'success', //success, warning, danger
                            timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                            showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                        }, function(){
                            window.location.href ='?page=inventory&idetail={$_GET['idetail']}&line=notify'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                            })</script>";
                    }
                }
                ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                // 'copy', 'csv', 'excel', 'pdf', 'print'
                'excel', 'print'
            ]
        });
    });
</script>