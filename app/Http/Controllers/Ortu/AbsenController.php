<?php

namespace App\Http\Controllers\Ortu;

use App\Absensi;
use App\AbsensiUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $absen = Absensi::join('transaksis', function($join) {
            $join->on('absensis.id_kelas', '=', 'transaksis.kelas_id')
                ->where('transaksis.status_bayar', 'lunas');
        })->select('absensis.*')->get();

        $hadir = AbsensiUser::where('status', 'hadir')->count();
        $izin = AbsensiUser::where('status', 'ijin')->count();
        $tidak = AbsensiUser::where('status', 'tidak hadir')->count();

        // dd($absen);
        return view('ortu.absen',[
            "absen" => $absen,
            "hadir" => $hadir,
            "izin" => $izin,
            "tidak" => $tidak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
