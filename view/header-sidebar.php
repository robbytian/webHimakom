<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Himakom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/Logo HMK.png">
    <!-- chartist CSS -->
    <!-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/custom2.css" rel="stylesheet">
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <link href='assets/plugins/fullCalendar/main.css' rel='stylesheet' />
    <script src='assets/plugins/fullCalendar/main.js'></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand ms-4" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-hmk-icon.png" alt="homepage" class="dark-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo-hmk-text.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    
                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">
                             
                            <a class="nav-toggler nav-link waves-effect waves-light text-white "
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                                
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                       
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                        <?php
                        if($session->check('username')){
                        ?>
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/agent.jpg" alt="user" class="profile-pic me-2"><?php echo $session->getSession("username")?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>
                        <?php
                        }
                        ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#home" aria-expanded="false">
                                <i class="mdi me-2 mdi-home"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#struktur" aria-expanded="false">
                                <i class="mdi me-2 mdi-video"></i><span class="hide-menu">Video Perkenalan</span></span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#event" aria-expanded="false">
                                <i class="mdi me-2 mdi-calendar"></i><span class="hide-menu">Event</span></a>
                        </li>
                        <?php if($session->check('username') && $session->checkValue('level','1')){
                        ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#proker" aria-expanded="false">
                                <i class="mdi me-2 mdi-clipboard-text"></i><span class="hide-menu">Proker</span></a>
                        </li>
                        <?php } ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#dokumentasi" aria-expanded="false"><i class="mdi me-2 mdi-camera"></i><span
                                    class="hide-menu">Dokumentasi</span></a>
                        </li>
                       
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#pengurusDepartement" aria-expanded="false"><i class="mdi me-2 mdi-account"></i><span
                                    class="hide-menu">Pengurus</span></a>
                        </li>
                        
                        <?php if($session->check('level') && $session->checkValue('level','2')){ ?>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="#uangKas" aria-expanded="false"><i class="mdi me-2 mdi-cash"></i><span
                                class="hide-menu">Uang Kas</span></a>
                        </li>
                        <?php }
                        if(!$session->check('username')){
                        ?>
                        <li class="text-center p-10 upgrade-btn">
                            <a href="#"
                                class="btn btn-warning text-white mt-4 login">Login Admin</a>
                        </li>
                        <?php
                        }else{
                        ?>
                         <li class="text-center p-10 upgrade-btn">
                            <form method="post" action="logout.php">
                                <button type="submit" name="logout"
                                    class="btn btn-warning text-white mt-4">Logout</button>
                            </form>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <!-- <div class="col-4 link-wrap"> -->
                        <!-- item-->
                        <!-- <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div> -->
                    <div class="col-12 link-wrap ">
                        <!-- item-->
                        <a href="https://www.instagram.com/himakomlpkia" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="instagram"><i
                                class="mdi mdi-instagram"></i> himakomlpkia</a>
                    </div>
                    <!-- -->
                    <!-- <div class="col-4 link-wrap"> -->
                        <!-- item-->
                        <!-- <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div> -->
                </div>
            </div>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
  
                    </div>
                </div>
            </div>
       
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->