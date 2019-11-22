<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public function unit()
    {
        return $this->belongsTo(MasterUnit::class, 'unit_id');
    }

    public function curr()
    {
        return $this->belongsTo(MasterCurr::class, 'curr_id');
    }

    public function kategori()
    {
        return $this->belongsTo(MasterKat::class, 'kategori_id');
    }
}
