
<?php
include 'connect_db.php';
session_start();



if (isset($_POST['btn_login'])) {
    // echo "<script>window.location.href ='index.php?page=home'</script>";
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql_ck = "SELECT * FROM user_louis where user_name ='$user' and user_password ='$pass'";
    $qr_ck = mysqli_query($conn, $sql_ck);


    if (mysqli_num_rows($qr_ck) == 1) {
        $rs = mysqli_fetch_object($qr_ck);
        $rs_user = $rs->user_name;
        $rs_pass = $rs->user_password;

        echo    $_SESSION['user_id'] =  $rs->user_id;
        echo    $_SESSION['user_user'] =  $rs->user_user;
        echo    $_SESSION['user_password'] =  $rs->user_password;
        echo   $_SESSION['user_name'] =  $rs->user_name;
        echo   $_SESSION['user_department'] =  $rs->user_department;
        echo   $_SESSION['user_level'] =  $rs->user_level;
        echo   $_SESSION['user_branch'] =  $rs->user_branch;
     


        echo "<script>window.location.href ='index.php?page=home'</script>";
    } else {
        echo "<script>";
        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
        echo "window.history.back()";
        echo "</script>";
    }
}

?>
