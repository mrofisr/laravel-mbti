<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" ang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout.head', ['title' => 'Mulai Test'])
    @livewireStyles
    <link href="{{ asset('css/tailwind.output.css') }}" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none;
        }

    </style>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layout.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('layout.navbar')
            @if (Route::is('admin.post'))
                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Post List
                        </h2>
                        <!-- With actions -->
                        <div class="w-full overflow-hidden">
                            <button onclick="window.location='post/add/';"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-8 rounded">
                                Add Post
                            </button>
                            <div class="w-full overflow-x-auto">
                                <livewire:posts-table searchable="judul, author" />
                            </div>
                        </div>
                    </div>
                </main>
            @elseif (Route::is('admin.post.add'))
                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Add Post
                        </h2>
                        @csrf
                        <form class="w-full" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="author">
                                        Author
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="author" type="text" name="author" placeholder="Author">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="konten">
                                        Konten
                                    </label>
                                    <textarea
                                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                        rows="4" name="konten" maxlength="166"></textarea>
                                </div>
                                <div class="md:w-1/3 px-3 mb-6 md:mb-0">

                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        type="submit" value="Add Post" name="add_post">
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            @elseif (Route::is('admin.post.edit'))
                <main class="h-full overflow-y-auto">
                    <div class="container px-6 mx-auto grid">
                        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                            Edit Post
                        </h2>
                        @csrf
                        <form class="w-full" method="POST" action="">
                            {{ csrf_field() }}
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="author">
                                        Author
                                    </label>
                                    <input
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="author" type="text" name="author" placeholder="Author"
                                        value="{{ $author }}">
                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                        for="konten">
                                        Konten
                                    </label>
                                    <textarea
                                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                        rows="4" name="konten" maxlength="166">{{ $konten }}</textarea>
                                </div>
                                <div class="md:w-1/3 px-3 mb-6 md:mb-0">

                                </div>
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        type="submit" value="Update Post" name="update_post">
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            @endif
        </div>
    </div>
    @livewireScripts
</body>

</html>
