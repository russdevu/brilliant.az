<div class="slots">
	{{-- <div class="slots_desc">
		<label>
			Загрузите изображения
				<span>
					А здесь будут советы и ограничения. Например, изображения помогут продовать лучше или что можно загрузить их 25.
				</span>
		</label>
	</div>

	<div class="slots_container">

		<div class="slot">
			<div class="slot_placeholder">
				<p class="sp_title">
					Добавить изображение
				</p>
				<svg class="sp_svg">
					<use xlink:href="sprite.svg#camera">
					</use>
				</svg>
			</div>
		</div>

		<div class="slot">
			<div class="slot_placeholder">
				<p class="sp_title">
					Добавить изображение
				</p>
				<svg class="sp_svg">
					<use xlink:href="sprite.svg#camera">
					</use>
				</svg>
			</div>
		</div>

		<div class="slot">
			<div class="slot_placeholder">
				<p class="sp_title">
					Добавить изображение
				</p>
				<svg class="sp_svg">
					<use xlink:href="sprite.svg#camera">
					</use>
				</svg>
			</div>
		</div>

		<div class="slot">
			<div class="slot_placeholder">
				<p class="sp_title">
					Добавить изображение
				</p>
				<svg class="sp_svg">
					<use xlink:href="sprite.svg#camera">
					</use>
				</svg>
			</div>
		</div>

		<div class="slot">
			<div class="slot_placeholder">
				<p class="sp_title">
					Добавить изображение
				</p>
				<svg class="sp_svg">
					<use xlink:href="sprite.svg#camera">
					</use>
				</svg>
			</div>
			<input type="file" name="post_img" multiple>
		</div>
	</div> --}}

	<form 
		action="/upload-images" 
		method="POST" 
		accept-charset="UTF-8" 
		class="dropzone dz-clickable" 
		id="uploadImgForm" 
		enctype="multipart/form-data">
		@csrf
		<button type="submit" class="primary-btn" width="100px" id="submitDropFiles" style="cursor:pointer;">SUBMIT</button>
	</form>	
</div>