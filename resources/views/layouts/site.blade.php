<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | @yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	@include('includes.auth-modals')

	<!-- Wrapper -->
	<div class="page">
		<div class="container">
			<!-- Header -->
			<header class="header">
				<!-- top bar -->
				<ul class="header_bar">
					<li class="header_bar-item">
						<a href="#">
							<svg class="header-svg">
								<use xlink:href="/sprite.svg#phone">
								</use>
							</svg>
							051 232 61 73
						</a>
					</li>
					<li class="header_bar-item">
						<a href="#">
							Русский
						</a>
					</li>
					{{-- <li class="header_bar-item">
						<a href="{{ route(Route::currentRouteName(), 'en') }}">
							English
						</a>
					</li>
					<li class="header_bar-item">
						<a href="{{ route(Route::currentRouteName(), 'az') }}">
							Azərbaycan dili
						</a>
					</li> --}}
					@if (Route::has('login'))
						<li class="header_bar-item auth">
							@auth
								<a>
									{{ $user->name }}
									<svg class="header-svg_arr-down">
										<use xlink:href="/sprite.svg#arr_down">
										</use>
									</svg>
								</a>
								<ul id="auth_dropdown">
									<li>
										<a href="{{ url('dashboard') }}" class="auth_dropdown-link">
											<svg class="header-svg">
												<use xlink:href="/sprite.svg#user-thin">
												</use>
											</svg>
											Профиль
										</a>
									</li>
									<li>
										<a href="/favorites" class="auth_dropdown-link">
											<svg class="header-svg">
												<use xlink:href="/sprite.svg#star">
												</use>
											</svg>
											Избранное
										</a>
									</li>
									<li>
										<a href="{{ route('profile.show') }}" class="auth_dropdown-link">
											<svg class="header-svg">
												<use xlink:href="/sprite.svg#edit">
												</use>
											</svg>
											Настройки
										</a>
									</li>
									<li>
										<form method="POST" action="{{ route('logout') }}">
											@csrf

											<a href="{{ route('logout') }}"
														onclick="event.preventDefault();
																this.closest('form').submit();"
                                class="auth_dropdown-link">

													<svg class="header-svg">
														<use xlink:href="/sprite.svg#exit">
														</use>
													</svg>
												Выход
											</a>
										</form>
									</li>
								</ul>
							@else
								<a class="login-trigger">
									<svg class="header-svg">
										<use xlink:href="/sprite.svg#user">
										</use>
									</svg>
									{{-- {{ __('signIn') }} --}}
									Войти
								</a>
							@endif
						</li>
					@endif
				</ul>

				<!-- brand -->
				<div class="header_brand">
					<a href="/" class="header_brand-item">
						<h1 class="brand_text">
							{{ config('app.name') }}
						</h1>
						<span>
							{{-- {{ __('brandSubtitle') }} --}}
							Купля/продажа ювелирных изделий
						</span>
					</a>
					<img src="/img/bgs/attempt-3.png">
				</div>

				<!-- bottom bar -->
				<nav class="header_nav">
					<ul class="header_nav-inner">
						<li class="header_nav-inner--item">
							<a href="#">
								Ювелирные магазины
							</a>
						</li>
						<li class="header_nav-inner--item">
							<a href="#">
								Сотрудничество
							</a>
						</li>
						<li class="header_nav-inner--item">
							<a href="/advanced-search">
								Расширенный поиск
							</a>
						</li>
						<li class="header_nav-inner--item">
							<a href="#footer">
								Контакты
							</a>
						</li>
					</ul>
				</nav>

				<!-- rubrics -->
				@yield('rubrics')
			</header>

			<!-- Search -->
			@yield('search')

			@yield('response-json')
			
			<!-- Main -->
			@yield('main-container')

			<!-- Footer -->
			@include('includes.footer')
		</div>
	</div> <!-- /wrapper -->

	<!-- Scripts -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
