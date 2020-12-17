<div>
    <form wire:submit.prevent="save" id="newPostForm">
        @if($photos)
            @foreach($photos as $photo)
                <img src="{{ $photo->temporaryUrl() }}">
            @endforeach
        @endif
        <div x-data="{ isUploading: false, progress: 0 }" 
             x-on:livewire-upload-start="isUploading = true" 
             x-on:livewire-upload-finish="isUploading = false" 
             x-on:livewire-upload-error="isUploading = false" 
             x-on:livewire-upload-progress="progress = $event.detail.progress">
    
                <input type="file" multiple wire:model="photos">
                <input type="hidden" id="custom_post_id" name="custom_post_id" value="">


                <div wire:loading wire:target="photo">Uploading</div>
                <div wire:loading wire:target="save">Storing</div>
        
                @error('photos') <span class="error" style="display: block;">{{ $message }}</span> @enderror

                <button type="submit">Save Photos</button>
            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>

    </form>
</div>
