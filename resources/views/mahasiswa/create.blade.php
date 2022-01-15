@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Mahasiswa</div>

                <div class="card-body">
                  <form action="{{route('mahasiswa.store')}}" method="POST"  enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label>Masukan Nim</label>
                      <input type="text" name="nim" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control"></input>
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                      <select name="jurusan_id" class="form-control">
                        <option>Pilih!</option>
                        <?php foreach ($jurusan as $jrs ): ?>
                          <option value="{{$jrs->id}}">{{$jrs->nama_jrs}}</option>
                        <?php endforeach ?>
                      </select>
                    </div>

                    <div class="form-group">
                      <label>Upload Image</label>
                      <input type="file" name="image" class="form-control"></input>
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