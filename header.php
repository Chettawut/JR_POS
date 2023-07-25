<?php
include_once('config.php'); 
?>
<!-- Navigation -->

<head>
</head>
<body  id="BGG" style="background-image: url('<?php echo PATH; ?>/img/BG2.png' )">
<!-- <body  id="BGG" style="background-color: white"> -->

    <div class="login " >
        <h1> <img src="img/logo.png" width="20%;"></h1>
        <form action="login_result.php" method="post" >

            <label for="username" >
                <i class=" fas fa-user"></i>
            </label>
            &nbsp;&nbsp; 
            <input type="text" name="username" placeholder="Username" id="username" required>
         
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            &nbsp;&nbsp; 
            <input type="password" name="password" placeholder="Password" id="password" required>
            <input type="submit" value="Login">

        </form>

    </div>
</body>
