<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div x-data="{ openTab: 1 }" class="p-6">
        <ul class="flex border-b">
          <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
            <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
            General Summary
            </a>
          </li>
          <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
            <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
            Income Summary
            </a>
          </li>
          <li @click="openTab = 3" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
            <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">
             Expense Summary
            </a>
          </li>
        </ul>
        <div class="w-full pt-4">
          <div x-show="openTab === 1">
            <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Income & Expense Information
                        </h3>
                        </div>
                        <div class="py-12 border-t">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col ">
                                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                                    <div id="chart" style="height: 300px;"></div>
                                </div>
                                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg  ">
                                    <div id="chart2" style="height:300px;"></div>
                                </div>
                            </div>
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row">
                                <div class="rounded h-full  justify-center items-center pr-4 py-5">
                                    <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6  flex flex-col justify-around">
                                      <div>
                                        <p class="text-xl uppercase font-semibold text-gray-600">GRoss Monthly Revenue</p>
                                      </div>
                                      <div>
                                        <p class="text-2xl text-gray-700 font-bold">Ksh 56,734</p>
                                      </div>

                                    </div>
                                </div>
                                  <div class="rounded h-full  justify-center items-center pr-4 py-5">
                                    <div class="rounded bg-red-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                      <div>
                                        <p class="text-xl uppercase font-semibold text-gray-600">GRoss Monthly Expenses</p>
                                      </div>
                                      <div>
                                        <p class="text-2xl text-gray-700 font-bold">Ksh 6,734</p>
                                      </div>

                                    </div>
                                  </div>

                                  <div class="rounded h-full  justify-center items-center py-5">
                                    <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                      <div>
                                        <p class="text-xl uppercase font-semibold text-gray-600">tenant Occupancy rate</p>
                                      </div>
                                      <div>
                                        <p class="text-2xl text-gray-700 font-bold">100%</p>
                                      </div>

                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

          </div>
          <div x-show="openTab === 2">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="min-w-screen min-h-screen bg-gray-100 px-5 py-5">

                    <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 mb-10">
                        <div class="max-w-5xl mx-auto md:flex">
                            <div class="md:w-1/4 md:flex md:flex-col">
                                <div class="text-left w-full flex-grow md:pr-5">
                                    <h3 class="text-4xl font-bold mb-5">Rental Income</h3>
                                    <h3 class="text-md font-medium mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit repellat dignissimos laboriosam odit accusamus porro*</h3>
                                </div>
                                <div class="w-full mb-2">
                                    <p class="text-xs">*Lorem ipsum sit amet</p>
                                </div>
                            </div>
                            <div class="md:w-3/4">
                                <div class="max-w-4xl mx-auto md:flex pr-2">
                                    <div class="w-full md:w-1/3 md:max-w-none bg-green-200 px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-2 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col ">
                                        <div class="w-full flex-grow rounded-md">
                                            <h2 class="text-center font-bold uppercase mb-4">GROSS Rental income</h2>
                                            <h3 class="text-center font-bold text-4xl mb-5">Ksh 800<span class="text-sm"></span></h3>
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/3 md:max-w-none bg-green-200 px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-2 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                                        <div class="w-full flex-grow rounded-md">
                                            <h2 class="text-center font-bold uppercase mb-4">GROSS Rental income</h2>
                                            <h3 class="text-center font-bold text-4xl mb-5">Ksh 800<span class="text-sm"></span></h3>
                                            <ul class="text-sm mb-8">
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                                            </ul>
                                        </div>
                                        <div class="w-full">
                                        </div>
                                    </div>
                                    <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-2 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                                        <div class="w-full flex-grow">
                                            <h2 class="text-center font-bold uppercase mb-4">PRO</h2>
                                            <h3 class="text-center font-bold text-4xl mb-5">$35<span class="text-sm">/mo</span></h3>
                                            <ul class="text-sm mb-8">
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Consectetur</li>
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Adipisicing</li>
                                                <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Much more...</li>
                                            </ul>
                                        </div>
                                        <div class="w-full">
                                            <button class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
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
    <script>
    const chart = new Chartisan({
            el: '#chart',
            url: "@chart('demo_chart')",
            hooks: new ChartisanHooks()
                .legend()
                .colors()
                .datasets('pie')
                //.responsive('true')
                //.datasets([{type:'line',fill:true}])
                .tooltip()
                .axis(false),
        });
             chart = new Chartisan({
              el: '#chart2',
              url: "@chart('sample_chart')",
            });
      </script>
</x-app-layout>
