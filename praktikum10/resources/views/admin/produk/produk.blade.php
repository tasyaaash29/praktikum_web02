@extends('admin.layout.appadmin')
@section('content')
@if (Auth::user()->role != 'pelanggan')
{{-- Disini Isi Konten --}}
@else
@include('admin.access_denied')
@endif  
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about
            DataTables, please visit the
            <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            @if (Auth::user()->role == 'admin')
            <a class="btn btn-primary" href="{{ url('produk/create') }}">Create</a>
        @endif
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>harga jual</th>
                        <th>harga beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>harga jual</th>
                        <th>harga beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori produk</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($produk as $p)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$p->kode}}</td>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->harga_jual}}</td>
                            <td>{{$p->harga_beli}}</td>
                            <td>{{$p->stok}}</td>
                            <td>{{$p->minimal}}</td>
                            <td>{{$p->deskripsi}}</td>
                            <td>{{$p->nama_kategori}}</td>
                            {{-- Buat tombol --}}
                            <td>
                                {{-- Buat tombol edit --}}
                                <a href="{{ url('produk/edit/' . $p->id) }}" class="btn btn-warning">Edit</a>
                                {{-- Buat tombol delete --}}
                                @if (Auth::user()->role == 'admin')
	        <a href="{{ url('produk/delete/' . $p->id) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk?')">Delete</a>
            @endif
                                  
                            </td>
                              <!--- nama_kategori diambil dari join yang ada di controller produk yang sudah dibuatkan join -->
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection