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
    <title>ค่าพื้นฐานโปรแกรม (Default Data)</title>

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



        <div class="content-wrapper" style="padding-left: 40px;">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-10">
                            <span class="m-0"><i class="fas fa-wrench"></i></i> ค่าพื้นฐานโปรแกรม (Default Data)</span>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <!-- ปรับขนาดหน้าจอ -->
                        <div class="card col-sm-6">
                            <div class="card-header h5">
                                ขนาดหน้าจอ
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="ความกว้าง">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="ความสูง">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- เปลี่ยนชื่อร้าน -->
                        <div class="card col-sm-6">
                            <div class="card-header h5">
                                ชื่อร้าน
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" class="form-control" placeholder="ใส่ชื่อที่ต้องการเปลี่ยน">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- เปลี่ยนรูป LOGO -->
                        <div class="card col-sm-6">
                            <div class="card-header h5">
                                รูป LOGO
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group col-12">
                                        <label for="exampleFormControlFile1">เลือกรูปที่ต้องการใส่</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit f" class="btn btn-primary">ยืนยันการเปลี่ยนแปลง</button>
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