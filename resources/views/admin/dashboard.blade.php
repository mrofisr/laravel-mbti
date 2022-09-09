<!DOCTYPE html>
<html x-data="data()" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
    <link href="{{ secure_asset('css/tailwind.output.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.0/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0-rc.1/chartjs-plugin-datalabels.js" ></script>
    <script type="text/javascript" src="{{ secure_asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
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
                    </div>
                    <div class="grid gap-2 mb-8 md:grid-cols-2 xl:grid-cols-2">
                        <div class="bg-white rounded-lg shadow-xs ">
                            <div class="py-3 px-5 bg-white">Chart Hasil Test</div>
                            <canvas class="p-10" id="chartPieMBTI"></canvas>
                        </div>
                        <div class="bg-white rounded-lg shadow-xs ">
                            <div class="py-3 px-5 bg-white">Chart Jenis Kelamin</div>
                            <canvas class="p-10" id="chartJenisKelamin"></canvas>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script type="text/javascript">
        var mbtis = {!! $mbti !!}
        var jenis_kelamins = {!! $jenis_kelamin !!}
        var ctxMBTI = document.getElementById('chartPieMBTI');
        var ctxJK = document.getElementById('chartJenisKelamin');
        var myChartMBTI = new Chart(ctxMBTI, {
            type: 'pie',
            data: {
                labels: mbtis.map((mbti) => mbti.result),
                datasets: [{
                    label: mbtis.map((mbti) => mbti.result),
                    data: mbtis.map((mbti) => mbti.total),
                    borderWidth: 0,
                    hoverOffset: 5,
                    backgroundColor: [
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
                        '#F3AC16', 
                        '#9F9F9F', 
                        '#FF3355', 
                        '#55EE22', 
                        '#354D73', 
                        '#666633', 
                        '#553FCF'
                    ],
                    cutout: 0,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                layout: {
                    padding: {
                        bottom: 25
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            footer: (ttItem) => {
                                let sum = 0;
                                let dataArr = ttItem[0].dataset.data;
                                dataArr.map(data => {
                                sum += Number(data);
                                });

                                let percentage = (ttItem[0].parsed * 100 / sum).toFixed(2) + '%';
                                return `Percentage of data: ${percentage}`;
                            }
                        }
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    datalabels: {
                        formatter: (value, dnct1) => {
                        let sum = 0;
                        let dataArr = dnct1.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += Number(data);
                        });
                        let percentage = (value * 100 / sum).toFixed(2) + '%';
                            return percentage;
                        },
                        color: '#FFF',
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
        var myChartJK = new Chart(ctxJK, {
            type: 'pie',
            data: {
                labels: jenis_kelamins.map((jenis_kelamin) => jenis_kelamin.jenis_kelamin),
                datasets: [{
                    label: jenis_kelamins.map((jenis_kelamin) => jenis_kelamin.jenis_kelamin),
                    data: jenis_kelamins.map((jenis_kelamin) => jenis_kelamin.total),
                    borderWidth: 0,
                    hoverOffset: 5,
                    backgroundColor: [
                        "#41DC7F", 
                        "#7BCDBA"
                    ],
                    cutout: 0,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                layout: {
                    padding: {
                        bottom: 25
                    }
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            footer: (ttItem) => {
                                let sum = 0;
                                let dataArr = ttItem[0].dataset.data;
                                dataArr.map(data => {
                                sum += Number(data);
                                });

                                let percentage = (ttItem[0].parsed * 100 / sum).toFixed(2) + '%';
                                return `Percentage of data: ${percentage}`;
                            }
                        }
                    },
                    legend: {
                        position: 'bottom',
                        labels: {
                            boxWidth: 12
                        }
                    },
                    datalabels: {
                        formatter: (value, dnct1) => {
                        let sum = 0;
                        let dataArr = dnct1.chart.data.datasets[0].data;
                        dataArr.map(data => {
                            sum += Number(data);
                        });
                        let percentage = (value * 100 / sum).toFixed(2) + '%';
                            return percentage;
                        },
                        color: '#FFF',
                    }
                }
            },
            plugins: [ChartDataLabels]
        });
    </script> 
</body>

</html>
