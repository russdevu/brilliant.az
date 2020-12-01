@extends('layouts.site')

@section('response-json')
	<div id="responseCont" style="width: 100%; height: 100px; background: lightgreen; color: black; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size 20px;"></div>
@endsection


@section('main-container')
	<!-- Temporary Alerts -->
	@if (session('status'))
		<div class="alert alert-success" style="background:green; padding: 20px;" role="alert">
			{{session('status')}}
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, ullam.
		</div>
	@endif

	<section class="new_post">
		<div class="new_post-title">
			<h4>Новая публикация</h4>

			<a href="/dashboard">
				Мои публикации
				<svg>
					<use xlink:href="sprite.svg#arr_left">
					</use>
				</svg>
			</a>
		</div>

		<div class="container new_post-inner">
			<form class="np_form" action="/new-post" method="POST" enctype="multipart/form-data">
				@csrf
				<!-- form section -->
				<div class="np_form-sec">
					<h5 class="np_form-sec--title">
						Публикация
					</h5>

					<div class="np_form-sec--inner">

						@include('includes.new-post--slots')

						@include('includes.new-post--forms')

						<button type="submit" class="primary-btn" id="newPostSubmit">
							Отправить
						</button>

					</div>
				</div>
			</form>
		</div>
	</section>
@endsection