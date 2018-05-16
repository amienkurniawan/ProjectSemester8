@extends('layouts.layoutadmin')
@section('title')
  Hasil Analisa
@endsection
      @section('body')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Analisa Nilai</strong>
                        </div>
                        <div class="card-body">
                          <font size="1">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered ">
                              <thead>
                                <tr>

                                  <th class="text-center">NIM</th>
                                  @foreach ($kriteria as $key => $value)
                                  <th class="text-center">{{$value->kriteria}}</th>
                                  @endforeach
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($nilai[] as $key => $value)
                                  <tr>
                                    @foreach ( as $key => $value)

                                    @endforeach
                                  </tr>
                                @endforeach

                              </tbody>
                            </table>
                          </font>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
      @endsection
