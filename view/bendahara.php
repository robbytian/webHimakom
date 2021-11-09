<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Bendahara</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedcolumns/3.3.3/css/fixedColumns.bootstrap4.min.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
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

                    <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-lg-none d-md-block ">
                        <li class="nav-item">

                            <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

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
                            if ($session->check('username')) {
                            ?>
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/images/users/agent.jpg" alt="user" class="profile-pic me-2"><?php echo $session->getSession("username") ?>
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

                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#uangDop" aria-expanded="false"><i class="mdi me-2 mdi-cash"></i><span class="hide-menu">Uang Dop</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#uangKas" aria-expanded="false"><i class="mdi me-2 mdi-cash-multiple"></i><span class="hide-menu">Uang Kas</span></a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false"><i class="mdi me-2 mdi-logout"></i><span class="hide-menu">Logout</span></a>
                        </li>
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
                        <a href="https://www.instagram.com/himakomlpkia" target="_blank" class="link" data-toggle="tooltip" title="" data-original-title="instagram"><i class="mdi mdi-instagram"></i> himakomlpkia</a>
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

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mr-auto">
                                    <div class="card-body" id="tableTotal">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card mr-auto">
                                    <div class="card-body" id="tableTotalDOP">

                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                            <div class="col-lg-8">
                                <div class="card mr-auto">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h4 class="card-title text-center">Histori Pengambilan Uang</h4><br>
                                            <table class="table table-stripped " id="table_pengambilan_kas">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Jenis</th>
                                                        <th>Tanggal</th>
                                                        <th>Keperluan</th>
                                                        <th>Jumlah</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    while ($row = $dataPengambilan->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $row['jenis']=='dop' ? 'DOP' : 'KAS' ?></td>
                                                            <td style="width:30%"><?= date_format(new DateTime($row['tanggal']), 'd F Y') ?></td>
                                                            <td><?= $row['keperluan'] ?></td>
                                                            <td><?= $row['jumlah'] ?></td>
                                                            <td><a href="#" class="text-danger btn-batalkan" data-id=<?= $row['id_pengambilan'] ?> data-keperluan=<?= $row['keperluan'] ?> data-toggle="modal" data-target="#batalkan">Batalkan</a></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="uangDop">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Data Uang DOP</h4><br>
                                    <div class="table-responsive">
                                        <table class="table table-user ">
                                            <thead class="text-center">
                                                <tr>
                                                    <?php
                                                    while ($row = $dop->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <th class="" style=""><?= $row['bulan_tahun'] ?></th>

                                                    <?php } ?>
                                                </tr>
                                            

                                            </thead>
                                            <tbody class="table-bordered" id="table_dop"></tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="uangKas">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Data Uang Kas</h4><br>
                                    <div class="table-responsive">
                                        <table class="table table-user " id="table_id">
                                            <thead class="text-center">
                                                <tr>
                                                    <th class="" rowspan=2 style="min-width:140px;vertical-align : middle;text-align:center;">Nama Mhs</th>
                                                    <?php
                                                    while ($row = $dataBulan->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <th class="" colspan=4 style=""><?= $row['bulan_tahun'] ?></th>

                                                    <?php } ?>
                                                </tr>
                                                <tr>
                                                    <?php
                                                    foreach ($dataMinggu as $result) { ?>
                                                        <th style=""><?= $result['minggu_ke'] ?></th>

                                                    <?php } ?>

                                                </tr>

                                            </thead>
                                            <tbody class="table-bordered" id="table_kas"></tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Histori Pembayaran</h4><br>
                                    <div class="table-responsive">
                                        <table class="table table-stripped" id="table_histori">
                                            <thead>
                                                <tr>
                                                    <th style="width:10%">#</th>
                                                    <th style="width:30%">Tanggal</th>
                                                    <th>Deskripsi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="history_table">

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer"> © 2021 Material Pro Admin by <a href="https://www.wrappixel.com/">wrappixel.com </a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->


    </div>
    </div>
    </div>
    <script>
        get_total();
        get_history();
        get_kas();
        get_total_dop();
        get_dop();

        function get_total() {
            $.ajax({
                type: "GET",
                url: "get_total_kas.php",
                dataType: 'json',
                success: function(data) {
                    $('#tableTotal').html(data);
                }
            });
        }

        function get_history() {
            $.ajax({
                type: "GET",
                url: "get_history.php",
                success: function(data) {
                    $('#history_table').html(data);
                }
            });
        }

        function get_kas() {
            $.ajax({
                type: "GET",
                url: "get_kas.php",
                success: function(data) {
                    $('#table_kas').html(data);
                }
            });
        }

        function get_dop() {
            $.ajax({
                type: "GET",
                url: "get_dop.php",
                success: function(data) {
                    $('#table_dop').html(data);
                }
            });
        }

        function get_total_dop() {
            $.ajax({
                type: "GET",
                url: "get_total_dop.php",
                dataType: 'json',
                success: function(data) {
                    $('#tableTotalDOP').html(data);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {


            $('#table_histori').DataTable({
                scrollY: "400px",
                paging: false,
                scrollCollapse: true,
                ordering: true,
                searching: true,
            });

            $('#table_pengambilan_kas').DataTable({
                scrollY: "400px",
                paging: false,
                scrollCollapse: true,
                ordering: true,
                searching: true,
            });

            $('#table_pengambilan_dop').DataTable({
                scrollY: "100px",
                paging: false,
                scrollCollapse: true,
                ordering: true,
                searching: true,
            });



            $('.btn-batalkan').on('click', function() {
                $('#id_pengambilan').val($(this).attr('data-id'));
                $('#deskripsi-penggapusan').text("Anda Yakin ingin membatalkan pengambilan uang untuk keperluan " + $(this).attr('data-keperluan') + " ? ")
            });
        });
    </script>

    <?php
    require_once('footer.php');
    ?>
    <!-- Modal Ambil Uang KAS -->
    <div class="modal fade" id="ambilKas" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ambil Uang Kas</h5>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="jumlah">Jumlah Uang</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Uang" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Keperluan</label>
                            <textarea name="keperluan" class="form-control" id="keperluan" rows="3" placeholder="Keperluan.." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="ambil_uang_kas" class="btn btn-primary">Ambil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ambil Uang DOP -->
    <div class="modal fade" id="ambilDOP" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ambil Uang DOP</h5>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="jumlah">Jumlah Uang</label>
                            <input type="number" class="form-control" id="jumlah_dop" name="jumlah_dop" placeholder="Jumlah Uang" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Keperluan</label>
                            <textarea name="keperluan_dop" class="form-control" id="keperluan_dop" rows="3" placeholder="Keperluan.." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Tanggal Pengambilan</label>
                            <input type="date" class="form-control" id="tanggal_dop" name="tanggal_dop" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="ambil_uang_dop" class="btn btn-primary">Ambil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Batalkan Pengambilan -->
    <div class="modal fade" id="batalkan" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Batalkan Pengambilan Uang</h5>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input type="hidden" name="id_pengambilan" id="id_pengambilan">
                        <p id="deskripsi-penggapusan"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" name="batalkan_ambil" class="btn btn-primary">Batalkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>