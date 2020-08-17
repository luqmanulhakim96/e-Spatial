@extends('layouts.app_user')

@section('content')

<div class="page-body p-4 text-dark">
  <!-- Small card component -->
  <div class="small-cards mt-5 mb-4">
      <div class="row">
          <!-- Col sm 6, col md 6, col lg 3 -->
          <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
              <!-- Card -->
              <a href="{{ route('user.list') }}"  >
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
                                <p class="font-weight-normal m-0 text-primary">Permohonan Sedang Diproses</p>
                                <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanSedangProses}}</h4>
                            </div>
                        </div>

                    </div>
                </div>
              </a>

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
                              <p class="font-weight-normal m-0 text-primary">Permohonan Gagal</p>
                              <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanGagal}}</h4>
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
