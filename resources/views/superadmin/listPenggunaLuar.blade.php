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
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Pemohon</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Pengguna Luar</div> -->
                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">

                        <thead>
                          <tr>
                            <th class="all">Nama</th>
                            <th class="all">Kategori</th>
                            <th class="all">Email</th>
                            <th class="all">Kad Pengenalan</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($penggunaLuar as $data)
                          <tr>
                            <td>{{ $data->name }}</td>
                            <td>
                              <span style="text-transform:capitalize;">{{ $data->kategori }}</span>
                            </td>
                            <td>{{ $data->email  }}</td>
                            <td>{{ $data->kad_pengenalan }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </main>
@endsection
