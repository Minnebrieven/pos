@extends('layout.main')
@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Unit</h3>

            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th>Unit</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unit as $units)
            <tr>
                <td>{{$units->id}}</td>
                <td>{{$units->nama}}</td>
                <td><a href="/unit/edit/{{$units->id}}"><i class="fa fa-edit"></i></a></td>
                <td><a href="/unit/delete/{{$units->id}}"><i class="fa fa-times"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Currency</h3>

            <div class="card-tools">
                <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10px">ID</th>
                <th>Currency</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($curr as $currency)
            <tr>
                <td>{{$currency->id}}</td>
                <td>{{$currency->curr}}</td>
                <td><a href="/master/currency/edit/{{$currency->id}}"><i class="fa fa-edit"></i></a></td>
                <td><a href="/master/currency/delete/{{$currency->id}}"><i class="fa fa-times"></i></a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection