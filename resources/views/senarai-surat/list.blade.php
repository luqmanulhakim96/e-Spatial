@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Surat</div>
                      <a class="btn btn-primary m-2" href="{{ route('senarai-surat.add') }}">Tambah Surat</a>
                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">ID</th>
                              <th class="all">JENIS DATA</th>
                              <th class="all">SAIZ DATA</th>
                              <th class="all">NEGERI</th>
                              <th class="all">TAHUN</th>
                              <th class="all">HARGA ASAS (RM)</th>
                              <th class="all">JUMLAH HARGA (RM)</th>
                              <th class="all">ACTIONS</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                          {{-- @foreach($list as $data) --}}
                          <tr>
                            <td>{{-- $data->id  --}}</td>
                            <td>{{-- $data->jenis_data  --}}</td>
                            <td>{{-- $data->saiz_data  --}}</td>
                            <td>{{-- $data->negeri  --}}</td>
                            <td>{{-- $data->tahun  --}}</td>
                            <td>{{-- $data->harga_asas  --}}</td>
                            <td>{{-- $data->jumlah_harga  --}}</td>
                            <td class="p-3">
                                  <div class="d-flex flex-row justify-content-around align-items-center">
                                      <!-- <a href="{{-- route('senarai-harga.edit', $data->id) --}}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a> -->
                                      <!-- <a href="{{-- route('senarai-harga.delete', $data->id) --}}" class="btn btn-danger"><i class="fas fa-times-circle"></i></a> -->
                                  </div>
                            </td>
                          </tr>
                        {{-- @endforeach --}}
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </main>
@endsection
