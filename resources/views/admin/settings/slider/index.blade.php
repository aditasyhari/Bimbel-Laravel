@extends('admin.layouts.master')
@section('title')
Slider Carousel
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">

        <div class="row" id="table-striped">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Carousel</h4>
                        <button type="button" id="add-carousel" class="btn btn-icon btn-outline-primary mr-1 mb-1" title="Tambah"><i class="feather icon-plus"></i></button>

                        <div class="modal fade text-left modal-carousel" tabindex="-1" role="dialog" aria-labelledby="cal-modal" aria-modal="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-text-bold-600" id="cal-modal">Add Carousel</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form id="form-add" action="{{ route('settings-carousel.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="d-flex justify-content-between align-items-center add-category">
                                                <div class="chip-wrapper"></div>
                                            </div>
                                            <fieldset class="form-label-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="banner" accept="image/*" required>
                                                        <label class="custom-file-label" for="inputGroupFile01">Banner</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <input type="text" class="form-control" id="cal-event-title"
                                                    placeholder="Judul" name="judul" required>
                                                <label for="cal-event-title">Judul</label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <textarea class="form-control" id="cal-description" rows="5"
                                                    placeholder="Keterangan" name="keterangan" required></textarea>
                                                <label for="cal-description">Keterangan</label>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary cal-add-event waves-effect waves-light" id="btn-add">Add</button>
                                            <button type="button"
                                                class="btn btn-flat-danger cancel-event waves-effect waves-light"
                                                data-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($carousel as $c)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td >
                                            <img style="max-width: 200px;" src="{{asset('app-assets/images/elements/'.$c->banner)}}" alt="Banner">
                                        </td>
                                        <td>{{ $c->judul }}</td>
                                        <td>
                                            <p>
                                                {{ $c->keterangan }}
                                            </p>
                                        </td>
                                        <td>
                                            <button type="button" class="edit btn btn-icon btn-outline-primary mr-1 mb-1" title="edit" data-id="{{ $c->id }}"><i class="feather icon-edit"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1" title="hapus" onclick="alertConfirm({{ $c->id }})"><i class="feather icon-trash-2"></i></button>
                                            <form id="delForm{{ $c->id }}" action="{{ route('settings-carousel.destroy', ['settings_carousel' => $c->id]) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="modal fade text-left modal-edit" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="cal-modal" aria-modal="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title text-text-bold-600" id="cal-modal">Update Carousel</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form id="form-add" action="{{ route('updateCarousel') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="d-flex justify-content-between align-items-center add-category">
                                                    <div class="chip-wrapper"></div>
                                                </div>
                                                <input type="hidden" id="edit-id" name="id" required>
                                                <fieldset class="form-label-group">
                                                    <label for="">Abaikan ini jika tidak mengganti gambar banner</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="banner" accept="image/*">
                                                            <label class="custom-file-label" for="inputGroupFile01">Banner</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-label-group">
                                                    <input type="text" class="form-control" id="edit-judul"
                                                        placeholder="Judul" name="judul" required>
                                                    <label for="cal-event-title">Judul</label>
                                                </fieldset>
                                                <fieldset class="form-label-group">
                                                    <textarea class="form-control" id="edit-keterangan" rows="5"
                                                        placeholder="Keterangan" name="keterangan" required></textarea>
                                                    <label for="cal-description">Keterangan</label>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary cal-add-event waves-effect waves-light" id="btn-add">Update</button>
                                                <button type="button"
                                                    class="btn btn-flat-danger cancel-event waves-effect waves-light"
                                                    data-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
<script>
    function alertConfirm(id) {
        var delID = '#delForm'+id;
        console.log(delID)
        swal({
            title: "Apakah anda yakin?",
            text: "Yakin menghapus Banner ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $(delID).submit();
            } else {
                swal("Banner tidak jadi dihapus!");
            }
        });
    }

    $('#add-carousel').click(function() {
        $('.modal-carousel').modal('show');
    });

    $(document).ready(function() {
        $('.edit').on("click", function() {
            var id = $(this).attr('data-id');

            $.ajax({
                url: '/admin/settings-carousel/'+id+'/edit',
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('#edit-id').val(data.id);
                    $('#edit-judul').val(data.judul);
                    $('#edit-keterangan').val(data.keterangan);
                    $('#modal-edit').modal('show');
                }
            })
        });
    });
</script>
@endpush