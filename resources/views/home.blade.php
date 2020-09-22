@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <div class="page-body p-4 text-dark">
              <div  style="font-size: 180%;" >
                <i class="fa fa-home" aria-hidden="true"></i>
                Dashboard
              </div>
              <hr>

              <div style="padding:5px;"></div>

              @if(Auth::user()->role == 0)
              <!-- Small card component -->
              <div class="small-cards mt-5 mb-4">




                  <div class="row">
                    <!-- Col sm 6, col md 6, col lg 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                      <!-- Card -->
                      <a href="{{route('permohonan.listBaru')}}"  >
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body"  style="border-radius:.5rem;">

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <!-- Icon -->
                                    <div class="small-card-icon">
                                        <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x"></i>
                                    </div>
                                    <!-- Text -->
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Baru</p>
                                        <h4 class="font-weight-normal m-0 text-primary">
                                          @if(Auth::user()->role == 0)
                                          {{$countPermohonanBaruPS}}
                                          @elseif(Auth::user()->role == 1)
                                          {{$countPermohonanBaruP1}}
                                          @elseif(Auth::user()->role == 2)
                                          {{$countPermohonanBaruP2}}
                                          @elseif(Auth::user()->role == 3)
                                          {{$countPermohonanBaruKP}}
                                          @endif
                                        </h4>
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
                        <a href="{{route('permohonan.listSedangDiproses')}}"  >
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
                                          <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanSedangDiproses}}</h4>
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
                              <a href="{{route('permohonan.list')}}"  >
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
                              <a href="{{route('permohonan.listGagal')}}"  >
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
                    <div class="col-md-1">

                    </div>



                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md- col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                          <a href="{{route('permohonan.listTidakBerkaitan')}}"  >
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
                              <a href="{{route('permohonan.listBatal')}}"  >
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

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md- col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                          <a href="{{route('permohonan.listDalaman')}}"  >
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-users card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Dalaman</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPermohonanDalaman}}</h4>
                                        </div>
                                    </div>

                                    <hr>
                                    <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                                </div>
                            </div>
                          </a>

                      </div>




                  </div>

              </div>




                <div  style="font-size: 180%;" >
                  <i class="fa fa-area-chart" aria-hidden="true"></i>
                  Laporan
                </div>
                <hr>

                <!-- Small card component -->
                <div class="small-cards mb-4">
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

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-database  card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary">Jumlah Data Geospatial</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countSenaraiHarga}}</h4>
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
                                            <i class="fa fa-user-circle-o card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary">Jumlah Pengguna Biasa</p>
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
                                            <i class="fa fa-users card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary">Jumlah Pengguna (Admin)</p>
                                            <h4 class="font-weight-normal m-0 text-primary">{{$countPenggunaDalaman}}</h4>
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
                                <div id="chart-wrap">
                                  <div id="jumlah_permohonan_chart" ></div>

                                </div>
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
                                <div id="chart-wrap">
                                  <div id="status_permohonan_keseluruhan_div"></div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Row -->
                <div class="row mb-4">
                    <!-- Col lg 6, col md 12 -->
                       <!-- col md 6 -->
                       <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Six Month Sales VS Revenue Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="card-title m-0 p-1">Jumlah Data Yang Dipohon Mengikut Negeri</div>
                                <!-- Chart -->
                                <div id="chart-wrap">

                                <div id="jumlah_data_dipohon_div" style="width: 100%; height: 400px;"></div>
                              </div>

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
                                <div id="chart-wrap">
                                <!-- Chart -->
                                <div id="jumlah_pendapatan_mengikut_bulan_div" style="width: 100%; height: 400px;"></div>
                              </div>
                            </div>

                        </div>

                    </div>
                </div>
                @endif


                @if( Auth::user()->role == 1 || Auth::user()->role == 2)
                <div style="padding:50px;"></div>

                <div class="row">
                  <div class="col-md-3">

                  </div>
                  <!-- Col sm 6, col md 6, col lg 3 -->
                  <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <!-- Card -->
                    <a href="{{route('permohonan.listBaru')}}"  >
                      <div class="card border-0 rounded-lg">
                          <!-- Card body -->
                          <div class="card-body"  style="border-radius:.5rem;">

                              <div class="d-flex flex-row justify-content-center align-items-center">
                                  <!-- Icon -->
                                  <div class="small-card-icon">
                                      <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Baru</p>
                                      <h4 class="font-weight-normal m-0 text-primary">
                                        @if(Auth::user()->role == 0)
                                        {{$countPermohonanBaruPS}}
                                        @elseif(Auth::user()->role == 1)
                                        {{$countPermohonanBaruP1}}
                                        @elseif(Auth::user()->role == 2)
                                        {{$countPermohonanBaruP2}}
                                        @elseif(Auth::user()->role == 3)
                                        {{$countPermohonanBaruKP}}
                                        @endif
                                      </h4>
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
                      <a href="{{route('permohonan.listSedangDiproses')}}"  >
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
                                        <h4 class="font-weight-normal m-0 text-primary">

                                          @if(Auth::user()->role == 1)
                                          {{$countPermohonanSedangDiproses1}}
                                          @elseif(Auth::user()->role == 2)
                                          {{$countPermohonanSedangDiproses2}}
                                          @elseif(Auth::user()->role == 3)
                                          {{$countPermohonanSedangDiprosesKP}}
                                          @endif
                                        </h4>
                                    </div>

                                </div>

                                <hr>
                                <p class="font-weight-normal m-0 text-primary" style="text-align: right;">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                            </div>
                        </div>
                      </a>

                    </div>

                </div>
                @endif

                @if( Auth::user()->role == 3 )
                <div style="padding:50px;"></div>
                <div class="row">
                  <div class="col-md-4">

                  </div>
                  <!-- Col sm 6, col md 6, col lg 3 -->
                  <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <!-- Card -->
                    <a href="{{route('permohonan.listBaru')}}"  >
                      <div class="card border-0 rounded-lg">
                          <!-- Card body -->
                          <div class="card-body"  style="border-radius:.5rem;">

                              <div class="d-flex flex-row justify-content-center align-items-center">
                                  <!-- Icon -->
                                  <div class="small-card-icon">
                                      <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Permohonan <br> Baru</p>
                                      <h4 class="font-weight-normal m-0 text-primary">
                                        @if(Auth::user()->role == 0)
                                        {{$countPermohonanBaruPS}}
                                        @elseif(Auth::user()->role == 1)
                                        {{$countPermohonanBaruP1}}
                                        @elseif(Auth::user()->role == 2)
                                        {{$countPermohonanBaruP2}}
                                        @elseif(Auth::user()->role == 3)
                                        {{$countPermohonanBaruKP}}
                                        @endif
                                      </h4>
                                  </div>

                              </div>

                              <hr>
                              <p class="font-weight-normal m-0 text-primary" style="text-align: right;">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                          </div>
                      </div>
                    </a>

                  </div>

                </div>
                @endif

                @if(Auth::user()->role == 4)
                <div style="padding: 10px;">

                </div>
                <div class="row">
                  <!-- Col sm 6, col md 6, col lg 3 -->
                  <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <!-- Card -->
                    <a href="{{route('superadmin.list')}}"  >
                      <div class="card border-0 rounded-lg">
                          <!-- Card body -->
                          <div class="card-body"  style="border-radius:.5rem;">

                              <div class="d-flex flex-row justify-content-center align-items-center">
                                  <!-- Icon -->
                                  <div class="small-card-icon">
                                      <i class="fa fa-user-circle card-icon-bg-primary fa-4x"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Senarai <br> Pengguna Admin</p>
                                      <h4 class="font-weight-normal m-0 text-primary">
                                        {{$countPenggunaAdmin}}
                                      </h4>
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
                      <a href="{{route('superadmin.listPenggunaLuar')}}"  >
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body"  style="border-radius:.5rem;">

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <!-- Icon -->
                                    <div class="small-card-icon">
                                        <i class="fa fa-users card-icon-bg-primary fa-4x"></i>
                                    </div>
                                    <!-- Text -->
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Senarai <br> Pengguna Luar</p>
                                        <h4 class="font-weight-normal m-0 text-primary">{{$countPenggunaLuar}}</h4>
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
                            <a href="{{route('superadmin.auditTrail')}}"  >
                              <div class="card-body" style="border-radius:.5rem;">

                                  <div class="d-flex flex-row justify-content-center align-items-center">
                                      <!-- Icon -->
                                      <div class="small-card-icon">
                                          <i class="fa fa-database  card-icon-bg-primary fa-4x"></i>
                                      </div>
                                      <!-- Text -->
                                      <div class="small-card-text w-100 text-center">
                                          <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Audit Trail <br> Proses</p>
                                          <h4 class="font-weight-normal m-0 text-primary">{{$countAuditTrail}}</h4>
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
                            <a href="{{route('superadmin.auditTrailLogUser')}}"  >
                              <div class="card-body" style="border-radius:.5rem;">

                                  <div class="d-flex flex-row justify-content-center align-items-center">
                                      <!-- Icon -->
                                      <div class="small-card-icon">
                                          <i class="fa fa-sign-in card-icon-bg-primary fa-4x"></i>
                                      </div>
                                      <!-- Text -->
                                      <div class="small-card-text w-100 text-center">
                                          <p class="font-weight-normal m-0 text-primary" style="font-size: 120%;">Audit Trail <br> Keluar Masuk Pengguna</p>
                                          <h4 class="font-weight-normal m-0 text-primary">{{$countAuditTrailLog}}</h4>
                                      </div>
                                  </div>

                                  <hr>
                                  <p class="font-weight-normal m-0 text-primary" style="text-align: right">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                              </div>
                            </a>

                        </div>
                    </div>




                </div>

                @endif

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

      // jumlah data dipohon pie chart
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
                       // 'width':500,
                       // 'height':400,
                       colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('jumlah_data_dipohon_div'));
        chart.draw(data, options);
      }

      //jumlah Keseluruhan pie chart

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
                       // 'width':500,
                       // 'height':400,
                       colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
                     };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('status_permohonan_keseluruhan_div'));
        chart.draw(data, options);
      }

      //jumlah permohonan (6 bulan) chart
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
            }else if (sites[i]['bulan'] == 8) {
              data.addRows([
                [ 'Ogos',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 9) {
              data.addRows([
                [ 'September',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 10) {
              data.addRows([
                [ 'Oktober',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 11) {
              data.addRows([
                [ 'November',sites[i]['count_bulan']],
              ]);
            }else if (sites[i]['bulan'] == 12) {
              data.addRows([
                [ 'Disember',sites[i]['count_bulan']],
              ]);
            }
          }
        }

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('jumlah_permohonan_chart'));

        chart.draw(data, options);
      }

      //jumlah pendapatan mengikut bulan - column chart

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
          }else if (sites[i]['bulan'] == 8) {
            data.addRows([
              [ 'Ogos',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 9) {
            data.addRows([
              [ 'September',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 10) {
            data.addRows([
              [ 'Oktober',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 11) {
            data.addRows([
              [ 'November',parseFloat(sites[i]['total'])],
            ]);
          }else if (sites[i]['bulan'] == 12) {
            data.addRows([
              [ 'Disember',parseFloat(sites[i]['total'])],
            ]);
          }
        }
      }

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1]);

      var options = {
        title: "",
        // width: 500,
        // height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
        colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("jumlah_pendapatan_mengikut_bulan_div"));
      chart.draw(view, options);
  }
  $(window).resize(function(){
      drawChartBar();
      drawChartLine();
      drawPieChart();
      drawPieChartStatusPermohonan();
      });
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Vektor Shapeline', 'Bercetak'],
          ['2014', 1000, 400],
          ['2015', 1170, 460],
          ['2016', 660, 1120],
          ['2017', 1030, 540],
          ['2018', 660, 1120],
          ['2019', 450, 900],

        ]);

        var options = {
          chart: {
            title: '',
            subtitle: '',
          },
          colors: ['#B0D8FF', '#86AFD9', '#5E87AF', '#356187', '#003E61']
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

@endsection
