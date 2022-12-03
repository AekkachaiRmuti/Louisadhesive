<h3 class="card-title mb-4 p-2 "> <a href="index.php?page=inventory&repair=add_equipment" class="btn btn-outline-success">

        <p>เพิ่มอุปกรณ์</p>
    </a></h3>
<table id="example" class="display nowrap">
    <thead>
        <tr>
            <th>#</th>
            <th>รหัสอุปกรณ์</th>
            <th>หมวดอุปกรณ์</th>
            <th>ชื่อเครื่อง</th>
            <th>สาขา</th>
            <th>ประวัติการซ่อม</th>

            <th>รายละเอียด</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $sql_se = "SELECT * FROM equipment LEFT OUTER JOIN category_it on category_it.cate_id = equipment.eqm_cate LEFT OUTER JOIN branch on branch.brn_id = equipment.eqm_branch";
        $qr_se = mysqli_query($conn, $sql_se);
        while ($rs_cate = mysqli_fetch_array($qr_se)) {
        ?>
            <tr>
                <td style="text-align: center;"><?= $i ?></td>
               <td><?=$rs_cate['eqm_iddevice'] ?></td>
               <td><?=$rs_cate['cate_name'] ?></td>
               <td><?=$rs_cate['eqm_name'] ?></td>
               <td><?=$rs_cate['brn_name'] ?></td>
               <td><a href="#">ประวัติการซ่อม</a></td>
               <td><a href="#">รายละเอียด</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </tbody>
</table>