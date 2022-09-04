<!DOCTYPE html>
<html x-data="data()" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
    <link href="{{ secure_asset('css/Chart.min.css') }}" rel="stylesheet">
    <script src="{{ secure_asset('js/Chart.min.js') }}"></script>
    <script src="{{ secure_asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ secure_asset('js/charts-pie.js') }}" defer></script>
    <link href="{{ secure_asset('css/tailwind.output.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layout.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('layout.navbar')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 ">
                        Dashboard
                    </h2>
                    <!-- Cards -->
                    <div class="grid gap-3 mb-8 md:grid-cols-3 xl:grid-cols-3">
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs ">
                            <div class="p-3 mr-4 text-red-500 ">
                                <i class="material-icons">person</i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Total Admin
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{$userCount}}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs ">
                            <div class="p-3 mr-4 text-orange-500">
                                <i class="material-icons">group</i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Total Audience
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{$reportCount}}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs ">
                            <div class="p-3 mr-4 text-green-500">
                                <i class="material-icons">chat</i>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Total Question
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{$questionCount}}
                                </p>
                            </div>
                        </div>
                        <div class="shadow-lg rounded-lg bg-white overflow-hidden">
                            <div class="py-3 px-5 bg-white">Grafik Tipe Kepribadian</div>
                            <canvas class="p-10" id="chartPieMBTI"></canvas>
                        </div>
                        <div class="shadow-lg rounded-lg bg-white overflow-hidden">
                            <div class="py-3 px-5 bg-white">Grafik Jenis Kelamin</div>
                            <canvas class="p-10" id="chartPieJenisKelamin"></canvas>
                        </div>
                        <div class="shadow-lg rounded-lg bg-white overflow-hidden">
                            <div class="py-3 px-5 bg-white">Grafik Prodi</div>
                            <canvas class="p-10" id="chartPieProdi"></canvas>
                        </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        var mbtis = {!! $mbti !!}
        const dataPieMBTI = {
          labels: mbtis.map((mbti) => mbti.result),
          datasets: [
            {
              data: mbtis.map((mbti) => mbti.total),
              backgroundColor:[
                  "#41DC7F", 
                  "#7BCDBA",
                  "#B47AEA", 
                  "#fb8500", 
                  "#219ebc", 
                  "#03045e",
                  "#ff006e",
                  "#d62828",
                  "#fcf6bd",
                  "#06d6a0",
                ],
              hoverOffset: 4,
            },
          ],
        };
        const dataPieJenisKelamin = {
          labels: mbtis.map((mbti) => mbti.result),
          datasets: [
            {
              data: mbtis.map((mbti) => mbti.total),
              backgroundColor:[
                  "#41DC7F", 
                  "#7BCDBA",
                  "#B47AEA", 
                  "#fb8500", 
                  "#219ebc", 
                  "#03045e",
                  "#ff006e",
                  "#d62828",
                  "#fcf6bd",
                  "#06d6a0",
                ],
              hoverOffset: 4,
            },
          ],
        };
        const dataPieProdi = {
          labels: mbtis.map((mbti) => mbti.result),
          datasets: [
            {
              data: mbtis.map((mbti) => mbti.total),
              backgroundColor:[
                  "#41DC7F", 
                  "#7BCDBA",
                  "#B47AEA", 
                  "#fb8500", 
                  "#219ebc", 
                  "#03045e",
                  "#ff006e",
                  "#d62828",
                  "#fcf6bd",
                  "#06d6a0",
                ],
              hoverOffset: 4,
            },
          ],
        };
        const chartPieMBTI = {
          type: "pie",
          data: dataPieMBTI,
          options: {
            responsive: false,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 12
                }
            },
          }
        };
        const chartPieJenisKelamin = {
          type: "pie",
          data: dataPieJenisKelamin,
          options: {
            responsive: false,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 12
                }
            },
          }
        };
        const chartPieProdi = {
          type: "pie",
          data: dataPieProdi,
          options: {
            responsive: false,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 12
                }
            },
          }
        };
        var chartPieMBTI = new Chart(document.getElementById("chartPieMBTI").getContext('2d'), chartPieMBTI);
        var chartPieJenisKelamin = new Chart(document.getElementById("chartPieJenisKelamin").getContext('2d'), chartPieJenisKelamin);
        var chartPieProdi = new Chart(document.getElementById("chartPieProdi").getContext('2d'), chartPieProdi);
      </script>
</body>

</html>
