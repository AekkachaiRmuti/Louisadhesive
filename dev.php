<?php

$key = $_GET['edit'];
$del = $_GET['del'];

if ($del) {
	$sql_del = "DELETE FROM line_token WHERE line_id = '$del'";
	$qr_del = mysqli_query($conn, $sql_del);
	if (!$qr_del) {
		echo "<script>swal({
		title: 'DELETE Failed.!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
		type: 'danger', //success, warning, danger
		timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
		showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
	}, function(){
		window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
		})</script>";
	} else {
		echo "<script>swal({
		title: 'DELETE Successfuly', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
		type: 'success', //success, warning, danger
		timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
		showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
	}, function(){
		window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
		})</script>";
	}
}
?>
<div class="wrapper">
	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>Dev</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
							<li class="breadcrumb-item active">Dev</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>
		<?php
		$sql_tk1 = "SELECT * FROM line_token WHERE line_id = '$key'";
		$qr_tr1 = mysqli_query($conn, $sql_tk1);
		$rs_tk1 = mysqli_fetch_assoc($qr_tr1)
		?>
		<div class="container">
			<div class="container-fluid">
				<form method="POST">
					<div class="card card-default">
						<div class="card-header">
							<h3>Token Line</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<label for="" class="label">Group Name</label>
									<input type="text" class="form-control" name="group" value="<?= $rs_tk1['line_group'] ?>">
								</div>

								<div class="col-md-8">
									<label for="" class="label">Token</label>
									<input type="text" class="form-control" name="token" value="<?= $rs_tk1['line_token_key'] ?>">
								</div>
							</div>
							<br>
							<?php
							if ($key) {
								$sv = "style ='display:none;'";
							} else {
								$up = "style ='display:none;'";
							}
							?>
							<button type="submit" <?= $sv ?> name="btn_save" class="btn btn-primary">Save Token</button>
							<button type="submit" <?= $up ?> name="btn_update" class="btn btn-warning">Update Token</button>
							<?php

							if (isset($_POST['btn_save'])) {
								$group = $_POST['group'];
								$token_s = $_POST['token'];
								$sql_save = "INSERT INTO line_token (line_group, line_token_key) VALUES ('$group','$token_s')";
								$qr_save = mysqli_query($conn, $sql_save);
								if (!$qr_save) {
									echo "<script>swal({
										title: 'Save Failed.!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
								   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
										type: 'danger', //success, warning, danger
										timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
										showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
									}, function(){
										window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
										})</script>";
								} else {
									echo "<script>swal({
										title: 'Save Successfuly', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
								   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
										type: 'success', //success, warning, danger
										timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
										showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
									}, function(){
										window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
										})</script>";
								}
							}
							if (isset($_POST['btn_update'])) {
								$group1 = $_POST['group'];
								$token_s1 = $_POST['token'];
								$sql_update = "UPDATE line_token SET line_group = '$group1', line_token_key = '$token_s1' WHERE line_id = '$key'";
								$qr_update = mysqli_query($conn, $sql_update);
								if (!$qr_update) {
									echo "<script>swal({
										title: 'Update Failed.!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
								   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
										type: 'danger', //success, warning, danger
										timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
										showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
									}, function(){
										window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
										})</script>";
								} else {
									echo "<script>swal({
										title: 'Update Successfuly', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
								   //  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
										type: 'success', //success, warning, danger
										timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
										showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
									}, function(){
										window.location.href ='index.php?page=dev'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
										})</script>";
								}
							}
							?>
							<br>
							<?php
							$sql_tk = "SELECT * FROM line_token";
							$qr_tr = mysqli_query($conn, $sql_tk);
							while ($rs_tk = mysqli_fetch_assoc($qr_tr)) {
							?>
								<li><u>GROUP</u> : <?= $rs_tk['line_group'] ?> <u>Token</u> : <i><?= $rs_tk['line_token_key'] ?></i> <a href="index.php?page=dev&edit=<?= $rs_tk['line_id'] ?>">EDIT</a> &nbsp;&nbsp;<a href="index.php?page=dev&del=<?= $rs_tk['line_id'] ?>" style="color:red;">DELETE</a></li>
							<?php
							}
							?>

						</div>
					</div>
				</form>
				<div class="card">
					<form method="POST">
						<div class="card-header">
							<textarea name="sql_" class="form-control"></textarea>
							<button type="submit" class="btn btn-primary" value="" name="sss">sql</button>
						</div>


						<div class="card-body">
							<table id="example" class="display nowrap" style="width:100%">
								<thead>
									<tr>
										<th>ชื่อ</th>
										<th>เบอร์โทร</th>

									</tr>
								</thead>
								<tbody>
									<?php
									if (isset($_POST['sss'])) {
										date_default_timezone_set('Asia/Bangkok');

										$servername = 'localhost';
										$username = 'root';
										$password = '12345678';
										$db_name = 'test_nn';

										$conn = mysqli_connect($servername, $username, $password, $db_name);

										$text = $_POST['sql_'];
										$sql = "$text";
										$qr = mysqli_query($conn, $sql);
										while ($rs_sql = mysqli_fetch_assoc($qr)) {
									?>
											<tr>

												<td><?= $rs_sql['tname'] ?></td>
												<td><?= $rs_sql['ttel'] ?></td>
											</tr>
									<?php
										}
									}
									?>
								</tbody>
							</table>


						</div>
					</form>
					<form method="POST" enctype="multipart/form-data">

                                    <div class="">
                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">

                                                <label for="" class="control-label">ประเภทงานซ่อม</label>

                                                <select id="type" class="form-control" name="type_work">
                                                    <option value="">-เลือกประเภทงานซ่อม-</option>
                                                    <?php

                                                    $type_repair = "SELECT * FROM `tbl_typework_repair`";
                                                    $qr_type_repair = mysqli_query($conn, $type_repair);
                                                    while ($rs_type_repair = mysqli_fetch_array($qr_type_repair)) {
                                                    ?>
                                                        <option value="<?= $rs_type_repair["type_id"] ?>"><?= $rs_type_repair["type_name"] ?></option>
                                                    <?php
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <label for="problem" class="control-label">ประเภทปัญหา</label>
                                                <input type="text" class="form-control" name="problem">
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <label for="invt" class="control-label">ชื่ออุปกรณ์</label>
                                                <select id="" class="form-control" name="invt_name">
                                                    <option value="">-ชื่ออุปกรณ์-</option>
                                                    <?php
                                                    $sql_inventory = "SELECT * FROM `tbl_category`";
                                                    $qr_inventory = mysqli_query($conn, $sql_inventory);
                                                    while ($rs_inventory = mysqli_fetch_assoc($qr_inventory)) {
                                                    ?>
                                                        <option value="<?= $rs_inventory["cate_id"] ?>"><?= $rs_inventory["cate_name"] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <label for="urgency" class="control-label">ความเร่งด่วน</label>
                                                <select id="" class="form-control" name="urgency">
                                                    <option value="">-ความเร่งด่วน-</option>
                                                    <?php
                                                    $sql_urgency = "SELECT * FROM `tbl_urgency`";
                                                    $qr_urgency = mysqli_query($conn, $sql_urgency);
                                                    while ($rs_urgancy = mysqli_fetch_assoc($qr_urgency)) {
                                                    ?>
                                                        <option value="<?= $rs_urgancy["ug_id"] ?>"><?= $rs_urgancy["ug_name"] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <label for="problem_work" class="control-label">ปัญหา/งานซ่อม</label>
                                                <textarea id="" class="form-control" name="problem_work"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <label for="pic" class="control-label">ไฟล์แนบ</label>
                                                <input type="file" class="form-control" name="fileupload" id="fileupload">
                                            </div>
                                        </div>

                                        <div class="col-3 col-lg-12 col-md-6 col-sm-3">
                                            <div class="form-gruop">
                                                <br>
                                                <button type="submit" class="btn btn-primary" id="btn_ok" name="btn_ok">แจ้งซ่อม</button>
                                            </div>

                                        </div>
                                    </div>
                                    <?php

                                    if (isset($_POST['btn_ok'])) {
                                        // $type_work = $_POST['type_work'];
                                        // $problem = $_POST['problem'];
                                        // $invt = $_POST['invt'];
                                        // $urgency = $_POST['urgency'];
                                        // $problem_work = $_POST['problem_work'];
                                        $upload = $_FILES['fileupload'];
                                        if ($upload <> '') {   //not select file
                                            //โฟลเดอร์ที่จะ upload file เข้าไป 
                                            $path = "img/";

                                            //เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
                                            $remove_these = array(
                                                ' ', '`', '"', '\'', '\\', '/', '_', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
                                            );
                                            $newname = str_replace($remove_these, '', $_FILES['fileupload']['name']);

                                            //ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
                                            $newname = 'L' . date("Ymd") . time() . basename($newname);
                                            $path_copy = $path . $newname;
                                            $path_link = "img/" . $newname;

                                            //คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
                                            if($_FILES['fileupload']['name'] != ""){
                                                move_uploaded_file($_FILES['fileupload']['tmp_name'], $path_copy);
                                            }
                                          
                                               
                                            
                                        }
                                    }

                                    ?>
                                </form>
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