@extends('admin.layouts.master')
@section('title')
List Siswa
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List Siswa</h4>
                            <a href="{{route('siswa.create')}}"
                                class="btn btn-icon btn-outline-primary float-right mr-1 mb-1" title="tambah siswa"><i
                                    class="feather icon-user-plus"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            @foreach ($user as $item)
                                            <tr>
                                                <td>{{ $item->profileUser->nama }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <div class="avatar mr-1 avatar-lg">
                                                        <img src="{{'/app-assets/images/portrait/small/'.$item->profileUser->foto}}"
                                                            alt="avtar img holder">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('siswa.edit',$item->id)}}"
                                                        class="btn btn-icon btn-outline-primary mr-1 mb-1">
                                                        <i class="feather icon-edit"></i>
                                                    </a>
                                                    <form action="{{route('siswa.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-icon btn-outline-danger  mr-1 mb-1">
                                                            <i class="feather icon-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection
@push('plugin-scripts')
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/app-assets/js/scripts/datatables/datatable.js')}}"></script>
@endpush
