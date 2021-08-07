<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiUser extends Model
{
    //
    protected $guarded = ['id'];

    public function absensi() {
        return $this->belongsTo(Absensi::class, 'id');
    }
}
