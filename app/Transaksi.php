<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'id');
    }

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id');
    }
}
