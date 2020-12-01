@extends('layouts.site')

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
@endsection

@section('main-container')
	<!-- Temporary Alerts -->
	@if (session('status'))
		<div class="alert alert-success" style="background:#C1EEB0; padding: 20px; color: green; font-weight: bold;" role="alert">
			{{session('status')}}
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
			@include('includes.new-post--slots')

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
	<script src="{{ asset('js/dropzone.min.js') }}"></script>
	<script>
		Dropzone.autoDiscover = false;

		var myDropzone = new Dropzone(".dropzone", {
			url: '{{ route('upload.images') }}',
			headers: {
				'X-CSRF-TOKEN': "{{ csrf_token() }}"
			},
			autoProcessQueue: false,
			autoDiscover: false,
			maxFilesize: 2,
			maxFiles: 10,
			paramName: "post_img",
			parallelUploads: 10,
			acceptedFiles: ".jpeg,.jpg,.png",
			success: function (file, response) {
				$('#uploadImagesForm').append('<input type="hidden" name="document[]" value="' + response.name + '">');

				uploadedDocumentMap[file.name] = response.name;
			},
			removedfile: function (file) {
				file.previewElement.remove()
				var name = ''
				if (typeof file.file_name !== 'undefined') {
					name = file.file_name
				} else {
					name = uploadedDocumentMap[file.name]
				}
				$('form').find('input[name="document[]"][value="' + name + '"]').remove()
			},
			init: function () {
				this.on("maxfilesexceeded", function (file) {
					alert("Вы уже загрузили макс. количество изображений!");
				});

				@if(isset($project) && $project->document)
					var files =
					{!! json_encode($project->document) !!}
					for (var i in files) {
						var file = files[i]
						this.options.addedfile.call(this, file)
						file.previewElement.classList.add('dz-complete')
						$('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
					}
				@endif
			},
			// messages
			dictFallbackMessage: "Вашим браузером не поддерживаются drag'n'drop загрузки",
			dictMaxFilesExceeded: "Нельзя загружать больше 10-ти фотографий",

		});

		$('#submitDropFiles').click(function () {
			myDropzone.processQueue();
		});

	</script>
@endsection