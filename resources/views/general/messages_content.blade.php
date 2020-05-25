<div class="message-wrapper">
    <ul class="messages">
        @foreach($messages as $message)
        <li class="message clearfix">
            <div class="{{ ($message->from == Auth::id()) ? 'sent' : 'received' }}">
                <p>{{ $message->message }}</p>
                <p class="data">{{ date('d M y, h:i a',strtotime($message->created_at)) }}</p>
            </div>
        </li>
        @endforeach
    </ul>
</div>

<div class="input-text">
    <input type="text" name="message" class="submit">
    <a class="btn btn-primary profile"
                            style="cursor: pointer; float:right;margin-right:10px;" 
                            data-toggle="modal" 
                            data-target="#getProfile">Thông tin người dùng</a>
</div>
<div class="modal fade" id="getProfile" tabindex="-1" role="dialog" aria-labelledby="getProfile" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Thông tin người dùng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Họ tên</label>
                    <div class="col-md-6">
                        <p>{{ $receiver_profile->name }}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <p>{{ $receiver_profile->email }}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Điện thoại</label>
                    <div class="col-md-6">
                        <p>{{ $receiver_profile->phone }}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Địa chỉ</label>
                    <div class="col-md-6">
                        <p>{{ $receiver_profile->address }}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Ngày gia nhập</label>
                    <div class="col-md-6">
                        <p>{{ $receiver_profile->created_at }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="justify-content: center;">
                <form method="POST" action="{{ route('sell_product') }}">
                    @csrf
                    <input type="hidden" name="user" value="{{ $receiver_profile->id }}">
                    <div class="form-group row" style="text-align: left;">
                        <label for="street" class="col-md-4 col-form-label text-md-right">Sản phẩm</label>
                        <div class="col-md-6">
                            <select name="product">
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row" style="text-align: left;">
                        <label for="street" class="col-md-4 col-form-label text-md-right">Số lượng</label>
                        <div class="col-md-6">
                            <input type="number" name="quantity" min="1" value="1">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="">Xác nhận bán</button>
                    <button class="btn btn-light border-dark" data-dismiss="modal">Không</button>
                </form>
            </div>
        </div>
    </div>
</div>
