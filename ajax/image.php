<?php
include '../connect_db.php';
$sql_modal = "SELECT * FROM it_problem WHERE itp_id ='{$_GET['key']}'";
$qr_modal = mysqli_query($conn,$sql_modal);
$rs_modal = mysqli_fetch_assoc($qr_modal);
?><div class="container">
    <div class="col mt-3">
 <img style="width: 500px;" src="<?=$rs_modal['itp_picture']?>"/>
</div>
</div>