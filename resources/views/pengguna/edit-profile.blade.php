@extends('pengguna.layouts.master')
@section('title')
Edit Profile
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/app-user.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- page users view start -->
        <section class="page-users-view">
            <div class="row">
                <!-- account start -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Edit Profile</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="users-view-image">
                                    <img src="{{asset('/app-assets/images/portrait/small/'.Auth()->user()->profileUser->foto)}}"
                                        class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">

                                        <form id="formProfile" method="POST" action="{{ url('/siswa/profile/pic/update/'.Auth()->user()->profileUser->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group">
                                                <div class="mx-auto">
                                                    <div class="custom-file mt-2" 
                                                        style="
                                                            max-width: 200px;
                                                        "
                                                    >
                                                        <input type="file" class="custom-file-input" id="profile" name="profile" accept="image/*">
                                                        <label class="custom-file-label" for="customFile">Change</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                                <div class="col-12 col-md-12 col-lg-1">
                                </div>
                                <div class="col-12 col-sm-9 col-md-6 col-lg-7">
                                    <form method="POST" action="{{ route('profile.update', ['profile' => $user->id]) }}">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda" value="{{ $user->nama }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea type="text" class="form-control" id="alamat" name="alamat" rows="5" placeholder="Alamat Lengkap..." required>{{ $user->alamat }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="telp">Nomor HP (Whatsapp)</label>
                                            <input type="text" class="form-control" id="telp" name="no_hp" value="{{ $user->no_hp }}" placeholder="contoh: +6281234563xxx" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Wali</label>
                                            <input type="text" class="form-control" id="nama" name="nama_wali" value="{{ $user->nama_wali }}" placeholder="Nama wali anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">No. Hp Wali</label>
                                            <input type="text" class="form-control" id="nama" name="no_hp_wali" value="{{ $user->no_hp_wali }}" placeholder="contoh: +6281234563xxx" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Email</label>
                                            <input type="email" class="form-control" id="nama" name="email_wali" value="{{ $user->email_wali }}" placeholder="Email wali anda" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                                    </form>
                                </div>
                                <div class="col-12 col-md-12 col-lg-2">
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page users view end -->

    </div>
</div>
@endsection

@push('plugin-scripts')
<script src="{{asset('/app-assets/js/scripts/pages/app-user.js')}}"></script>

<script>
    document.getElementById('profile').onchange = function() {
        document.getElementById('formProfile').submit();
    }
</script>

@if(session('status'))
    <script>
        $(function() {
            $('#staticBackdrop').modal('show');
        });
    </script>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Berhasil !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                {{ session('status') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>
@endif
@endpush