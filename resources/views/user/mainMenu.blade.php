@extends('layouts.app_user')

@section('content')

<div class="page-body p-4 text-dark">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <div  style="font-size: 180%;" >
    <i class="fa fa-home" aria-hidden="true"></i>
    Halaman Utama
  </div>
  <hr>

  <!-- Small card component -->
  <div class="small-cards mt-5 mb-4">




      <div class="row">
        <div class="col-md-2">

        </div>
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
            <!-- Card -->
            <a href="{{ route('user.listSedangDiproses') }}"  >
              <div class="card border-0 rounded-lg">
                  <!-- Card body -->
                  <div class="card-body"  style="border-radius:.5rem;">

                      <div class="d-flex flex-row justify-content-center align-items-center">
                          <!-- Icon -->
                          <div class="small-card-icon">
                              <i class="fa fa-retweet card-icon-bg-primary fa-4x"></i>
                          </div>
                          <!-- Text -->
                          <div class="small-card-text w-100 text-center">
                              <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Sedang Diproses</p>
                              <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanSedangProses}}</h4>
                          </div>

                      </div>

                      <hr>
                      <p class="font-weight-normal m-0 text-primary" style="text-align: right;">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                  </div>
              </div>
            </a>

          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-0 rounded-lg">
                  <!-- Card body -->
                  <a href="{{ route('user.list') }}"  >
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-check  card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Lulus</p>
                                <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanLulus}}</h4>
                            </div>
                        </div>

                        <hr>
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                    </div>
                  </a>

              </div>
          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-0 rounded-lg">
                  <!-- Card body -->
                  <a href="{{ route('user.listGagal') }}"  >
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-times-circle card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Gagal</p>
                                <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanGagal}}</h4>
                            </div>
                        </div>

                        <hr>
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                    </div>
                  </a>

              </div>
          </div>




      </div>

      <div class="" style="padding: 10px;"></div>


      <div class="row">
        <div class="col-md-3">

        </div>
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md- col-lg-3 mt-3 mt-lg-0">
              <!-- Card -->
              <a href="{{ route('user.listTidakBerkaitan') }}"  >
                <div class="card border-0 rounded-lg">
                    <!-- Card body -->
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-question-circle card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Tidak Berkaitan</p>
                                <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanTidakBerkaitan}}</h4>
                            </div>
                        </div>

                        <hr>
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                    </div>
                </div>
              </a>

          </div>

          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
              <!-- Card -->
              <div class="card border-0 rounded-lg">
                  <!-- Card body -->
                  <a href="{{ route('user.listBatal') }}"  >
                    <div class="card-body" style="border-radius:.5rem;">

                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <!-- Icon -->
                            <div class="small-card-icon">
                                <i class="fa fa-trash  card-icon-bg-primary fa-4x"></i>
                            </div>
                            <!-- Text -->
                            <div class="small-card-text w-100 text-center">
                                <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Batal</p>
                                <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanBatal}}</h4>
                            </div>
                        </div>

                        <hr>
                        <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                    </div>
                  </a>

              </div>
          </div>




      </div>

      <div class="row">
        <!-- Col md 4 -->
        <div class="col-md-2">

        </div>


                       <div class="col-md-9 mt-4">

                          <!--  Custom content card -->
                          <div class="card rounded-lg">
                              <div class="card-body">
                                  <div class="card-title" style="text-align:center;">Makluman</div>
                                  <!-- List -->


                                  <div class="list-group" style="overflow:auto;height:500px;width:100%;border:1px solid #ccc">
                                    @foreach($pengumuman as $data)
                                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                          <div class="d-flex w-100 justify-content-between">
                                          <h6 class="mb-1" style="font-size: 20px; font-weight: bold;">{{$data->tajuk}}</h6>
                                          <small class="text-muted"></small>
                                          </div>
                                          <p class="my-1" style="font-size: 15px; text-align:justify;">{{$data->content}}</p>
                                      </a>

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
