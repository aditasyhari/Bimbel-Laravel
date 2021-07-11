<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Transaksi;
use App\Kelas;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $u = User::find($id);
        $transaksi = Transaksi::where('user_id', $id)->orderBy('updated_at', 'desc')->get();

        return view('pengguna.transaksi', compact(['u']));
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
        $this->validate($request, [
            'bukti' => 'file|max:2048',
        ]);

        $t = Transaksi::find($request->id);

        $path = public_path().'/app-assets/images/elements/bukti-tf/';

        if($t->bukti != null) {
            $pic_old = $path.$t->bukti;
            unlink($pic_old);

            $pic_new = $request->bukti;
            $foto_name = time().'_'.$pic_new->getClientOriginalName();
            $pic_new->move($path, $foto_name);

            $t->update([
                'bukti' => $foto_name,
                'status_bayar' => 'pending'
            ]);

            return back()->with('status', 'Bukti transfer sudah diunggah, tunggu konfirmasi dari Admin');
        } else {
            $pic_new = $request->bukti;
            $foto_name = time().'_'.$pic_new->getClientOriginalName();
            $pic_new->move($path, $foto_name);

            $t->update([
                'bukti' => $foto_name,
                'status_bayar' => 'pending'
            ]);

            return back()->with('status', 'Bukti transfer sudah diunggah, tunggu konfirmasi dari Admin');
        }
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
