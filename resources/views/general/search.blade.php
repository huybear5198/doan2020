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
                            <a href="{{ route('single_product',$sp->id) }}" class="img d-block" style="background-image: url('{{ Voyager::image( $sp->image ) }}')">
                                <span class="category">{{ $sp->TypeProduct }}</span>
                            </a>
                            <div class="lh-content">
                                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                                <h3><a href="{{ route('single_product',$sp->id) }}">{{ $sp->name }}</a></h3>
                                <p>{{ $sp->description }}</p>
                                <p>
                                    <span>{{ $sp->price }} VNĐ</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                    {{ $tk_sanpham->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
