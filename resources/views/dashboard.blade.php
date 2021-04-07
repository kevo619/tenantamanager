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
            <div class="">
                <div id="chart2" style="height:300px;"></div>
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
    </script>
    <script>
        const chart = new Chartisan({
          el: '#chart',
          url: "@chart('sample_chart')",
        });
      </script>
</x-app-layout>
