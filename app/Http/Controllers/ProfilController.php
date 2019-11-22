<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['infos'] = Profil::all();
        return view("profil.all",$d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('informasi_toko/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil = new Profil();
        $profil->nama_koperasi = $r->input('nama_koperasi');
        $profil->alamat_koperasi = $r->input('alamat_koperasi');
        $profil->keterangan = $r->input('keterangan');
        $profil->telepon = $r->input('telepon');
        
        $foto = $r->file('foto');
        $nama_foto = $foto->getClientOriginalName();
        $r->file('foto')->move('images', $nama_foto);
        
        $profil->foto = $nama_foto;
        $profil->save();

        return redirect('/informasi_toko');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profil::find($id);
        return redirect('informasi_toko/detail')->with('profil');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $r)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(profil $profil)
    {
        //
    }
}
