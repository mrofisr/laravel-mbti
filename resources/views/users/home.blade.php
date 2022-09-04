<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head', ['title' => 'Home'])
    <style>
        html {
            scroll-behavior: smooth;
        }

    </style>
</head>

<body class="w-full">
    <div class="w-full text-gray-700 bg-white  ">
        <div x-data="{ open: false }"
            class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8    ">
            <div class="p-4 flex flex-row items-center justify-between">
                <a href="#"
                    class="text-lg font-semibold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">MBTI<span
                        class="ml-2 text-indigo-600">Test</span></a>
                <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row ">
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg       md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#">Beranda</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg       md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#mbti">Apa itu MBTI</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg       md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#panduan">Panduan</a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg       md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="#about">Tentang Kita</a>
                @if (Auth::check())
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg       md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/admin/logout">Logout</a>
                @endif
            </nav>
        </div>
    </div>
    <div class="flex bg-white max-w-screen-xl h-screen">
        <div class="flex items-center text-center lg:text-left px-5 md:px-20 lg:w-1/2">
            <div>
                <h1 class="py-5 text-5xl font-semibold text-gray-800 md:text-6xl">MBTI<span
                        class="ml-2 text-indigo-600">Test</span></h1>

                <p class="mt-2 text-sm text-gray-500 md:text-lg"><strong>MBTI
                        Test</strong> ini bertujuan untuk menemukan diri dalam 16 tipe kepribadian MBTI.
                    Kenali lebih jauh dirimu untuk berkembang setidaknya satu persen setiap harinya!</p>
                <div class="flex space-x-3 justify-center lg:justify-start mt-6">
                    <a href="/mulai-test-mbti"
                        class="px-4 py-2 text-sm font-semibold text-indigo-400 border-2 border-indigo-400 rounded-lg active:bg-indigo-600 hover:bg-indigo-700 hover:text-white transform hover:scale-110 hover:border-purple-50 transition duration-500">
                        Mulai Test
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2">
            <img src="{{ secure_asset('images/undraw_ideas_s70l.png') }}"
                x-transition:enter="transition duration-500 ease-in-out">
        </div>
    </div>
    <div class="min-h-screen flex justify-center items-center" id="mbti">
        <div class="container mx-auto p-10">
            <h1 class="text-4xl font-bold from-current mb-8">Apa itu MBTI Test?</h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <p class="text-2xl font-semibold">MBTI adalah tes kepribadian dengan serangkaian pertanyaan
                            tentang preferensi seseorang pada empat domain yang berbeda.</p>
                        <p class="italic mt-2">sumber : Hikmatun Balighoh Nur Fitriyati., M.Psi.</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="min-h-screen flex justify-center items-center" id="panduan">
        <div class="container mx-auto p-10">
            <h1 class="text-4xl font-bold from-current mb-8">Panduan</h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <div
                            class="shadow-md py-3 px-5 rounded-md mb-3 hover:shadow-xl transform transition duration-500 hover:scale-105 border-2 border-indigo-400 hover:bg-indigo-600 hover:text-white hover:border-purple-50">
                            1. Isilah setiap pertanyaan sesuai kepribadianmu dengan jujur. Karena setiap jawaban dapat
                            diterima dan tidak ada jawaban yang salah. </div>
                        <div
                            class="shadow-md py-3 px-5 rounded-md mb-3 hover:shadow-xl transform transition duration-500 hover:scale-105 border-2 border-indigo-400 hover:bg-indigo-600 hover:text-white hover:border-purple-50">
                            2. Jawablah dengan santai karena tes kepribadian ini tidak dibatasi waktu. </div>
                        <div
                            class="shadow-md py-3 px-5 rounded-md mb-3 hover:shadow-xl transform transition duration-500 hover:scale-105 border-2 border-indigo-400 hover:bg-indigo-600 hover:text-white hover:border-purple-50">
                            3. Kerjakan tes kepribadian ini ditempat yang nyaman dan kondusif agar kamu dapat menjawab
                            setiap pertanyaan dengan fokus</div>
                        <div
                            class="shadow-md py-3 px-5 rounded-md mb-3 hover:shadow-xl transform transition duration-500 hover:scale-105 border-2 border-indigo-400 hover:bg-indigo-600 hover:text-white hover:border-purple-50">
                            4. Apabila kamu berhenti di tengah-tengah tes, maka jawaban selama proses tes akan hilang.
                        </div>
                        <div
                            class="shadow-md py-3 px-5 rounded-md mb-3 hover:shadow-xl transform transition duration-500 hover:scale-105 border-2 border-indigo-400 hover:bg-indigo-600 hover:text-white hover:border-purple-50">
                            5. Setelah kamu selesai mengisi semua pertanyaan, kamu dapat mengetahui hasil tes
                            kepribadian ini .</div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="min-h-screen flex justify-center items-center" id="about">
        <div class="container mx-auto p-10">
            <h1 class="text-4xl font-bold from-current mb-8">Tentang Kita</h1>
            <section class="text-gray-600 body-font">
                <div class="container px-5 py-10 mx-auto">
                    <div class="flex flex-wrap -m-4">
                        <div class="p-4 lg:w-1/3 hover:shadow-xl transform transition duration-500 hover:scale-105">
                            <div
                                class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg  border-2 border-indigo-400">
                                <div class="flex justify-center -mt-16 md:justify-end">
                                    <img class="object-cover w-20 h-20 bg-white border-2 border-indigo-500 rounded-full "
                                        alt="Testimonial avatar"
                                        src="https://media-exp1.licdn.com/dms/image/C5603AQFPNuZMVy0bhA/profile-displayphoto-shrink_400_400/0/1649753239693?e=1668038400&v=beta&t=G-K5yyLTI0-93irM6n5TnnJ_5wiefmlUxwmmoBQvbag">
                                </div>

                                <h2
                                    class="mt-2 text-2xl font-semibold text-gray-800  md:mt-0 md:text-3xl">
                                    Programmer</h2>
                                <div class="flex justify-end mt-4">
                                    <p href="#" class="text-xl font-medium text-indigo-500 ">Muhammad Abdur Rofi</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 lg:w-1/3 hover:shadow-xl transform transition duration-500 hover:scale-105">
                            <div
                                class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg  border-2 border-indigo-400">
                                <div class="flex justify-center -mt-16 md:justify-end">
                                    <img class="object-cover w-20 h-20 bg-white border-2 border-indigo-500 rounded-full "
                                        alt="Testimonial avatar"
                                        src="https://forlap.kemdikbud.go.id/dosen/showfoto/aW1hZ2UvanBlZw~~/OUUzNTgyQjctNTNDMS00RjZDLUI2Q0QtMENCQ0U0OUI0MDZF">
                                </div>

                                <h2
                                    class="mt-2 text-2xl font-semibold text-gray-800  md:mt-0 md:text-3xl">
                                    Sistem Analis</h2>

                                <div class="flex justify-end mt-4">
                                    <p href="#" class="text-xl font-medium text-indigo-500 ">
                                        Mokhamad Iklil Mustofa M.Kom</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 lg:w-1/3 hover:shadow-xl transform transition duration-500 hover:scale-105">
                            <div
                                class="max-w-md px-8 py-4 mx-auto mt-16 bg-white rounded-lg shadow-lg  border-2 border-indigo-400">
                                <div class="flex justify-center -mt-16 md:justify-end">
                                    <img class="object-cover w-20 h-20 border-2 bg-white border-indigo-500 rounded-full "
                                        alt="Testimonial avatar"
                                        src="https://konsultasiku.com/wp-content/uploads/2021/12/Hikmatun-Balighoh-Nur-Fitriyati-746x1024.png">
                                </div>

                                <h2
                                    class="mt-2 text-2xl font-semibold text-gray-800  md:mt-0 md:text-3xl">
                                    Ahli Pakar</h2>

                                <div class="flex justify-end mt-4">
                                    <p href="#" class="text-xl font-medium text-indigo-500 ">
                                        Hikmatun Balighoh Nur Fitriyati., M.Psi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <footer class="footer bg-white relative pt-1 border-b-2 border-indigo-700">
        <div class="container mx-auto">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="sm:w-2/3 text-center py-6">
                    <p class="text-sm text-indigo-700 font-bold mb-2">
                        © {{ date('Y') }} by TI UIN Walisongo
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
