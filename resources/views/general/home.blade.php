@extends('general.master')
@section('content')
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Khám phá danh mục</h2>
            <p class="color-black-opacity-5">Chợ Mới tự hào là Website rao vặt được ưa chuộng hàng đầu Việt Nam. Hơn hàng ngàn món hời từ Bất động sản, Nhà cửa, Xe cộ, Đồ điện tử, Thú cưng, Vật dụng cá nhân... đến tìm việc làm, tìm thông tin tuyển dụng, các dịch vụ - du lịch được đăng tin, rao bán trên Chợ Mới.</p>
          </div>
        </div>

       <!-- <div class="owl-carousel owl-theme" id="bestSellerCarousel"> -->
        <div class="row">
          @foreach($category as $ct)
          <div class="col-md-6 mb-4 mb-lg-4 col-lg-4" id="myDIV">
            <div class="listing-item">
              <div class="listing-image">
                <img style="width:50%; display: inline-block; float:left;" src="{{ Voyager::image( $ct->image ) }}" class="img-fluid">
              </div>
              <div class="listing-item-content">
                <a href="{{ route('category',$ct->id) }}" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a>
                <a class="px-3 mb-3 category" href="{{ route('category',$ct->id) }}">{{$ct->name}}</a>
                <h2 class="mb-1"><a href="{{ route('category',$ct->id) }}">{{$ct->description}}</a></h2>
                <span class="address">Chợ Mới đi cùng các bạn</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row">{{$category->links()}}</div>
        <!--</div> -->

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Hướng dẫn mua hàng - bán hàng</h2>
            <p class="color-black-opacity-5">Mua hàng - Bán hàng một cách nhanh gọn</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="browse/images/step-1.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">1</span>
              <h3>Decide What To Do</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="browse/images/step-2.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">2</span>
              <h3>Find What You Want</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
            <div class="how-it-work-step">
              <div class="img-wrap">
                <img src="browse/images/step-3.svg" alt="Free website template by Free-Template.co" class="img-fluid">
              </div>
              <span class="number">3</span>
              <h3>Explore Amazing Places</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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
