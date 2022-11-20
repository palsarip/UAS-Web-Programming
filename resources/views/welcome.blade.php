<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|plus-jakarta-sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                /* font-family: 'Nunito', sans-serif; */
                font-family: 'Plus Jakarta Sans', sans-serif;
            }
        </style>

        <!-- Tailwind CSS -->
        @vite('resources/css/app.css')

        <!-- Jquery -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased h-[100em]">
        <nav id="navbar" class="bg-transparent px-2 xl:px-[11.5em] lg:px-[5em] md:px-[2em] sm:px-0 py-2.5 absolute w-full z-20 top-0 left-0 ">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl whitespace-nowrap dark:text-white font-black">Martinez</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-full text-sm px-5 py-2.5 text-center mr-3 md:mr-0 hover:bg-orange-400 ease-in-out duration-200">Reserve now</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 mt-4 borderrounded-lg bg-transparent md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium ">
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 text-lg" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 ease-in-out duration-200">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 ease-in-out duration-200">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 ease-in-out duration-200">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="w-full h-[100em] bg-cover bg-center bg-no-repeat px-2 xl:px-[11.5em] bg-[url('/public/pool.jpg')] absolute">
            <div class="hero-section sticky top-0 mt-[3.5em] pt-[7em]">
                <div class="pt-[0em]">
                    <h1 class="text-7xl font-black text-center text-white"><span class="">Martinez</span> swimming pool</h1>
                </div>
                <div class="py-[2.5em] xl:px-[15em] lg:px-[10em] md:px-[5em]">
                    <p class="text-lg text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc sit amet aliquam luctus, nisi nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. </p>
            </div>
    </div>
    </body>
    <script type="module">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#navbar').addClass('backdrop-blur-md');
            } else {
                $('#navbar').removeClass('backdrop-blur-md');
            }
        });
    </script>
</html>
