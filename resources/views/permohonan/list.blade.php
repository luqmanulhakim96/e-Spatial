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
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanBaru as $data)
                                                      <tr>
                                                        <td>
                                                          <a href="{{ route('permohonan.harga.view', $data->id) }}">{{ $data->user->name  }}</a>
                                                        </td>
                                                        <td><span class="badge badge-warning badge-pill">{{ $data->status_permohonan  }}</span></td>
                                                        @if($data->attachment_pemohonan != NULL)
                                                        <td>{{ $data->attachment_pemohonan}}</td>
                                                        @else
                                                        <td>Tiada</td>
                                                        @endif
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
                                                          <th class="all">STATUS PEMBAYARAN</th>
                                                          <th class="all">ATTACHMENT</th>
                                                          <th class="all">PRINT</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                      @foreach($listPermohonanLulus as $data)
                                                      <tr>
                                                        <td>{{ $data->user->name  }}</td>
                                                        <td>{{ $data->status_pembayaran  }}</td>
                                                        @if($data->attachment_pemohonan == NULL)
                                                        <td>{{ $data->attachment_pemohonan}}</td>
                                                        @else
                                                        <td>Tiada</td>
                                                        @endif
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
                                                      @foreach($listPermohonanLulus as $data)
                                                      <tr>
                                                        <td>
                                                          <a href="#">{{ $data->user->name  }}</a>
                                                        </td>
                                                        <td>{{ $data->status_pembayaran  }}</td>
                                                        @if($data->attachment_pemohonan != NULL)
                                                        <td>{{ $data->attachment_pemohonan}}</td>
                                                        @else
                                                        <td>Tiada Attachment</td>
                                                        @endif
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




                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                      </div>

            </div>
        </main>
@endsection
