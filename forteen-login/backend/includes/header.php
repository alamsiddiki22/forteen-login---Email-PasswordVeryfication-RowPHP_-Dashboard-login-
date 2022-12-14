<?php
    session_start();
    if(!isset($_SESSION['s_id'])){
        header('location: oops.php');
    }
    // page name generation start
    $link = explode('/', $_SERVER['PHP_SELF']);
    $page_name = end($link);
    // page name end

    require_once 'db.php';
    $user_id = $_SESSION['s_id'];
    $profile_photo_name_query = "SELECT profile_photo_name FROM users WHERE id = $user_id";
    $profile_photo_name_from_db = mysqli_query($db_connect, $profile_photo_name_query);
    $profile_photo_name = mysqli_fetch_assoc($profile_photo_name_from_db)['profile_photo_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title><?= $tab_title ?></title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../assets/css/main.min.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/neptune.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="uploads\profile_photos\<?=$profile_photo_name ?>" alt="">
                        <span class="user-info-text"><?= $_SESSION['s_name'] ?><br><span class="user-state-info"><?= $_SESSION['s_email_address'] ?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="<?= ($page_name == 'dashboard.php') ? 'active-page': ''?>">
                        <a href="dashboard.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= ($page_name == 'profile.php') ? 'active-page': ''?>">
                        <a href="profile.php"><i class="material-icons-two-tone">face</i>Profile</a>
                    </li>
                    <li class="<?= ($page_name == 'service_add.php' || $page_name == 'service_list.php') ? 'active-page': ''?>">
                        <a href=""><i class="material-icons-two-tone">home_repair_service</i>Service<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a class="<?= ($page_name == 'service_add.php') ? 'active': ''?>" href="service_add.php">Add Service</a>
                                <a class="<?= ($page_name == 'service_list.php') ? 'active': ''?>" href="service_list.php">List Service</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?= ($page_name == 'portfolio.php') ? 'active-page': ''?>">
                        <a href="portfolio.php"><i class="material-icons-two-tone">source</i>Portfolio</a>
                    </li>
                    <li>
                        <a href="../index.php" target="_blank"><i class="material-icons-two-tone">home</i>Visit Website</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li class="sidebar-title">
                        Reserved
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Reserved<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pricing.html">Reserved</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <!-- header part end -->