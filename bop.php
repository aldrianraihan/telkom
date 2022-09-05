<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/telkom-icon.png" />

    <title>BOP Tracker</title>

    <!-- icon & datatables-->
    <link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- custom font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- own css -->
    <link href="css/own_style.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['Jan', 1000, 400, 200],
          ['Feb', 1170, 460, 250],
          ['Marc', 660, 1120, 300],
          ['April', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script> -->

</head>

<body id="page-top" class="open-ubuntu-400">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-own-red sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text ml-n2">
                    <img src="img/Telkom-logo-reverse.png" width="100%">
                </div>
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-anchor"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Budgeting -->
            <li class="nav-item">
                <a class="nav-link" href="budgeting.php">
                    <i class="fas fa-fw fa-coins"></i>
                    <span>Budgeting</span></a>
            </li>

            <!-- Nav Item - BOP Tracker -->
            <li class="nav-item active">
                <a class="nav-link" href="bop.php">
                    <i class="fas fa-fw fa-location-arrow"></i>
                    <span>BOP Tracker</span></a>
            </li>

            <!-- Nav Item - Document Tracker -->
            <li class="nav-item">
                <a class="nav-link" href="doctrack.php">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Document Tracker</span></a>
            </li>
            <!-- Nav Item - Generate SK BCDD -->
            <li class="nav-item">
                <a class="nav-link" href="generate.php">
                    <i class="fas fa-fw fa-paper-plane"></i>
                    <span>Generate SK BCDD</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!--Topbar Search-->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-own-red" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!--Topbar Navbar-->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-danger" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nadira Mumtaz</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">BOP Tracker</h1>
                        <form method="get">
                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>Choose...</option>
                                    <option value="1">2022</option>
                                    <option value="2">2021</option>
                                    <option value="3">2020</option>
                                    <option value="3">2019</option>
                                </select>
                                <!-- <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                          </div> -->
                            </div>
                        </form>
                    </div>

                    <div class="d-sm-flex align-items-right justify-content-end mb-4">
                        <button type="button" class="btn btn-own-red" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Import Kontrak
                        </button>
                    </div>

                    <!-- Content Row -->
                    <div class="row justify-content-md-center">

                        <!-- Total semua kontrak -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Nilai Kontrak</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 2.000.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total BAST -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total BAST</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 2.000.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Sisa Pekerjaan -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Sisa Pekerjaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.1.000.000.000</div>
                                            <div class="row no-gutters align-items-center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">

                        <!-- Kontrak Aktif -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Kontrak Aktif</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kontrak Close -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Kontrak Close</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">04</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Capex DID -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total Capex DID</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 1.000.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <!-- <div id="columnchart_material" style="width: 800px; height: 500px;"></div> -->

                <!-- Begin Bar Chart -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Capex DID</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="myBarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin DataTables Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Recent Kontrak</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered fs-smaller" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Nomor Kontrak</th>
                                            <th>Nama Mitra</th>
                                            <th>EDC</th>
                                            <th>TOC</th>
                                            <th>Nilai Kontrak</th>
                                            <th>BAST</th>
                                            <th>Sisa Pekerjaan</th>
                                            <th>Status Pekerjaan</th>
                                            <th>Status Kontrak</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-red" data-toggle="modal" data-target="#nokontrak1">NPX400552022</button>
                                            </td>
                                            <td>PT Telkom Indonesia</td>
                                            <td>02 Jan 2021</td>
                                            <td>30 Mei 2023</td>
                                            <td>Rp. 4.000.000.000</td>
                                            <td>Rp. 200.000.000</td>
                                            <td>Rp. 1.200.000.000</td>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-red" data-bs-toggle="modal" data-bs-target="#exampleModalLg">BAST</button></td>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-red" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Active</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="nokontrak1" tabindex="-1" aria-labelledby="nokontrak1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="nokontrak1">Detail Sheet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-sm-5 br-own-gray mx-2">
                                        <div class="row justify-content-between">
                                            <div class="col-sm-10">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">No. Kontrak</div>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-danger btn-sm">Active</button>
                                            </div>
                                        </div>

                                        <!-- row 2 -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="h6 xs-0 font-weight-bold text-danger-800">
                                                    NPX/40/03457934855/2022</div>
                                            </div>
                                        </div>

                                        <!-- row 3 -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">PT. Telkom Indonesia
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <!-- row 4 -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">EDC</div>
                                                <div class="h6 xs-0 font-weight-bold text-danger-800">2 Januari 2022
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">TOC</div>
                                                <div class="h6 xs-0 font-weight-bold text-danger-800">30 Mei 2022</div>
                                            </div>
                                            <div class="col">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">Status Pekerjaan
                                                </div>
                                                <button type="button" class="btn btn-danger btn-sm btn-block">BAST</button>
                                            </div>
                                            <hr />
                                        </div>

                                        <!-- row 5 -->
                                        <div class="row mt-4">
                                            <div class="col-sm-12">
                                                <div class="h6 xs-0 font-weight-bold text-gray-800">Detail Kerjasama
                                                </div>
                                                <div class="h5 xs-0 font-weight-bold text-gray-800">
                                                    NPX/40/03457934855/2022</div>
                                                <hr />
                                            </div>
                                        </div>

                                        <!-- row 6 -->
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <div class="card border-left-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                                    Nilai Kontrak</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 4.000.000.000
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <div class="card border-left-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                                    BAST</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 200.000.000
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-2">
                                                <div class="card border-left-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                                    Sisa Pekerjaan</div>
                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 1.200.000.000
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mx-2">
                                        <div class="row br-own-gray">
                                            <!-- Donut Chart -->
                                            <div class="col-sm-12">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Progress Mile</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        <div class="chart-pie pt-4">
                                                            <canvas id="myPieChart"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-relative">
                        <div class="copyright text-center my-relative">
                            <span>Copyright &copy; Telkom Indonesia 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="assets/jquery/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="assets/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

        <!-- Page level plugins -->
        <script src="assets/chart.js/Chart.min.js"></script>

        <!-- Bar chart script -->
        <script src="js/demo/chart-bar-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>

</html>