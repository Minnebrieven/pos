@extends('layout.admin')
@section('content')

<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
                Barcode - {{$produk->barcode}}
            </div>
            <div class="card-body">
              <form action="/admin/produk/proses_detail" method="POST">
              @csrf
              <div class="form-group">
                <label for="inputNama">Nama Produk</label>
                <input name="nama" type="text" id="inputNama" class="form-control" value="{{$produk->nama}}">
              </div>
              <div class="form-group">
                <label for="inputUnit">Unit</label>
                <select name="unit" class="form-control custom-select">
                  <option value="{{$produk->unit->id}}" selected="">{{$produk->unit->nama}}</option>
                  @foreach($unit as $u)
                  <option value="{{$u->id}}">{{$u->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputCurrency">Currency</label>
                <select name="curr" class="form-control custom-select">
                  <option value="{{$produk->curr->id}}" selected="">{{$produk->curr->curr}}</option>
                  @foreach($curr as $c)
                  <option value="{{$c->id}}">{{$c->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputHargabeli">Harga Beli</label>
                <input name="harga_beli" type="text" id="inputHargabeli" class="form-control" value="{{$produk->harga_beli}}">
              </div>
              <div class="form-group">
                <label for="inputHargajual">Harga Jual</label>
                <input name="harga_jual" type="text" id="inputHargajual" class="form-control" value="{{$produk->harga_jual}}">
              </div>
              <div class="form-group">
                <label for="inputDisc">Diskon</label>
                <input name="disc" type="integer" id="inputDisc" class="form-control" value="{{$produk->disc}}">
              </div>
              <div class="form-group">
                <label for="inputKategori">Kategori</label>
                <select name="kategori" class="form-control custom-select">
                  <option value="{{$produk->kategori->id}}" selected="">{{$produk->kategori->kategori}}</option>
                  @foreach($kategori as $k)
                  <option value="{{$k->id}}">{{$k->nama}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputketerangan">Keterangan</label>
                <textarea name="ket" id="inputketerangan" class="form-control" rows="4">{{$produk->ket}}</textarea>
              </div>
              <div class="form-group">
                <label for="inputUntung">Untung</label>
                <input type="number" id="inputUntung" class="form-control" disabled value="{{$produk->untung}}">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-12">
            <div class="col-12">
                <a href="/admin/produk/" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-success float-right">Save Changes</button>
            </div>
        </div>
        </form>
    </section>

@endsection('content')