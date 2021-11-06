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
        <p>Kepribadian MBTI ISFP adalah sosok yang tenang, sensitif, dan baik hati. Mereka membutuhkan ruang sendiri, bekerja sesuai dengan waktunya sendiri, hadir dan menikmati masa kini. Mereka berkomitmen pada orang atau prinsip yang penting bagi dirinya. Karena tak menyukai perselisihan atau konflik, ISFP takkan memaksakan pendapat atau prinsipnya.</p>
        <p>Refrensi : https://www.16personalities.com/id/kepribadian-{{strtolower($hasil)}}</p>
    </div>
</body>

</html>
