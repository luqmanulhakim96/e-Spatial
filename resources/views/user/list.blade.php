@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan</div>
                      <a class="btn btn-primary m-2" href="{{ route('user.add') }}">Pemohonan Baru</a>
                      <!-- Basic tabs card -->


                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sedang Diproses</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lulus</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Gagal</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                              <div class="card-title">Senarai Permohonan Sedang Diproses</div>
                                              <table class="table table-striped table-bordered" id="list_permohonan_user" style="width: 100%;">
                                                  <!-- Table head -->
                                                  <thead>
                                                      <tr>
                                                        <th class="all">PERMOHONAN ID</th>
                                                        <th class="all">TARIKH PERMOHONAN</th>
                                                        <th class="all">STATUS PERMOHONAN</th>
                                                        <th class="all">UPDATE PERMOHONAN</th>
                                                      </tr>
                                                  </thead>
                                                  <!-- Table body -->
                                                  <tbody>
                                                    @foreach($list as $data)
                                                    <tr>
                                                      <td><a href="#" data-toggle="modal" data-target="#display_data_permohonan" data-value="{{ $data->id  }}">{{ $data->id  }}</a></td>
                                                      <td>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}</td>
                                                      <td>{{ $data->status_permohonan  }}</td>
                                                      @if($data->ulasan_admin == NULL)
                                                      <td class="p-3">
                                                            <div class="d-flex flex-row justify-content-around align-items-center">
                                                                <a href="{{ route('user.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                            </div>
                                                      </td>
                                                      @else
                                                      <td class="p-3">
                                                            <div class="d-flex flex-row justify-content-around align-items-center">
                                                                <a href="#" class="btn btn-dark mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                            </div>
                                                      @endif
                                                    </tr>
                                                    @endforeach
                                                  </tbody>
                                                </table>

                                            </div>

                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                              <div class="card-title">Senarai Permohonan Lulus</div>
                                              <table class="table table-striped table-bordered" id="list_permohonan_user_lulus" style="width: 100%;">
                                                  <!-- Table head -->
                                                  <thead>
                                                      <tr>
                                                        <th class="all">PERMOHONAN ID</th>
                                                        <th class="all">TARIKH PERMOHONAN</th>
                                                        <th class="all">STATUS PERMOHONAN</th>
                                                        <th class="all">JUMLAH BAYARAN (RM)</th>
                                                        <th class="all">STATUS PEMBAYARAN</th>
                                                        <th class="all">MUATNAIK RECEIPT PEMBAYARAN</th>
                                                        <th class="all">MUATNAIK RECEIPT SURAT PENERIMAAN DATA</th>
                                                      </tr>
                                                  </thead>
                                                  <!-- Table body -->
                                                  <tbody>
                                                    @foreach($list_lulus as $data)
                                                    <tr>
                                                      <td><a href="#" data-toggle="modal" data-target="#display_data_permohonan" data-value="{{ $data->id  }}">{{ $data->id  }}</a></td>
                                                      <td>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}</td>
                                                      <td>{{ $data->status_permohonan  }}</td>
                                                      <td>{{ $data->jumlah_bayaran  }}</td>
                                                      <td>{{ $data->status_pembayaran  }}</td>
                                                      <!-- column muat naik receipt pembayaran -->
                                                      @if($data->attachment_receipt_pembayaran == null)
                                                      <td>
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#" class="btn btn-success mr-1"><i class="fa fa-upload"></i></a>
                                                        </div>
                                                      </td>
                                                      @else
                                                      <td>Telah diterima</td>
                                                      @endif
                                                      <!-- column muat naik surat penerimaan data -->
                                                      @if($data->attachment_penerimaan_data == null)
                                                      <td>
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#" class="btn btn-success mr-1"><i class="fa fa-upload"></i></a>
                                                        </div>
                                                      </td>
                                                      @else
                                                      <td>Telah dimuat naik</td>
                                                      @endif

                                                    </tr>
                                                    @endforeach
                                                  </tbody>
                                                </table>

                                            </div>

                                            <div class="tab-pane" id="content" role="tabpanel" aria-labelledby="content-tab">
                                              <table class="table table-striped table-bordered" id="list_permohonan_user_gagal" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                      <th class="all">PERMOHONAN ID</th>
                                                      <th class="all">TARIKH PERMOHONAN</th>
                                                      <th class="all">STATUS PERMOHONAN</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                  @foreach($list_gagal as $gagal)
                                                  <td>{{ $gagal->id  }}</td>
                                                  <td>{{ $gagal->status_permohonan  }}</td>
                                                  <td>{{ Carbon\Carbon::parse($gagal->created_at)->format('d-m-Y H:i:s')  }}</td>
                                                  @endforeach
                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
                                    </div>





                  </div>
                </div>
            </div>
        </main>
@endsection
