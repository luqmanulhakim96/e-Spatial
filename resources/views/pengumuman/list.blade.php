@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Senarai Pengumuman</div>

                  <div class="card-body">
                      <!-- <div class="card-title">Senarai Pengumuman</div> -->
                      <a class="btn btn-ripple btn-raised btn-primary m-2" href="{{ route('pengumuman.add') }}">Pengumuman Baru</a>

                      <div class="table-responsive">

                        <table class="table table-striped table-bordered" id="list_permohonan_baru_2" style="width: 100%;">

                          <thead>
                              <tr>
                                <th class="all">PENGUMUMAN ID</th>
                                <th class="all">TAJUK</th>
                                <th class="all">KANDUNGAN PENGUMUMAN</th>
                                <th class="all">TARIKH / WAKTU</th>
                                <th class="all">DIPAPARKAN OLEH</th>
                                <th class="all">STATUS</th>
                                <th class="all">TINDAKAN</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($list as $view)
                            <tr>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ $view->id }}
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ $view->tajuk }}
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ $view->content }}
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ Carbon\Carbon::parse($view->created_at)->format('d-m-Y H:i:s') }}
                              </td>
                              <td>
                                <div style="padding : 4px;"></div>
                                {{ $view->user2->name }}
                              </td>
                              @if($view->status == "1")
                              <td>
                                <div style="padding : 4px;"></div>
                                Aktif
                              </td>
                              @else
                              <td>
                                <div style="padding : 4px;"></div>
                                Tidak Aktif
                              </td>
                              @endif
                              <td class="p-3">
                                    <div class="d-flex flex-row justify-content-around align-items-center">
                                      @if($user->role == $view->user2->role)
                                        <a href="#" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        @else
                                        <a href="#" class="btn btn-dark mr-1"><i class="fas fa-pencil-alt"></i></a>
                                        @endif

                                        @if($user->role == 0 || $user->role == $view->user2->role)
                                        <a href="{{ route('pengumuman.delete', $view->id) }}" onclick="return confirm('Padam pengumuman ini??');"class="btn btn-danger"><i class="fas fa-times-circle"></i></a>
                                        @else
                                        <a href="#" class="btn btn-dark"><i class="fas fa-times-circle"></i></a>
                                        @endif
                                    </div>
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
