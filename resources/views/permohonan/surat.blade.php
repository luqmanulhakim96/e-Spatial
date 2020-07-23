@extends('layouts.app')
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <!-- <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small> -->
                </div>
                <!-- Small card component -->

                <div class="card rounded-lg">
                  <div class="card-body">
                      <form action="{{ route('permohonan.print') }}" method="post" id="print_surat">
                        @csrf
                        <div class="row">
                          <div class="col-md-12">
                            <div class="card-title">Surat</div>
                              <!--jumlah harga input -->
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="nombor_rujukan">Nombor Rujukan</label>
                                          <input type="text" class="form-control bg-light" name="nombor_rujukan" id="nombor_rujukan" aria-describedby="nombor_rujukan" placeholder="" value="{{ $surat->nombor_rujukan }}">
                                          <small id="nombor_rujukan" class="form-text text-secondary"></small>
                                      </div>
                                      @error('nombor_rujukan')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="tarikh">Tarikh</label>
                                          <input type="date" class="form-control bg-light" name="tarikh" id="tarikh" aria-describedby="tarikh" placeholder="" value="{{ $surat->tarikh }}">
                                          <small id="tarikh" class="form-text text-secondary"></small>
                                      </div>
                                      @error('tarikh')
                                      <div class="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                      </div>
                                      @enderror
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status_pembayaran">Surat - Status Pembayaran</label>
                                    <select id="status_pembayaran" class="custom-select  bg-light @error('status_pembayaran') is-invalid @enderror" name="status_pembayaran" value="{{ $surat->status_pembayaran }}" autofocus>
                                          <option value="bayaran" {{ $surat->status_pembayaran == "bayaran" ? 'selected' : '' }} >Bayaran</option>
                                          <option value="pengecualian_bayaran" {{ $surat->status_pembayaran == "pengecualian_bayaran" ? 'selected' : '' }} >Pengecualian Bayaran</option>
                                      </select>
                                </div>
                                @error('status_pembayaran')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group form-inline justify-content-center">
                                    <!-- <label for="testing">Kandungan</label> -->
                                    <textarea type="text" class="form-control bg-light" name="kandungan" id="kandungan" aria-describedby="kandungan" placeholder="" form="senarai_surat_submit">{{ $surat->kandungan }}</textarea>
                                    <small id="testing" class="form-text text-secondary"></small>
                                </div>
                                @error('kandungan')
                                <div class="alert alert-danger">
                                  <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <button type="submit" id="submit_data" class="btn btn-primary">Cetak</button>
                            <a class="btn btn-primary m-2 disabled" id="selesai" href="{{ route('permohonan.list') }}" >Selesai</a>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </main>
        <script type="text/javascript">
          $(document).ready(function() {
              $(document).on('submit', '#print_surat', function() {
                  $('#submit_data').html('<i class="fa fa-download"></i>');
                  $('#submit_data').attr('disabled', 'disabled');
                  $('#selesai').removeClass( "disabled" );
              });
          });
        </script>
        <script>
            tinymce.init({
                selector:'#kandungan',
                // inline: true5
                width: 794,
                // width: 794,
                height: 1000,
                plugins: "pagebreak",
                // menubar: "insert",
                // toolbar: "pagebreak"
            });
        </script>
@endsection
