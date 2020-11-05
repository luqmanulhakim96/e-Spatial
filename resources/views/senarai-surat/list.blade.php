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
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Templat Surat</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Templat Surat</div> -->

                      <a class="btn btn-ripple btn-raised btn-primary m-2" href="{{ route('senarai-surat.add') }}">Tambah Templat Surat</a>
                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="responsiveDataTable" style="width: 100%;">

                        <!-- Table head -->
                        <thead>
                            <tr>

                              <th class="all">JENIS TEMPLAT</th>
                              <th class="all">TINDAKAN</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                          @foreach($list as $data)
                            <tr>

                              <td>
                                <span >{{ ucfirst($data->status_pembayaran )  }}</span>
                              </td>
                              <td class="p-3">
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                        <a href="{{ route('senarai-surat.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('senarai-surat.print', $data->id) }}" class="btn btn-success mr-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('senarai-surat.delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

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
