@extends('mahasiswa.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Ubah Data Mahasiswa</h2>
			<div class="pull-right">
            <a class="btn btn-primary" href="{{route('mahasiswa.index')}}">Kembali</a>
			</div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Kesalahan</strong> Data yang anda inputkan ada yang salah.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM : </strong>
            <input type="text" name="nim" value="{{$mahasiswa->nim}}" class="form-control" placeholder="NIM anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
		<strong>Nama Mahasiswa :</strong>
            <input type="text" name="nama" value="{{$mahasiswa->nama}}" class="form-control" placeholder="Nama Mahasiswa">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin : </strong>
            <select id="jk" class="form-control form-select" name="jk" >
                <option value="L" <?php if ($mahasiswa[ 'jk']=="L" ): ?> selected="selected"
                    <?php endif; ?>>L</option>
                <option value="P" <?php if ($mahasiswa[ 'jk']=="P" ): ?> selected="selected"
                    <?php endif; ?>>P</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat : </strong>
            <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" class="form-control" placeholder="Alamat Anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota : </strong>
            <input type="text" name="kota" value="{{$mahasiswa->kota}}" class="form-control" placeholder="Kota Anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email : </strong>
            <input type="text" name="email" value="{{$mahasiswa->email}}" class="form-control" placeholder="Email Anda">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Gambar : </strong>
            <input type="file" name="gambar" class="form-control" placeholder="Gambar">
            <img src="/image/{{$mahasiswa->gambar}}" width="300px">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection