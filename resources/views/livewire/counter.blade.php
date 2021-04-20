<div>
    <div>
        <x-file-pond wire:model="document" description="Any file under 1 mb" />

        <x-form-error name="document" />

        @if ($document)
            <div id="filepond-uploaded-file" class="mt-4">
                <p class="text-sm text-blue-gray-600">Chosen File: {{ $document->getClientOriginalName() }}</p>

                @if ($this->uploadHasPreview)
                    <span class="block h-20 w-20 mt-4">
                        <img class="rounded-md w-full"
                             src="{{ $document->temporaryUrl() }}"
                             alt="filepond preview"
                        >
                    </span>
                @endif
            </div>
        @endif
    </div>
</div>
