    <!-- sweet alert js & css -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>สิทธิ์การใช้งาน</h1>
                            
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                                <li class="breadcrumb-item active"><a href="?page=user_detail">สิทธิ์การใช้งาน</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="container">
                <div class="container-fluid">
                    <div class="card card-default">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8" >
                                <div class="">
                                    <div class="card-body">
                                        <div class=" card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">เพิ่มผู้ใช้งาน</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <!-- form start -->
                                            <form>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">ชื่อ-นามสกุล</label>
                                                        <input type="text" class="form-control" id="fullname" placeholder="Full name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">อิเมล์</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">รหัสผ่าน</label>
                                                        <input type="password" class="form-control" id="pass" placeholder="Password">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputPassword3">Department</label>
                                                        <div class="input-group">
                                                            <select class="form-control" id="dept">
                                                                <option value="ไม่ได้เลือก">--เลือก--</option>
                                                                <?php
                                                                $sql_po = "SELECT * FROM department";
                                                                $qr_po = mysqli_query($conn, $sql_po);

                                                                while ($rs = mysqli_fetch_array($qr_po)) {
                                                                ?>

                                                                    <option value="<?= $rs['dept_id'] ?>"><?= $rs['dept_name'] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3">Branch</label>
                                                        <div class="input-group">
                                                            <select class="form-control" id="branch">
                                                                <option value="ไม่ได้เลือก">--เลือก--</option>
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
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3">User Level</label>
                                                        <div class="input-group">
                                                            <select class="form-control" id="authority">
                                                                <option value="ไม่ได้เลือก">--เลือก--</option>
                                                                <?php
                                                                $sql_lv = "SELECT * FROM level";
                                                                $qr_lv = mysqli_query($conn, $sql_lv);

                                                                while ($rs_lv = mysqli_fetch_array($qr_lv)) {
                                                                ?>

                                                                    <option value="<?= $rs_lv['level_id'] ?>"><?= $rs_lv['level_name'] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-outline-primary" id="btnSend">Submit</button>
                                                </div>
                                            </form>
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
    <div id="ajax_report"></div>
    <script>
        $("#btnSend").click(function(e) {
            let fullname = document.getElementById("fullname").value;
            let user = document.getElementById("email").value;
            let pass = document.getElementById("pass").value;
            let dept = document.getElementById("dept").value;
            let branch = document.getElementById("branch").value;
            let authority = document.getElementById("authority").value;

            console.log(fullname);
            console.log(user);
            console.log(pass);
            console.log(dept);
            console.log(authority);

            $.ajax({
                url: 'ajax/save_mb.php?fullname=' + fullname + '&user=' + user + '&pass=' + pass + '&dept=' + dept + '&authority=' + authority + '&branch=' + branch,
                type: 'get',
                success: function(result) {
                    $('#ajax_report').html(result);
                   
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>