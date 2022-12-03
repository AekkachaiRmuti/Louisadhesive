<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>HR</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">HR</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="container">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">

                        <div>
                            <?php
                            // $json = file_get_contents('https://script.googleusercontent.com/macros/echo?user_content_key=Ip2eYa5puiLVkf8Px2JtVhm3GJXAVmuSAKoH--15j-7wM7fDodlwSh2CdV9q12Z8AxZkfSqJpxfeAs3cMDrXBNt3qQrj_7OLm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnGEJ5raDnbuOebtdleDVKa1mq2BTg_N4tRrONGHCkgOpnRc8Fpm3NRK2i6sm9N6J_OYND_6ZfqcUhX2jNJxbIOpKoSOdad6tfw&lib=MZ310OhB4A9xRn49des-KSNftRaKOJe7L');
                            $json = file_get_contents('https://script.google.com/macros/s/AKfycbyWADYX_gSChBPXIWX99gv6QrLC6ChHn917MqkGxPwWwRgWAtKTOwnJWcqNRrHtPax9/exec');
                            $obj = json_decode($json);
                            $i = 1;
                            ?>
                            <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>
                                            ลำดับ
                                        </th>
                                        <th>วันที่</th>
                                        <th>ชื่อ</th>
                                        <th>ชื่อเล่น</th>
                                        <th>ตำแหน่ง</th>
                                        <th>วันที่สมัคร</th>
                                        <th>เพศ</th>
                                        <th>จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($obj as $value) {
                                    ?>
                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td><?php echo $value->date; ?></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo $value->nickname; ?></td>
                                            <td><?php echo $value->position; ?></td>
                                            <td><?php echo $value->date_regis; ?></td>
                                            <td><?php echo $value->sex; ?></td>
                                            <td><a href ="?page=HR&name=<?=$value->name?>" class="btn btn-success">จัดการ</a>
                                           </td>
                                        </tr>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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