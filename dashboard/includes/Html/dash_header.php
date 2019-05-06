<?php ob_start(); 

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../<?php echo Config::get("target/bootstrap"); ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="../<?php echo Config::get("target/fontawesome"); ?>css/all.css">

    <link rel="stylesheet" href="../<?php echo Config::get("target/css"); ?>preloader.css">
    <link rel="stylesheet" href="../<?php echo Config::get("target/css"); ?>fonts.css">
    <link rel="stylesheet" href="../<?php echo Config::get("target/css"); ?>main.css">
    <link rel="stylesheet" href="<?php echo Config::get("target/css"); ?>dashboard.css">
    
    

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <title><?php echo  $pageTite;?></title>
</head>

<body>
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>