<?php
include '../connect_db.php';
$key_dept = $_GET['key'];
?>
<select class="form-select" aria-label="Default select example" name="user_name" id="user_id"
    onchange="id_us()">
    <option value="0">--Select Username--</option>
    <?php
       
        $sql_po = "SELECT * FROM `department`
        LEFT OUTER JOIN phone_in ON phone_in.phone_dept = department.dept_id
         WHERE dept_id = '$key_dept'";
        $qr_po = mysqli_query($conn, $sql_po);

        while ($rs = mysqli_fetch_array($qr_po)) {
        ?>
    <option value="<?= $rs['phone_name'] ?> (Phone : <?= $rs['phone_number'] ?>)"><?= $rs['phone_name'] ?> (Phone :
        <?= $rs['phone_number'] ?>)</option>
    <?php
        }
        ?>
</select>