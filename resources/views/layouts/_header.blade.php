<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapse" data-toggle="collapse"  data-target="#app-navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{ url('/') }}" >
				<img src="{{ asset('images/header.png') }}" id="header-png" class="navbar-brand">
			</a>
		</div>
		<div class="collapse navbar-collapse" id="app-navbar-collapse">
			<ul class="nav navbar-nav">
			</ul>
			{{-- 登录注册 --}}
			<ul class="nav navbar-nav navbar-right">
				@guest
					<li><a href="{{ route('login') }}">登录</a></li>
					<li><a href="{{ route('register') }}">注册</a></li>
				@else 
					<li>
						<a href="{{ route('cart.index') }}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
					</li>
					<li class="dropdown-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="falae">
							<span class="user-avatar pull-left" style="margin-right: 9px; margin-top: -5px">
								<img src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">
							</span>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('orders.index') }}">我的订单</a>
							</li>
							<li>
								<a href="{{ route('user_addresses.index') }}">收货地址</a>
							</li>
							<li>
								<a href="{{ route('products.favorites') }}">收藏列表</a>
							</li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									退出登录
								</a>
								<form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				@endguest
				{{-- 登录注册结束 --}}
			</ul>
		</div>
	</div>
</nav>