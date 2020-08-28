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
                              <th class="all">STATUS PERMOHONAN</th>
                              <th class="all">SEBAB PERMOHONAN GAGAL</th>

                            </tr>
                        </thead>

                        <tbody>
                          @foreach($list_gagal as $gagal)
                          <tr>
                            <td>{{ $gagal->getPermohonanID()  }}</td>
                            <td>{{ Carbon\Carbon::parse($gagal->created_at)->format('d-m-Y H:i:s')  }}</td>
                            <td>
                              <span class="badge badge-danger badge-pill" style="font-size: 100%;">{{ $gagal->status_permohonan  }}</span>
                            </td>
                            <td>{{ $gagal->remarks_admin  }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </main>
@endsection
