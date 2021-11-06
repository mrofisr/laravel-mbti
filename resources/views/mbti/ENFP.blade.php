<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        @include('layout.head', ['title' => 'Hasil Test'])
    </head>
</head>

<body>
    <div class="container">
        <p class="my-6 text-5xl font-semibold text-gray-700 dark:text-gray-200 ">
            {{ 'Selamat ' . $nama }}
        </p>
        <p class="text-2xl font-semibold">{{ 'Tipe Kepribadian Kamu Adalah ' . $hasil }}</p>
        <p>ENFP juga berkarakter hangat. Ia adalah sosok yang imajinatif dengan antusiasme tinggi. Kemampuannya dalam memahami pola dan hubungan suatu informasi dengan kejadian tertentu membuat ENFP percaya diri dalam melakukan sesuatu. Tipe kepribadian MBTI ini suportif, fleksibel, spontan, dan fasih berbicara.</p>
        <p>Refrensi : https://www.16personalities.com/id/kepribadian-{{strtolower($hasil)}}</p>
    </div>
</body>

</html>
