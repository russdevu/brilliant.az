<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImages extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function updatedPhoto()
    {
        $this->validate([
            'photo.*' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    public function save(Request $request)
    {
        // $user = Auth::user();

        foreach($this->photos as $photo) 
        {
            $user = Auth::user();
            $custom_post_id = $request->custom_post_id;
            $file_name = $photo->getClientOriginalName();
            // $photo->storeAs('photos', 'avatar');
            dd($custom_post_id);
            $photo->storeAs('posts', $user->id . '/' . $custom_post_id . '/' . $file_name, 'public');
        }
        
    }
    
    public function render()
    {
        return view('livewire.upload-images');
    }
}
