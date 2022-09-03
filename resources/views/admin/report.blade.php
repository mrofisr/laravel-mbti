<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" ang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout.head', ['title' => 'Mulai Test'])
        <link href="{{ secure_asset('css/tailwind.output.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css') }}" rel="stylesheet">
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
                        Hasil Test
                    </h2>
                    <div class="w-full overflow-x-auto">
                        <livewire:reports-table searchable="nama, result, jenis_kelamin, prodi" exportable/>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
    <script type="text/javascript" src="{{ secure_asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
	<!--Datatables -->
	<script src="{{ secure_asset('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ secure_asset('https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
</body>

</html>
