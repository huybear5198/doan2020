@extends('user.master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger" style="list-style:none;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a class="btn btn-primary" 
        style="cursor: pointer; float:right;margin-right:10px;" 
        data-toggle="modal" 
        data-target="#addModal">Thêm sản phẩm</a>
    <table id="products" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Loại sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Địa chỉ</th>
                <th>Ngày cập nhập</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type }}</td>
                    {{-- <td>{{ $product->image }}</td> --}}
                    <td><img src="{{ Voyager::image( $product->image ) }}" style="width:50px;height:50px;"></td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->location }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                        <a class="btn btn-primary edit_button" 
                            style="cursor: pointer; float:right;margin-right:10px;" 
                            data-toggle="modal" 
                            data-target="#editModal" data-id="{{ $product->id }}">Sửa</a>

                        <a class="btn btn-danger delete_button" 
                            style="cursor: pointer; float:right;margin-right:10px;" 
                            data-toggle="modal" 
                            data-target="#deleteModal" data-id="{{ $product->id }}">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModal">Thêm sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('create_product') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Sản phẩm</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type_product" class="col-md-4 col-form-label text-md-right">Loại sản phẩm</label>

                            <div class="col-md-6">
                                <select name="type_product" class="form-control" autofocus>
                                    @foreach ($category_all as $ct)
                                        <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Hình ảnh</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="image" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Mô tả</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="description" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Số lượng</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="quantity" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Giá</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="price" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">Thành Phố</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">Quận</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="district" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sub_district" class="col-md-4 col-form-label text-md-right">Phường</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sub_district" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street" class="col-md-4 col-form-label text-md-right">Đường</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tạo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModal">Sửa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" id="edit_form" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Sản phẩm</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control name" name="name" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type_product" class="col-md-4 col-form-label text-md-right">Loại sản phẩm</label>

                        <div class="col-md-6">
                            <select name="type_product" class="form-control type_product" autofocus>
                                @foreach ($category_all as $ct)
                                    <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label text-md-right">Hình ảnh</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control image" name="image" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Mô tả</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control description" name="description" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-right">Số lượng</label>

                        <div class="col-md-6">
                            <input type="number" class="form-control quantity" name="quantity" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">Giá</label>

                        <div class="col-md-6">
                            <input type="number" class="form-control price" name="price" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="city" class="col-md-4 col-form-label text-md-right">Thành Phố</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control city" name="city" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="district" class="col-md-4 col-form-label text-md-right">Quận</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control district" name="district" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sub_district" class="col-md-4 col-form-label text-md-right">Phường</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control sub_district" name="sub_district" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="street" class="col-md-4 col-form-label text-md-right">Đường</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control street" name="street" autofocus>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary confirm_edit">
                                Sửa
                            </button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModal">Xóa sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc muốn xóa sản phẩm này<span id="product_delete" style="font-weight: bold;"></span>?
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <button class="btn btn-primary" id="confirm_delete">Có</button>
                    <button class="btn btn-light border-dark" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
@stop
 