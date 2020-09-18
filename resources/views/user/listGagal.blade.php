@extends('layouts.app_user')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Gagal</div>
                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_user_gagal" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">TARIKH PERMOHONAN</th>

                              <th class="all">MUAT TURUN SURAT TIDAK LULUS </th>

                            </tr>
                        </thead>

                        <tbody>
                          @foreach($list_gagal as $gagal)
                          <tr>
                            <td>{{ $gagal->getPermohonanID()  }}</td>
                            <td>{{ Carbon\Carbon::parse($gagal->created_at)->format('d-m-Y H:i:s')  }}</td>
                            <!-- <td>
                              <span class="badge badge-danger badge-pill" style="font-size: 100%;">{{ $gagal->status_permohonan  }}</span>
                            </td> -->
                            <td>
                              <a class="btn btn-success mr-1" href="{{route('user.download.surat_tidak_lulus', $gagal->id)}}" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Muat turun Surat Tidak Lulus"><i class="fa fa-download"></i></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </main>
@endsection
