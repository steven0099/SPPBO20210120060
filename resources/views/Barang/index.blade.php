@extends('layout')
@section('content')

<div class="card mb-4">
<div class="card-header"><i class="fas fa-table mr-1"></i>Data Barang</div>
<div class="card-body">
<div class="table-responsive">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<a class="btn btn-success" href="{{ route('barang.create') }}">Tambah Data Barang</a><p></p>

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr align="center">
        <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th width="14%">Action</th>
    </tr>
</thead>

<tfoot>
    <tr>
        <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Tanggal Masuk</th>
            <th>Action</th>
    </tr>
</tfoot>
        <tbody>
            @foreach ($barangs as $barang)
        <tr>
            
            <td>{{ ++$i }}</td>
            <td>{{ $barang->namabarang }}</td>
            <td>{{ $barang->jumlah }}</td>
            <td>{{ $barang->tglmasuk }}</td>
            <td>
            <form action="{{ route('barang.destroy',$barang->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
            <a class="btn btn-warning" href="{{ route('barang.edit',$barang->id) }}">Ubah</a>
            <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
</div>
</div>
</div>
      
@endsection

