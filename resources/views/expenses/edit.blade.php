<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Expense') }}
        </h2>
    </x-slot>

     <div class=" ">
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <form method="POST" action="{{url('expenses',$expense->id)}}" >
                @csrf
                @method('PUT')
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $expense->name }}" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="category" value="{{ __('Category') }}" />
                    <select name="category" id="category" class="form-select block rounded-md shadow-sm mt-1 w-full" value="{{ $expense->category}}" >
                        <option value="">Select</option>
                        <option value="Utilities">Utilities</option>
                        <option value="Land Rates">Land Rates</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                        <option value={{ $expense->category }} {{ $expense->category == $expense->category ? 'selected="selected"' : '' }}>{{$expense->category}}</option>
                    </select>
                    {{-- <x-jet-input id="category" class="block mt-1 w-full" type="text" name="category" value="{{ $expense->category }}" required /> --}}
                </div>
                <div class="mt-4">
                    <x-jet-label for="amount" value="{{ __('Amount') }}" />
                    <x-jet-input id="amount" class="block mt-1 w-full" type="text" name="amount" required value="{{ $expense->amount }}" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="tenant" value="{{ __('Tenant') }}" />
                    <select name="tenant" id="tenant" class="form-select block rounded-md shadow-sm mt-1  w-full">
                        @foreach($tenants as $tenant)
                            <option value={{ $tenant->id }} {{ $tenant->getFullName() == $tenant->getFullName() ? 'selected="selected"' : '' }}>{{$tenant->getFullName()}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4">
                    <x-jet-label for="particulars" value="{{ __('Particulars') }}" />
                    <x-jet-input id="particulars" class="block mt-1 w-full" type="text" name="particulars" required value="{{ $expense->particulars }}" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-jet-button class="ml-4" >
                        {{ __('Save') }}
                    </x-jet-button>
                </div>
            </form>
         </div>
     </div>

</x-app-layout>

