<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="//unpkg.com/alpinejs" defer></script>

    @vite('resources/css/app.css')

    <title>LaraGigs | Find Laravel Jobs & Projects</title>
</head>


<body class="mb-48">
    <nav class="sticky top-0 left-0 z-20 flex items-center justify-between bg-white">
        <a href="/"><img class="w-16"
                src="https://raw.githubusercontent.com/bradtraversy/laragigs/main/_laragigs_theme/images/logo.png"
                alt="" class="logo" /></a>
        <ul class="flex mr-6 space-x-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">Welcome {{ auth()->user()->name }}</span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                        Manage Listings</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button class="hover:text-laravel" type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>
            @endauth
        </ul>
    </nav>



    <main>
        {{-- VIEW OUTPUT --}}
        {{ $slot }}
    </main>
    <footer
        class="fixed bottom-0 left-0 flex items-center justify-start w-full h-16 pl-5 mt-24 font-bold text-white md:pl-0 bg-laravel opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <div class="absolute top-0 flex items-center h-full right-10">
            <a href="/listings/create" class="px-5 py-2 text-white bg-black ">Post Job</a>
        </div>
    </footer>

    <x-flash-message />
</body>

</html>
