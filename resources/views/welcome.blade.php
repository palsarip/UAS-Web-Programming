<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=nunito:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Tailwind CSS -->
        @vite('resources/css/app.css')

        <!-- Jquery -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased h-[100em]">
        <nav class="bg-transparent px-2 sm:px-[5em] py-2.5 fixed w-full z-20 top-0 left-0 ">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl whitespace-nowrap dark:text-white font-black">Cluster henk</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Reserve now</button>
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
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <div class="w-full h-[40em] bg-cover bg-center bg-no-repeat px-2 sm:px-[5em]" style="background-image: url(https://images.unsplash.com/photo-1543489822-c49534f3271f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80);">
        <div class="pt-[8em]">
            <h1 class="text-4xl font-black text-center text-white">Martinez swimming pool</h1>
        </div>
    </div>
    </body>
</html>
