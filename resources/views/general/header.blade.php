    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0">Chợ mới</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="{{route('home')}}"><span>Trang chủ</span></a></li>
                <li class="has-children">
                  <a href="#"><span>Danh mục</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li><a href="#">Menu Four</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{route('about')}}"><span>Giới thiệu</span></a></li>
                <li><a href="{{route('login')}}"><span>Đăng nhập</span></a></li>
                <li><a href="{{route('register')}}"><span>Đăng ký</span></a></li>
                <li><a href="{{route('contact')}}"><span>Liên hệ</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>