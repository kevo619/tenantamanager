<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

class Counter extends Component
{
    use WithFileUploads;
    public $document;
    public function getUploadHasPreviewProperty()
    {
        if (! $this->document) {
            return false;
        }

        $supportedPreviewTypes = config('livewire.temporary_file_upload.preview_mimes');

        return in_array($this->document->guessExtension(), $supportedPreviewTypes, true);
    }
    public function updatedUpload($value)
    {
        $this->resetErrorBag();
        if (is_null($value)) {
            return;
        }
        try {
            $this->validateOnly('document', [
                'document' => ['required', 'max:1024'],
            ]);
        } catch (ValidationException $e) {
            $this->document = null;
            $this->dispatchBrowserEvent('file-pond-clear', ['id' => $this->id]);

            throw $e;
        }
    }
}
