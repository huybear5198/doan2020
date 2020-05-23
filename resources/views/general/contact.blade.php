@extends('general.master')
@section('content')
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            <form action="#" class="p-5 bg-white" style="margin-top: -150px;">


              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="lname">Họ</label>
                    <input type="text" id="lname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="fname">Tên</label>
                  <input type="text" id="fname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Tiêu đề</label>
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Nội dung</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Vui lòng nhập nội dung..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Gửi liên hệ" class="btn btn-primary btn-md text-white">
                </div>
              </div>


            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">

            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Địa chỉ</p>
              <p class="mb-4">215 Nam Kỳ Khởi Nghĩa, Phường 7, Quận 3, TP.Hồ Chí Minh</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+84 38 5597 474</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">contact@chomoi.com</a></p>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
