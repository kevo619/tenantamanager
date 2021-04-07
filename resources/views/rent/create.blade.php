<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Rent Payment
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{url('rent')}}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="amount_paid" class="block font-medium text-sm text-gray-700">Amount</label>
                            <input type="text" name="amount_paid" id="amount_paid" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="" />
                            @error('amount_paid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="date_paid" class="block font-medium text-sm text-gray-700">Date paid</label>
                            <input type="date" name="date_paid" id="date_paid" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="" />
                            @error('date_paid')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="tenant" class="block font-medium text-sm text-gray-700">Tenant</label>
                            <select name="tenant_id" id="tenant_id" class="form-select block rounded-md shadow-sm mt-1  w-full">
                                @foreach($tenants as $tenant)
                                    <option value={{ $tenant->id }}>{{$tenant->first_name.' '.$tenant->last_name}}</option>
                                @endforeach
                            </select>
                            @error('tenant')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Add Payment
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
