<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
</head>

<body>
    <div class="flex items-center justify-center">
        <div class="container">
            @csrf
            <form action="/hasil" method="post">
                {{ csrf_field() }}
                <div class="flex justify-center w-full mt-10">
                    <div class="flex-row w-1/2">
                        <input type="text" name="nama" id="nama" placeholder="Nama Anda"
                            class="block mb-2 p-2 rounded-md border-2 border-indigo-500 shadow-md focus:outline-none focus:border-indigo-600">
                    </div>
                </div>
                <div class="w-full mb-8 overflow-hidden ">
                    <div class="w-full overflow-x-auto">
                        @foreach ($questions as $question)
                            <div class="flex justify-center my-4 w-full cursor-pointer">
                                <div class="flex-row w-1/2">
                                    <p class="my-3">{{ $question->id }}.</p>
                                    <div
                                        class="rounded-md shadow-md py-3 px-4 w-full mb-3 border-solid border-2 border-indigo-500 transform transition duration-500  hover:-translate-y-1">
                                        <input type="radio" name="{{ $question->id }}"
                                            id="{{ $question->type_satu }}" value="{{ $question->type_satu }}">
                                        <span>{{ $question->jawaban_satu }}</span>
                                    </div>
                                    <div
                                        class="rounded-md shadow-md py-3 px-4 w-full border-solid border-2 border-indigo-500 transform transition duration-500  hover:-translate-y-1">
                                        <input type="radio" name="{{ $question->id }}"
                                            id="{{ $question->type_dua }}" value="{{ $question->type_dua }}">
                                        <span>{{ $question->jawaban_dua }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-center my-4 w-full mb-5 ">
                    <div class="flex-row w-1/2">
                        <input type="submit"
                            class="transform transition duration-500 hover:scale-105 hover:-translate-y-1 bg-indigo-600 hover:scale-11 hover:bg-indigo-800 text-white py-3 px-6 rounded-md w-full"
                            value="Lihat hasil">
                    </div>
                </div>
            </form>
            <footer class="footer bg-white relative border-b-2 border-indigo-700">
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
        </div>
</body>

</html>
