<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Junior Developer">
    <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, PHP, MySQL">
    <meta name="author" content="grumin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c630c8eb00.js" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="app/css/normalize.css">
    <link rel="stylesheet" href="app/css/d-style.css">
</head>
<body>
<?php include("app/views/d-header.php"); ?>
<main>
    <?php
    include ('app/views/d-left-sidebar.php');
    ?>
    <!-- page content start -->
    <?php
        $path = 'app/inc/';
        if ($_GET['page']){
            $page = $_GET['page'];
            $display = $path . $page . '.php';
            include($display);
        } else {
            echo 'Welcome to my dynamic web';
        };
    ?>
    <!-- page content end -->
</main>
<?php include("app/views/d-footer.php"); ?>
</body>
</html>