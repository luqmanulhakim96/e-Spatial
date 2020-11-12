@extends('layouts.app')
@section('content')
      <!--Page Body part -->
            <div class="page-body p-4 text-dark">

                <div class="page-heading border-bottom d-flex flex-row">

                </div>

                <!-- Small card component -->

                <div class="card rounded-lg" style="border-color: #003473 !important;">
                  <div class="card-header" style="text-align:center; border-color: #003473 !important; font-size: 130%; font-weight: bold;">Pengumuman Baru</div>

                  <div class="card-body">
                    <form class="" action="{{route('pengumuman.submit')}}" method="post">
                    @csrf
                        <!-- <div class="card-title" style="text-align: center;">Pengumuman Baru</div> -->
                        <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <label >Tajuk</label>
                              <input type="text"  class="form-control bg-light @error('tajuk') is-invalid @enderror" name="tajuk"  required>
                              @error('tajuk')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-md-3">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-3">
                          </div>

                          <div class="col-md">
                            <div class="form-group">
                              <label for="">Kandungan</label>
                              <textarea id="sebab_gagal" class="form-control bg-light" name="content" rows="15" cols="50" required></textarea>
                            </div>
                          </div>

                          <div class="col-md-3">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-5">

                          </div>
                          <div class="col-md">
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Siarkan pengumuman ini??');">Simpan Pengumuman</button>
                          </div>
                          <div class="col-md-4">

                          </div>
                        </div>

                    </form>
                  </div>
                </div>
            </div>
        </main>

@endsection
