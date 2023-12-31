<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เฮือนช้างเผือก</title>

    <?php include_once('css.php'); ?>
    <link rel="icon" href="backend/img/logo.png">
    <style>
    * {
        box-sizing: border-box;
        font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
        font-size: 16px;
    }

    @media screen and (max-width: 360px) {
        .login {
            width: 100px;

        }
    }

    @media (min-width:1025px) {
        .login {
            width: 100px;

        }
    }

    .login {
        width: 350px;
        background-color: #ffffff;
        box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
        margin: 150px auto;
    }

    .login h1 {
        text-align: center;
        color: #5b6574;
        font-size: 26px;
        padding: 15px 0 10px 0;
        border-bottom: 1px solid #3498DB;
    }

    .login form {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 40px;
    }

    .login form label {
        border-radius: 25px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        background-color: #5DADE2;
        color: #ffffff;

    }

    .login form input[type="password"],
    .login form input[type="text"] {
        border-radius: 25px;
        width: 255px;
        height: 50px;
        border: 1px solid #dee0e4;
        margin-bottom: 20px;
        padding: 0 15px;

    }

    .login form input[type="submit"] {
        width: 100%;
        padding: 15px;
        margin-top: 20px;
        background-color:#5DADE2;
        border: 0;
        cursor: pointer;
        font-weight: bold;
        color: #ffffff;
        transition: background-color 0.2s;
    }

    .login form input[type="submit"]:hover {
        background-color:#F4D03F;
        transition: background-color 0.2s;
    }
    </style>
</head>

<body>

    <?php include_once('header.php'); ?>

    <?php 
    if(isset($_GET['log']))
    {
        if($_GET['log']=='username')
        $message = "Username ไม่ถูกต้อง";
        else if($_GET['log']=='password')
        $message = "Password ไม่ถูกต้อง";
        else if($_GET['log']=='disable')
        $message = "คุณไม่ได้เป็นพนักงานบริษัทนี้แล้ว";
        echo "<script type='text/javascript'>alert('$message');</script>";
        // header( "Location: index.php");
        echo "<script type='text/javascript'>window.location.replace('..');</script>";

    }
    ?>

</body>
<!-- ส่วนล่าง -->
<footer class="footer">
    <div class="container p-4 pb-0">
        <section class="mb-0" title="Jaroon Software Co., Ltd.">
            <!-- Facebook -->
            <a class="btn text-white btn-floating m-0 face" style="background-color: #3b5998;"
                href="https://www.facebook.com/jaroonsoft" role="button"><i class="fab fa-facebook-f"></i>
            </a>
        </section>
    </div>
</footer>

</html>