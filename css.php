<?php
define('ROOT_CSS',str_replace("\\",'/',dirname(__FILE__)));
define('PATH_CSS', ROOT_CSS == $_SERVER['DOCUMENT_ROOT']
    ?'' :substr(ROOT_CSS,strlen($_SERVER['DOCUMENT_ROOT']))
);
?>
<!-- Bootstrap core CSS -->
<link href="<?php echo PATH_CSS; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?php echo PATH_CSS; ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

<!-- Custom styles for this template -->
<link href="<?php echo PATH_CSS; ?>/css/clean-blog.min.css" rel="stylesheet">
<style>
body {
    background-image: url("paper.gif");
    background-color: #cccccc;
}
#BGG{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-image: url(image.jpg);
  background-repeat: no-repeat;
  background-size: cover; 

}
.footer{
    height:80px;
    position:fixed;
    left:0%;
    bottom: 20px;;
    width: 0;
    z-index: 0;
}
.face{
    border-radius: 20%;
}
</style>