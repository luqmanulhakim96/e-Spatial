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
                              <th class="all">SEBAB GAGAL</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($listPermohonanGagal as $baru2)
                          <tr>
                            <td>
                              <div style="padding : 4px;"></div>
                              <a href="{{ route('permohonan.view', $baru2->id) }}" style=" font-weight: 600; color: #d0183a !important;">{{ $baru2->getPermohonanID()  }}</a>
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->user->name}}
                            </td>
                            <td>
                              <div style="padding : 4px;"></div>
                              {{$baru2->created_at}}
                            </td>

                            @if($baru2->remarks_admin == null)
                            <td>
                              <a href="{{ route('permohonan.alasanGagal', $baru2->id) }}">
                                <button class="btn btn-warning mr-1">
                                  <i class="far fa-comment-alt"></i>
                                </button>
                              </a>
                            </td>
                            @else
                            <td>
                              <span>{{ $baru2->remarks_admin  }}</span>
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
