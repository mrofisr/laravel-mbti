<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <head>
        @include('layout.head', ['title' => 'Hasil Test'])
        <style>
            @media print {
                @page {
                    margin-top: 0;
                    margin-bottom: 0;
                }

                body {
                    -webkit-print-color-adjust: exact;
                    padding-top: 72px;
                    padding-bottom: 72px;
                }
                #printbtn{
                    display: none !important;
                }

            }
        </style>
    </head>
</head>

<body>
    <div class="container w-full mx-auto">
        <p class="text-center text-2xl font-bold mt-10 text-green-900">HASIL TEST MBTI - MBTI FREE TEST</p>
        <p class="uppercase text-lg text-green-900">Nama : {{ $nama ?? 'NULL' }}</p>
        <p class="uppercase text-lg text-green-900">Prodi : {{ $prodi ?? 'NULL' }}</p>
        <p class="uppercase text-lg text-green-900">Jenis Kelamin : {{ $jenis_kelamin ?? 'NULL' }}</p>
        <p class="text-lg text-green-900">Tipe Kepribadian : {{ $hasil ?? 'ISTPE' }}</p>
        <table class="border-2 w-full mt-5 mb-5">
            <tr>
                <th class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">No</th>
                <th class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">Simbol</th>
                <th class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">Skor</th>
            </tr>
            <tbody>
                <tr class="mx-20">
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">1</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">(P) Perceivers</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">{{ round($P) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">2</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">(I) Inroverts</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">{{ round($I) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">3</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">(J) Judgers</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">{{ round($J) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">4</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">(T) Thinkers</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">{{ round($T) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">5</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">(E) Extroverts</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">{{ round($E) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">6</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">(N) Intuitives</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">{{ round($N) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">7</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">(S) Sensors</td>
                    <td class="text-center border-2 border-green-400 p-2 text-green-900">{{ round($S) ?? '80' }}%</td>
                </tr>
                <tr>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">8</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">(F) Feelers</td>
                    <td class="text-center border-2 border-green-400 p-2 bg-green-500 text-white">{{ round($F) ?? '80' }}%</td>
                </tr>
            </tbody>
        </table>
        <p class="text-green-900"><b>Penjelasan</b> : </p>
        <div class="bg-green-300 py-3 px-4 italic text-justify my-3">
            <blockquote>Experimenter yang pemberani dan praktis, menguasai semua jenis alat. Tenang, cenderung kaku, logis, rasional, kritis, percaya diri, pemecah masalah yang baik.</blockquote>
        </div>
        <p class="text-green-900"><b>Profesi</b> :  Polisi, Programmer, Ahli Komputer, Teknisi, Insinyur, Mekanik, Pilot, Atlet</p>
        <p class="text-green-900"><b>Partner</b> : ESTJ atau ENTJ</p>
        <p class="text-green-900"><b>Tokoh Terkenal</b> : Tom Cruise, Clint Eastwood, Keith Richards</p>
        <p class="text-green-900"><b>Sumber : </b>Hikmatun Balighoh Nur Fitriyati., M.Psi.</p>
        <div class="text-right text-green-900 mt-10">
            <p class="pb-16">Semarang, {{ now()->format('d M Y') }}</p>
            <p>Hikmatun Balighoh Nur Fitriyati., M.Psi.</p>
            <p>SIPP : 0880 20 2 2</p>
        </div>
        <div class="flex justify-center mb-20">
            <input id="printbtn" onclick="window.print();"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="button"
                value="PRINT 🖨️">
        </div>
    </div>
</body>

</html>
