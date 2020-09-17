@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan Baru</div>
                      <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="list_permohonan_baru" style="width: 100%;">

                        <thead>
                            <tr>
                              <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">PERMOHONAN ID</p></div></th>
                              <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">NAMA PEMOHON</p></div></th>
                              <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">KATEGORI</p></div></th>
                              <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">TARIKH PERMOHONAN</p></div></th>
                              <th class="all"><div class="d-flex flex-row justify-content-around align-items-center"><p class="mb-0 font-weight-bold">SURAT PERMOHONAN</p></div></th>
                              <!-- <th class="all">PRINT</th> -->
                            </tr>
                        </thead>

                        <tbody>

                          @if($userInfo->role == 0)

                          @foreach($listPermohonanBaru as $baru)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px; "></div>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                {{ $baru->user->name  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                {{ $baru->user->kategori  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{ Carbon\Carbon::parse($baru->created_at)->format('d-m-Y H:i:s') }}
                            </td>
                            <td>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                  <a href="{{route('permohonan.download.surat_permohonan',$baru->id)}}" class="btn btn-success mr-1"><i class="fa fa-download"></i></a>
                              </div>
                              <!-- <button class="btn btn-success">
                                <a class="fa fa-download"  href="{{route('permohonan.download.surat_permohonan',$baru->id)}}"></a>
                              </button> -->
                            </td>
                            <!-- <td class="p-3">
                                  <div class="d-flex flex-row justify-content-around align-items-center">
                                      <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                  </div>
                            </td> -->
                          </tr>
                          @endforeach

                          @elseif($userInfo->role == 1)

                          @foreach($listPermohonanBaru_p1 as $baru)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                {{ $baru->user->name  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                {{ $baru->user->kategori  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{ Carbon\Carbon::parse($baru->created_at)->format('d-m-Y H:i:s') }}
                            </td>
                            <td>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                  <a href="{{route('permohonan.download.surat_permohonan',$baru->id)}}" class="btn btn-success mr-1"><i class="fa fa-download"></i></a>
                              </div>
                            </td>

                            <!-- <td class="p-3">
                                  <div class="d-flex flex-row justify-content-around align-items-center">
                                      <a href="#" class="fa fa-print"><i class="fas fa-times-circle"></i></a>
                                  </div>
                            </td> -->
                          </tr>
                          @endforeach

                          @elseif($userInfo->role == 2)

                          @foreach($listPermohonanBaru_p2 as $baru)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                {{ $baru->user->name  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                {{ $baru->user->kategori  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{ Carbon\Carbon::parse($baru->created_at)->format('d-m-Y H:i:s') }}
                            </td>
                            <td>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                  <a href="{{route('permohonan.download.surat_permohonan',$baru->id)}}" class="btn btn-success mr-1"><i class="fa fa-download"></i></a>
                              </div>
                            </td>
                          </tr>
                          @endforeach

                          @elseif($userInfo->role == 3)

                          @foreach($listPermohonanBaru_kp as $baru)
                          <tr onclick="document.location = '{{ route('permohonan.view', $baru->id) }}';">
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                {{ $baru->user->name  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              <div class="d-flex flex-row justify-content-around align-items-center" style="text-transform:capitalize;">
                                {{ $baru->user->kategori  }}
                              </div>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{ Carbon\Carbon::parse($baru->created_at)->format('d-m-Y H:i:s') }}
                            </td>
                            <td>
                              <div class="d-flex flex-row justify-content-around align-items-center">
                                  <a href="{{route('permohonan.download.surat_permohonan',$baru->id)}}" class="btn btn-success mr-1"><i class="fa fa-download"></i></a>
                              </div>
                            </td>
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
