@extends('layouts.layouts')
@section('content')
    <body class="antialiased h-full">
            <nav id="navbar" class="bg-transparent px-[1.5em] xl:px-[11.5em] lg:px-[5em] md:px-[2em] py-2.5 absolute w-full top-0 left-0 ease-in-out duration-500 z-50">
                <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center">
                    <span class="self-center text-xl whitespace-nowrap dark:text-white font-black">Martinez</span>
                </a>
                <div class="flex md:order-2">
                    <button id="reserve-button"  type="button" class="hidden text-white bg-orange-500 font-bold rounded-full text-sm px-5 py-2.5 text-center mr-3 md:mr-0 hover:bg-slate-200 ease-in-out duration-200" data-bs-toggle="modal" data-bs-target="#reserve-modal">Reserve now</button>
                        <button data-collapse-toggle="navbar-sticky" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" type="button" class="inline-flex items-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6 text-white" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
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
                <button id="scroll-to-top" type="button" class="flex justify-center opacity-0 items-center w-16 h-16 text-orange-500 bg-white rounded-full hover:bg-slate-100 focus:ring-4 hover:font-bold focus:ring-blue-300 focus:outline-none duration-200 ease-in-out drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                </svg>
                </button>
            </div>
            <section class="relative w-full h-[120vh] md:h-[135vw] lg:h-[165vh] xl:h-[215vh]"></section>
            <div class="absolute top-0 left-0 w-full h-[115vh] md:h-[135vw] lg:h-[165vh] xl:h-[215vh] bg-cover z-10 bg-[url('/public/sky2.jpg')]"></div>
            <div class="absolute mt-[40vw] md:mt-[35vw] lg:mt-[65vh] xl:mt-[80vh] top-0 left-0 w-full h-[100vh] md:h-[100vw] lg:h-[100vh] xl:h-[135vh] bg-contain bg-no-repeat bg-bottom lg:bg-cover z-30 bg-[url('/public/martinez-house.png')]"></div>
            <div class="absolute top-0 w-full h-full mt-[2em]">
                <div class="hero-section w-full h-0 relative lg:sticky top-0 px-[1em] xl:px-[11.5em] z-50 lg:z-20">
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
                        <div class="flex justify-between content-center p-2 md:px-[1em] md:py-[1em] bg-white rounded-full">
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
                                <button class="text-white bg-orange-500  font-bold rounded-full text-sm p-3 md:px-5 md:py-[1em] text-center mr-0 hover:bg-orange-400 ease-in-out duration-200" data-bs-toggle="modal" data-bs-target="#reserve-modal">
                                    <p class="hidden md:block">Reserve Now</p>
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
                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="reserve-modal" tabindex="-1" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header text-center flex flex-shrink-0 items-center justify-center p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl text-center font-medium leading-normal text-orange-500" >
                        Martinez <br><span class="text-xl font-medium leading-normal text-gray-800">Swimming Pool Reservation</span>
                        </h5>
                    </div>
                    <div class="modal-body relative p-4">
                        <form action="/reservations" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="block w-full h-full">
                                <div>
                                    <label for="name" class="block text-base font-normal text-black">Name</label>
                                    <div class="mt-1">
                                    <input type="text" name="nama" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray- bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition m-0 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" required>
                                    </div>
                                </div>
                                <div class="mt-[0.75em]">
                                    <label for="name" class="block text-base font-normal text-black">Adress</label>
                                    <div class="mt-1">
                                    <input type="text" name="alamat" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray- bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition m-0 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" required>
                                    </div>
                                </div>
                                <div class="mt-[0.75em]">
                                    <label for="name" class="block text-base font-normal text-black">Date</label>
                                    <div class="mt-1">
                                    <input type="date" name="tanggal_reservasi" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray- bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition m-0 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" required>
                                    </div>
                                </div>
                                <div class="mt-[0.75em] flex justify-between align-center">
                                    <div class="w-full flex-1">
                                        <label for="name" class="block text-base font-normal text-black">Start</label>
                                        <div class="mt-1">
                                        <input type="time" name="jam_reservasi_mulai" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray- bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition m-0 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" required>
                                        </div>
                                    </div>
                                    <div class="mx-2"></div>
                                    <div class="w-full flex-1">
                                        <label for="name" class="block text-base font-normal text-black">End</label>
                                        <div class="mt-1">
                                        <input type="time" name="jam_reservasi_selesai" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray- bg-white bg-clip-padding border border-solid border-gray-300 rounded-lg transition m-0 focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="modal-footer my-[1.75em] flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                <button type="button"
                                class="inline-block px-6 py-2.5 bg-white border-2 border-orange-500 text-black font-medium text-xs leading-tight uppercase rounded hover:bg-orange-500 hover:text-white focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800  active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-dismiss="modal">
                                Close
                                </button>
                                <button type="submit"
                                class="inline-block px-6 py-2.5 bg-orange-500 text-white font-medium text-xs leading-tight uppercase rounded  hover:bg-orange-600 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800  transition duration-150 ease-in-out ml-1">
                                Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
    </div>
        <div id="admin-login-modal" class="fixed inset-0 bg-gray-700 bg-opacity-80 transition-opacity hidden z-50">
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full justify-center p-0 text-left items-center">
            <form action="/authentication" method="POST">
            @csrf
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
        </div>
            <div class="w-full h-full my-[3em] px-[1em] xl:px-[11.5em] lg:px-[5em] md:px-[2em]">
                <div class="w-full h-[0.4em] bg-orange-500"></div>
                <div class="text-2xl my-[1em] md:text-3xl lg:text-4xl text-center font-semibold italic text-black">"Compact Home & Modern Architecture with Serene Nature Environment"</div>
                <div class="w-full h-[0.4em] bg-orange-500"></div>
            </div>
            <div class="w-full h-[50vh] block md:flex justify-between my-[3em] px-[1.5em] xl:px-[11.5em] lg:px-[5em] md:px-[2em]">
                <div class="w-full h-full mb-[1em] md:mb-0 md:mr-[2em] flex-1 md:rounded-tl-[5em] md:rounded-br-[5em] bg-cover bg-no-repeat bg-[url('/public/martinez-swimming-pool.jpg')]"></div>
                <div class="w-full h-full md:h-[50vh] flex-1 text-md text-justify text-black md:overflow-y-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid consequatur aut officia. Enim obcaecati modi tempore reiciendis pariatur temporibus voluptatibus reprehenderit amet dignissimos veritatis nihil, consectetur rem voluptas officia sint consequatur, facere culpa sit dicta, adipisci recusandae. Atque aut, ab error, illo minus quam nobis incidunt quas repudiandae quisquam similique vel natus at delectus ratione modi, ipsum consequuntur asperiores tempora accusantium quia maiores fugiat consequatur. Beatae laborum rem pariatur facere! Officiis sit assumenda harum vel debitis dignissimos ab voluptates doloribus magnam nostrum tenetur veniam culpa nihil ipsa, minus sapiente necessitatibus totam voluptatibus odio at facilis. Ipsa, temporibus suscipit? Voluptas, nihil?</div>
            </div>
            <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 right-0 border-none w-96" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header flex items-center justify-between p-4">
                    <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasRightLabel">Offcanvas right</h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                    ...
                </div>
            </div>
        </body>
    <script type="module">
            $(window).scroll(function() {
                if ($(this).scrollTop() > 800) {
                    $('#navbar').addClass('bg-orange-500');
                    $('#navbar').addClass('fixed');
                    $('#navbar').addClass('top-0');
                    $('#navbar').removeClass('absolute');
                    $('#reserve-button').removeClass('bg-orange-500');
                    $('#reserve-button').addClass('bg-white');
                    $('#reserve-button').removeClass('text-white');
                    $('#reserve-button').addClass('text-orange-500');
                    $('#reserve-button').removeClass('hidden');
                } else {
                    $('#navbar').removeClass('bg-orange-500');
                    $('#navbar').removeClass('fixed');
                    $('#navbar').removeClass('top-0');
                    $('#navbar').addClass('absolute');
                    $('#reserve-button').addClass('bg-orange-500');
                    $('#reserve-button').removeClass('bg-white');
                    $('#reserve-button').addClass('text-white');
                    $('#reserve-button').removeClass('text-orange-500');
                    $('#reserve-button').addClass('hidden');
                }

                if ($(this).scrollTop() > 100) {
                    $('#scroll-to-top').removeClass('opacity-0');
                    $('#scroll-to-top').addClass('opacity-100');
                } else {
                    $('#scroll-to-top').removeClass('opacity-100');
                    $('#scroll-to-top').addClass('opacity-0');
                }
            });
            $(document).on('keypress', function(e) {
                if (e.shiftKey && e.keyCode == 65) {
                    e.preventDefault();
                    // $('#admin-login-modal').show();
                    // $("body").addClass("overflow-hidden");
                    location.href="/login"
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
@endsection