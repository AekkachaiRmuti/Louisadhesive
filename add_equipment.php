<form method="POST">
    <div>
        <h3>ข้อมูลทั่วไป</h3>
    </div>
    <div class="row">


        <br>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">ชื่อเครื่อง</label>
            <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">วันที่รับเข้า</label>
            <input type="date" class="form-control" name="date" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">เลือกหมวดหมู่อุปกรณ์</label>
            <select name="cate" id="" class="form-control">
                <option value="">--เลือก--</option>
                <?php
                $sql_dept = "SELECT * FROM category_it";
                $qr_dept = mysqli_query($conn, $sql_dept);
                while ($rs_dept = mysqli_fetch_array($qr_dept)) {
                ?>
                    <option value="<?= $rs_dept['cate_id'] ?>"><?= $rs_dept['cate_name'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">สาขา/หน่วยงาน</label>
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
        <div class="form-group col-6">
            <label for="exampleInputEmail1">หมายเหตุ</label>
            <textarea type="text" class="form-control" name="note" id=""></textarea>
        </div>

    </div>
    <hr>
    <div>
        <h3>ข้อมูลเครื่อง</h3>
    </div>
    <div class="row">


        <br>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">รหัสอุปกรณ์</label>
            <input type="text" class="form-control" name="id_equip" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Memory</label>
            <input type="text" class="form-control" name="memory" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Device Brand</label>
            <input type="text" class="form-control" name="brand" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Device Model</label>
            <input type="text" class="form-control" name="model" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Harddisk</label>
            <input type="text" class="form-control" name="hdd" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Serial No.</label>
            <input type="text" class="form-control" name="serial" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Monitor</label>
            <input type="text" class="form-control" name="monitor" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">ราคา</label>
            <input type="text" class="form-control" name="price" id="">
        </div>
        <div class="form-group col-6">
            <label for="exampleInputEmail1">Device IP</label>
            <input type="text" class="form-control" name="ip_device" id="">
        </div>


    </div>
    <button type="submit" class="btn btn-outline-primary" name="btn_send">บันทึก</button>
</form>

<?php
if(isset($_POST['btn_send'])){
$name = $_POST['name'];
$date = $_POST['date'];
$cate = $_POST['cate'];
$branch = $_POST['branch'];
$note = $_POST['note'];
$id_equip = $_POST['id_equip'];
$memory = $_POST['memory'];
$device = $_POST['brand'];
$model = $_POST['model'];
$hdd = $_POST['hdd'];
$serial = $_POST['serial'];
$monitor = $_POST['monitor'];
$price = $_POST['price'];
$device_ip = $_POST['ip_device'];

$sql_eqm = "INSERT INTO equipment (eqm_name, eqm_date, eqm_cate, eqm_branch, eqm_note, eqm_iddevice, eqm_memory, eqm_device, eqm_model, eqm_hdd, eqm_serial, eqm_monitor, eqm_price, eqm_device_ip) 
VALUES ('$name','$date','$cate','$branch','$note','$id_equip','$memory','$device','$model','$hdd','$serial','$monitor','$price','$device_ip')";
$qr_eqm = mysqli_query($conn, $sql_eqm);
if($qr_eqm){
    echo "<script>swal({
        title: 'ลงทะเบียนอุปกรณ์สำเร็จ!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
        type: 'success', //success, warning, danger
        timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
        showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
    }, function(){
        window.location.href ='index.php?page=inventory&repair=equipment'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
        })</script>";
}
}
?>