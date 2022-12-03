<h3 class="card-title mb-4 p-2"> <a href="index.php?page=request" class="btn btn-warning">
<i class="fa fa-cogs" aria-hidden="true"></i>
        <p>แจ้งซ่อม</p>
    </a></h3>
<table id="example" class="display nowrap">
    <thead>
        <tr>
            <th>#</th>
            <th>วันที่แจ้ง</th>
            <th>ชื่อผู้แจ้ง</th>
            <th>ปัญหา</th>
            <th>สถานะ</th>
            <th>รายละเอียด</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql_inventory = "SELECT * FROM inventory_repair LEFT OUTER JOIN branch ON branch.brn_id = inventory_repair.invt_branch LEFT OUTER JOIN department_repair ON department_repair.dept_id = inventory_repair.invt_dept LEFT OUTER JOIN user_repair ON user_repair.user_id = inventory_repair.invt_user LEFT OUTER JOIN category_it ON category_it.cate_id = inventory_repair.invt_equipment LEFT OUTER JOIN status_repair ON status_repair.sts_id = inventory_repair.invt_status";
        $qr_inventory = mysqli_query($conn, $sql_inventory);

        while ($rs_inventory = mysqli_fetch_array($qr_inventory)) {
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $rs_inventory['invt_date'] ?></td>
                <td><?= $rs_inventory['user_name'] ?></td>
                <td><?= $rs_inventory['invt_problem'] ?>
                    <!-- <?php
                    $datestart = $rs_inventory['invt_date'];
                    $dateend = date("Y-m-d");
                    $calculate = strtotime("$dateend") - strtotime("$datestart");
                    $summary = floor($calculate / 86400);
                    $day = "<span class='badge badge-success'>$summary วัน</span> ";
                    if ($rs_inventory['sts_id'] == 1) {
                        // echo $day;
                    }

                    ?> -->

                </td>

                <?php
                if ($rs_inventory['sts_id'] == 1) {
                    $status = "<span class='badge badge-info'>รอตรวจสอบ</span>";
                }
                if ($rs_inventory['sts_id'] == 2) {
                    $status = "<span class='badge badge-warning'>กำลังดำเนินการ</span>";
                }
                if ($rs_inventory['sts_id'] == 3) {
                    $status = "<span class='badge badge-success'>สำเร็จ</span>";
                }

                if ($rs_inventory['sts_id'] == 4) {
                    $status = "<span class='badge badge-danger'>ยกเลิกการซ่อม</span>";
                }
                ?>
                <td><a href="#"><?= $status ?></a></td>
                <td><a href="?page=inventory&idetail=<?= $rs_inventory['invt_id'] ?>">รายละเอียด</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>