@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <div class="card-title">Senarai Pemohonan</div>
                      <a class="btn btn-primary m-2" href="{{ route('user.add') }}">Pemohonan Baru</a>
                      <table class="table table-striped table-bordered" id="list_permohonan_user" style="width: 100%;">
                        <!-- Table head -->
                        <thead>
                            <tr>
                              <th class="all">PERMOHONAN ID</th>
                              <th class="all">TARIKH PERMOHONAN</th>
                              <th class="all">STATUS PERMOHONAN</th>
                              <th class="all">STATUS PEMBAYARAN</th>
                              <th class="all">UPDATE PERMOHONAN</th>
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                          @foreach($list as $data)
                          <tr>
                            <td><a href="#" data-toggle="modal" data-target="#display_data_permohonan" data-value="{{ $data->id  }}">{{ $data->id  }}</a></td>
                            <td>{{ Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i:s') }}</td>
                            <td>{{ $data->status_permohonan  }}</td>
                            <td>{{ $data->status_pembayaran  }}</td>
                            <td class="p-3">
                                  <div class="d-flex flex-row justify-content-around align-items-center">
                                      <a href="{{ route('user.edit', $data->id) }}" class="btn btn-success mr-1"><i class="fas fa-pencil-alt"></i></a>
                                  </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                      <div class="modal fade" id="display_data_permohonan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Senarai Data Yang Dipohon</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">

                                <p> {{}}</p>

                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                          </div>
                          </div>
                      </div>

                  </div>
                </div>
            </div>
        </main>
@endsection
