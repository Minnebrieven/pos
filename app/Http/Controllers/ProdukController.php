<?php

namespace App\Http\Controllers;

use App\produk;
use App\MasterUnit;
use App\MasterCurr;
use App\MasterKat;
use App\MasterPpn;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit = MasterUnit::all();
        $curr = MasterCurr::all();
        $kategori = MasterKats::all();
        $produk = produk::all();
        $ppn = MasterPpn::all();

        return view('admin.produk.add', compact('produk','unit','curr','kategori','ppn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new produk();
        $produk->nama = $request->nama;
        $produk->unit = $request->unit;
        $produk->curr = $request->curr;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->disc = $request->disc;
        $produk->stok = $request->stok;
        $produk->barcode = rand(1111111111,9999999999);
        $produk->kategori = $request->kategori;
        $produk->kat = $request->kat;
        $produk->laba = $request->laba;
        $produk->ppn = $request->ppn;
        
        if($request->disc != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $persen = $minus * ($request->laba + $request->ppn) / '100';
            $produk->harga_jual = $persen + $minus;
        }else{
            $persen = $request->harga_beli * ($request->laba + $request->ppn) / '100';
            $produk->harga_jual = $request->harga_beli + $persen;
        }
        $produk->save();

        return redirect('admin/produk/')->with('sukses', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = MasterUnit::all();
        $curr = MasterCurr::all();
        $kategori = MasterKat::all();
        $ppn = MasterPpn::all();
        $produk = produk::find($id);

        return view('admin.produk.detail', compact('produk','unit','curr','kategori','ppn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $produk = produk::where('id', $request->id)->first();
        $produk->nama = $request->nama;
        $produk->unit = $request->unit;
        $produk->curr = $request->curr;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->disc = $request->disc;
        $produk->stok = $request->stok;
        $produk->kategori = $request->kategori;
        $produk->kat = $request->kat;
        $produk->laba = $request->laba;
        $produk->ppn = $request->ppn;
        
        if($request->disc != null){
            $diskon = $request->harga_beli * $request->diskon / '100';
            $minus = $request->harga_beli - $diskon;
            $persen = $minus * ($request->laba + $request->ppn) / '100';
            $produk->harga_jual = $persen + $minus;
        }else{
            $persen = $request->harga_beli * ($request->laba + $request->ppn) / '100';
            $produk->harga_jual = $request->harga_beli + $persen;
        }
        $produk->save();

        return redirect()->back()->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        $produk = produk::find($id);
        $produk->delete();
        return redirect('/admin/produk/')->with('sukses', 'Data berhasil dihapus');
    }
}
