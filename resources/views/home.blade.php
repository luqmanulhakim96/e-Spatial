@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->
                <div class="small-cards mt-5 mb-4">
                    <div class="row">
                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-folder-open card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Permohonan Baru</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanBaru}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-user-check  card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Permohonan Lulus</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanLulus}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-users card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Jumlah Pengguna</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPengguna}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-file card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Permohonan Keseluruhan</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanKeseluruhan}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Data chart component -->
                <div class="row mb-4">
                    <!-- Col lg 8, col md 12 -->
                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Jumlah Permohonan Mengikut Bulan</div>
                                <!-- Chart -->
                                <div id="echartBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>
                    <!-- Col lg 4, col md 12 -->
                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Permohonan</div>
                                <!-- Chart -->
                                <div id="echartPie" style="width:100%;height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Col lg 6, col md 12 -->
                       <!-- col md 6 -->
                       <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Six Month Sales VS Revenue Card -->
                        <div class="card mb4">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="card-title m-0 p-1">Jumlah </div>
                                <!-- Chart -->
                                <canvas id="echart4" height="300px" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></canvas>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Permohonan</div>
                                <!-- Chart -->
                                <div id="donutChart" style="width: 100%;height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                    <!-- Col 12 -->
                    <div class="col-12 mt-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Card title -->
                                <div class="card-title m-0 p-3">Jumlah Permohonan</div>
                                <!-- Chart -->
                                <div id="echart3" style="height: 360px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>
                    <div id="chart_div"></div>

                </div>
            </div>
        </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'Jumlah Data Yang Dipohon Mengikut Negeri',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
@endsection
