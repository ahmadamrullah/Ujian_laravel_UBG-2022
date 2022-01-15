@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Jurusan</div>

                <div class="card-body">
                <a href="{{route('mahasiswa.create')}}" class="btn btn-sm btn-primary mb-2">Tambah data</a>

                   <table class="table table-striped">
                   	<thead>
                   		<tr>
                   			<th>No</th>
                   			<th>nim</th>
                   			<th>Nama</th>
							<th>email</th>
							<th>jurusan</th>
                   			
                   		</tr>
                   	</thead>

                   	<?php $i=1; ?>
                   	<tbody>
                   	@foreach($mahasiswa as $mhs)
                   		<tr>
                   			<td>{{ $i++ }}</td>
                   			<td>{{ $mhs->nim }}</td>
                   			<td>{{ $mhs->nama }}</td>
							<td>{{ $mhs->email }}</td>
							<td>{{ $mhs->jurusan->nama_jrs }}</td>
                   			
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