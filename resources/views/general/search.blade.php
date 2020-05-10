@extends('general.master')
@section('content')
<div class="site-wrap">
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($tk_sanpham as $sp)
                    <div class="d-block d-md-flex listing-horizontal">
                        <a href="#" class="img d-block" style="background-image: url('{{ Voyager::image( $sp->image ) }}')">
                            <span class="category">{{ $sp->TypeProduct }}</span>
                        </a>
                        <div class="lh-content">
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="#">{{ $sp->name }}</a></h3>
                            <p>{{ $sp->description }}</p>
                            <p>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-warning"></span>
                            <span class="icon-star text-secondary"></span>
                            <span>(492 Reviews)</span>
                            </p>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 mt-5 text-center">
                        <div class="custom-pagination">
                            <span>1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="more-page">...</span>
                            <a href="#">10</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ml-auto">
                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Filters</h3>
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" placeholder="What are you looking for?" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="select-wrap">
                                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                                    <select class="form-control" name="" id="">
                                        <option value="">All Categories</option>
                                        <option value="">Appartment</option>
                                        <option value="">Restaurant</option>
                                        <option value="">Eat &amp; Drink</option>
                                        <option value="">Events</option>
                                        <option value="">Fitness</option>
                                        <option value="">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- select-wrap, .wrap-icon -->
                                <div class="wrap-icon">
                                    <span class="icon icon-room"></span>
                                    <input type="text" placeholder="Location" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Radius around selected destination</p>
                            </div>
                            <div class="form-group">
                                <input type="range" min="0" max="100" value="20" data-rangeslider>
                            </div>
                        </form>
                    </div>
                    <div class="mb-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <p>Category 'Restaurant' is selected</p>
                                <p>More filters</p>
                            </div>
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    <li>
                                        <label for="option1">
                                            <input type="checkbox" id="option1">
                                        Coffee
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option2">
                                            <input type="checkbox" id="option2">
                                            Vegetarian
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option3">
                                            <input type="checkbox" id="option3">
                                            Vegan Foods
                                        </label>
                                    </li>
                                    <li>
                                        <label for="option4">
                                            <input type="checkbox" id="option4">
                                            Sea Foods
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection