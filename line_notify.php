<?php
$id = $_GET['id'];
if ($id == 'add') {
    $sql_line = "SELECT * FROM inventory_repair LEFT OUTER JOIN branch ON branch.brn_id = inventory_repair.invt_branch LEFT OUTER JOIN department_repair ON department_repair.dept_id = inventory_repair.invt_dept LEFT OUTER JOIN user_repair ON user_repair.user_id = inventory_repair.invt_user LEFT OUTER JOIN category_it ON category_it.cate_id = inventory_repair.invt_equipment LEFT OUTER JOIN status_repair ON status_repair.sts_id = inventory_repair.invt_status order by invt_id desc";
} if ($id !== 'add') {
    $sql_line = "SELECT * FROM inventory_repair LEFT OUTER JOIN branch ON branch.brn_id = inventory_repair.invt_branch LEFT OUTER JOIN department_repair ON department_repair.dept_id = inventory_repair.invt_dept LEFT OUTER JOIN user_repair ON user_repair.user_id = inventory_repair.invt_user LEFT OUTER JOIN category_it ON category_it.cate_id = inventory_repair.invt_equipment LEFT OUTER JOIN status_repair ON status_repair.sts_id = inventory_repair.invt_status where invt_id ='$id'";
}
$sql = $sql_line;
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_object($result);

if($row->sts_id == 1){
echo $alert =  "วันที่ตรวจสอบ : " . $row->invt_success;
}
if($row->sts_id == 2){
    echo $alert =  "วันที่ดำเนินการ : " . $row->invt_success;
}
if($row->sts_id == 3){
    echo $alert =   "วันที่เสร็จ : " . $row->invt_success;
}
if($row->sts_id == 4){
    echo $alert = "วันที่ยกเลิกซ่อม : " . $row->invt_success;
}


// YRGfR1f8BsUXDlIPNZZ0IC9eogZkwS4nrHpEJVLDxPV IT_CONNECT
// 7q3XZ82ayOuKGSXcM7vky6rqrJz4tMWKDh6MUa1BmSr PhotoMe
// $Token = "j8SkspLB1sWq4kmSVx2VoZDZI6LSkb9UH7";

define('LINE_API', "https://notify-api.line.me/api/notify");

$token = "YRGfR1f8BsUXDlIPNZZ0IC9eogZkwS4nrHpEJVLDxPV"; //ใส่Token ที่copy เอาไว้
echo $str = "\n" . "วันที่แจ้ง : " . $row->invt_date . "\n" . "ชื่ออุปกรณ์ : " . $row->cate_name . "\n" . "ปัญหา : " . $row->invt_problem . "\n" . "ผู้แจ้ง : " . $row->user_name . "\n" . "แผนก : " . $row->dept_name . "\n" . "ตำแหน่ง : " . $row->user_position . "\n" . "สาขา : " . $row->brn_name . "\n" . "สถานะ : " . $row->sts_name . "\n" . "สาเหตุ/แก้ไข : " . $row->invt_solution . "\n" . "รายละเอียด : " . $row->invt_solution_detail . "\n" . "ผู้ดำเนินการ : " . $row->invt_process."\n" . $alert; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร

$res = notify_message($str, $token);
print_r($res);
function notify_message($message, $token)
{
    $queryData = array('message' => $message);
    $queryData = http_build_query($queryData, '', '&');
    $headerOptions = array(
        'http' => array(
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $token . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
            'content' => $queryData
        ),
    );
    $context = stream_context_create($headerOptions);
    $result = file_get_contents(LINE_API, FALSE, $context);
    $res = json_decode($result);
    return $res;
}
echo "<script>window.location.href='index.php?page=inventory&idetail={$_GET['idetail']}'</script>";
						//https://havespirit.blogspot.com/2017/02/line-notify-php.html
						//https://medium.com/@nattaponsirikamonnet/%E0%B8%A1%E0%B8%B2%E0%B8%A5%E0%B8%AD%E0%B8%87-line-notify-%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%96%E0%B8%AD%E0%B8%B0-%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%90%E0%B8%B2%E0%B8%99-65a7fc83d97f
