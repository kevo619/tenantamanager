<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tenant
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{url('tenants',$tenant->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="id_number" class="block font-medium text-sm text-gray-700">Id Number</label>
                            <input type="text" name="id_number" id="id_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $tenant->id_number }}" />
                            @error('id_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="first_name" class="block font-medium text-sm text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $tenant->first_name }}" />
                            @error('first_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="last_name" class="block font-medium text-sm text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $tenant->last_name }}" />
                            @error('last_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="unit" class="block font-medium text-sm text-gray-700">Unit</label>
                            <input type="text" name="unit" id="unit" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ $tenant->unit }}" />
                            @error('unit')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
