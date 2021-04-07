<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Rent Payment for '.$rent->tenant->first_name.' '.$rent->tenant->last_name) }}
        </h2>
    </x-slot>

     <div class="grid ">
        <div class="max-w-7xl py-10 sm:px-6 lg:px-8">
            <form method="POST" action="{{url('rent',$rent->id)}}" >
                @csrf
                @method('PUT')
                <div>
                    <x-jet-label for="name" value="{{ __('Tenant Name') }}" />
                    <select name="tenant_id" id="tenant_id" class="form-select block rounded-md shadow-sm mt-1  w-full">
                        @foreach($tenants as $tenant)
                            <option value={{$tenant->id}} {{ $tenant->id == $rent->tenant->id ? 'selected="selected"' : '' }}>{{$tenant->first_name.' '.$tenant->last_name}}</option>
                        @endforeach
                    </select>
                    {{-- <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $rent->tenant->first_name.' '.$rent->tenant->last_name }}" required /> --}}
                </div>

                <div class="mt-4">
                    <x-jet-label for="amount_paid" value="{{ __('Amount') }}" />
                    <x-jet-input id="amount_paid" class="block mt-1 w-full" type="text" name="amount_paid" value="{{ $rent->amount_paid }}" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="date_paid" value="{{ __('Date paid') }}" />
                    <x-jet-input id="date_paid" class="block mt-1 w-full" type="date" name="date_paid" required value="{{ date('Y-m-d',strtotime($rent->date_paid)) }}" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4" >
                        {{ __('Save changes') }}
                    </x-jet-button>
                </div>
            </form>
         </div>
     </div>

</x-app-layout>

