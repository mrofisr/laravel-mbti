<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" ang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.head', ['title' => 'Mulai Test'])
        <link href="{{ secure_asset('css/tailwind.output.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layout.sidebar')
        <div class="flex flex-col flex-1 w-full">
            @include('layout.navbar')
            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        User Report
                    </h2>
                    <div class="w-full overflow-x-auto">
                        <livewire:reports-table searchable="nama, result" />
                    </div>
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
</body>

</html>
