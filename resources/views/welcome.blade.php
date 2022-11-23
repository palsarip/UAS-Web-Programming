<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martinez Swimming Pool</title>

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
        <nav id="navbar" class="bg-transparent px-[1em] xl:px-[11.5em] lg:px-[5em] md:px-[2em] py-2.5 absolute w-full top-0 left-0 z-50">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl whitespace-nowrap dark:text-white font-black">Martinez</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white bg-orange-500  font-bold rounded-full text-sm px-5 py-2.5 text-center mr-3 md:mr-0 hover:bg-orange-400 ease-in-out duration-200">Reserve now</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
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
        <div class="fixed right-6 bottom-6 group z-50">
            <button type="button" class="flex justify-center items-center w-16 h-16 text-orange-500 bg-white rounded-full hover:bg-slate-100 focus:ring-4 hover:font-bold focus:ring-blue-300 focus:outline-none duration-200 ease-in-out drop-shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
            </svg>
            </button>
        </div>
        <div class="absolute w-full h-[50em]">
            <div class="hero-section w-full h-0 sticky top-0 px-[1em] xl:px-[11.5em] z-20">
                <div class="mt-[7em] pt-[4em]">
                    <h1 class="xl:text-7xl lg:text-6xl md:text-5xl text-5xl font-black text-center text-white"><span class="">Martinez</span> swimming pool</h1>
                </div>
                <div class="py-[1em] md:py-[2.5em] xl:px-[15em] lg:px-[10em] md:px-[5em]">
                    <p class="text-md md:text-lg text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc sit amet aliquam luctus, nisi nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. </p>
                </div>
                <div class="flex justify-center"><div>
                    </div>
                </div>
                <div class="maxW-full mx-auto w-auto md:w-[42.5em] h-full">
                    <div class="block md:flex justify-between content-center px-[2em] py-[1em] bg-white rounded-md md:rounded-full">
                        <div class="block my-auto">
                            <div class="flex">
                                <p class="text-md font-bold mr-[0.5em]">Location</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-md">Location</p>
                            </div>
                        </div>
                        <div class="block my-auto">
                            <div class="flex">
                                <p class="text-md font-bold mr-[0.5em]">Schedule</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-md">Open at 6AM - 5PM</p>
                            </div>
                        </div>
                        <div class="block my-auto">
                            <button class="text-white bg-orange-500  font-bold rounded-full text-sm px-5 py-[1em] text-center mr-3 md:mr-0 hover:bg-orange-400 ease-in-out duration-200">
                                Book Now
                            </button>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 left-0 w-full h-[70em] bg-cover bg-[url('/public/sky2.jpg')] z-10"></div>
            <div class="absolute mt-[30em] top-0 left-0 w-full h-[55em] bg-cover bg-[url('/public/martinez-house.png')] z-30"></div>
        </div>
        <div class="bg-white w-full h-[100em]"></div>
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
