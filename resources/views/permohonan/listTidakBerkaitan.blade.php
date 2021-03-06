@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Permohonan Tidak Berkaitan</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Permohonan Tidak Berkaitan</div> -->

                      <div class="table-responsive">

                      <table class="table table-striped table-bordered" id="list_permohonan_gagal" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">KATEGORI PEMOHON</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">TARIKH MAKLUMAN</th>
                              <th class="all">ULASAN</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonanTidakBerkaitan as $data)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $data->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $data->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              @if($data->user->kategori == 'kementerian')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                KEMENTERIAN
                              </div>
                              @elseif($data->user->kategori == 'agensi')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                AGENSI
                              </div>
                              @elseif($data->user->kategori == 'penyelidik')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                PENYELIDIK
                              </div>
                              @elseif($data->user->kategori == 'institut')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                INSTITUT PENGAJIAN TINGGI
                              </div>
                              @elseif($data->user->kategori == 'awam')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                ORANG AWAM
                              </div>
                              @elseif($data->user->kategori == 'dalaman')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                WARGA JPSM
                              </div>
                              @elseif($data->user->kategori == 'lain')
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                LAIN-LAIN
                              </div>
                              @endif
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$data->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$data->created_at}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$data->updated_at}}
                            </td>
                            <td>
                              {{$data->remarks_admin}}
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
