<?php include('header.php') ?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Preparing', 'Delivering', 'MOS', 'Testcomm', 'UT', 'BAST'],
            ['Jan', 1000, 400, 200, 1000, 400, 200],
            ['Feb', 1170, 460, 250, 1170, 460, 250],
            ['Mar', 660, 1120, 300, 660, 1120, 300],

            ['Apr', 1000, 400, 200, 1000, 400, 200],
            ['Mei', 1170, 460, 250, 1170, 460, 250],
            ['Jun', 660, 1120, 300, 660, 1120, 300],
            ['Jul', 1000, 400, 200, 1000, 400, 200],
            ['Aug', 1170, 460, 250, 1170, 460, 250],
            ['Sep', 660, 1120, 300, 660, 1120, 300],
            ['Oct', 1000, 400, 200, 1000, 400, 200],
            ['Nov', 1170, 460, 250, 1170, 460, 250],
            ['Des', 660, 1120, 300, 660, 1120, 300]
        ]);

        var options = {
            chart: {}
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>

</head>

<body id="page-top" class="open-ubuntu-400">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('topbar.php') ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Report</h1>
                        <form method="get">
                            <div class="input-group">
                                <select class="custom-select">
                                    <option selected>Choose...</option>
                                    <option value="1">2022</option>
                                    <option value="2">2021</option>
                                    <option value="3">2020</option>
                                    <option value="3">2019</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-own-red" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-sm-flex align-items-right justify-content-end mb-4">
                        <a href="#" class="br-10px btn btn-sm btn-own-red">Import Kontrak</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Total Nilai Kontrak</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h3 text-own-black open-ubuntu-700">Rp. 53.000.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Total BAST</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h3 text-own-black open-ubuntu-700">Rp. 2.000.000.000</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-gray">dari</div>
                                        </div>
                                        <div class="col">
                                            <div class="fs-smaller text-own-gray float-right">progress</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Rp. 53.000.000.000</div>
                                        </div>
                                        <div class="col">
                                            <div class="fs-smaller text-own-red float-right mr-4">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Total Sisa Pekerjaan</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h3 text-own-black open-ubuntu-700">Rp. 1.000.000.000</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-gray">dari</div>
                                        </div>
                                        <div class="col">
                                            <div class="fs-smaller text-own-gray float-right">progress</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Rp. 53.000.000.000</div>
                                        </div>
                                        <div class="col">
                                            <div class="fs-smaller text-own-red float-right mr-4">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Kontrak Aktif</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h2 text-own-black open-ubuntu-700">20</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="fs-smaller text-own-red">Detil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Kontrak Selesai</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h2 text-own-black open-ubuntu-700">4</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="fs-smaller text-own-red">Detil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card-group">
                            <div class="card shadow br-10px br-own-gray">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="fs-smaller text-own-red">Total Progress</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="h3 text-own-black open-ubuntu-700">Rp. 1.000.000.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Progress</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <div id="columnchart_material" style="width: 100%; height:100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin DataTables Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-own-red">Recent Kontrak</h6>
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
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-pink btn-block rounded-pill fs-smaller" data-toggle="modal" data-target="#nokontrak1">NPX/40/03457934855/2022</button>
                                            </td>
                                            <td>PT Telkom Indonesia</td>
                                            <td>02 Jan 2021</td>
                                            <td>30 Mei 2023</td>
                                            <td>4.000.000.000</td>
                                            <td>200.000.000</td>
                                            <td>1.200.000.000</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-own-light-pink btn-block rounded-pill fs-smaller" data-bs-toggle="modal">BAST</button>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-red btn-block rounded-pill fs-smaller" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Active</button></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-pink btn-block rounded-pill fs-smaller" data-toggle="modal" data-target="#nokontrak1">NPX/40/03457934855/2022</button>
                                            </td>
                                            <td>PT Telkom Indonesia</td>
                                            <td>02 Jan 2021</td>
                                            <td>30 Mei 2023</td>
                                            <td>2.500.000.000</td>
                                            <td>200.000.000</td>
                                            <td>1.200.000.000</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-sm btn-own-light-pink btn-block rounded-pill fs-smaller" data-bs-toggle="modal">UT</button>
                                            </td>
                                            <td class="text-center"><button type="button" class="btn btn-sm btn-own-red btn-block rounded-pill fs-smaller" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Close</button></td>
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

        <?php include('footer.php') ?>

</body>

</html>