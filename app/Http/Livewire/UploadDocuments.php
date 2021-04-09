<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocuments extends Component
{
    use WithFileUploads;
    public $image;
    public function render()
    {
        return view('livewire.upload-documents');
    }
    public function uploadDocuments():void
    {

    }
}
