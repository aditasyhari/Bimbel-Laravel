<?php

namespace App\Http\Controllers;

use App\ProfileUser;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pengguna.profile');
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
     * @param  \App\ProfileUser  $profileUser
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileUser $profileUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfileUser  $profileUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = ProfileUser::find($id);
        // dd($user);

        return view('pengguna.edit-profile', compact(['user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfileUser  $profileUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $profile = ProfileUser::find($id);

        $profile->update($request->all());

        return back()->with('status', 'Data diri berhasil diperbarui');
    }

    public function updateProfile(Request $request, $id)
    {
        //
        $profile = ProfileUser::find($id);

        if($request->profile != '') {
            $path = public_path().'/app-assets/images/portrait/small/';

            // hapus foto profile lama
            if($profile->profile != 'default.jpg' && $profile->profile != null) {
                $pic_old = $path.$profile->profile;
                unlink($pic_old);
            }

            // upload foto profile baru
            $pic_new = $request->profile;
            $profile_name = time().'_'.$pic_new->getClientOriginalName();
            $pic_new->move($path, $profile_name);

            $profile->update([
                'foto' => $profile_name,
            ]);

            return back()->with('status', 'Foto Profile berhasil diperbarui !!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileUser  $profileUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileUser $profileUser)
    {
        //
    }
}
