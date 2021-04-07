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
                    <div class="max-w-lg rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4 text-lg">
                            {{-- <div><td><b class="uppercase pr-2">Customer Name: </b></td><td>{{$customer->customer_name}} {{$customer->customer_last_name}}</td></div>
                            <div><td><b class="uppercase pr-2">Phone Number: </b></td><td>{{$customer->phone_number}}</td></div>
                            <div><td><b class="uppercase pr-2">Business Premises: </b></td><td>{{$customer->location_of_business}}</td></div>
                            <div><td><b class="uppercase pr-2">Residential address: </b></td><td>{{$customer->residence}}</td></div>
                            <div><td><b class="uppercase pr-2">Guarantor Name: </b></td><td>{{$customer->guarantor_name}}</td></div>
                            <div><td><b class="uppercase pr-2">Guarantor ID: </b></td><td>{{$customer->guarantor_id}}</td></div>
                            <div><td><b class="uppercase pr-2">Guarantor Phone number: </b></td><td>{{$customer->guarantor_phone_number}}</td></div>
                            <div><td><b class="uppercase pr-2">Guarantor Address: </b></td><td>{{$customer->guarantor_location}}</td></div>
                            <div><td><b class="uppercase pr-2">Next of Kin: </b></td><td>{{$customer->next_of_kin}}</td></div>
                            <div><td><b class="uppercase pr-2">Next of Kin Phone Number: </b></td><td>{{$customer->next_of_kin_phone_number}}</td></div>
                            <div><td><b class="uppercase pr-2">Next of Kin Address: </b></td><td>{{$customer->next_of_kin_location}}</td></div> --}}
                        </div>
                    </div>
                  </div>
                  <div x-show="openTab === 2">
                    <div class="max-w-xl rounded overflow-hidden shadow-lg">
                        <div class="px-6 py-4 text-md">
                            {{-- <table class="table-auto">
                                <thead class="bg-gray-800 text-white text-md">
                                    <th class="uppercase pr-3">Amount</th>
                                    <th class="uppercase pr-3">Date Disbursed</th>
                                    <th class="uppercase pr-3">Date Due</th>
                                    <th class="uppercase">Action</th>
                                </thead>
                                @foreach ($customer->loans as $item)
                                <tr class="text-md bg-gray-200">
                                    <td class="p-3">Ksh {{number_format($item->amount)}}</td>
                                    <td class="p-3 text-right">{{\Carbon\Carbon::parse($item->date_disbursed)->format(' jS F Y ')}}</td>
                                    <td class="p-3 text-right">{{\Carbon\Carbon::parse($item->date_due)->format(' jS F Y ')}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </table> --}}
                        </div>
                    </div>
                  </div>
                  <div x-show="openTab === 3">
                    <div class="max-w-md rounded overflow-hidden shadow-lg ">
                        {{-- <div class="px-6 py-4 text-xl">
                            <div><b>Total Disbursed Amount: </b>Ksh {{number_format(($customer->loans)->sum('amount'))}} </div>
                            <div><b>Average Loan Amount: </b>Ksh {{number_format(($customer->loans)->average('amount'))}} </div>
                            <div><b>Total Paid Amount: </b>Ksh @if ($customer->transactions > 0)
                                {{$customer->transactions->sum('amount')}}
                            @else
                                {{0}}
                            @endif
                            </div>
                        </div> --}}
                    </div>
                  </div>
                </div>
            </div>
</x-app-layout>
