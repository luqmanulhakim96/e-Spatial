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
                                            <p class="font-weight-normal m-0 text-primary">Permohonan Baru</p>
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
                                            <p class="font-weight-normal m-0 text-primary">Permohonan Lulus</p>
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
                                            <p class="font-weight-normal m-0 text-primary">Jumlah Pengguna</p>
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
                                            <p class="font-weight-normal m-0 text-primary">Permohonan Keseluruhan</p>
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
                                <div class="card-title">Jumlah Permohonan (6 Bulan Lepas)</div>
                                <!-- Chart -->
                                <!-- <div id="echartBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div> -->
                                <div id="curve_chart" style="width: 100%; height: 400px"></div>
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
                                <div class="card-title">Status Permohonan Keseluruhan</div>
                                <!-- Chart -->
                                <div id="chart_status_div"></div>

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
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="card-title m-0 p-1">Jumlah Data Yang Dipohon Mengikut Negeri</div>
                                <!-- Chart -->
                                <div id="chart_div" style="width: 100%; height: 400px;"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Jumlah Pendapatan Mengikut Bulan</div>
                                <!-- Chart -->
                                <div id="columnchart_values" style="width: 100%; height: 400px;"></div>
                            </div>

                        </div>

                    </div>

                    <!-- Col 12 -->
                    <!-- <div class="col-12 mt-4">

                        <div class="card mb-4">

                            <div class="card-body p-0">

                                <div class="card-title m-0 p-3">Jumlah Permohonan</div>

                                <div id="echart3" style="height: 360px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div> -->

                </div>
            </div>
        </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawPieChart);
      google.charts.setOnLoadCallback(drawChartLine);
      google.charts.setOnLoadCallback(drawPieChartStatusPermohonan);
      google.charts.setOnLoadCallback(drawChartBar);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawPieChart() {

        //fetch data from db
        var sites= @json($dataDipohonMengikutNegeri);

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');

        if (sites == null) {
          data.addRows([
            ['Tiada data', 1]
          ]);
        }else{
          //insert data form array into row
          for (var i = 0; i < sites.length; i++)
          {
             data.addRows([
                 [sites[i]['negeri'], sites[i]['count']],
             ])
          }
        }



        // Set chart options
        var options = {'title':'',
                       'width':500,
                       'height':400,
                       colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      function drawPieChartStatusPermohonan() {

        //fetch data from db
        var sites= @json($dataStatusPermohonan);
        //console.log(sites);

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');

        if (sites == null) {
          data.addRows([
            ['Tiada data', 1]
          ]);
        }else{
          //insert data form array into row
          for (var i = 0; i < sites.length; i++)
          {
             data.addRows([
                 [sites[i]['status'], sites[i]['count_status']],
             ])
          }
        }



        // Set chart options
        var options = {'title':'',
                       'width':500,
                       'height':400,
                       colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_status_div'));
        chart.draw(data, options);
      }


      function drawChartLine() {
        var sites= @json($dataDipohonMengikutBulan);

        if(sites == null || sites == 0){
          var data = google.visualization.arrayToDataTable([
            ['Bulan', 'Data Dipohon'],
            ['Tiada Data',  0],
          ]);
        }else {
          var data = google.visualization.arrayToDataTable([
            ['Bulan', 'Data Dipohon'],
            ['',0],
          ]);
          for (var i = 0; i < sites.length; i++) {
            if(sites[i]['bulan'] == 1){
              data.addRows([
                [ 'Januari',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 2) {
              data.addRows([
                [ 'Februari',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 3) {
              data.addRows([
                [ 'Mac',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 4) {
              data.addRows([
                [ 'April',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 5) {
              data.addRows([
                [ 'Mei',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 6) {
              data.addRows([
                [ 'Jun',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 7) {
              data.addRows([
                [ 'Julai',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 1) {
              data.addRows([
                [ 'Ogos',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 8) {
              data.addRows([
                [ 'September',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 9) {
              data.addRows([
                [ 'Oktober',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 10) {
              data.addRows([
                [ 'November',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 11) {
              data.addRows([
                [ 'Desember',sites[i]['count_bulan']],
              ]);
            }
          }
        }

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      function drawChartBar() {
        var sites= @json($dataJumlahPendapatan);

        console.log(sites);

      if(sites == 0 || sites == null){
        var data = google.visualization.arrayToDataTable([
          ["Bulan", "Jumlah" ],
          ["Tiada Data", 0.00]
        ]);
      }else {
        var data = google.visualization.arrayToDataTable([
          ["Bulan", "Jumlah" ],
          ["", 0.00]
        ]);

        // data.addRows([
        //   ["Januari", parseFloat(sites[0]['total'])]
        // ]);

        for (var i = 0; i < sites.length; i++) {
          console.log(i);


          if(sites[i]['bulan'] == 1){
            data.addRows([
              [ 'Januari',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 2) {
            data.addRows([
              [ 'Februari',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 3) {
            data.addRows([
              [ 'Mac',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 4) {
            data.addRows([
              [ 'April',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 5) {
            data.addRows([
              [ 'Mei',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 6) {
            data.addRows([
              [ 'Jun',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 7) {
            data.addRows([
              [ 'Julai',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 1) {
            data.addRows([
              [ 'Ogos',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 8) {
            data.addRows([
              [ 'September',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 9) {
            data.addRows([
              [ 'Oktober',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 10) {
            data.addRows([
              [ 'November',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 11) {
            data.addRows([
              [ 'Desember',parseFloat(sites[i]['total'])],
            ]);
          }
        }
      }

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1]);

      var options = {
        title: "",
        width: 500,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
        colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
    </script>

@endsection
