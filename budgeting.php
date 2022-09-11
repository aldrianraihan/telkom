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
                        <h1 class="h3 mb-0 ">Budgeting Plan</h1>
                        <form method="get">
                            <div class="input-group">
                                <select class="custom-select">
                                    <option selected>Year</option>
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
                        <button type="button" class="br-10px btn btn-sm btn-own-red" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Import Kontrak
                        </button>
                    </div>

                    <div class="row mb-4">
                        <!-- Donut Chart -->
                        <div class="col-sm-7">
                            <div class="card shadow br-own-gray">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-2">
                                            <h6 class="text-own-red open-ubuntu-700 h5">Report</h6>
                                        </div>
                                        <div class="col-sm-3">
                                            <form method="get">
                                                <div class="input-group">
                                                    <select class="custom-select">
                                                        <option selected>Month</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Febuari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-own-red" type="submit">
                                                            <i class="fas fa-search fa-sm"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="chart-pie">
                                            <canvas class="donut-chart-budget" id="pieChartReport"></canvas>
                                        </div>
                                        <div class="col mt-5">
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
                                                            <div class="row justify-content-between">
                                                                <div class="col-sm-6 float-left">
                                                                    <div class="h5 text-own-black open-ubuntu-700">200</div>
                                                                </div>
                                                                <div class="col-sm-6 text-right">
                                                                    <div class="px-n2">
                                                                        <a href="#" class="fs-smaller text-own-red open-ubuntu-700">Detil</a>
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
                                                            <div class="row justify-content-between">
                                                                <div class="col-sm-6 float-left">
                                                                    <div class="h5 text-own-black open-ubuntu-700">200</div>
                                                                </div>
                                                                <div class="col-sm-6 text-right">
                                                                    <div class="px-n2">
                                                                        <a href="#" class="fs-smaller text-own-red open-ubuntu-700">Detil</a>
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
                                <h5 class="modal-title text-own-black" id="nokontrak1">Detail Sheet</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-sm-5 br-own-gray mx-2">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="text-own-black open-ubuntu-400 fs-smaller">No. Kontrak</div>
                                            </div>
                                        </div>

                                        <!-- row 2 -->
                                        <div class="row mt-2">
                                            <div class="col-sm-12">
                                                <div class="btn btn-sm btn-own-pink rounded-pill fs-medium font-weight-bold">NPX/40/03457934855/2022</div>
                                            </div>
                                        </div>

                                        <!-- row 3 -->
                                        <div class="row mt-2">
                                            <div class="col-sm-12">
                                                <div class="h6 text-own-black">PT. Telkom Indonesia
                                                </div>
                                                <hr />
                                            </div>
                                        </div>

                                        <!-- row 4 -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="fs-smaller text-own-black">EDC</div>
                                                <div class="text-own-black mt-2">2 Januari 2022</div>
                                            </div>
                                            <div class="col">
                                                <div class="fs-smaller text-own-black">TOC</div>
                                                <div class="text-own-black mt-2">30 Mei 2022</div>
                                            </div>
                                            <div class="col">
                                                <div class="fs-smaller text-own-black">Status</div>
                                                <div class="btn btn-own-light-pink">In progress</div>
                                            </div>
                                            <hr />
                                        </div>

                                        <!-- row 5 -->
                                        <div class="row mt-4">
                                            <div class="col-sm-12">
                                                <div class="fs-smaller text-own-black">Detail Kerjasama</div>
                                                <div class="text-own-black mt-2">NPX/40/03457934855/2022</div>
                                                <br><br><br><br><br>
                                                <hr />
                                            </div>
                                        </div>

                                        <!-- row 6 -->
                                        <div class="row">
                                            <div class="col-sm-12 mb-3">
                                                <div class="bg-own-gray br-10px pl-3 py-3">
                                                    <div class="text-own-red fs-smaller">
                                                        Target BAST
                                                    </div>
                                                    <div class="text-own-black fs-medium">
                                                        Rp. 4.000.000.000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-3">
                                                <div class="bg-own-gray br-10px pl-3 py-3">
                                                    <div class="text-own-red fs-smaller">
                                                        Actual BAST
                                                    </div>
                                                    <div class="text-own-black fs-medium">
                                                        Rp. 200.000.000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-3">
                                                <div class="bg-own-gray br-10px pl-3 py-3">
                                                    <div class="text-own-red fs-smaller">
                                                        Sisa Pekerjaan
                                                    </div>
                                                    <div class="text-own-black fs-medium">
                                                        Rp. 1.200.000.000
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mx-2">
                                        <div class="row br-own-gray">

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

        <script>
            // Pie Chart Budgeting
            var ctx = document.getElementById("pieChartReport");
            var myPieChart1 = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [25, 75],
                        backgroundColor: ['#D9D9D9', '#E71618'],
                        hoverBackgroundColor: ['#D9D9D9', '#E71618'],
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 100,
                },
            });
        </script>

</body>

</html>