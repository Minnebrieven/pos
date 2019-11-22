<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterUnit;
use App\MasterCurr;
use App\MasterKat;

class ConfigMasterController extends Controller
{
    public function allinone()
    {
        $kategori = MasterKat::all();
        $curr = MasterCurr::all();
        $unit = MasterUnit::all();

        return view('master.allinone', compact('unit','curr','kategori'));
    }
}
