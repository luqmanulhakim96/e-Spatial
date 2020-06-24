@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan</div>
                      <a class="btn btn-primary m-2" href="{{ route('user.add') }}">Pemohonan Baru</a>
                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">
                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">ID</th>
                              <th class="all">JENIS DATA</th>
                              <th class="all">JENIS HUTAN</th>
                              <th class="all">NEGERI</th>
                              <th class="all">TAHUN</th>
                              <th class="all">STATUS</th>
                              <th class="all">UPDATE PERMOHONAN</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>

                          <tr>
                            <td>1</td>
                            <td>Vector</td>
                            <td>Hutan Hujan</td>
                            <td>Selangor</td>
                            <td>2002</td>
                            <td>Lulus</td>
                            <td class="p-3">
                                  <div class="d-flex flex-row justify-content-around align-items-center">
                                      <a href="" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                  </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </main>
@endsection
