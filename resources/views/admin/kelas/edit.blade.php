@extends('admin.layouts.master')
@section('title')
Edit Kelas Dasapratama
@endsection
@push('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/file-uploaders/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/file-uploaders/dropzone.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-list-view.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Data list view starts -->
        <section id="data-thumb-view" class="data-thumb-view-header">

            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                <div class="card">
                    <form action="{{ route('kelas.update', ['kela' => $k->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Edit Kelas</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-edit"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-2">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col mb-2">
                                            <label for="data-name">Nama Kelas</label>
                                            <input type="text" class="form-control" id="data-name" name="nama_kelas" value="{{ $k->nama_kelas }}" required>
                                        </div>
                                        <img src="{{ asset('app-assets/images/thumbnail/kelas/'.$k->thumbnail) }}" alt=""
                                            style="
                                                max-width: 250px;
                                            "
                                        >
                                        <div class="col-sm-12 data-field-col mb-2">
                                            <label for="data-name">Thumbnail Kelas</label><br>
                                            <label class="text-secondary">(abaikan jika tidak ingin menggani thumbnail)</label>
                                            <input type="file" class="form-control" id="data-name" name="thumbnail">
                                        </div>
                                        <div class="col-sm-12 data-field-col mb-2">
                                            <label for="data-category"> Kategori </label>
                                            <select class="form-control" id="data-category" name="kategori" required>
                                                <option disabled>Pilih</option>
                                                <option value="sd/mi" @if($k->kategori == 'sd/mi') selected @endif>SD / MI</option>
                                                <option value="smp/mts" @if($k->kategori == 'smp/mts') selected @endif>SMP / MTS</option>
                                                <option value="sma/ma-ipa" @if($k->kategori == 'sma/ma-ipa') selected @endif>SMA / MA - IPA</option>
                                                <option value="sma/ma-ips" @if($k->kategori == 'sma/ma-ips') selected @endif>SMA / MA - IPS</option>
                                                <option value="sbmptn" @if($k->kategori == 'sbmptn') selected @endif>SBMPTN</option>
                                                <option value="kedinasan" @if($k->kategori == 'kedinasan') selected @endif>KEDINASAN / IKATAN DINAS</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col mb-2">
                                            <label for="data-status">Kategori Kelas</label>
                                            <select class="form-control" id="data-status" name="kategori_kelas" required>
                                                <option disabled>Pilih</option>
                                                <option value="regular" @if($k->kategori_kelas == 'regular') selected @endif>Regular</option>
                                                <option value="terbatas" @if($k->kategori_kelas == 'terbatas') selected @endif>Terbatas</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col mb-2">
                                            <label for="data-price">Harga</label>
                                            <input type="text" class="form-control" id="data-price" onkeypress="return onlyNumberKey(event)" name="harga" value="{{ $k->harga }}" required>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Deskripsi Kelas</label>
                                            <textarea name="desc" id="desc" cols="30" rows="10">{{ $k->desc }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-start px-3 pb-3">
                                <div class="add-data-btn">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <a href="{{ route('kelas.index') }}" class="btn btn-outline-danger ml-2">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

        </section>
        <!-- Data list view end -->

    </div>
</div>    
@endsection

@push('plugin-scripts')
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('app-assets/js/scripts/ui/data-list-view.js')}}"></script>

<script>
    function alertConfirm(id) {
        var delID = '#delForm'+id;
        console.log(delID)
        swal({
            title: "Apakah anda yakin?",
            text: "Yakin menghapus Kelas ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $(delID).submit();
            } else {
                swal("Kelas tidak jadi dihapus!");
            }
        });
    }

    function onlyNumberKey(evt) {
         
         // Only ASCII character in that range allowed
         var ASCIICode = (evt.which) ? evt.which : evt.keyCode
         if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
             return false;
         return true;
    }

    tinymce.init({
        selector: 'textarea#desc',
        height: 300,
        plugins: [
        'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'table emoticons template paste help fullscreen'
        ],
        toolbar: 'styleselect fullscreen | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link print preview media fullpage | ' +
        'forecolor backcolor emoticons | help',
        menubar: 'file edit format tools table',
    });

</script>
@endpush