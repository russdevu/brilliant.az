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

	<form action="{{ route('upload.images') }}" method="POST" class="dropzone" id="uploadImagesForm" enctype="multipart/form-data">

		@csrf
		<div class="dz-message" data-dz-message style="width:60%; margin: 0 auto;">
				<span style="font-weight: 400; font-size: 17px;">
						Перетащите и отпустите изображения в это поле. 
					<br><br>
						Вы также можете кликнуть по этому полю и загрузить несколько изображений удерживая клавишу Ctrl, либо просто выделить нужные изображения и нажать "ОК".
					<br><br>
						Нельзя загружать более 10-ти изображений.
				</span>
		</div>
		<button class="primary-btn" width="100px" id="submitDropFiles">SUBMIT</button>
	</form>	
</div>