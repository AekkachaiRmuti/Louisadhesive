<?php include '../connect_db.php';

$fullname = $_GET['fullname'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$dept = $_GET['dept'];
$branch = $_GET['branch'];
$authority = $_GET['authority'];


$sql_intomember = "INSERT INTO user_louis (user_user,user_name,user_password,user_department,user_level,user_branch) values ('$fullname','$user','$pass','$dept','$authority','$branch')";
$qr_into = mysqli_query($conn,$sql_intomember);

if($qr_into){
    
  echo "<script>swal({
    title: 'บันทึกสำเร็จ!', //ข้อความ เปลี่ยนได้ เช่น บันทึกข้อมูลสำเร็จ!!
//  text: 'Redirecting in 3 seconds.', //ข้อความเปลี่ยนได้ตามการใช้งาน
    type: 'success', //success, warning, danger
    timer: 2000, //ระยะเวลา redirect 3000 = 3 วิ เพิ่มลดได้
    showConfirmButton: false //ปิดการแสดงปุ่มคอนเฟิร์ม ถ้าแก้เป็น true จะแสดงปุ่ม ok ให้คลิกเหมือนเดิม
}, function(){
    window.location.href ='index.php?page=manage_user'; //หน้าเพจที่เราต้องการให้ redirect ไป อาจใส่เป็นชื่อไฟล์ภายในโปรเจคเราก็ได้ครับ เช่น admin.php
    })</script>";
}else{
   
  
}
?>