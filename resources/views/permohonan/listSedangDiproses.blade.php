@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Permohonan Sedang Diproses</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Permohonan Sedang Diproses</div> -->
                      <div class="table-responsive">

                        <table class="table table-striped table-bordered" id="list_permohonan_baru_2" style="width: 100%;">

                          <thead>
                              <tr>
                                <th class="all">PERMOHONAN ID</th>
                                <th class="all">KATEGORI PEMOHON</th>
                                <th class="all">NAMA PEMOHON</th>
                                <th class="all">TARIKH PERMOHONAN</th>
                                <th class="all">STATUS PERMOHONAN</th>
                              </tr>
                          </thead>
                          <tbody>
                            @if(Auth::user()->role == 0)
                            @foreach($listSedangProses as $diproses)
                            <tr>
                              <td>
                                <a href="{{ route('permohonan.view', $diproses->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $diproses->getPermohonanID()  }}</a>
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                @if($diproses->user->kategori == 'kementerian')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  KEMENTERIAN
                                </div>
                                @elseif($diproses->user->kategori == 'agensi')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  AGENSI
                                </div>
                                @elseif($diproses->user->kategori == 'penyelidik')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  PENYELIDIK
                                </div>
                                @elseif($diproses->user->kategori == 'institut')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  INSTITUT PENGAJIAN TINGGI
                                </div>
                                @elseif($diproses->user->kategori == 'awam')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  ORANG AWAM
                                </div>
                                @elseif($diproses->user->kategori == 'dalaman')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  WARGA JPSM
                                </div>
                                @elseif($diproses->user->kategori == 'lain')
                                <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                  LAIN-LAIN
                                </div>
                                @endif
                              </td>
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
                            @endif

                            @if(Auth::user()->role == 1)
                            @foreach($listSedangProses1 as $diproses)
                            <tr>
                              <td>
                                <a href="{{ route('permohonan.view', $diproses->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $diproses->getPermohonanID()  }}</a>
                              </td>
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
                            @endif

                            @if(Auth::user()->role == 2)
                            @foreach($listSedangProses2 as $diproses)
                            <tr>
                              <td>
                                <a href="{{ route('permohonan.view', $diproses->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $diproses->getPermohonanID()  }}</a>
                              </td>
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
                            @endif

                            @if(Auth::user()->role == 3)
                            @foreach($listSedangProsesKP as $diproses)
                            <tr>
                              <td>
                                <a href="{{ route('permohonan.view', $diproses->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $diproses->getPermohonanID()  }}</a>
                              </td>
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
                            @endif
                          </tbody>

                        </table>
                      </div>
                </div>
            </div>
        </main>
@endsection
