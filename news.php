<link rel="stylesheet" href="pr.css">
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ข่าวประชาสัมพันธ์</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                            <li class="breadcrumb-item active">ข่าวประชาสัมพันธ์</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">ข่าวประชาสัมพันธ์</h3>
                        <section class="py-5 text-center container">
                            <div class="row py-lg-5">
                                <div class="col-lg-7 col-md-8 mx-auto">
                                    <h1 class="fw-light">การประชาสัมพันธ์ (Public Relations)</h1>
                                    <p class="lead text-muted">การประชาสัมพันธ์(Public Relation) เป็นการติดต่อสื่อสารจาก
                                        องค์การไปสู่สาธารณชนที่เกี่ยวข้อง รวมถึงรับฟังความคิดเห็นและ
                                        ประชามติจากสาธารณชนที่มีต่อองค์การ โดยมีวัตถุประสงค์เพื่อสร้าง
                                        ความเชื่อถือ ภาพลักษณ์ ความรู้ และแก้ไขข้อผิดพลาดในเรื่องใดเรื่องหนึ่ง</p>
                                    <p>
                                        <a href="index.php?page=manage_pr" class="btn btn-primary my-2">จัดการข้อมูลการประชาสัมพันธ์</a>
                                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                                    </p>
                                </div>
                            </div>
                        </section>




                        <div class="album py-5 bg-light">
                            <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                                    <?php
                                    $i = 1;
                                    $sql_pr = "SELECT * FROM public_relations";
                                    $qr_pr = mysqli_query($conn, $sql_pr);

                                    while ($rs_pr = mysqli_fetch_array($qr_pr)) {
                                    ?>


                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <div class="card shadow-sm card_pr">

                                                <img id="myImg<?= $i ?>" class="img-thumbnail" src="<?= $rs_pr['pr_picture'] ?>" alt="<?= $rs_pr['pr_topic'] ?>">

                                                <div class="card-header"><b><?= $rs_pr['pr_topic'] ?></b></div>
                                                <div class="card-body">
                                                    <small class="card-text"><?= $rs_pr['pr_detail'] ?></small>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="btn-group">


                                                        </div>
                                                        <small class="text-muted">ลงเมื่อ <?= $rs_pr['pr_date'] ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="myModal<?= $i ?>" class="modal">
                                            <span class="close<?= $i ?>">&times;</span>
                                            <img class="modal-content" id="img01<?= $i ?>">
                                            <div id="caption<?= $i ?>"></div>
                                        </div>
                                        <script>
                                            // Get the modal
                                            var modal = document.getElementById("myModal<?= $i ?>");

                                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                                            var img = document.getElementById("myImg<?= $i ?>");
                                            var modalImg = document.getElementById("img01<?= $i ?>");
                                            var captionText = document.getElementById("caption<?= $i ?>");
                                            img.onclick = function() {
                                                modal.style.display = "block";
                                                modalImg.src = this.src;
                                                captionText.innerHTML = this.alt;
                                            }

                                            // Get the <span> element that closes the modal
                                            var span = document.getElementsByClassName("close<?= $i ?>")[0];

                                            // When the user clicks on <span> (x), close the modal
                                            span.onclick = function() {
                                                modal.style.display = "none";
                                            }
                                        </script>
                                    <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
</div>