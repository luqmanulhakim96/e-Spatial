@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Pills Tab-->
                                    <div class="card rounded-lg">
                                        <div class="card-body">
                                            <div class="card-title">Senarai Pemohon </div>



                                            <!-- Tab nav -->
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-baru-tab" data-toggle="pill" href="#pills-baru" role="tab" aria-controls="pills-baru" aria-selected="true">Pemohon Baru</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-lulus-tab" data-toggle="pill" href="#pills-lulus" role="tab" aria-controls="pills-lulus" aria-selected="false">Pemohon Lulus</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-dalaman-tab" data-toggle="pill" href="#pills-dalaman" role="tab" aria-controls="pills-dalaman" aria-selected="false">Pemohon Dalaman</a>
                                                </li>
                                            </ul>
                                            <!-- Tab content -->
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-baru" role="tabpanel" aria-labelledby="pills-baru-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_baru" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA PEMOHON</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">ATTACHMENT PERMOHONAN</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanBaru as $baru)
                                                      <tr>
                                                        @if($userInfo->role != 0)
                                                        <td>
                                                          <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                        </td>
                                                        @else
                                                          @if($baru->jumlah_bayaran == 0.00)
                                                          <td>
                                                            <a href="{{ route('permohonan.harga.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @else
                                                          <td>
                                                            <a href="{{ route('permohonan.view', $baru->id) }}">{{ $baru->user->name  }}</a>
                                                          </td>
                                                          @endif

                                                        @endif
                                                        <td><span class="badge badge-warning badge-pill">{{ $baru->status_permohonan  }}</span></td>
                                                        <td>{{ $baru->attachment_permohonan}}</td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>

                                                  </table>
                                                </div>

                                                <div class="tab-pane fade" id="pills-lulus" role="tabpanel" aria-labelledby="pills-lulus-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_lulus" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">STATUS PEMBAYARAN</th>
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanLulus as $lulus)
                                                      <tr>
                                                        <td>{{ $lulus->user->name  }}</td>
                                                        <td><span class="badge badge-success badge-pill">{{ $lulus->status_permohonan  }}</span></td>
                                                        <td><span class="badge badge-warning badge-pill">{{ $lulus->status_pembayaran  }}</span></td>
                                                        <td>{{ $lulus->attachment_permohonan}}</td>
                                                        <td class="p-3">
                                                              <div class="d-flex flex-row justify-content-around align-items-center">
                                                                  <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                                              </div>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                    </tbody>

                                                  </table>
                                                </div>

                                                <div class="tab-pane fade" id="pills-dalaman" role="tabpanel" aria-labelledby="pills-dalaman-tab">
                                                  <table class="table table-striped table-bordered" id="list_permohonan_dalaman" style="width: 100%;">

                                                    <thead>
                                                        <tr>
                                                          <th class="all">NAMA</th>
                                                          <th class="all">STATUS PERMOHONAN</th>
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($listPermohonanDalaman as $dalaman)
                                                      <tr>
                                                        <td>{{$dalaman->user->name}}</td>
                                                        <td>{{$dalaman->status_permohonan}}</td>
                                                        <td>Tiada</td>
                                                        <td>Tiada</td>
                                                      </tr>
                                                      @endforeach

                                                    </tbody>



                                                  </table>
                                                </div>




                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                      </div>

            </div>
        </main>
@endsection
