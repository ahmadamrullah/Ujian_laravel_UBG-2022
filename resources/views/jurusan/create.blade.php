@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Jurusan</div>

                <div class="card-body">
                  <form action="{{route('jurusan.store')}}" method="POST">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label>Kode Jurusan</label>
                      <input type="text" name="kd_jrs" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <label>Nama Jurusan</label>
                      <input type="text" name="nama_jrs" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection