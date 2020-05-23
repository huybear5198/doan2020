<!DOCTYPE html>
<html lang="en" ng-app='my-app'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Welcome User</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('user.header')
        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{ asset('admin/bower_components/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script src="{{ asset('admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
    <script>
            $(document).ready(function() {

            var table = $('#example').DataTable({
                "order": [ 7, "desc" ],
                "sDom": "Rlfrtip",
                "oLanguage": {
                    "sSearch": "Tìm kiếm",
                    "sLengthMenu": "Hiện _MENU_ sản phẩm",
                    "sEmptyTable": "Không có sản phẩm.",
                    "sInfo": "",
                    "oPaginate": {
                        "sFirst": "Trang đầu",
                        "sLast": "Trang cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Trước"
                    },
                },
            });
            $('.btn.btn-danger').on('click',function(){
                var id_product = $(this).attr('data-id')
                $('#confirm_delete').on('click',function(){
                    $.ajax({
                        type: "GET",
                        url: "../user/sanpham/delete/"+id_product,
                        dataType: "json",
                        success: function(response){
                            $(location).attr('href', '../user/sanpham/')
                        }
                    });
                });
            });
            $('#example_wrapper').on('click','.edit_button',function(){
                var id_product = $(this).attr('data-id');
                $.ajax({
                    type: "GET",
                    url: "../user/sanpham/edit/"+id_product,
                    dataType: "json",
                    success: function(response){
                        $('#editModal input.name').attr('value',response[0].name);
                        $(`#editModal .type_product option`).removeAttr('selected');
                        $(`#editModal .type_product option[value=${response[0].type_product}]`).attr('selected','selected');
                        $('#editModal input.description').attr('value',response[0].description);
                        $('#editModal input.quantity').attr('value',response[0].quantity);
                        $('#editModal input.price').attr('value',response[0].price);
                        $('#editModal input.city').attr('value',response[0].city);
                        $('#editModal input.district').attr('value',response[0].district);
                        $('#editModal input.sub_district').attr('value',response[0].sub_district);
                        $('#editModal input.street').attr('value',response[0].street);
                    }
                });
                $('#edit_form').off('click').on('submit',function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        headers: {
                            "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content"),
                        },
                        enctype: 'multipart/form-data',
                        data:new FormData(this),
                        url: "../user/sanpham/update/"+id_product,
                        dataType:'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(res){
                            $(location).attr('href', '../user/sanpham/')
                        }
                    });
                });
            });
        });
    </script>
</body>

</html>
