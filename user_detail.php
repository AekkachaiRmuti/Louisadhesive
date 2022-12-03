<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ผู้ใช้งาน</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">ผู้ใช้งาน</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="row">
                        <div class="card-body">
                            <form method="POST" name="myform">

                                <div class="form-group row">
                                    <!-- <label for="inputPassword3" class="col-sm-3 col-form-label">Department</label> -->
                                    <div class="">
                                        <div class="">
                                            <table id="example" class="display nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>ลำดับ</th>

                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        
                                                        <th>Department</th>
                                                        <th>Branch</th>
                                                        <th>Level</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    $sql_user = "SELECT * FROM user_louis
                    LEFT OUTER JOIN branch ON branch.brn_id = user_louis.user_branch
                    LEFT OUTER JOIN department ON department.dept_id = user_louis.user_department
                    LEFT OUTER JOIN level ON level.level_id = user_louis.user_level";
                                                    $qr_user = mysqli_query($conn, $sql_user);
                                                    while ($rs_pr = mysqli_fetch_array($qr_user)) {

                                                    ?>
                                                        <tr>
                                                            <td><?= $i; ?></td>
                                                            <td><?= $rs_pr['user_user'] ?></td>
                                                            <td><?= $rs_pr['user_name'] ?></td>
                                                            <td ><?= $rs_pr['user_password'] ?></td>
                                                           
                                                            <td><?= $rs_pr['dept_name'] ?></td>
                                                            <td><?= $rs_pr['brn_name'] ?></td>
                                                            <td><?= $rs_pr['level_name'] ?></td>


                                                        </tr>
                                                    <?php $i++;
                                                    } ?>

                                                </tbody>

                                            </table>

                                        </div>


                                    </div>
                                </div>

                                <br>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
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