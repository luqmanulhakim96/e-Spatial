@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <div  style="font-size: 180%;" >
                <i class="fa fa-home" aria-hidden="true"></i>
                Dashboard
              </div>

              <hr style="background-color: #343a40 !important;">

              <div style="padding:5px;"></div>

              @if(Auth::user()->role == 0)
              <!-- Small card component -->
              <div class="small-cards mb-4">


                  <div class="row">
                    <!-- Col sm 6, col md 6, col lg 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                      <!-- Card -->
                        <div class="card rounded-lg" style="border-color: #003473 !important;">
                            <!-- Card body -->
                            <div class="card-body"  style="border-radius:.5rem;" >

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <!-- Icon -->
                                    <div class="small-card-icon">
                                        <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                                    </div>
                                    <!-- Text -->
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Permohonan <br> Baru</p>
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

                                <hr style="background-color: #003473; height: 1px; border: 0;">

                                <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                                  <a href="{{route('permohonan.listBaru')}}">

                                  Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </a>

                                </p>


                            </div>
                        </div>

                    </div>

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                        <!-- Card -->
                          <div class="card border-1 rounded-lg" style="border-color: #28a745 !important;">
                              <!-- Card body -->
                              <div class="card-body"  style="border-radius:.5rem;">

                                  <div class="d-flex flex-row justify-content-center align-items-center">
                                      <!-- Icon -->
                                      <div class="small-card-icon">
                                          <i class="fa fa-retweet card-icon-bg-primary fa-4x" style="color: #28a745 !important;"></i>
                                      </div>
                                      <!-- Text -->
                                      <div class="small-card-text w-100 text-center">
                                          <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #28a745 !important;">Permohonan <br> Sedang Diproses</p>
                                          <h4 class="font-weight-normal m-0 text-primary" style="color: #28a745 !important;">{{$countPermohonanSedangDiproses}}</h4>
                                      </div>

                                  </div>

                                  <hr style="background-color: #28a745;">
                                  <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #28a745 !important">
                                    <a href="{{route('permohonan.listSedangDiproses')}}"  >

                                    Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </a>

                                  </p>

                              </div>
                          </div>

                      </div>

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                          <div class="card border-1 rounded-lg" style="border-color: #D25F00 !important;">
                              <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-check  card-icon-bg-primary fa-4x" style="color: #D25F00 !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #D25F00 !important;">Permohonan <br> Lulus</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: #D25F00 !important;">{{$countPermohonanLulus}}</h4>
                                        </div>
                                    </div>

                                    <hr style="background-color: #D25F00 !important;">
                                    <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #D25F00 !important;">
                                      <a href="{{route('permohonan.list')}}"  >

                                      Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>

                                    </p>

                                </div>

                          </div>
                      </div>

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                          <div class="card border-1 rounded-lg" style="border-color: #dc3545 !important">
                              <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-times-circle card-icon-bg-primary fa-4x" style="color: #dc3545 !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #dc3545 !important;">Permohonan <br> Gagal</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: #dc3545 !important;">{{$countPermohonanGagal}}</h4>
                                        </div>
                                    </div>

                                    <hr style="background-color: #dc3545 !important;">
                                    <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #dc3545 !important;">
                                      <a href="{{route('permohonan.listGagal')}}"  >

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
                      <div class="col-sm-6 col-md- col-lg-3 mt-3 mt-lg-0">
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
                                      <a href="{{route('permohonan.listTidakBerkaitan')}}"  >

                                      Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>

                                    </p>

                                </div>
                            </div>

                      </div>

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                          <div class="card border-1 rounded-lg" style="border-color: #057108 !important;">
                              <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-trash  card-icon-bg-primary fa-4x" style="color: #057108 !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #057108 !important;">Permohonan <br> Batal</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: #057108 !important;">{{$countPermohonanBatal}}</h4>
                                        </div>
                                    </div>

                                    <hr style="background-color: #057108 !important;">
                                    <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #057108 !important;">
                                      <a href="{{route('permohonan.listBatal')}}"  >

                                      Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>

                                    </p>

                                </div>

                          </div>
                      </div>

                      <!-- Col sm 6, col md 6, col lg 3 -->
                      <div class="col-sm-6 col-md- col-lg-3 mt-3 mt-lg-0">
                          <!-- Card -->
                            <div class="card border-1 rounded-lg" style="border-color: #D25F00 !important;">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-users card-icon-bg-primary fa-4x" style="color: #D25F00 !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #D25F00 !important;">Permohonan <br> Dalaman</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: #D25F00 !important;">{{$countPermohonanDalaman}}</h4>
                                        </div>
                                    </div>

                                    <hr style="background-color: #D25F00 !important;">
                                    <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #D25F00 !important;">
                                      <a href="{{route('permohonan.listDalaman')}}"  >

                                      Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                    </a>

                                    </p>

                                </div>
                            </div>

                      </div>




                  </div>

              </div>





                @endif


                @if( Auth::user()->role == 1 || Auth::user()->role == 2)
                <div style="padding:5px;"></div>

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
                                      <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Permohonan Baru</p>
                                      <h4 class="font-weight-normal m-0 text-primary" style="color: #003473 !important;">
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

                              <hr style="background-color: #003473 !important;">
                              <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                                <a href="{{route('permohonan.listBaru')}}"  >

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
                            <div class="card-body"  style="border-radius:.5rem;">

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <!-- Icon -->
                                    <div class="small-card-icon">
                                        <i class="fa fa-retweet card-icon-bg-primary fa-4x" style="color: #28a745 !important;"></i>
                                    </div>
                                    <!-- Text -->
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #28a745 !important;">Permohonan Sedang Diproses</p>
                                        <h4 class="font-weight-normal m-0 text-primary" style="color: #28a745 !important;">

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

                                <hr style="background-color: #28a745 !important;">

                                <p class="font-weight-normal m-0 text-primary" style="text-align: right ; color: #28a745 !important;">
                                  <a href="{{route('permohonan.listSedangDiproses')}}"  >

                                  Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </a>

                                </p>

                            </div>
                        </div>

                    </div>

                </div>
                <div style="padding:20px;"></div>
                @endif

                @if( Auth::user()->role == 3 )
                <div class="row">
                  <!-- <div class="col-md-4">

                  </div> -->
                  <!-- Col sm 6, col md 6, col lg 3 -->
                  <div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
                    <!-- Card -->
                      <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                          <!-- Card body -->
                          <div class="card-body"  style="border-radius:.5rem;">

                              <div class="d-flex flex-row justify-content-center align-items-center">
                                  <!-- Icon -->
                                  <div class="small-card-icon">
                                      <i class="fa fa-exclamation-circle card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Permohonan <br> Baru</p>
                                      <h4 class="font-weight-normal m-0 text-primary" style="color: #003473 !important;">
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

                              <hr style="background-color: #003473 !important;">

                              <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                                <a href="{{route('permohonan.listBaru')}}"  >

                                Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                              </a>

                              </p>

                          </div>
                      </div>

                  </div>

                </div>
                <div style="padding:20px;"></div>

                @endif

                @if(Auth::user()->role == 4)
                <div style="padding: 1px;">

                </div>
                <div class="row">
                  <!-- Col sm 6, col md 6, col lg 3 -->
                  <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                    <!-- Card -->
                      <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                          <!-- Card body -->
                          <div class="card-body"  style="border-radius:.5rem;">

                              <div class="d-flex flex-row justify-content-center align-items-center">
                                  <!-- Icon -->
                                  <div class="small-card-icon">
                                      <i class="fa fa-user-circle card-icon-bg-primary fa-4x" style="color: #003473 !important;"></i>
                                  </div>
                                  <!-- Text -->
                                  <div class="small-card-text w-100 text-center">
                                      <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #003473 !important;">Senarai <br> Pengguna</p>
                                      <h4 class="font-weight-normal m-0 text-primary" style="color: #003473 !important;">
                                        {{$countPenggunaAdmin}}
                                      </h4>
                                  </div>

                              </div>

                              <hr style="background-color: #003473 !important;">

                              <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #003473 !important;">
                                <a href="{{route('superadmin.list')}}"  >

                                Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                              </a>

                              </p>

                          </div>
                      </div>

                  </div>

                    <!-- Col sm 6, col md 6, col lg 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                      <!-- Card -->
                        <div class="card border-1 rounded-lg" style="border-color: #28a745 !important;">
                            <!-- Card body -->
                            <div class="card-body"  style="border-radius:.5rem;">

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <!-- Icon -->
                                    <div class="small-card-icon">
                                        <i class="fa fa-users card-icon-bg-primary fa-4x" style="color: #28a745 !important;"></i>
                                    </div>
                                    <!-- Text -->
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #28a745 !important;">Senarai <br> Pemohon</p>
                                        <h4 class="font-weight-normal m-0 text-primary" style="color: #28a745 !important;">{{$countPenggunaLuar}}</h4>
                                    </div>

                                </div>

                                <hr style="background-color: #28a745 !important;">

                                <p class="font-weight-normal m-0 text-primary" style="text-align: right ; color: #28a745 !important;">
                                  <a href="{{route('superadmin.listPenggunaLuar')}}"  >

                                  Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                </a>

                                </p>

                            </div>
                        </div>

                    </div>

                    <!-- Col sm 6, col md 6, col lg 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-1 rounded-lg" style="border-color: #D25F00 !important;">
                            <!-- Card body -->
                              <div class="card-body" style="border-radius:.5rem;">

                                  <div class="d-flex flex-row justify-content-center align-items-center">
                                      <!-- Icon -->
                                      <div class="small-card-icon">
                                          <i class="fa fa-database  card-icon-bg-primary fa-4x" style="color: #D25F00 !important;"></i>
                                      </div>
                                      <!-- Text -->
                                      <div class="small-card-text w-100 text-center">
                                          <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #D25F00 !important;">Audit Trail <br> Proses</p>
                                          <h4 class="font-weight-normal m-0 text-primary" style="color: #D25F00 !important;">{{$countAuditTrail}}</h4>
                                      </div>
                                  </div>

                                  <hr style="background-color: #D25F00 !important;">

                                  <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #D25F00 !important;">
                                    <a href="{{route('superadmin.auditTrail')}}"  >

                                    Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </a>

                                  </p>

                              </div>

                        </div>
                    </div>

                    <!-- Col sm 6, col md 6, col lg 3 -->
                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-1 rounded-lg" style="border-color: #dc3545 !important;">
                            <!-- Card body -->
                              <div class="card-body" style="border-radius:.5rem;">

                                  <div class="d-flex flex-row justify-content-center align-items-center">
                                      <!-- Icon -->
                                      <div class="small-card-icon">
                                          <i class="fa fa-sign-in card-icon-bg-primary fa-4x" style="color: #dc3545 !important;"></i>
                                      </div>
                                      <!-- Text -->
                                      <div class="small-card-text w-100 text-center">
                                          <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: #dc3545 !important;">Audit <br> Log Akses</p>
                                          <h4 class="font-weight-normal m-0 text-primary" style="color: #dc3545 !important;">{{$countAuditTrailLog}}</h4>
                                      </div>
                                  </div>

                                  <hr style="background-color: #dc3545 !important;">

                                  <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: #dc3545 !important;">
                                    <a href="{{route('superadmin.auditTrailLogUser')}}"  >

                                    Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i>
                                  </p>
                                </a>

                              </div>

                        </div>
                    </div>

                </div>

                <!-- <div style="padding: 20px;"></div>

                <div  style="font-size: 180%;" >
                  <i class="fa fa-home" aria-hidden="true"></i>
                  Laporan
                </div>

                <hr>

                <div style="padding: 10px;">

                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-6 mt-3 mt-lg-0">
                      <div class="card border-0 rounded-lg">
                            <div class="card-body" style="border-radius:.5rem; background-color: #dc3545 !important;">

                                <div class="d-flex flex-row justify-content-center align-items-center">
                                    <div class="small-card-icon">
                                        <i class="fa fa-sign-in card-icon-bg-primary fa-4x" style="color: white !important;"></i>
                                    </div>
                                    <div class="small-card-text w-100 text-center">
                                        <p class="font-weight-normal m-0 text-primary" style="font-size: 120%; color: white !important;">Audit Trail <br> Keluar Masuk Pengguna</p>
                                        <h4 class="font-weight-normal m-0 text-primary" style="color: white !important;">{{$countAuditTrailLog}}</h4>
                                    </div>
                                </div>

                                <hr>
                                <p class="font-weight-normal m-0 text-primary" style="text-align: right; color: white !important;">Lihat Seterusnya <i class="fa fa-caret-right" aria-hidden="true"></i></p>

                            </div>
                      </div>
                  </div>
                </div> -->
                <div style="padding:20px;"></div>

                @endif

                <div  style="font-size: 180%;" >
                  <i class="fa fa-area-chart" aria-hidden="true"></i>
                  Laporan
                </div>
                <hr style="background-color: #343a40 !important;">
                <div style="padding:5px;"></div>


                <!-- Small card component -->
                <div class="small-cards mb-4">
                    <div class="row">
                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-1 rounded-lg" style="background-color: #003473 !important; border-color: black !important;">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-file card-icon-bg-primary fa-4x" style="color: white !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="color: white !important;">Permohonan Keseluruhan</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: white !important;">{{$countPermohonanKeseluruhan}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-1 rounded-lg" style="background-color: #28a745 !important; border-color: black !important;">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem; ">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-database  card-icon-bg-primary fa-4x" style="color: white !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="color: white !important;">Jumlah Data Geospatial</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: white !important;">{{$countSenaraiHarga}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-1 rounded-lg" style="background-color: #ffc107 !important; border-color: black !important;">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-user-circle-o card-icon-bg-primary fa-4x" style="color: black !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="color: black !important;">Jumlah Pengguna Biasa</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: black !important;">{{$countPengguna}}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-1 rounded-lg" style="background-color: #dc3545 !important; border-color: black !important;">
                                <!-- Card body -->
                                <div class="card-body" style="border-radius:.5rem;">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fa fa-users card-icon-bg-primary fa-4x" style="color: white !important;"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-primary" style="color: white !important;">Jumlah Pengguna (Admin)</p>
                                            <h4 class="font-weight-normal m-0 text-primary" style="color: white !important;">{{$countPenggunaDalaman}}</h4>
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
                        <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                          <div class="card-header bg-transparent border-1" style="border-color: #003473 !important; font-size: 130%; font-weight: bold;">Jumlah Permohonan (6 Bulan Lepas)</div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <!-- <div class="card-title">Jumlah Permohonan (6 Bulan Lepas)</div> -->
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
                        <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                            <!-- Card body -->
                            <div class="card-header bg-transparent border-1" style="border-color: #003473 !important; font-size: 130%; font-weight: bold;">Status Permohonan Keseluruhan</div>

                            <div class="card-body">
                                <!-- Card title -->
                                <!-- <div class="card-title">Status Permohonan Keseluruhan</div> -->
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
                        <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                          <div class="card-header bg-transparent border-1" style="border-color: #003473 !important; font-size: 130%; font-weight: bold;">Jumlah Data Yang Dipohon Mengikut Negeri</div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- <div class="card-title m-0 p-1">Jumlah Data Yang Dipohon Mengikut Negeri</div> -->
                                <!-- Chart -->
                                <div id="chart-wrap">

                                <div id="jumlah_data_dipohon_div" style="width: 100%; height: 400px;"></div>
                              </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-1 rounded-lg" style="border-color: #003473 !important;">
                          <div class="card-header bg-transparent border-1" style="border-color: #003473 !important; font-size: 130%; font-weight: bold;">Jumlah Pendapatan Mengikut Bulan</div>

                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <!-- <div class="card-title">Jumlah Pendapatan Mengikut Bulan</div> -->
                                <div id="chart-wrap">
                                <!-- Chart -->
                                <div id="jumlah_pendapatan_mengikut_bulan_div" style="width: 100%; height: 400px;"></div>
                              </div>
                            </div>

                        </div>

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
