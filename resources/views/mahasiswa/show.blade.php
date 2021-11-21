@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Tampilan Data Mahasiswa {{$mahasiswa->nama}}</h2>
			<div class="pull-right">
            <a class="btn btn-primary" href="{{route('mahasiswa.index')}}">Kembali</a>
			</div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM : </strong>
            {{$mahasiswa->nim}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Mahasiswa : </strong>
            {{$mahasiswa->nama}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin : </strong>
            {{$mahasiswa->jk}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat : </strong>
            {{$mahasiswa->alamat}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota : </strong>
            {{$mahasiswa->kota}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email : </strong>
            {{$mahasiswa->email}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gambar : </strong>
            <img src="/image/{{$mahasiswa->gambar}}" width="500px">
        </div>
    </div>
</div>
@endsection