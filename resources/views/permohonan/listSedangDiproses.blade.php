@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Sedang Diproses</div>
                      <div class="table-responsive">

                        <table class="table table-striped table-bordered" id="list_permohonan_baru_2" style="width: 100%;">

                          <thead>
                              <tr>
                                <th class="all">PERMOHONAN ID</th>
                                <th class="all">NAMA PEMOHON</th>
                                <th class="all">TARIKH PERMOHONAN</th>
                                <th class="all">STATUS PERMOHONAN</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($listPermohonanBaru as $diproses)
                            <tr onclick="document.location = '{{ route('permohonan.view', $diproses->id) }}';">
                              <td>{{$diproses->getPermohonanID()}}</td>
                              <td>{{$diproses->user->name}}</td>
                              <td>{{$diproses->created_at}}</td>
                              @if($diproses->ulasan_penyokong_1 == null)
                              <td>Menunggu ulasan Penyokong 1</td>
                              @elseif($diproses->ulasan_penyokong_2 == null)
                              <td>Menunggu ulasan Penyokong 2</td>
                              @elseif($diproses->ulasan_ketua_pengarah == null)
                              <td>Menunggu ulasan Ketua Pengarah</td>
                              @else
                              <td>{{$diproses->status_permohonan}}</td>
                              @endif
                            </tr>
                            @endforeach
                          </tbody>

                        </table>
                      </div>
                </div>
            </div>
        </main>
@endsection
