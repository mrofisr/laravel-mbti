<!DOCTYPE html>
<html x-data="data()" lang="en">


<head>
    @include('layout.head', ['title' => 'Admin Login'])
    <link href="{{ secure_asset('css/tailwind.output.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full"
                        src="{{ secure_asset('images/login-office.jpeg') }}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        @csrf
                        <form action="/admin/login" method="post">
                            {{ csrf_field() }}
                            <h1 class="mb-4 text-xl font-semibold text-gray-700">
                                Admin Login
                            </h1>
                            <label class="block text-sm">
                                <span class="text-gray-700">Email</span>
                                <input type="text"
                                    class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text" name="email" class="form-control" placeholder="Email" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700">Password</span>
                                <input
                                    class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="password" name="password" class="form-control" placeholder="Password" />
                            </label>

                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button type="submit"
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Log in
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
