@extends('layouts/layoutMaster')

@section('title', 'Product')

@section('page-style')
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
  <h5 class="card-header">Product List</h5>
  <div class="d-flex justify-content-end me-md-4">
    <a href="{{ route('product-add') }}" class="btn btn-primary text-white me-3">Add Product</a>
  </div>
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-product table">
      <thead>
        <tr>
          <th>#</th>
          <th>Primary Title</th>
          <th>Secondary Title</th>
          <th>Category</th>
          <th>Thumbnail</th>
          <th>Alt</th>
          <th>Slug</th>
          <th>Is Active</th>
          <th>Is Show Home</th>
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
$(document).ready(function () {
    var productEditRoute = "{{ route('product-edit', ':id') }}";

    var productTable = $('.datatables-product').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "{{ route('product-list') }}",
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
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {
                data: 'primary_title',
                render: function (data) {
                    return '<span class="text-capitalize">' + data + '</span>';
                }
            },
            {
                data: 'secondary_title',
                render: function (data) {
                    return data ? '<span class="text-capitalize">' + data + '</span>' : '-';
                }
            },
            {
                data: 'category',
                render: function (data) {
                    return data ? '<span class="text-capitalize">' + data + '</span>' : '-';
                }
            },
            {
                data: 'thumbnail',
                render: function (data, type, row) {
                    if (data && data !== "") {
                        return '<img src="{{ asset("storage/") }}/' + data + '" alt="' + (row.alt || '') + '" height="50" width="50" class="img-thumbnail" />';
                    } else {
                        return '<img src="{{ asset("assets/img/image_not_found.png") }}" height="50" width="50" class="img-thumbnail" />';
                    }
                }
            },
            {
                data: 'alt',
                render: function (data) {
                    return data || '-';
                }
            },
            {
                data: 'slug'
            },
            {
                data: 'is_active',
                render: function (data, type, row) {
                    var checked = data == 1 ? 'checked' : '';
                    return '<label class="switch"><input type="checkbox" class="switch-input" data-id="' + row.id + '" data-status="' + data + '" data-toggle="tooltip" title="Status" ' + checked + '><span class="switch-toggle-slider"></span></label>';
                }
            },
            {
                data: 'is_show_home',
                render: function (data) {
                    return data == 1 
                        ? '<span class="badge bg-label-success">Yes</span>'
                        : '<span class="badge bg-label-danger">No</span>';
                }
            },

            {
                data: 'id',
                orderable: false,
                searchable: false,
                render: function (data) {
                    return '<div class="btn-group" role="group">' +
                        '<a href="' + productEditRoute.replace(':id', data) + '" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>' +
                        '<button type="button" id="deleteProduct" value="' + data + '" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>' +
                        '</div>';
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
        // ]
    });

    // Delete Product
    $(document).on("click", "#deleteProduct", function (e) {
        e.preventDefault();
        var productId = $(this).val();
        if (confirm("Are you sure you want to delete this?")) {
            $.ajax({
                type: 'GET',
                url: "./product_delete/" + productId,
                success: function (response) {
                    if (response.status === 200) {
                        productTable.draw(); // Refresh
                    } else if (response.status === 400) {
                        alert(response.error);
                    }
                }
            });
        }
    });

    // Toggle Active Status
    $(document).on('change', '.switch-input', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var status = $(this).is(':checked') ? 1 : 0;
        var $checkbox = $(this);
        
        $.ajax({
            url: '{{ url("status_product") }}/' + id + '/' + status,
            type: 'GET',
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                // Update the data-status attribute for future toggles
                $checkbox.data('status', status);
                productTable.draw();
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                // Revert the checkbox if there's an error
                $checkbox.prop('checked', !$checkbox.is(':checked'));
            }
        });
    });
});
</script>
@endsection
