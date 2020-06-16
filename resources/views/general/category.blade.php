@extends('general.master')
@section('content')
<style>
  #more  {
    display:  none;
  }
</style>
<div class="site-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
        @foreach($product as $p)
          <div class="d-block d-md-flex listing-horizontal">
            <a href="{{ route('single_product',$p->id) }}" class="img d-block" style="background-image: url('{{ Voyager::image( $p->image ) }}')">
              <span class="category">{{ $p->TypeProduct }}</span>
            </a>

            <div class="lh-content">
              {{-- <a href="#" class="bookmark"><span class="icon-heart"></span></a> --}}
              <h3><a href="{{ route('single_product',$p->id) }}">{{ $p->name }}</a></h3>
              {{-- <p>{{ $p->description }}</p> --}}
              <p>
                {{ \Illuminate\Support\Str::limit($p->description, 100, '') }}
                @if (strlen($p->description) > 50)
                    <span id="dots">...</span>
                @endif
              </p>

              <p>
                <span style="color: #c90927;">{{ number_format($p->price) }} VNĐ</span>
              </p>
            </div>
          </div>
        @endforeach
          <div class="col-12 mt-5 text-center">
            <div class="row">{{$product->links()}}</div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
