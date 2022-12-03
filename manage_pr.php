<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ข่าวประชาสัมพันธ์</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">ข่าวประชาสัมพันธ์</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">
                        <main>
                            <div class="py-5 text-center">

                                <img class="d-block mx-auto mb-4" src="./img/pr.png" alt="" width="200px">
                                <h2>การจัดการงานประชาสัมพันธ์</h2>
                                <p class="lead">การประชาสัมพันธ์(Public Relation) เป็นการติดต่อสื่อสารจาก องค์การไปสู่สาธารณชนที่เกี่ยวข้อง รวมถึงรับฟังความคิดเห็นและ ประชามติจากสาธารณชนที่มีต่อองค์การ โดยมีวัตถุประสงค์เพื่อสร้าง ความเชื่อถือ ภาพลักษณ์ ความรู้ และแก้ไขข้อผิดพลาดในเรื่องใดเรื่องหนึ่ง</p>
                            </div>

                            <div class="container">
                                <div class="row ">

                                    <div class="col-12 col-lg-12">
                                        <h4>เพิ่มข้อมูลการประชาสัมพันธ์</h4>
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label for="firstName" class="form-label">รูปภาพ</label>
                                                    <input type="file" class="form-control" id="fileupload" name="fileupload">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <label for="lastName" class="form-label">หัวเรื่อง</label>
                                                    <input type="text" class="form-control" name="topic" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid last name is required.
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <label for="username" class="form-label">รายละเอียด</label>
                                                    <div class="input-group has-validation">

                                                        <textarea type="text" class="form-control" name="detail" placeholder="Username" required=""></textarea>
                                                        <div class="invalid-feedback">
                                                            Your username is required.
                                                        </div>
                                                    </div>
                                                </div>





                                                <hr class="my-4 center ">
                                                <div class="col-3 mt-2">
                                                    <button class="w-80 btn btn-primary btn-sm" type="submit" id="upload" name="upload">อัพโหลด</button>
                                                </div>
                                                <?php
                                                if (isset($_POST['upload'])) {
                                                    $topic = $_POST['topic'];
                                                    $detail = $_POST['detail'];
                                                    $date = date("d-m-Y"); //กำหนดวันที่และเวลา
                                                    $datetime = date("Y-m-d H:i:s");
                                                    //เพิ่มไฟล์
                                                    $upload = $_FILES['fileupload'];
                                                    if ($upload <> '') {   //not select file
                                                        //โฟลเดอร์ที่จะ upload file เข้าไป 
                                                        $path = "fileupload/";

                                                        //เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
                                                        $remove_these = array(' ', '`', '"', '\'', '\\', '/', '_', '~');
                                                        $newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);

                                                        //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
                                                        $newname = "D$date" . time() . $newname;
                                                        $path_copy = $path . $newname;
                                                        $path_link = "fileupload/" . $newname;

                                                        //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
                                                        if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $path_copy)) {
                                                            $sql_pic = "INSERT INTO public_relations (pr_topic,pr_detail,pr_date, pr_picture) VALUES ('$topic','$detail','$datetime','$path_link')";
                                                            $qr_pic = mysqli_query($conn, $sql_pic);
                                                            if ($qr_pic) {
                                                                echo "<script>swal({
                                            title: 'บันทึกการประชาสัมพันธ์เรียบร้อย!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                                    //    text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                            type: 'success', //success, warning, danger
                                            timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                            showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                        }, function(){
                                            window.location.href ='index.php?page=manage_pr'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                            })</script>";
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </main>
                        <br>
                        <div class="container">
                            <div class="row ">

                                <div class="col-12 col-lg-12">
                                    <h4 class="mb-3">ข้อมูลการประชาสัมพันธ์ <span class="badge bg-success">Online</span></h4>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row g-3">

                                            <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th>ลำดับ</th>
                                                        <th>เรื่อง</th>

                                                        <th>วันที่อัพเดท</th>
                                                        <th>ที่อยู่รูปภาพ</th>
                                                        <th>จัดการ</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    $sql_pr = "SELECT * FROM public_relations";
                                                    $qr_pr = mysqli_query($conn, $sql_pr);

                                                    while ($rs_pr = mysqli_fetch_array($qr_pr)) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><?= $rs_pr['pr_topic'] ?></td>

                                                            <td><?= $rs_pr['pr_date'] ?></td>
                                                            <td><?= $rs_pr['pr_picture'] ?></td>
                                                            <td>
                                                                <div>
                                                                    <div style="display: none;"><input type="text" value="<?= $i ?>" name="total">
                                                                        <input type="text" value="<?= $rs_pr['pr_id'] ?>" name="key<?= $i ?>">
                                                                    </div>

                                                                    <button type="submit" class="btn btn-outline-danger" name="del_pr<?= $i ?>">ลบ</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $i++;
                                                    }
                                                    @$total = $_POST['total'];
                                                    for ($i = 1; $i <= $total; $i++) {
                                                        if (isset($_POST["del_pr$i"])) {
                                                            $key = $_POST["key$i"];
                                                            // $ip = $_POST["ip$k"];

                                                            $sql_UPip = "DELETE FROM public_relations where pr_id='$key'";

                                                            $qr_Upip = mysqli_query($conn, $sql_UPip);

                                                            if ($qr_Upip) {
                                                                echo "<script>swal({
                                                title: 'ลบการประชาสัมพันธ์เรียบร้อย!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
                           				//  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
                                                type: 'success', //success, warning, danger
                                                timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
                                                showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
                                            }, function(){
                                                window.location.href ='index.php?page=manage_pr'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
                                                })</script>";
                                                            }
                                                        }
                                                    }

                                                    ?>
                                                </tbody>
                                            </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<br>
<br>