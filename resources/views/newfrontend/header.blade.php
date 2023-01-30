<header id="header">
	<div class="logos-header py-2">
		<div class="container-fluid">
			<div class="d-flex justify-content-between align-items-center">
				@if(strpos(url()->current(),'goldEvine'))
				<a class="logo" href="{{ route('home') }}"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid"></a>
				<a class="logo-gold" href="{{ route('goldEvine') }}"><img src="{{asset('frontend/images/GoldEvine-logo.png')}}" class="img-fluid"></a>
				<a class="logo-gold" href="{{ route('goldMetal') }}"><img src="{{asset('frontend/images/Gold-Metal-logo.png')}}" class="img-fluid"></a>
				@elseif(strpos(url()->current(),'goldMetal'))
				<a class="logo" href="{{ route('home') }}"><img style="width: 72%;margin-bottom: 22px;" src="{{asset('frontend/images/logo.png')}}" class="img-fluid"></a>
				<a class="logo-gold" href="{{ route('goldMetal') }}"><img src="{{asset('frontend/images/Gold-Metal-logo.png')}}" class="img-fluid"></a>
				<a class="logo-gold" href="{{ route('goldEvine') }}"><img src="{{asset('frontend/images/GoldEvine-logo.png')}}" class="img-fluid"></a>
				@else
				<a class="logo-gold" href="{{ route('goldEvine') }}"><img src="{{asset('frontend/images/GoldEvine-logo.png')}}" class="img-fluid"></a>
				<a class="logo" href="{{ route('home') }}"><img src="{{asset('frontend/images/logo.png')}}" class="img-fluid"></a>
				<a class="logo-gold" href="{{route('goldMetal') }}"><img src="{{asset('frontend/images/Gold-Metal-logo.png')}}" class="img-fluid"></a>
				@endif
			</div>
		</div>
	</div>
	<div class="nav-section border-top">
		<div class="container-fluid p-0">
			<div class="header-row d-flex justify-content-between align-items-center">
				<button class="menu-btn d-md-none background-none border-0 ms-3 bg-transparent"><i class="fa fa-bars text-white"></i></button>
				<div class="header-info d-flex justify-content-between align-items-center px-3">
					<div class="search dro">
						<a class="dropdown-toggle1" href="javascript:void" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i></a>
						<div class="dropdown-menu border-top" aria-labelledby="dropdownMenuButton1">
							<form action="#" class="d-flex mx-3 border rounded bg-white">
								<input type="search" name="search-field" placeholder="Search" class="border-0 flex-fill">
								<button type="submit" class="border"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="user-info">
						<a href="javascript:void" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-chevron-down me-3"></i> Good afternoon, [Jon Dever] <i class="fa fa-user-circle" aria-hidden="true"></i></a>
						<div class="dropdown-menu p-4 border-top" aria-labelledby="dropdownMenuButton2">
							<div class="row">
								<div class="col-6">
									<ul class="list-unstyled m-0 p-0">
										<a href="{{route('my-profile')}}">

											<li>My Account | My Profile</li>
										</a>

										<li> <a href="{{ route('goldEvine') }}">Goldevine:</a> <i class="fa fa-lock"></i> <i class="fa fa-heart"></i></li>
										<li>My Compaigns | Dashboard</li>
									</ul>
								</div>
								<div class="col-6">
									<ul class="list-unstyled m-0 p-0">
										<li> <a href="{{ route('home') }}">Luxauro:</a> <i class="fa fa-lock"></i> <i class="fa fa-heart"></i></li>
										<li>My Purchase | My Seller Files</li>
										<li> <a href="{{ route('goldMetal') }}">Gold Metal Guild:</a> <i class="fa fa-comment"></i> <i class="fa fa-user"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<ul class="list-unstyled text-uppercase d-flex m-0 p-0">
						<li class="ms-3 d-none"><a href="{{ route('login') }}">login</a></li>
						<li class="ms-3 d-none"><a href="{{ route('register') }}">register</a></li>
						<li class="ms-3 cart-icon"><a href="javascript:void"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<nav id="nav" class="text-uppercase d-md-flex justify-content-between">
				<button class="menu-btn d-md-none background-none border-0 bg-transparent"><i class="fa fa-times text-white"></i></button>
				<ul class="list-unstyled m-0 p-0 d-md-flex">
					<li><a href="{{route('home')}}">products</a></li>
					<li><a href="javascript:void">projects</a></li>
					<li><a href="javascript:void">professionals</a></li>
				</ul>
				<ul class="list-unstyled m-0 p-0 d-md-flex justify-content-end">
					<li><a href="{{route('charters')}}">charters</a></li>
					<li><a href="javascript:void">forums</a></li>
					<li><a href="{{ route('merchant-suits') }}">Suits</a></li>
				</ul>
			</nav>
		</div>
</header>