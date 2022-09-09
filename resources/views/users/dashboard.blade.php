<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
    <!--  Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <div class="flex items-center justify-center">
        <div class="container">
            @csrf
            <form action="/hasil" method="post">
                {{ csrf_field() }}
                <div class="w-full mb-8 overflow-hidden ">
                    <div class="w-full overflow-x-auto">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="flex justify-center w-full h-screen items-center">
                                        <input type="text" name="nama" id="nama" placeholder="Nama Anda"
                                            class="block mb-2 p-2 rounded-md border-2 border-green-500 shadow-md focus:outline-none focus:border-green-600 text-center uppercase"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex justify-center w-full h-screen items-center">
                                        <input type="text" name="prodi" id="prodi" placeholder="Prodi Anda"
                                            class="block mb-2 p-2 rounded-md border-2 border-green-500 shadow-md focus:outline-none focus:border-green-600 text-center uppercase"
                                            maxlength="100" required>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="flex flex-col justify-center w-full h-screen items-center">
                                        <h1 class="mb-5 text-3xl font-medium text-gray-900">Jenis Kelamin</h1>
                                        <div>
                                            <div class="flex items-center mb-4">
                                                <input id="radio-pria" type="radio" value="pria" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                                <label for="radio-pria" class="ml-2 text-xl font-medium text-gray-900 ">Pria</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="radio-wanita" type="radio" value="wanita" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                                                <label for="radio-wanita" class="ml-2 text-xl font-medium text-gray-900 ">Wanita</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $begin = 0;
                                @endphp
                                @for ($i = 0; $i < count($questions) / 3; $i++)
                                    <div class="swiper-slide">
                                        @foreach ($questions->slice($begin, 3) as $question)
                                            <div class="flex justify-center my-4 w-full cursor-pointer">
                                                <div class="flex-row w-1/2">
                                                    <p class="my-3">
                                                        {{ $question->id }}.{{ $question->pertanyaan }}
                                                    </p>
                                                    <div
                                                        class="rounded-md shadow-md py-3 px-4 w-full mb-3 border-solid border-2 border-green-500 transform transition duration-500  hover:-translate-y-1">
                                                        <label>
                                                            <input type="radio" name="{{ $question->id }}" value="{{ $question->type_satu }}" required>
                                                            <i>{{ $question->jawaban_satu }}</i>
                                                        </label>
                                                    </div>
                                                    <div
                                                        class="rounded-md shadow-md py-3 px-4 w-full border-solid border-2 border-green-500 transform transition duration-500  hover:-translate-y-1">
                                                        <label>
                                                            <input type="radio" name="{{ $question->id }}" value="{{ $question->type_dua }}" required>
                                                            <i>{{ $question->jawaban_dua }}</i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @php
                                        $begin += 3;
                                    @endphp
                                @endfor
                                <div class="swiper-slide">
                                    <div class="flex justify-center h-screen items-center">
                                        <input type="submit"
                                            class="transform transition duration-500 hover:scale-105 hover:-translate-y-1 bg-green-600 hover:scale-11 hover:bg-green-800 text-white py-3 px-6 rounded-md"
                                            value="Lihat hasil">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <footer class="footer bg-white fixed bottom-0 w-full z-10">
            <div class="container mx-auto">
                <div class="border-t-2 border-gray-300 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-green-700 font-bold mb-2">
                            © {{ date('Y') }} by TI UIN Walisongo
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.mySwiper', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
</body>

</html>
