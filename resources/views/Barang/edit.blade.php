@extends('layout')
@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Barang</li>
    </ol>
                        
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-edit mr-1"></i>Update Data Barang</div>
    <div class="card-body">
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('barang.update', $barang->id) }}" method="POST">
    @csrf
    @method('PUT')
  
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nama Barang:</label>
                <input type="text" name="namabarang" class="form-control" placeholder="Nama Barang">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Jumlah Barang:</strong>
                <input type="text" class="form-control" name="jumlah" placeholder="Harga Barang"></input>
            </div>
        </div>
        <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <input type="date" class="form-control" name="tglmasuk"></input>
            </div>
        </div>
        
        <div class="col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button> 
             <a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection