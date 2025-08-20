@extends('layouts/layoutMaster')


@section('title', 'Join our team')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
@endsection

@section('page-style')
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/datatables-buttons/js/buttons.print.min.js') }}"></script>
@endsection

@section('content')

<div class="card">
  @include('layouts.messages')
  <h5 class="card-header">Join our team List</h5>
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-joinourteam table">
      <thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
        <th>Action</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>
@endsection

@section('page-script')
<script type="text/javascript">
var joinourteamViewRoute = "{{ route('view-joinourteam', ':id') }}";

$(document).ready(function() {
    var joinourteamTable = $('.datatables-joinourteam').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('joinourteam-list') }}",
            type: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            }
        },
        scrollX: true,
        ordering: false,
        dom: '<"row"' + 
             '<"col-md-2"<"me-3"l>>' + 
             '<"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"f>>' + 
             '>t' + 
             '<"row mx-2"' + 
             '<"col-sm-12 col-md-6"i>' + 
             '<"col-sm-12 col-md-6"p>' + 
             '>',
        displayLength: 10,
        lengthMenu: [10, 25, 50, 75, 100],
        columns: [
            {
                data: null,
                name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { 
                data: 'name',
                name: 'name' 
            },
            { 
                data: 'email',
                name: 'email' 
            },
            {
                data: 'phone',
                name: 'phone',
                render: function(data, type, row) {
                    if (data) {
                        const phoneNumber = data.replace(/\D/g, '');
                        return `<a href="https://wa.me/${phoneNumber}" target="_blank" class="text-success">
                                    <i class="fab fa-whatsapp me-1"></i>${data}
                                </a>`;
                    }
                    return 'N/A';
                }
            },
            { 
                data: 'message',
                name: 'message' 
            },
            {
                data: 'id',
                name: 'action',
                render: function (data, type, row) {
                    var viewButton = `<a href="${joinourteamViewRoute.replace(':id', data)}" 
                                       type="button" 
                                       class="btn btn-sm btn-primary view-btn">
                                       <i class="fa fa-eye"></i>
                                    </a>`;
                    return `<div class="btn-group" role="group">${viewButton}</div>`;
                }
            }
        ],
        // buttons: [
        //     {
        //         extend: 'collection',
        //         className: 'btn btn-label-primary dropdown-toggle me-2',
        //         text: '<i class="ti ti-file-export me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span>',
        //         buttons: [
        //             {
        //                 extend: 'print',
        //                 text: '<i class="ti ti-printer me-1"></i>Print',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5] }
        //             },
        //             {
        //                 extend: 'csvHtml5',
        //                 text: '<i class="ti ti-file-text me-1"></i>Csv',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5] }
        //             },
        //             {
        //                 extend: 'excelHtml5',
        //                 text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5] }
        //             },
        //             {
        //                 extend: 'pdfHtml5',
        //                 text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5] }
        //             }
        //         ]
        //     }
        // ],
    });

    // Global search handler
    $('#global-search').on('keyup', function() {
        joinourteamTable.search(this.value).draw();
    });
});
</script>
@endsection