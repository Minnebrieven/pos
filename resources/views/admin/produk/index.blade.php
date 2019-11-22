@extends('layout.admin')
@section('content')

<div class="card">
<div class="card-header">
    <h3 class="card-title">Data Produk</h3>
</div>
<!-- /.card-header -->
<div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Unit</th>
                <th>Currency</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Kategori</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($produk as $p)
            <tr>
                <td>{{$p->nama}}</td>
                <td>{{$p->unit->nama}}</td>
                <td>{{$p->curr->curr}}</td>
                <td>{{$p->harga_beli}}</td>
                <td>{{$p->harga_jual}}</td>
                <td>{{$p->stok}}</td>
                <td>{{$p->kategori->kategori}}</td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{$p->id}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="/delete/{{$p->id}}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection