<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    //
    protected $guarded = ['id'];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'id');
    }

    public function user() {
        return $this->belongsToMany(User::class, 'absensi_users');
    }

    public function absensiUser() {
        return $this->hasMany(AbsensiUser::class, 'absensi_id');
    }
}
