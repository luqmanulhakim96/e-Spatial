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
                      <div class="card-title">Senarai Templat Email</div>

                      <a class="btn btn-ripple btn-raised btn-primary m-2" href="{{ route('senarai-email.add') }}">Tambah Templat Email</a>
                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">

                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">ID</th>
                              <th class="all">JENIS</th>
                              <th class="all">KEPADA</th>
                              <th class="all">SUBJEK</th>
                              <th class="all">TAJUK</th>
                              <th class="all">TARIKH DICIPTA</th>
                              <th class="all">TARIKH DIPINDA</th>
                              <th class="all">ACTION</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                          @foreach($list as $data)
                            <tr>
                              <td>{{ $data->id  }}</td>
                              <td>{{ $data->jenis  }}</td>
                              <td>{{ $data->kepada  }}</td>
                              <td>{{ $data->subjek  }}</td>
                              <td>{{ $data->tajuk  }}</td>
                              <td>{{ $data->created_at  }}</td>
                              <td>{{ $data->updated_at  }}</td>
                              <td class="p-3">
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                        <a href="{{ route('senarai-email.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('senarai-email.delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

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
        </main>
@endsection
