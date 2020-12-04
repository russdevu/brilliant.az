@extends('layouts.site')

@section('styles')
	@livewireStyles
@endsection

@section('main-container')
	<!-- Temporary Alerts -->
	@if (session('status'))
		<div class="alert alert-success" style="background:#C1EEB0; padding: 20px; color: green; font-weight: bold;" role="alert">
			{{session('status')}}
		</div>
	@endif

	@livewire('upload-images')

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
				
			{{-- @include('includes.new-post--slots') --}}

			{{-- <form class="np_form" action="/new-post" method="POST" enctype="multipart/form-data">
				@csrf
				<!-- form section -->
				<div class="np_form-sec">
					<h5 class="np_form-sec--title">
						Публикация
					</h5>


					<div class="np_form-sec--inner">

						@include('includes.new-post--forms')

						@if($errors->any())
							{!! implode('', $errors->all('<div>:message</div>')) !!}
						@endif

						<button type="submit" class="primary-btn" id="newPostSubmit">
							Отправить
						</button>

					</div>
				</div>
			</form> --}}
		</div>
	</section>
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js" 					integrity="sha512-Atu8sttM7mNNMon28+GHxLdz4Xo2APm1WVHwiLW9gW4bmHpHc/E2IbXrj98SmefTmbqbUTOztKl5PDPiu0LD/A==" crossorigin="anonymous"></script>
	@livewireScripts
@endsection
