<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas = Kelas::orderBy('nama_kelas', 'asc')->get();

        return view('admin.kelas.index', compact(['kelas']));
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
        if($request->thumbnail != '') {
            $path = public_path().'/app-assets/images/thumbnail/kelas/';
            
            $thumbnail = $request->thumbnail;
            $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
            $thumbnail->move($path, $thumbnail_name);
            
            Kelas::create([
                'nama_kelas' => $request->nama_kelas,
                'thumbnail' => $thumbnail_name,
                'desc' => $request->desc,
                'harga' => $request->harga,
                'kategori' => $request->kategori,
                'kategori_kelas' => $request->kategori_kelas,
            ]);

            return back()->with('status', 'Data Kelas berhasil disimpan');
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
        $k = Kelas::find($id);

        return view('admin.kelas.edit', compact(['k']));
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
        $kelas = Kelas::find($id);

        if($request->thumbnail != '') {
            $path = public_path().'/app-assets/images/thumbnail/kelas/';
            
            $thumbnail = $request->thumbnail;
            $thumbnail_name = time().'_'.$thumbnail->getClientOriginalName();
            $thumbnail->move($path, $thumbnail_name);

            $thumbnail_old = $path.$kelas->thumbnail;
            if($thumbnail_old != '' || $thumbnail_old != null) {
                unlink($thumbnail_old);
            }
            
            $kelas->update([
                'nama_kelas' => $request->nama_kelas,
                'thumbnail' => $thumbnail_name,
                'desc' => $request->desc,
                'harga' => $request->harga,
                'kategori' => $request->kategori,
                'kategori_kelas' => $request->kategori_kelas,
            ]);

            return back()->with('status', 'Data Kelas berhasil diperbarui');
        } else {
            $kelas->update($request->all());
            return back()->with('status', 'Data Kelas berhasil diperbarui');
        }


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
        $path = public_path().'/app-assets/images/thumbnail/kelas/';

        $kelas = Kelas::find($id);
        $thumbnail = $path.$kelas->thumbnail;
        if($thumbnail != '' || $thumbnail != null) {
            unlink($thumbnail);
        }

        Kelas::destroy($id);

        return back()->with('status', 'Data Kelas berhasil dihapus!!');
    }
}
