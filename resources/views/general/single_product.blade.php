@extends('general.master')
@section('content')
<div class="pt-5"></div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
		  <div class="individual-car-title">
        <h3>{{ $single_product->name }}</h3>
        <h4>{{ $single_product->price }} VNĐ</h4>
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">  Ahmedabad (reg) </li>
          <li class="list-inline-item"> | </li>
          <li class="list-inline-item">   Second Owner </li>
          <li class="list-inline-item"> | </li>
          <li class="list-inline-item">  36 Views  </li>
          <li class="list-inline-item"> | </li>
          <li class="list-inline-item">
            <a class="a2a_dd" href="https://www.addtoany.com/share"><i class="fa fa-share-alt"></i> Share </a>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
          </li>
        </ul>
      </div>
      <div class="cars-gallery">
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-zoom-container">
                <img src="{{ Voyager::image( $single_product->image ) }}">
              </div>
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-next swiper-button-white"></div>
          <div class="swiper-button-prev swiper-button-white"></div>
        </div>
      </div>
      <div class="cars-tabs">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h4>Tổng quan</h4>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><strong>Thành phố :</strong> {{ $single_product->city }} </li>
                  <li><strong>Quận :</strong> {{ $single_product->district }} </li>
                  <li><strong>Phường :</strong> {{ $single_product->sub_district }} </li>
                  <li><strong>Đường :</strong> {{ $single_product->street }} </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><strong>Transmission :</strong> Manual </li>
                  <li><strong>Color :</strong> Black </li>
                  <li><strong>No. of Owner(s) :</strong> First </li>
                </ul>
              </div>
              <div class="col-md-12">
                <footer class="blockquote-footer">Please mention whenever you call that you found the details on this particular site.</footer>
                <footer class="blockquote-footer">Always arrange a meeting in a safe place.</footer>
                <footer class="blockquote-footer">This site helps you in searching for a vehicle. We do not verify the authenticity of the product.</footer>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="menu sticky-top ">
          <div class="card bg-light ">
            <div class="card-body">
              <small> Kết nối với cửa hàng</small>
              <h3><i class="fa fa-inr"></i>Cửa hàng {{ $single_product->store }}</h3>
              <div class="form-group">
                <button style="width:310px;" class="btn btn-success message_user"  value="{{ $single_product->id_user }}">Liên hệ với người bán</button>
              </div>
              <div class="form-group">
                <button style="width:310px;" class="btn btn-info get_phone" value="{{ $single_product->id_user }}">Lấy số điện thoại từ người bán</button>
              </div>
              {{-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="updatecheck1">
                <label class="form-check-label" for="updatecheck1">
                  <small>Tôi đồng ý với <a href="#">điều khoản mua hàng </a> </small>
                </label>
              </div> --}}
              <div class="pb-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
