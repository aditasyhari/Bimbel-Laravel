@extends('pengguna.layouts.master')
@section('title')
Jadwal Siswa
@endsection
@push('plugin-styles')
<!-- BEGIN: Vendor CSS-->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}"> -->
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/fullcalendar.min.css')}}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/daygrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/calendars/extensions/timegrid.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/calendars/fullcalendar.css')}}"> -->
<!-- END: Page CSS-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<style>
    span.fc-title {
        color: white;
    }
</style>
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Full calendar start -->
        <section id="basic-examples">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2>Jadwal Kelas</h2>
                                    <div>
                                        <span class="border border-secondary rounded-circle" style="background-color: darkorange; padding: 3px 12px;"></span>
                                        <span class="ml-1 mr-2">Terbatas</span>
                                        <span class="border border-secondary rounded-circle" style="background-color: navy; padding: 3px 12px;"></span>
                                        <span class="ml-1">Regular</span>
                                    </div>
                                </div>
                                <hr>
                                
                                <!-- <div id='fc-default'></div> -->
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- // Full calendar end -->

    </div>
</div>
@endsection
@push('plugin-scripts')

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<!-- <script src="{{asset('app-assets/vendors/js/calendar/fullcalendar.min.js')}}"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<!-- <script src="{{asset('app-assets/fullcalendar/lib/main.min.js')}}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/bootstrap/main.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- <script src="{{asset('app-assets/vendors/js/calendar/extensions/daygrid.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/calendar/extensions/timegrid.min.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/calendar/extensions/interactions.min.js')}}"></script> -->
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<!-- <script src="{{asset('app-assets/js/scripts/extensions/fullcalendar.js')}}"></script> -->
<!-- END: Page JS-->

<script>

var site_url = "/siswa/jadwal-siswa"

document.addEventListener('DOMContentLoaded', function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: site_url,
        displayEventTime: false,
        editable: true,
        eventColor: ['black', 'pink'],
        eventRender: function(event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                // console.log(event)
                if(event.kategori_kelas == 'terbatas') {
                    element.css("background-color", 'darkorange');
                } else {
                    element.css("background-color", 'navy');
                }
                event.allDay = false;
            }
        },
        // selectable: true,
        // selectHelper: true,
        // select: function(start, end, allDay) {

        //     var title = prompt('Jadwal Title:');
        //     if(title != null) {
        //         var desc = prompt('Desc:');
        //     }
        //     // $(".modal-calendar").modal("show");
        //     if(title) {
        //         // var title = document.getElementById('cal-event-title').value;
        //         // var desc = document.getElementById('cal-description').value;
        //         var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
        //         var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
        //         $.ajax({
        //             url: site_url + "/jadwal",
        //             data: {
        //                 title: title,
        //                 start: start,
        //                 end: end,
        //                 desc: desc,
        //                 type: 'add'
        //             },
        //             type: "POST",
        //             success: function(data) {
        //                 displayMessage("Jadwal berhasil ditambahkan !");

        //                 calendar.fullCalendar('renderEvent', {
        //                     id: data.id,
        //                     title: title,
        //                     start: start,
        //                     end: end,
        //                     allDay: allDay
        //                 }, true);

        //                 calendar.fullCalendar('unselect');
        //                 $('.modal-calendar').modal('hide');
        //             }
        //         });
        //     }
        // },

        // eventDrop: function(event, delta) {
        //     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
        //     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

        //     $.ajax({
        //         url: site_url + '/jadwal',
        //         data: {
        //             title: event.title,
        //             start: start,
        //             end: end,
        //             id: event.id,
        //             type: 'update'
        //         },
        //         type: "POST",
        //         success: function(response) {

        //             displayMessage("Jadwal berhasil diupdate !");
        //         }
        //     });
        // },

        // eventClick: function(event) {
        //     var deleteMsg = confirm("Yakin menghapus jadwal?");
        //     if (deleteMsg) {
        //         $.ajax({
        //             type: "POST",
        //             url: site_url + '/jadwal',
        //             data: {
        //                 id: event.id,
        //                 type: 'delete'
        //             },
        //             success: function(response) {

        //                 calendar.fullCalendar('removeEvents', event.id);
        //                 displayMessage("Event Deleted Successfully");
        //             }
        //         });
        //     }
        // }

    });

});

// $("#btn-add").click(function(){
//     console.log(1)
//     var title = document.getElementById('cal-event-title').value;
//     var desc = document.getElementById('cal-description').value;
//     var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
//     var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
//     $.ajax({
//         url: site_url + "/jadwal",
//         data: {
//             title: title,
//             start: start,
//             end: end,
//             desc: desc,
//             type: 'add'
//         },
//         type: "POST",
//         success: function(data) {
//             displayMessage("Jadwal berhasil ditambahkan !");

//             calendar.fullCalendar('renderEvent', {
//                 id: data.id,
//                 title: title,
//                 start: start,
//                 end: end,
//                 allDay: allDay
//             }, true);

//             calendar.fullCalendar('unselect');
//             $('.modal-calendar').modal('hide');
//         }
//     });
// });

function displayMessage(message) {
    toastr.success(message, 'Event');
}

</script>
@endpush
