@extends('layouts.app_user')

@section('content')
<style>
a{
  font-size: 110% !important;
}
/* unvisited link */
a:link {
  color: black !important;
}

/* visited link */
a:visited {
  color: black !important;
}

/* mouse over link */
a:hover {
  color: red !important;
}

/* selected link */
a:active {
  color: black !important;

}
</style>

<div class="page-body p-4 text-dark">
  <!-- Theme changer -->
  <div class="theme-option p-3 border-1" style="border: 1px solid;border-color: #003e61 !important;">
      <div class="theme-pck">
          <i class="fa fa-globe" aria-hidden="true" style="font-size: 180% !important;"></i>
      </div>
      <p style="font-size: 110%;">Pilih Bahasa | Choose Language</p>
      <div class="row">
        <div class="col-md">
          <div class="btn-group">
              <button class="btn btn-primary">Bahasa Melayu</button>
              <!-- <a href="{{ route('login') }}" class="btn btn-outline-primary">Bahasa Melayu</a> -->
              <!-- <button class="btn btn-primary">English</button> -->
              <a href="{{ route('user.mainMenu_eng') }}" class="btn btn-outline-primary">English</a>
          </div>
        </div>
      </div>
      <!-- <div class="side-nav-themes d-flex flex-row">
          <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
          <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
      </div> -->
  </div>

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <div  style="font-size: 180%;" >
    <i class="fa fa-home" aria-hidden="true"></i>
    Halaman Utama
  </div>
  <hr style="background-color: black !important;">
  <div style="padding:5px;"></div>
  <!-- Small card component -->
  <div class="small-cards  mb-4">




      <div class="row">
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
            <!-- Card -->
              <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                  <!-- Card body -->
                  <div class="card-body"  style="border-radius:.5rem;">

                      <div class="d-flex flex-row justify-content-center align-items-center">
                          <!-- Icon -->
                          <div class="small-card-icon">
                              <i class="fa fa-retweet card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                          </div>
                          <!-- Text -->
                          <div class="small-card-text w-100 text-center">
                              <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Permohonan <br> Sedang Diproses</p>
                              <h4 class="font-weight-normal m-0 text-primary" style="color: #003473 !important;">{{$countPermohonanSedangProses}}</h4>
                          </div>

                      </div>

                      <hr style="background-color: #003473 !important;">

                      <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                        <a href="{{ route('user.listSedangDiproses') }}"  >
                        Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                      </a>

                      </p>

                  </div>
              </div>

          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-1 rounded-lg" style="border-color: #28a745 !important;">
                  <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-check  card-icon-bg-primary fa-4x" style="color: #28a745 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #28a745 !important;">Permohonan <br> Lulus</p>
                                <h4 class="font-weight-normal m-0 text-primary" style="color: #28a745 !important;">{{$countPermohonanLulus}}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #28a745 !important;">
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right ; color: #28a745 !important;">
                          <a href="{{ route('user.list') }}" >

                          Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>

              </div>
          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-1 rounded-lg" style="border-color: #D25F00 !important;">
                  <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-times-circle card-icon-bg-primary fa-4x" style="color: #D25F00 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #D25F00 !important;">Permohonan<br> Gagal</p>
                                <h4 class="font-weight-normal m-0 text-primary" style="color: #D25F00 !important;">{{$countPermohonanGagal}}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #D25F00 !important;">
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #D25F00 !important;">
                          <a href="{{ route('user.listGagal') }}"  >

                          Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>

              </div>
          </div>






      </div>

      <div class="" style="padding: 10px;"></div>


      <div class="row">

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md- col-lg-4 mt-3 mt-lg-0">
              <!-- Card -->
                <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                    <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-question-circle card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Permohonan <br> Tidak Berkaitan</p>
                                <h4 class="font-weight-normal m-0 text-primary" style="color: #003473 !important;">{{$countPermohonanTidakBerkaitan}}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #003473 !important;">
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                          <a href="{{ route('user.listTidakBerkaitan') }}"  >

                          Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>
                </div>

          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-1 rounded-lg" style="border-color: #28a745 !important;">
                  <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-trash  card-icon-bg-primary fa-4x" style="color: #28a745 !important;"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #28a745 !important;">Permohonan <br> Batal</p>
                                <h4 class="font-weight-normal m-0 text-primary" style="color: #28a745 !important;">{{$countPermohonanBatal}}</h4>
                            </div>
                        </div>

                        <hr style="background-color: #28a745 !important;">
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #28a745 !important;">
                          <a href="{{ route('user.listBatal') }}"  >

                          Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                        </a>

                        </p>

                    </div>

              </div>
          </div>




      </div>

      <div style="padding: 10px;">

      </div>

      <hr style="background-color: black;">

      <div style="padding: 10px;"></div>


      <div class="row">
        <div class="col-md-2">

        </div>
         <div class="col-md-8">

            <!--  Custom content card -->
            <div class="card rounded-lg" style="border-color: #003473 !important;">
              <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Makluman</div>

                <div class="card-body">
                    <!-- List -->


                    <div class="list-group" style="overflow:auto;height:500px;width:100%;border:1px solid #ccc">
                      @foreach($pengumuman as $data)
                        <!-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start"> -->
                        <div class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                          <h6 class="mb-1" style="font-size: 20px; font-weight: bold;">{{$data->tajuk}}</h6>
                          <small class="text-muted" style="font-size: 110%;">{{ Carbon\Carbon::parse($data->updated_at)->format('d-m-Y')  }}</small>
                          </div>
                          <p class="my-1" style="font-size: 15px; text-align:justify;">{{$data->content}}</p>
                        </div>

                        <!-- </a> -->

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
      </div>


  </div>



                <!-- Small card component -->
                <!-- <div class="card rounded-lg">
                <div class="card-body">
                      <div class="card-titleuser"><b>Selamat Datang Ke Portal Perhutanan Semenanjung Malaysia</b></div>
                </div>
                </div><br><br> -->


                <!-- <div class="card rounded-lg">
            <div class="card-body">
                      <div class="card-title"><b>Tatacara Penggunaan Untuk Mengisi Permohonan.</b></div>
                      <div class="card-title">1. Mendaftar masuk di Portal e-Spatial.</div>
                      <div class="card-title">2. Klik Permohonan Baru untuk memohon data hutan.</div>
                      <div class="card-title">3. Masukkan jenis data, jenis hutan, negeri, tahun dan memuatnaik lampiran yang berkaitan.</div>
                      <div class="card-title">4. Klik Mohon untuk menghantar kepada JPSM untuk diproses.</div>
                </div>
            </div><br><br> -->



            <!-- <div class="card rounded-lg">
                  <div class="card-body">


                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                        <thead>
                            <tr>

                              <th class="all">JENIS DOKUMEN</th>
                              <th class="all">JENIS DATA</th>
                              <th class="all">NEGERI</th>
                              <th class="all">TAHUN</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($list as $data)
                          <tr>

                            <td>{{ $data->jenis_dokumen  }}</td>
                            <td>{{ $data->jenis_data  }}</td>
                            <td>{{ $data->negeri  }}</td>
                            <td>{{ $data->tahun  }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                  </div>
                </div> -->






                </div>

    </div>



@endsection
