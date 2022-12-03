<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>แจ้งซ่อม</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">แจ้งซ่อม</li>
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
                            <div class="">
                                <div class="card-body">
                                    <div class=" card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">แจ้งซ่อมคอมพิวเตอร์</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form method="POST">
                                            <div class="card-body">
                                                <!-- <div class="form-group">
                                                    <label for="exampleInputEmail1">วันที่แจ้ง</label>
                                                    <input type="date" class="datepicker form-control" id="fullname" name="date_pick">
                                                </div> -->
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">สาขา</label>
                                                    <select name="branch" id="" class="form-control">
                                                        <option value="">--เลือก--</option>
                                                        <?php
                                                        $sql_brn = "SELECT * FROM branch";
                                                        $qr_brn = mysqli_query($conn, $sql_brn);
                                                        while ($rs_brn = mysqli_fetch_array($qr_brn)) {
                                                        ?>
                                                            <option value="<?= $rs_brn['brn_id'] ?>"><?= $rs_brn['brn_name'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">แผนก</label>
                                                    <select name="position" id="" class="form-control">
                                                        <option value="">--เลือก--</option>
                                                        <?php
                                                        $sql_dept = "SELECT * FROM department_repair";
                                                        $qr_dept = mysqli_query($conn, $sql_dept);
                                                        while ($rs_dept = mysqli_fetch_array($qr_dept)) {
                                                        ?>
                                                            <option value="<?= $rs_dept['dept_id'] ?>"><?= $rs_dept['dept_name'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">ชื่อผู้แจ้ง</label>
                                                    <select name="user_repair" id="" class="form-control">
                                                        <option value="">--เลือก--</option>
                                                        <?php
                                                        $sql_user = "SELECT * FROM user_repair";
                                                        $qr_user = mysqli_query($conn, $sql_user);
                                                        while ($rs_user = mysqli_fetch_array($qr_user)) {
                                                        ?>
                                                            <option value="<?= $rs_user['user_id'] ?>"><?= $rs_user['user_name'] ?> (<?= $rs_user['user_position'] ?>)</option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">ชื่ออุปกรณ์ที่แจ้งซ่อม</label>
                                                    <select name="category" id="" class="form-control">
                                                        <option value="">--เลือก--</option>
                                                        <?php
                                                        $sql_cate = "SELECT * FROM category_it";
                                                        $qr_cate = mysqli_query($conn, $sql_cate);
                                                        while ($rs_cate = mysqli_fetch_array($qr_cate)) {
                                                        ?>
                                                            <option value="<?= $rs_cate['cate_id'] ?>"><?= $rs_cate['cate_name'] ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">ปัญหา</label>
                                                    <textarea type="text" class="form-control" id="pass" placeholder="" name="problem"></textarea>
                                                </div>



                                            </div>
                                            <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-outline-primary" name="btnsend">Submit</button>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['btnsend'])) {
                                            $datepick = date("Y-m-d H:i:s");
                                            $branch = $_POST['branch'];
                                            $position = $_POST['position'];
                                            $user_repair = $_POST['user_repair'];
                                            $category = $_POST['category'];
                                            $problem = $_POST['problem'];
                                            $user_even = $_SESSION['user_user'];
                                            $sql_equipment = "INSERT INTO inventory_repair (invt_date, invt_branch, invt_dept, invt_user,invt_equipment, invt_problem, invt_status, invt_evenUser)
                                            VALUES ('$datepick','$branch','$position','$user_repair','$category','$problem',1, '$user_even')";
                                            $qr_equipment = mysqli_query($conn, $sql_equipment);

                                            if ($qr_equipment) {



                                                echo "<script>swal({
                                                    title: 'บันทึกแจ้งซ่อมสำเร็จ!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                               //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                                    type: 'success', //success, warning, danger
                                                    timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                                    showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                                }, function(){
                                                    window.location.href ='index.php?page=inventory&line1=notify'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
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
            </div>
        </div>
    </div>
</div>