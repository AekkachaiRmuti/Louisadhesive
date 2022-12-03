<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ตั้งค่าหน่วยงาน/แผนก</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">ตั้งค่าหน่วยงาน/แผนก</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="container">
            <div class="container-fluid">
                <div class="card card-default">
                    <form method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card-header">
                                    <h3 class="card-title"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">


                                            เพิ่มหน่วยงาน/แผนก</button></h3>
                                </div>

                                <div class="card-body">
                                    <div class="">

                                        <br>
                                        <table id="example" class="display nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">#</th>
                                                    <th style="text-align: center;">หน่วยงาน/แผนก</th>

                                                    <th style="text-align: center;">แก้ไข/ลบ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $sql_se = "SELECT * FROM department_repair";
                                                $qr_se = mysqli_query($conn, $sql_se);
                                                while ($rs_cate = mysqli_fetch_array($qr_se)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?= $i ?></td>
                                                        <td><?= $rs_cate['dept_name'] ?></td>
                                                        <div style="display: none;">
                                                            <input name="id_k<?= $i ?>" type="text" value="<?= $rs_cate['dept_id'] ?>">
                                                            <input type="text" value="<?= $i ?>" name="total">
                                                        </div>
                                                        <td style="text-align: center;">
                                                            <button type="submit" class="btn btn-danger" name="del<?= $i ?>">
                                                                ลบ
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                }
                                                @$total = $_POST['total'];
                                                for ($i = 1; $i <= $total; $i++) {
                                                    if (isset($_POST["del$i"])) {
                                                        $id_k = $_POST["id_k$i"];
                                                        $sql_del = "DELETE FROM department_repair WHERE dept_id ='$id_k'";
                                                        $qr_del = mysqli_query($conn, $sql_del);
                                                        if ($qr_del) {
                                                            echo "<script>swal({
                                                        title: 'ลบเพิ่มหน่วยงาน/แผนกสำเร็จ!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                                   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                                        type: 'success', //success, warning, danger
                                                        timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                                        showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                                    }, function(){
                                                        window.location.href ='index.php?page=dept_repair'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                                        })</script>";

                                                            // echo "$id_k(ID)       $total(total)     คีย์เมื่อกี้.... $m_11   $m_12<br>  ";
                                                        }
                                                    }
                                                }
                                                ?>
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
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" width="100%">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มหน่วยงาน/แผนก</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่อหน่วยงาน/แผนก</label>
                         
                          
                        
                            <input type="text" class="form-control"  name="name_dept" id="">
                        </div>
                        <button type="submit" class="btn btn-outline-primary" name="btn_send">บันทึก</button>
                    </form>
                    <?php
                    if (isset($_POST['btn_send'])) {
                        $name = $_POST['name_dept'];

                        $sql_cate = "INSERT INTO department_repair (dept_name) VALUES ('$name')";
                        $qr_cate = mysqli_query($conn, $sql_cate);
                        if ($qr_cate) {
                            echo "<script>swal({
                                title: 'เพิ่มหน่วยงาน/แผนกสำเร็จ!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                           //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                type: 'success', //success, warning, danger
                                timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                            }, function(){
                                window.location.href ='index.php?page=dept_repair'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                })</script>";
                        }
                    }
                    ?>

                </div>
            </div>
            <div class="modal-footer">
                <!-- <a class="btn btn-info" href="/it/application/index.php?r=request%2Fprint&amp;id=1527" target="_blank">พิมพ์ใบแจ้งซ่อม</a> -->
                <a class="btn btn-default pull-right" data-dismiss="modal">ปิด</a>
            </div>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {
    //     $(".open-AddBookDialog").click(function() {
    //         $('#id').val($(this).data('id'));
    //         $('#exampleModalLong').modal('show');
    //     });
    // });
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