@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Jurusan</div>

                <div class="card-body">
                <a href="{{route('jurusan.create')}}" class="btn btn-sm btn-primary mb-2">Tambah data</a>

                   <table class="table table-striped">
                   	<thead>
                   		<tr>
                   			<th>No</th>
                   			<th>Kode Jurusan</th>
                   			<th>Nama Jurusan</th>
                   			<th>Aksi</th>
                   		</tr>
                   	</thead>

                   	<?php $i=1; ?>
                   	<tbody>
                   	@foreach($jurusans as $jrs)
                   		<tr>
                   			<td>{{ $i++ }}</td>
                   			<td>{{ $jrs->kd_jrs }}</td>
                   			<td>{{ $jrs->nama_jrs }}</td>
                   			<td>
                   				<a href="{{route('jurusan.edit', $jrs->id)}}" class="btn btn-sm btn-info">Edit</a>
                   				<a href="{{route('jurusan.destroy', $jrs->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                   			</td>
                   		</tr>

                   	@endforeach
                   	</tbody>

                   	<?php $i++; ?>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection