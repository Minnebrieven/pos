@extends('layout.main')
@section('content')
<div class="card">
<div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <div class="dataTables_wrapper dt-bootstrap4" id="example1_wrapper"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" class="custom-select custom-select-sm form-control form-control-sm" aria-controls="example1"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div class="dataTables_filter" id="example1_filter"><label>Search:<input class="form-control form-control-sm" aria-controls="example1" type="search" placeholder=""></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable" id="example1" role="grid" aria-describedby="example1_info">
    <thead>
        <tr role="row"><th tabindex="0" class="sorting_asc" aria-controls="example1" style="width: 171.85px;" aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">Rendering engine</th><th tabindex="0" class="sorting" aria-controls="example1" style="width: 223.77px;" aria-label="Browser: activate to sort column ascending" rowspan="1" colspan="1">Browser</th><th tabindex="0" class="sorting" aria-controls="example1" style="width: 196.74px;" aria-label="Platform(s): activate to sort column ascending" rowspan="1" colspan="1">Platform(s)</th><th tabindex="0" class="sorting" aria-controls="example1" style="width: 145.97px;" aria-label="Engine version: activate to sort column ascending" rowspan="1" colspan="1">Engine version</th><th tabindex="0" class="sorting" aria-controls="example1" style="width: 103.31px;" aria-label="CSS grade: activate to sort column ascending" rowspan="1" colspan="1">CSS grade</th></tr>
    </thead>
    <tbody>
    @foreach($infos as $info)
        @if($loop->iteration % 2 == 0)
            <tr class="odd" role="row">
                <td class="sorting_1">{{$info->nama_koperasi}}</td>
                <td>{{$info->alamat_koperasi}}</td>
                <td>{{$info->keterangan}}</td>
                <td>{{$info->telepon}}</td>
                <td><img src="../image/{{$info->foto}}" alt=""></td>
                <td>{{$info->kode_pos}}</td>
                <td><i class="fa fa-edit"></td>
                <td><i class="fa fa-delete"></td>
        @else
            </tr><tr class="even" role="row">
                <td class="sorting_1">{{$info->nama_koperasi}}</td>
                <td>{{$info->alamat_koperasi}}</td>
                <td>{{$info->keterangan}}</td>
                <td>{{$info->telepon}}</td>
                <td><img src="../image/{{$info->foto}}" alt=""></td>
                <td>{{$info->kode_pos}}</td>
                <td><i class="fa fa-edit"></i></td>
                <td><i class="fa fa-delete"></td>
            </tr>
        @endif
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th rowspan="1" colspan="1">Nama Koperasi</th>
        <th rowspan="1" colspan="1">Alamat Koperasi</th>
        <th rowspan="1" colspan="1">Keterangan</th>
        <th rowspan="1" colspan="1">Telepon</th>
        <th rowspan="1" colspan="1">Foto</th>
        <th rowspan="1" colspan="1">Kode Pos</th></tr>
        <th rowspan="1" colspan="1">Action</th></tr>
    </tfoot>
    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 50 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a tabindex="0" class="page-link" aria-controls="example1" href="#" data-dt-idx="0">Previous</a></li><li class="paginate_button page-item active"><a tabindex="0" class="page-link" aria-controls="example1" href="#" data-dt-idx="1">1</a></li><li class="paginate_button page-item "><a tabindex="0" class="page-link" aria-controls="example1" href="#" data-dt-idx="2">2</a></li><li class="paginate_button page-item next" id="example1_next"><a tabindex="0" class="page-link" aria-controls="example1" href="#" data-dt-idx="3">Next</a></li></ul></div></div></div></div>
</div>
<!-- /.card-body -->
</div>
@endsection