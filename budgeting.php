<?php include('header.php') ?>

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
                        <h1 class="h3 mb-0 text-gray-800">Budgeting Plan</h1>
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
                        <button type="button" class="btn btn-sm btn-own-red" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Import Kontrak
                        </button>
                    </div>

                    <div class="row mb-4">
                        <!-- Donut Chart -->
                        <div class="col-sm-7">
                            <div class="card shadow br-own-gray">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="text-own-black open-ubuntu-700 h5">Report</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="chart-pie">
                                            <canvas class="donut-chart-budget" id="myPieChart1"></canvas>
                                        </div>
                                        <div class="col">
                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <div class="sq-red"></div>
                                                </div>
                                                <div class="col-sm-10 mt-n1 ml-n2">
                                                    <div class="fs-smaller font-weight-bolder text-own-red">Target BAST</div>
                                                    <div class="text-own-black open-ubuntu-700 h5">Rp.1.000.000.000</div>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-sm-2">
                                                    <div class="sq-grey"></div>
                                                </div>
                                                <div class="col-sm-10 mt-n1 ml-n2">
                                                    <div class="fs-smaller font-weight-bolder text-own-red">Actual BAST</div>
                                                    <div class="text-own-black open-ubuntu-700 h5">Rp.500.000.000</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow br-own-gray">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h6 class="font-weight-bold text-own-red">Total Sisa Pekerjaan</h6>
                                                    <h6 class="text-own-black open-ubuntu-700 h5">Rp. 1.000.000.000</h6>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <p class="text-own-black mb-n1">dari</p>
                                                    <p class="text-own-red">Rp. 53.000.000.000</p>
                                                </div>
                                                <div class="col">
                                                    <p class="text-own-black mb-n1">progress</p>
                                                    <p class="text-own-red">75%</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <div class="card shadow br-own-gray">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h6 class="font-weight-bold text-own-red">BAST Selesai</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-1">
                                                            <div class="sq-red"></div>
                                                        </div>
                                                        <div class="col-sm-9 mt-n1">
                                                            <div class="h5 text-own-black">200</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card shadow br-own-gray">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h6 class="font-weight-bold text-own-red">BAST In Progress</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-1">
                                                            <div class="sq-pink"></div>
                                                        </div>
                                                        <div class="col-sm-9 mt-n1">
                                                            <div class="h5 text-own-black">200</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin DataTables Content -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-own-color">Recent Kontrak</h6>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered fs-smaller" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nomor Kontrak</th>
                                        <th>Bulan</th>
                                        <th>Target BAST</th>
                                        <th>Actual BAST</th>
                                        <th>Sisa Pekerjaan</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-own-pink btn-block rounded-pill fs-smaller font-weight-bold" data-toggle="modal" data-target="#nokontrak1">NPX/40/03457934855/2022</button>
                                        </td>
                                        <td class="text-center pt-3">PT Telkom Indonesia</td>
                                        <td class="text-center pt-3">Januari</td>
                                        <td class="text-center pt-3">4.000.000.000</td>
                                        <td class="text-center pt-3">1.000.000.000</td>
                                        <td class="text-center pt-3">
                                            <div class="progress">
                                                <div class="progress-bar bg-own-red" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-own-light-pink btn-block rounded-pill fs-smaller" data-bs-toggle="modal">In Progress</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-own-pink btn-block rounded-pill fs-smaller font-weight-bold" data-toggle="modal" data-target="#nokontrak1">NPX/40/03457934855/2022</button>
                                        </td>
                                        <td class="text-center pt-3">PT Telkom Indonesia</td>
                                        <td class="text-center pt-3">Januari</td>
                                        <td class="text-center pt-3">4.000.000.000</td>
                                        <td class="text-center pt-3">1.000.000.000</td>
                                        <td class="text-center pt-3">
                                            <div class="progress">
                                                <div class="progress-bar bg-own-red" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-own-red btn-block rounded-pill fs-smaller" data-bs-toggle="modal">Done</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End of DataTables Content -->

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