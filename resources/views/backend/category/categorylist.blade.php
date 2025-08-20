@extends('layouts/layoutMaster')


@section('title', 'Category')

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
  <h5 class="card-header">Category List</h5>
  <div class="d-flex justify-content-end me-md-4">
    <a href="{{ route('category-add') }}" type="button" class="btn btn-primary text-white me-3"> Add Category</a>
  </div>
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-category table">
      <thead>
        <tr>
        <th>#</th>
        <th>Name</th>
        <!-- <th>thumbnail</th> -->
        <!-- <th>alt</th> -->
        <th>Slug</th>
        <th>is_active</th>
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
$(document).ready(function (e) {
    var categoryEditRoute = "{{ route('category-edit', ':id') }}";
    
    var categoryTable = $('.datatables-category').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('category-list') }}",
            type: 'POST',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            error: function (xhr, error, thrown) {
                console.error('DataTables Ajax Error:', error);
                console.error('Response:', xhr.responseText);
                alert('Error loading data. Please check the console for details.');
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
                name: 'name',
                render: function (data) {
                    return '<span class="text-capitalize">' + data + '</span>';
                }
            },
            // {
            //     data: 'thumbnail',
            //     name: 'thumbnail',
            //     render: function (data, type, row) {
            //         if (data && data !== "") {
            //             return '<img src="{{ asset("storage/app/public/") }}/' + data + '" alt="' + (row.alt || '') + '" height="50" width="50" class="img-thumbnail" />';
            //         } else {
            //             return '<img src="{{ asset("assets/img/image_not_found.png") }}" height="50" width="50" class="img-thumbnail" />';
            //         }
            //     }
            // },
            // {
            //     data: 'alt',
            //     name: 'alt'
            // },
            { 
                data: 'slug',
                name: 'slug'
            },
            {
                data: 'is_active',
                name: 'is_active',
                render: function (data, type, row) {
                    var checked = data == 1 ? 'checked' : '';
                    return '<label class="switch"><input type="checkbox" class="switch-input" data-id="' + row.id + '" data-status="' + data + '" data-toggle="tooltip" title="Status" ' + checked + '><span class="switch-toggle-slider"></span></label>';
                }
            },
            {
                data: 'id',
                name: 'action',
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    var editButton = '<div class="btn-group" role="group">' +
                        '<a href="' + categoryEditRoute.replace(':id', data) + '" type="button" class="btn btn-sm btn-primary edit-btn"><i class="fa fa-edit"></i></a>' +
                        '<button type="button" id="deleteCategory" value="' + data + '" class="btn btn-sm btn-danger delete-btn"><i class="fa fa-trash"></i></button>' +
                        '</div>';
                    return editButton;
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
        //                 exportOptions: { columns: [0,1,2,3,4,5,6] }
        //             },
        //             {
        //                 extend: 'csvHtml5',
        //                 text: '<i class="ti ti-file-text me-1"></i>Csv',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5,6] }
        //             },
        //             {
        //                 extend: 'excelHtml5',
        //                 text: '<i class="ti ti-file-spreadsheet me-1"></i>Excel',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5,6] }
        //             },
        //             {
        //                 extend: 'pdfHtml5',
        //                 text: '<i class="ti ti-file-description me-1"></i>Pdf',
        //                 className: 'dropdown-item',
        //                 exportOptions: { columns: [0,1,2,3,4,5,6] }
        //             }
        //         ]
        //     }
        // ]
    });

    //delete category
    $(document).on("click","#deleteCategory",function(e){
        e.preventDefault();
        var category_id = $(this).val();
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                type: 'GET',
                url: "./category_delete/"+category_id,
                success: function(response) {
                    if(response.status === 200) {
                        categoryTable.draw(); // Refresh the table
                    } else if (response.status === 400) {
                        alert(response.error); 
                    }
                }
            });
        }
    });

    //status change
    $(document).on('change', '.switch-input', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var status = $(this).data('status');
        $.ajax({
            url: '{{url("status_category")}}/' + id + '/' + status,
            type: 'GET',
            success: function (response) {
                categoryTable.draw(); // Refresh the table
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
     // Add this after DataTable initialization
     $('#global-search').on('keyup', function() {
        contactshowTable.search(this.value).draw();
    });
});
</script>
@endsection