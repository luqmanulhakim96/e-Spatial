@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Dalaman</div>

                      <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="list_permohonan_dalaman" style="width: 100%;">

                        <thead>
                            <tr>
                              <th class="all">NAMA</th>
                              <th class="all">KATEGORI</th>
                              <th class="all">STATUS PERMOHONAN</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonanDalaman as $dalaman)
                          <tr>
                            <td>{{$dalaman->user->name}}</td>
                            <td>{{$dalaman->user->kategori}}</td>
                            <td>{{$dalaman->status_permohonan}}</td>
                            <td>{{$dalaman->created_at}}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>

                </div>
            </div>
        </main>
@endsection
