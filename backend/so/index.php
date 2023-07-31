<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../');
    exit;
}
include_once('../conn.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลสินค้า</title>

    <?php 
    include_once('css.php');
    include_once('../../config.php');
    include_once('../import_css.php');
    include_once ROOT_CSS . '/func.php'; 
    ?>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo PATH; ?>/backend/img/logo_fb.png" alt="AdminLTELogo"
                width="80">
        </div>

        <?php include_once ROOT_CSS . '/menu_head.php'; ?>

        <?php include_once ROOT_CSS . '/menu_left.php'; ?>



        <div class="content-wrapper">
            <section class="content">
                <br>
                <!-- ส่วนข้อมูล&ส่วนคิดเงิน -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card MH90">
                            <div class="card-body fontdata">
                                <p>บริษัท : จรูญซอร์ฟแวร์</p>
                                <p>สาขา : ระยอง</p>
                                <p>27/07/2023</p>
                                <p>รหัสลูกค้า :</p>
                                <p>Cashier :</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card MH90">
                            <div class="card-body bg-dark">
                                <p class="text-left font-weight-bold size1">รวม</p>
                                <p class="text-right font-weight-bold size ">55,000.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ส่วนตาราง -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card MH100 tableFixHead">
                            <table class="table table-sm  table-borderless  table-hover text-center">
                                <thead class="table-border">
                                    <tr>
                                        <th scope="col" width="10%">ลำดับ</th>
                                        <th scope="col" width="10%">รหัสสินค้า</th>
                                        <th scope="col" width="50%">ชื่อสินค้า</th>
                                        <th scope="col" width="10%">หน่วย</th>
                                        <th scope="col" width="10%">จำนวน</th>
                                        <th scope="col" width="10%">รวมเงิน</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>00001</td>
                                        <td class="text-left">นมหนองโพ</td>
                                        <td>กล่อง</td>
                                        <td>1</td>
                                        <td class="text-right">15.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>00002</td>
                                        <td class="text-left">ขนมปังแถว</td>
                                        <td>ถุง</td>
                                        <td>1</td>
                                        <td class="text-right">25.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>00003</td>
                                        <td class="text-left">น้ำอัดลม</td>
                                        <td>ขวด</td>
                                        <td>2</td>
                                        <td class="text-right">40.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <footer class=" text-center text-white iBannerFix">
                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                        © 2020 Copyright:
                    </div>
                </footer>
            </section>
        </div>

        <?php 
        include_once('modal/modal_add.php');
        ?>
        <?php 
        include_once('modal/modal_edit.php');
        ?>
    </div>

    <?php
    include_once ROOT_CSS . '/import_js.php';
    

    include_once('js.php'); 
    ?>

</body>

</html>