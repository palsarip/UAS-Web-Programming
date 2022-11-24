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
    <body class="antialiased h-full">
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
            <button id="scroll-to-top" type="button" class="flex justify-center items-center w-16 h-16 text-orange-500 bg-white rounded-full hover:bg-slate-100 focus:ring-4 hover:font-bold focus:ring-blue-300 focus:outline-none duration-200 ease-in-out drop-shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
            </svg>
            </button>
        </div>
        <div class="absolute w-full h-full">
            <div class="hero-section w-full h-0 relative lg:sticky top-0 px-[1em] xl:px-[11.5em] z-20">
                <div class="mt-[7em] pt-[4em]">
                    <h1 class="xl:text-7xl lg:text-5xl md:text-5xl text-5xl font-black text-center text-white"><span class="">Martinez</span> swimming pool</h1>
                </div>
                <div class="py-[1em] md:py-[2.5em] xl:px-[15em] lg:px-[12.5em] md:px-[6em]">
                    <p class="text-md md:text-md text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc sit amet aliquam luctus, nisi nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. </p>
                </div>
                <div class="flex justify-center"><div>
                    </div>
                </div>
                <div class="maxW-full mx-auto w-auto md:w-[35em] lg:w-[35em] xl:w-[42.5em] h-full">
                    <div class="flex justify-between content-center px-[1em] py-[1em] bg-white rounded-full">
                        <div class="ml-[1em] block my-auto justify-between">
                            <div class="flex mb-0">
                               
                                <p class="text-md font-bold mr-[0.5em]">Location</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden md:block w-6 h-6">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-md">Location</p>
                            </div>
                        </div>
                        <div class="block my-auto justify-between">
                            <div class="flex ">
                                <p class="text-md font-bold mr-[0.5em]">Schedule</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="hidden md:block w-6 h-6">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="hidden md:block text-md">Open at 6AM - 5PM</p>
                                <p class="block md:hidden text-md">6AM - 5PM</p>
                            </div>
                        </div>
                        <div class="block my-auto">
                            <button class="text-white bg-orange-500  font-bold rounded-full text-sm p-3 md:px-5 md:py-[1em] text-center mr-0 hover:bg-orange-400 ease-in-out duration-200">
                                <p class="hidden md:block">Book Now</p>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="block md:hidden w-6 h-6">
                                <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
                                </svg>
                            </button>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-0 w-full h-[41.5em] sm:h-[50em] md:h-[55em] lg:h-[70em] bg-cover bg-[url('/public/sky2.jpg')] z-10"></div>
            <div class="absolute top-0 mt-[30em] w-full h-[55em] bg-contain bg-no-repeat xl:bg-cover bg-[url('/public/martinez-house.png')] z-30"></div>
        </div>
        <div class="bg-white w-full h-[150em]">
            tes
        </div>
        <div id="admin-login-modal" class="fixed inset-0 bg-gray-700 bg-opacity-80 transition-opacity hidden z-50">
      <div class="fixed inset-0 overflow-y-auto ">
        <div class="flex min-h-full justify-center p-0 text-left items-center">
          <form action="./admin">
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all my-8 w-[80vw] max-w-lg">
            <div class="bg-white px-4 pt-5 pb-4 p-6">
              <div class="block items-start">
                <div class="text-left mt-0">
                  <div class="flex items-center justify-between">
                    <h3 class=" text-lg font-black leading-6 text-black" id="modal-title">Admin Login</h3>
                    <div>
                      <button id="admin-login-quit" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                          <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="mt-2">
                      <div class="mb-5">
                        <label for="discussion-title"><span class="text-md font-extrabold text-black">Username</span></label>
                        <input type="text" name="Title"  class="form-control w-full my-2 border-2 border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" placeholder="Username..." required>
                      </div>
                      <div class="mb-5">
                        <label for="discussion-title"><span class="text-md font-extrabold text-black">Password</span></label>
                        <input type="text" name="Title"  class="form-control w-full my-2 border-2 border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" placeholder="Password..." required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <!-- <a href="/admin"> -->
                    <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-orange-500 px-4 py-2 text-base font-extrabold text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-600 sm:ml-3 sm:w-auto sm:text-sm">Login</button>
                <!-- </a> -->
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
      <div class="">
    </body>
    <script type="module">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#navbar').addClass('backdrop-blur-md');
            } else {
                $('#navbar').removeClass('backdrop-blur-md');
            }
        });
        $(document).on('keypress', function(e) {
            if (e.shiftKey && e.keyCode == 65) {
                e.preventDefault();
                $('#admin-login-modal').show();
                $("body").addClass("overflow-hidden");
            }
        });
        $(document).on('click', '#admin-login-quit', function(e) {
            e.preventDefault();
            $('#admin-login-modal').hide();
            $("body").removeClass("overflow-hidden");
        });
        $(document).on('click', '#scroll-to-top', function(e) {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    </script>
</html>
