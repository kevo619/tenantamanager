<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="chart" style="height: 300px;"></div>
            </div>
            {{-- <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="chart2" style="height:300px;"></div>
            </div> --}}
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <div class="rounded h-full flex-row justify-center items-center pr-4 py-5">
                <div class="rounded bg-green-200 shadow-md h-48 w-48 p-6  flex flex-col justify-around">
                  <div>
                    <p class="text-xl uppercase font-semibold text-gray-600">Monthly Revenue</p>
                  </div>
                  <div>
                    <p class="text-2xl text-gray-700 font-bold">Ksh 56,734</p>
                  </div>

                </div>
              </div>
              <div class="rounded h-full flex-row justify-center items-center py-5">
                <div class="rounded bg-red-200 shadow-md h-48 w-48 p-6 flex flex-col justify-around">
                  <div>
                    <p class="text-xl uppercase font-semibold text-gray-600">Monthly Expenses</p>
                  </div>
                  <div>
                    <p class="text-2xl text-gray-700 font-bold">Ksh 6,734</p>
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
        //  chart = new Chartisan({
        //   el: '#chart2',
        //   url: "@chart('sample_chart')",
        // });
      </script>
</x-app-layout>
