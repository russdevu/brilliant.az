<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
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

    public function save()
    {
        // $user = Auth::user();

        foreach($this->photo as $photo) 
        { 
            $fileName = $photo->getClientOriginalName();
            $photo->store('photos');
        }
        
    }
    
    public function render()
    {
        return view('livewire.upload-images');
    }
}
