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
          <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
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
                            General Information
                        </h3>
                        </div>
                        {{-- <div class="py-12 border-t">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col ">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-row w-4/6">
                                    <div class="rounded h-full  justify-center items-center w-1/3 pr-4 py-5">
                                        <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6  flex flex-col justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">Average Monthly Revenue</p>
                                          </div>
                                          <div>
                                            <p class="text-2xl text-gray-700 font-bold">Ksh {{round($avgrent,0)}}</p>
                                          </div>

                                        </div>
                                    </div>
                                      <div class="rounded h-full  justify-center items-center w-1/3 pr-4 py-5">
                                        <div class="rounded bg-red-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">Average Monthly Expenses</p>
                                          </div>
                                          <div>
                                            <p class="text-2xl text-gray-700 font-bold">Ksh {{round($avgexp,0)}}</p>
                                          </div>

                                        </div>
                                      </div>

                                      <div class="rounded h-full  justify-center items-center w-1/3 py-5">
                                        <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">tenant Occupancy rate</p>
                                          </div>
                                          <div>
                                            <p class="text-2xl text-gray-700 font-bold">{{$tenants/$tenants*100}}%</p>
                                          </div>

                                        </div>
                                      </div>
                                </div>
                                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                                    <div id="chart" style="height: 300px;"></div>
                                </div>
                                <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg  ">
                                    <div id="chart2" style="height:300px;"></div>
                                </div>
                            </div>

                        </div> --}}
                        <!-- Column -->
                        <div class="flex flex-wrap -mx-1 lg:-mx-4 px-4">
                            <div class="my-1 px-4 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <!-- Article -->
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title 1
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                                <!-- END Article -->

                            </div>
                            {{-- <div class=" my-1 px-4 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                                <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6  flex flex-col justify-around">
                                  <div>
                                    <p class="text-xl uppercase font-semibold text-gray-600">Average Monthly Revenue</p>
                                  </div>
                                  <div>
                                    <p class="text-2xl text-gray-700 font-bold">Ksh {{round($avgrent,0)}}</p>
                                  </div>

                                </div>
                            </div> --}}
                            <!-- Column -->
                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <!-- Article -->
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title 1
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                                <!-- END Article -->

                            </div>
                            <!-- Column -->
                            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                                <!-- Article -->
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title 1
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                                <!-- END Article -->

                            </div>
                        </div>
                        <div class="px-4">
                            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                                <div id="chart" style="height: 300px;"></div>
                            </div>
                            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg  ">
                                <div id="chart2" style="height:300px;"></div>
                            </div>
                        </div>
                    </div>

          </div>
          <div x-show="openTab === 2">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="min-w-screen min-h-screen bg-gray-100 px-5 py-5">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-5 mx-auto">
                          <div class="flex flex-wrap -m-4">
                            {{-- <div class=" mx-auto grid grid-cols-3  sm:px-6 lg:px-8 w-4/6">
                                    <div class="rounded h-full  justify-center items-center  w-1/3 pr-4 py-5"> --}}
                                        <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6 justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">Average Monthly Revenue</p>
                                          </div>
                                          <div>
                                            <p class="text-2xl text-gray-700 font-bold">Ksh {{round($avgrent,0)}}</p>
                                          </div>

                                        </div>
                                    </div>
                                      <div class="rounded h-full  justify-center items-center w-1/3 pr-4 py-5">
                                        <div class="rounded bg-red-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">Average Monthly Expenses</p>
                                          </div>
                                          <div>
                                            <p class="text-2xl text-gray-700 font-bold">Ksh {{round($avgexp,0)}}</p>
                                          </div>

                                        </div>
                                      </div>

                                      <div class="rounded h-full  justify-center items-center w-1/3 py-5">
                                        <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                                          <div>
                                            <p class="text-xl uppercase font-semibold text-gray-600">tenant Occupancy rate</p>
                                          </div>
                                          <div>
                                            {{-- <p class="text-2xl text-gray-700 font-bold">{{$tenants/$tenants*100 ?? 0}}%</p> --}}
                                          </div>

                                        </div>
                                      </div>
                                </div>

                            </div>
                        </div>
                      </section>
            </div>

          </div>
          <div x-show="openTab === 3">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="min-w-screen min-h-screen bg-gray-100 px-5 py-5">

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-5 mx-auto">
                          <div class="flex flex-wrap -m-4">
                            <div class="p-4 md:w-1/3">
                              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-6">
                                  {{-- <h2 class="tracking-widest text-xs title-font font-bold text-black mb-1 uppercase">gross monthly revenue</h2> --}}
                                  <h1 class="title-font text-lg font-bold text-gray-900 mb-3 uppercase">gross rental income</h1>
                                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                </div>
                              </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-6">
                                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                </div>
                              </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                <div class="p-6">
                                  <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                  <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                  <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
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
                .tooltip()
                .axis(false),
        });
             chart2 = new Chartisan({
              el: '#chart2',
              url: "@chart('sample_chart')",
              hooks: new ChartisanHooks()
                    .legend()
                    .datasets([{ type: 'line', fill: true }])
                    .tooltip()
            });
      </script>
</x-app-layout>
