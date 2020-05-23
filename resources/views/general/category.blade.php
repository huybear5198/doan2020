@extends('general.master')
@section('content')
<div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
        @foreach($product as $p)
          <div class="d-block d-md-flex listing-horizontal">
            <a href="{{ route('single_product',$p->id) }}" class="img d-block" style="background-image: url('{{ Voyager::image( $p->image ) }}')">
              <span class="category">{{ $p->name }}</span>
            </a>

            <div class="lh-content">
              <a href="#" class="bookmark"><span class="icon-heart"></span></a>
              <h3><a href="{{ route('single_product',$p->id) }}">{{ $p->name }}</a></h3>
              <p>{{ $p->description }}</p>
              <p>
                <span>{{ $p->price }} VNĐ</span>
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
      </div>
    </div>
  </div>
@endsection
