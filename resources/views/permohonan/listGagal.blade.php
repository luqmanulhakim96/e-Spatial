@extends('layouts.app')
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

                      <table class="table table-striped table-bordered" id="list_permohonan_gagal" style="width: 100%;">
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">NAMA PEMOHON</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">STATUS PERMOHONAN</th>
                              <th class="all">SEBAB GAGAL</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonanGagal as $baru2)
                          <tr onclick="document.location = '{{ route('permohonan.view', $baru2->id) }}';">
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->getPermohonanID()}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->user->created_at}}
                            </td>
                            @if($baru2->ulasan_penyokong_1 == null)
                            <td>Menunggu ulasan Penyokong 1</td>
                            @elseif($baru2->ulasan_penyokong_2 == null)
                            <td>Menunggu ulasan Penyokong 2</td>
                            @elseif($baru2->ulasan_ketua_pengarah == null)
                            <td>Menunggu ulasan Ketua Pengarah</td>
                            @else
                            <td>
                              <div style="padding : 4px;"></div>
                              <span class="badge badge-danger badge-pill" style="font-size: 100%;">{{ $baru2->status_permohonan  }}</span>
                            </td>
                            @endif
                            @if($baru2->remarks_admin == null)
                            <td>
                              <a href="{{ route('permohonan.alasanGagal', $baru2->id) }}">
                                <button class="btn btn-success mr-1">
                                  <i class="far fa-comment-alt"></i>
                                </button>
                              </a>
                            </td>
                            @else
                            <td>
                              <button class="btn btn-dark mr-1" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Alasan telah diberi">
                                <i class="far fa-comment-alt"></i>
                              </button>
                            </td>
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
