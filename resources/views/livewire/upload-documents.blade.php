<div wire:ignore
     x-data
     x-init="() => {
            const post = FilePond.create($refs.input);
            {{-- post.setOptions({
                server: {
                    process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                    },
                }
            }); --}}
        }"
>
<div>
    <form wire:submit.prevent="uploadDocuments">
        <x-filepond
            wire:model="image"
        />
        <input type="file" x-ref="input" />

        @error('image')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror

        <button type="submit">Save</button>
    </form>
</div>
</div>
@push('styles')
    @once
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    @endonce
@endpush

@push('scripts')
    @once
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    @endonce
@endpush
