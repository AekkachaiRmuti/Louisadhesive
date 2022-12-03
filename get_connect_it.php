<?php
include 'connect_db.php';

  if ($_GET['line'] == 'yes') {
 
    
    $sql = "SELECT itp_id, itp_date,itp_dept,itp_name,itp_detail,itp_ip, itp_anydesk FROM it_problem ORDER BY itp_id DESC LIMIT 1";
    $qr_ = mysqli_query($conn, $sql);
    $rs = mysqli_fetch_array($qr_); 
    
    $str = "\n"."เวลา : ".$rs["itp_date"]."\n"."ปัญหาที่แจ้ง : ".$rs["itp_detail"]."\n"."แผนก : ".$rs["itp_dept"]."\n"."ผู้แจ้ง : ".$rs["itp_name"]."\n"."IP : ".$rs["itp_ip"];
}

define('LINE_API', "https://notify-api.line.me/api/notify");

    //  $token = "YRGfR1f8BsUXDlIPNZZ0IC9eogZkwS4nrHpEJVLDxPV"; //IT
    $token = "7q3XZ82ayOuKGSXcM7vky6rqrJz4tMWKDh6MUa1BmSr"; //ใส่Token ที่copy เอาไว้ PHOTOME
    

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
    echo "<script>window.location.href='connect_it.php'</script>";
