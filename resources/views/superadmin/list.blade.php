@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Pengguna</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Pengguna Admin</div> -->
                      <a class="btn btn-primary mb-2" href="{{ route('superadmin.add') }}">Tambah Pengguna</a>
                      <div style="padding: 15px;"></div>
                        <!-- Tab nav -->
                        <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-active-tab" data-toggle="pill" href="#pills-active" role="tab" aria-controls="pills-active" aria-selected="true">Pengguna Aktif</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-deactivate-tab" data-toggle="pill" href="#pills-deactivate" role="tab" aria-controls="pills-deactivate" aria-selected="false">Pengguna Nyahaktif</a>
                            </li>
                        </ul> -->

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" role="tab" aria-controls="active" aria-selected="true">Pengguna Aktif</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="deactive-tab" data-toggle="tab" href="#deactive" role="tab" aria-controls="deactive" aria-selected="false">Pengguna Nyahaktif</a>
                            </li>
                        </ul>


                        <!-- Tab content -->
                        <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane active" id="active" role="tabpanel" aria-labelledby="active-tab">
                            <div style="padding: 10px;"></div>
                            <div class="table-responsive">
                              <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">

                                <thead>
                                  <tr>
                                    <th class="all">Nama</th>
                                    <th class="all">Email</th>
                                    <th class="all">Peranan</th>
                                    <th class="all">Kad Pengenalan</th>
                                    <th class="all">Butang Tindakan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($user as $data)
                                  <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email  }}</td>
                                    @if($data->role == 0)
                                    <td> Pentadbir Sistem (Admin) </td>
                                    @elseif($data->role == 1)
                                    <td> Penyokong 1 </td>
                                    @elseif($data->role == 2)
                                    <td> Penyokong 2 </td>
                                    @elseif($data->role == 3)
                                    <td> Ketua Pengarah </td>
                                    @elseif($data->role == 4)
                                    <td> Superadmin </td>
                                    @endif
                                    <td>{{ $data->kad_pengenalan }}</td>
                                    <td class="p-3">
                                          <div class="d-flex flex-row justify-content-around align-items-center">
                                              <a href="{{ route('superadmin.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>

                                              @if($currentUser->id != $data->id)
                                              <a href="{{ route('superadmin.delete', $data->id) }}" onclick="return confirm('Nyahaktif pengguna ini?')" class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                              @else
                                              <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>

                                              @endif
                                          </div>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            </div>

                            <div class="tab-pane" id="deactive" role="tabpanel" aria-labelledby="deactive-tab">
                              <div style="padding: 10px;"></div>

                              <div class="table-responsive">

                              <table class="table table-striped table-bordered" id="responsiveDataTable2" style="width: 100%;">

                                <thead>
                                  <tr>
                                    <th class="all">Nama</th>
                                    <th class="all">Email</th>
                                    <th class="all">Peranan</th>
                                    <th class="all">Kad Pengenalan</th>
                                    <th class="all">Butang Tindakan</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($user_deact as $data)
                                  <tr>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email  }}</td>
                                    @if($data->role == 0)
                                    <td> Pentadbir Sistem (Admin) </td>
                                    @elseif($data->role == 1)
                                    <td> Penyokong 1 </td>
                                    @elseif($data->role == 2)
                                    <td> Penyokong 2 </td>
                                    @elseif($data->role == 3)
                                    <td> Ketua Pengarah </td>
                                    @elseif($data->role == 4)
                                    <td> Superadmin </td>
                                    @endif
                                    <td>{{ $data->kad_pengenalan }}</td>
                                    <td class="p-3">
                                          <div class="d-flex flex-row justify-content-around align-items-center">
                                              <!-- <a href="{{ route('superadmin.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a> -->
                                              <a href="#" class="btn btn-dark mr-1"><i class="fas fa-pencil-alt"></i></a>

                                              <a href="{{ route('superadmin.delete', $data->id) }}" onclick="return confirm('Aktifkan pengguna ini?')" class="btn btn-success"><i class="fa fa-check-circle"></i></a>
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
            </main>
@endsection
