<div class="container-user">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
		<a class="navbar-brand" href="{{route('home')}}">Chợ mới</a>
	</div>
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
            @foreach($items as $menu_item)
                <li class="dropdown mega-dropdown"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
            @endforeach
		</ul>
        {{-- <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="#">My cart (0) items</a></li> --}}
      </ul>
	</div>
  </nav>
</div>
