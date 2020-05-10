<div class="site-blocks-cover overlay" style="background-image: url(../public/browse/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10"> 
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up">Tìm kiếm <span class="typed-words"></span></h1>
                <p data-aos="fade-up" class=" w-75 mx-auto">Đồ cũ hóa đồ mới</p>
              </div>
            </div>
            
            <div class="form-search-wrap p-2" data-aos="fade-up" data-aos-delay="200">
              <form method="get" action="{{ route('search') }}" class="search_form">
                <div class="row align-items-center">
                  <div class="col-lg-12 col-xl-4 no-sm-border border-right">
                    <input name="q" type="text" class="form-control" placeholder="Bạn muốn tìm kiếm gì?">
                  </div>
                  <div class="col-lg-12 col-xl-3 no-sm-border border-right">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input name="location" type="text" class="form-control" placeholder="Vị trí">
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select name="category" class="form-control" name="" id="">
                        <option value="">Tất cả sản phẩm</option>
                        @foreach($category_all as $ct_all)
                          <option value="{{$ct_all->id}}">{{$ct_all->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn text-white btn-primary" value="Search">
                  </div>
                </div>
              </form>
            </div>
            @if ( isset($searching) )
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-left">
                <h1 data-aos="fade-up">
                  Từ khóa: <span class="typed-words">{{ $searching->q }}</span><br>
                  Vị trí: <span class="typed-words">{{ $searching->location }}</span><br>
                  Loại sản phẩm
                  <span class="typed-words">
                    @foreach ($category_all as $ct_all)
                      @if ($ct_all->id == $searching->category)
                        {{ $ct_all->name }}
                        @break
                      @endif
                    @endforeach
                  </span>
                </h1>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>  