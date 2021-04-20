<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-gray-800 leading-tight">
            {{ __('Tenant Details for '. $tenant->getFullName() )}}
        </h2>
    </x-slot>
            <div x-data="{ openTab: 1 }" class="p-6">
                <ul class="flex border-b">
                  <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                    Personal  Details
                    </a>
                  </li>
                  <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                    Rent Payment Details
                    </a>
                  </li>
                  <li @click="openTab = 3" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                    <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
                      Expense Details
                    </a>
                  </li>
                </ul>
                <div class="w-full pt-4">
                  <div x-show="openTab === 1">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Tenant Information
                                </h3>
                                <p class="mt-1 max-w-2xl text-md text-gray-500">
                                    Personal details
                                </p>
                                </div>
                                <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Full name
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$tenant->getFullName()}}
                                    </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Unit Occupied
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        {{$tenant->unit}}
                                    </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">

                                    </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Rent payable per month
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        Ksh 20,000
                                    </dd>
                                    </div>

                                    <form method="POST" action="{{route('document.store')}}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">
                                            Upload documents
                                            </dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <div class="">
                                                    {{-- @livewire('counter') --}}
                                                    <input type="hidden" name="tenant_id" value="{{$tenant->id}}">
                                                    <label for="file">Choose File:</label>
                                                    <input type="file" name="document" id="document" class="inline-flex items-center px-4 py-2 bg-blue-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-200 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                                    @error('document')
                                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="ml-4 py-4">
                                                    <button class=" items-center px-2 py-2 bg-green-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-200 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="submit">Upload</button>
                                                </div>
                                            </dd>
                                        </div>
                                    </form>

                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Attachments
                                    </dt>

                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                            @forelse ($tenant->documents as $document)
                                                                <tr>
                                                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                                        <div class="w-0 flex-1 flex items-center">
                                                                        <!-- Heroicon name: solid/paper-clip -->
                                                                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                            <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                                                                        </svg>
                                                                        <span class="ml-2 flex-1 w-0 truncate">
                                                                            {{ $document->name }}
                                                                        </span>
                                                                        </div>
                                                                        <div class="ml-4 flex-shrink-0 flex">
                                                                            <div class="">
                                                                            </div>
                                                                        <a href="{{ route('documents.download', $document->uuid) }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                                                        </a>
                                                                        </div>
                                                                        <div class="ml-4 flex-shrink-0">
                                                                            <form class="inline-block" action="{{route('document.destroy',$document->id)}}" method="POST" onsubmit="return confirm('Are you sure? You cannot undo this action');">
                                                                                <input type="hidden" name="_method" value="DELETE">
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                                <input type="submit" class="inline-flex items-center px-4 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-600 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" value="Delete">
                                                                            </form>
                                                                        </div>
                                                                    </li>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td >No documents found for this tenant.</td>
                                                                </tr>
                                                            @endforelse
                                        </ul>
                                    </dd>
                                    </div>
                                </dl>
                                </div>
                            </div>

                  </div>
                  <div x-show="openTab === 2">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Amount
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date Paid
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($tenant->rent as $rent)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-sm font-medium text-gray-900">
                                               Ksh {{$rent->amount_paid}}
                                            </div>
                                        </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">{{\Carbon\Carbon::parse($rent->date_paid)->format(' jS F Y ')}}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Up to Date
                                        </span>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr> No rent payments recieved for this tenant</tr>
                                    @endforelse


                                <!-- More items... -->
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>

                  </div>
                  <div x-show="openTab === 3">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                        </div>
                                        <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            Jane Cooper
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            jane.cooper@example.com
                                        </div>
                                        </div>
                                    </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm text-gray-500">Optimization</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Active
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    Admin
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>

                                <!-- More items... -->
                                </tbody>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>

                  </div>
                </div>
            </div>
</x-app-layout>
{{-- <script>
    const inputElement = document.querySelector('input[id="document"]');
    const pond = FilePond.create( inputElement );
    FilePond.setOptions({
    server: {
            url: '/upload',
            headers:{
                'X-CSRF-TOKEN':{{csrf_token()}}
            }
    }
    });
    </script> --}}
