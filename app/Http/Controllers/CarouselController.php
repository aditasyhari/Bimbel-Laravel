<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carousel = Carousel::orderBy('id', 'desc')->get();
        return view('admin.settings.slider.index', compact('carousel'));
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
        $path = public_path().'/app-assets/images/elements/';

        $banner = $request->banner;
        $banner_name = time().'_'.$banner->getClientOriginalName();
        $banner->move($path, $banner_name);

        Carousel::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'banner' => $banner_name,
        ]);

        return back()->with('status', 'Data berhasil ditambahkan !!');
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
        $data = Carousel::find($id);

        return json_encode($data);
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

    public function updateCarousel(Request $request) {
        $c = Carousel::find($request->id);

        $path = public_path().'/app-assets/images/elements/';

        if($request->banner != '') {
            $banner = $path.$c->banner;
            unlink($banner);

            $banner_new = $request->banner;
            $banner_name = time().'_'.$banner_new->getClientOriginalName();
            $banner_new->move($path, $banner_name);

            $c->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'banner' => $banner_name
            ]);

            return back()->with('status', 'Data berhasil diperbarui !!');
        } else {
            $c->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan
            ]);

            return back()->with('status', 'Data berhasil diperbarui !!');
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
        $path = public_path().'/app-assets/images/elements/';

        $c = Carousel::find($id);
        $banner = $path.$c->banner;
        unlink($banner);

        $c->destroy($id);

        return back()->with('status', 'Data berhasil dihapus !!');
    }
}
