@extends('general.master')
@section('content')
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="../public/browse/images/img_1.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="text-primary mb-3">Giới thiệu về Chợ Mới</h2>
            <p>Chợ Mới chính thức gia nhập thị trường Việt Nam vào đầu năm 2012, với mục đích tạo ra cho bạn một kênh rao vặt trung gian,
                kết nối người mua với người bán lại với nhau bằng những giao dịch cực kỳ đơn giản, tiện lợi, nhanh chóng, an toàn, mang
                đến hiệu quả bất ngờ.
            </p>
            <p>Đến nay, Chợ Mới tự hào là Website rao vặt được ưa chuộng hàng đầu Việt Nam. Hàng ngàn món hời từ Bất động sản, Nhà cửa,
                Xe cộ, Đồ điện tử, Thú cưng, Vật dụng cá nhân... đến tìm việc làm, thông tin tuyển dụng, các dịch vụ - du lịch được đăng
                tin, rao bán trên Chợ Mới.</p>
            <p class="mb-4">Với Chợ Mới, bạn có thể dễ dàng mua bán, trao đổi bất cứ một loại mặt hàng nào, dù đó là đồ cũ hay đồ mới với nhiều lĩnh vực:</p>

            <ul class="ul-check list-unstyled success">
                @foreach($category_all as $cat)
                <li>{{ $cat->name }}</li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Các câu hỏi thường gặp</h2>
            <p class="color-black-opacity-5">Một số câu hỏi thường gặp</p>
          </div>
        </div>


        <div class="row justify-content-center">
          <div class="col-8">
            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1" class="accordion-item h5 d-block mb-0">Làm sao để chat với người bán</a>

              <div class="collapse" id="collapse-1">
                <div class="pt-2">
                  <p class="mb-0">Chợ Tốt nay đã có tính năng “Chat với người bán”. Bạn có thể nhắn tin trực tiếp với người mua hoặc người bán trên Chợ Tốt.

                    <span> <br>Lưu ý:  Để sử dụng tính năng Chat, bạn cần Đăng nhập vào tài khoản Chợ Tốt.</span></p>
                </div>
              </div>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4" class="accordion-item h5 d-block mb-0">Mẹo tìm kiếm hiệu quả</a>

              <div class="collapse" id="collapse-4">
                <div class="pt-2">
                  <p class="mb-0"><span>Mẹo số 1: Tìm theo tên món hàng</span>
                  <br>
                                  <span>Mẹo số 2: Áp dụng tính năng tìm kiếm(Tìm đúng danh mục, Tìm đúng khu vực)</span>
                 </p>
                </div>
              </div>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2" class="accordion-item h5 d-block mb-0">Chính sách đổi trả/bảo hành</a>

              <div class="collapse" id="collapse-2">
                <div class="pt-2">
                  <p class="mb-0">Quý khách có thể xem thêm trong mục <a href="#">chính sách mua hàng</a></p>
                </div>
              </div>
            </div>

            <div class="border p-3 rounded mb-2">
              <a data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3" class="accordion-item h5 d-block mb-0">Thông tin liên hệ</a>

              <div class="collapse" id="collapse-3">
                <div class="pt-2">
                  <p class="mb-0"><a href="{{ route('contact') }}">Liên hệ với chúng tôi</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>


    <div class="py-5 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 mr-auto mb-4 mb-lg-0">
              <h2 class="mb-3 mt-0 text-white">Trở thành thành viên của Chợ Mới bằng cách tạo tài khoản cho riêng mình</h2>
              <p class="mb-0 text-white">Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn</p>
            </div>
            <div class="col-lg-4">
              <p class="mb-0"><a href="{{ route('register') }}" class="btn btn-outline-white text-white btn-md px-5 font-weight-bold btn-md-block">Đăng ký</a></p>
            </div>
          </div>
        </div>
      </div>
@endsection
