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
    <table id="purchase_history" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Giao dịch với</th>
                <th>Loại giao dịch</th>
                <th>Ngày cập nhập</th>
                <th>Tình trạng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($purchase_history as $one)
                <tr>
                    <td>{{ $one->name }}</td>
                    <td><img src="{{ Voyager::image( $one->image ) }}" style="width:50px;height:50px;"></td>
                    <td style="color: #c90927;">{{ number_format($one->price) }} VNĐ</td>
                    <td>{{ $one->quantity }}</td>
                    @if(isset($one->buyer))
                        <td>{{ $one->buyer }}</td>
                        <td>Bán</td>
                    @endif
                    @if(isset($one->seller))
                        <td>{{ $one->seller }}</td>
                        <td>Mua</td>
                    @endif
                    <td>{{ $one->updated_at }}</td>
                    @if($one->status == 0)
                        <td>Đã hủy giao dịch</td>
                    @elseif($one->status == 1)
                        <td>Đang chờ giao dịch</td>                        
                    @elseif($one->status == 2)
                        <td>Hoàn thành</td>                        
                    @else
                        <td>Lỗi</td>
                    @endif
                    <td style="padding:0; float:center;">
                        <a class="btn btn-primary complete_purchase" 
                            style="cursor: pointer; margin-right: 10px;" 
                            data-toggle="modal" 
                            data-target="#completeModal" data-id="{{ $one->id }}" data-status="complete"
                            @if(($one->status == 0 || $one->status == 2) || ($one->status==1 && isset($one->seller))) disabled @endif>Hoàn thành</a>
                        <a class="btn btn-danger cancel_purchase" 
                                style="cursor: pointer;" 
                                data-toggle="modal" 
                                data-target="#cancelModal" data-id="{{ $one->id }}" data-status="cancel"
                                @if(($one->status == 0 || $one->status == 2) || ($one->status==1 && isset($one->seller))) disabled @endif>Hủy</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="completeModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="completeModalTitle">Xác nhận hoàn thành giao dịch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc là đã hoàn thành giao dịch?
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <button class="btn btn-primary" id="confirm_complete">Có</button>
                    <button class="btn btn-light border-dark" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cancelModalTitle">Hủy giap dịch</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn có chắc muốn hủy giao dịch?
                </div>
                <div class="modal-footer" style="justify-content: center;">
                    <button class="btn btn-primary" id="confirm_cancel">Có</button>
                    <button class="btn btn-light border-dark" data-dismiss="modal">Không</button>
                </div>
            </div>
        </div>
    </div>
@stop