@extends('layouts.layouts')
@section('content')
    <body class="antialiased h-full">
            <nav id="navbar" class="bg-transparent px-[1.5em] xl:px-[11.5em] lg:px-[5em] md:px-[2em] py-2.5 absolute w-full top-0 left-0 ease-in-out duration-500 z-50">
                <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="/" class="flex items-center focus:outline-orange-500 focus:outline-none duration-200 ease-in-out">
                    <span class="self-center text-xl whitespace-nowrap dark:text-white font-black ">Martinez</span>
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
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:bg-transparent md:p-0 text-lg focus:outline-orange-500 focus:outline-none duration-200 ease-in-out" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 focus:outline-orange-500 focus:outline-none duration-200 ease-in-out">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 focus:outline-orange-500 focus:outline-none duration-200 ease-in-out">Services</a>
                    </li>
                    <!-- <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-white rounded md:hover:bg-transparent md:p-0 opacity-50 text-lg hover:opacity-100 focus:outline-orange-500 focus:outline-none duration-200 ease-in-out">Contact</a>
                    </li> -->
                    </ul>
                </div>
                </div>
            </nav>
            <div class="fixed right-6 bottom-[6.5em] group z-50">
                <button id="reserve-list-button" type="button" class="flex justify-center items-center w-16 h-16 text-orange-500 bg-white rounded-full hover:bg-slate-200 focus:ring-4 hover:font-bold focus:ring-orange-500 focus:outline-none duration-200 ease-in-out drop-shadow-md" data-bs-toggle="modal" data-bs-target="#reserve-list-modal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                <path fill-rule="evenodd" d="M10.5 3A1.501 1.501 0 009 4.5h6A1.5 1.5 0 0013.5 3h-3zm-2.693.178A3 3 0 0110.5 1.5h3a3 3 0 012.694 1.678c.497.042.992.092 1.486.15 1.497.173 2.57 1.46 2.57 2.929V19.5a3 3 0 01-3 3H6.75a3 3 0 01-3-3V6.257c0-1.47 1.073-2.756 2.57-2.93.493-.057.989-.107 1.487-.15z" clip-rule="evenodd" />
                </svg>
                </button>
            </div>
            <div class="fixed right-6 bottom-6 group z-50">
                <button id="scroll-to-top" type="button" class="flex justify-center items-center w-16 h-16 text-orange-500 bg-white rounded-full hover:bg-slate-200 focus:ring-4 hover:font-bold focus:ring-orange-500 focus:outline-none duration-200 ease-in-out drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                </svg>
                </button>
            </div>
            <section class="relative w-full h-[120vh] md:h-[135vw] lg:h-[165vh] xl:h-[215vh]"></section>
            <!-- <img src="{{ asset('sky2.jpg') }}" alt="" class="absolute top-0 left-0 w-full h-[115vh] md:h-[135vw] lg:h-[165vh] xl:h-[215vh] bg-cover z-10"> -->
            <!-- <img src="{{ asset('martinez-house.png') }}" alt="" class="absolute mt-[40vw] md:mt-[35vw] lg:mt-[65vh] xl:mt-[80vh] top-0 left-0 w-full h-[100vh] md:h-[100vw] lg:h-[100vh] xl:h-[135vh] bg-contain bg-no-repeat bg-bottom lg:bg-cover z-30"> -->
            <div class="absolute top-0 left-0 w-full h-[115vh] md:h-[135vw] lg:h-[165vh] xl:h-[215vh] bg-cover z-10 bg-[url({{ asset('sky2.jpg') }})]"></div>
            <div class="absolute mt-[40vw] md:mt-[35vw] lg:mt-[65vh] xl:mt-[80vh] top-0 left-0 w-full h-[100vh] md:h-[100vw] lg:h-[100vh] xl:h-[135vh] bg-contain bg-no-repeat bg-bottom lg:bg-cover z-30 bg-[url({{ asset('martinez-house.png') }})]"></div>
            <div class="absolute top-0 w-full h-full mt-[2em]">
                <div class="hero-section w-full h-0 relative lg:sticky top-0 px-[1em] xl:px-[11.5em] z-50 lg:z-20">
                    <div class="mt-[7em] pt-[4em]">
                        <h1 class="xl:text-7xl lg:text-5xl md:text-5xl text-5xl font-black text-center text-white"><span class="">Martinez</span> swimming pool</h1>
                    </div>
                    <div class="py-[1em] md:py-[2.5em] xl:px-[15em] lg:px-[12.5em] md:px-[6em]">
                        <p class="text-md md:text-md text-center text-white">Martinez Swimming Pool </p>
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
                                <button class="text-white bg-orange-500  font-bold rounded-full text-sm p-3 md:px-5 md:py-[1em] text-center mr-0 hover:bg-orange-400 focus:bg-orange-600 focus:outline-none duration-200 ease-in-out" data-bs-toggle="modal" data-bs-target="#reserve-modal">
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
                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="reserve-list-modal" tabindex="-1" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-xl modal-dialog-centered relative w-auto pointer-events-none">
                    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header text-start flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                        <h5 class="text-xl text-center font-medium leading-normal text-orange-500" >
                        Martinez 
                        </h5>
                        <button type="button"data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
                    </div>
                    <div class="modal-header text-center flex flex-shrink-0 items-center justify-center py-[1.5em] rounded-t-md">
                        <h5 class="text-2xl font-bold leading-normal text-gray-800" >
                            Swimming Pool Waiting List
                        </h5>
                    </div>
                    <div class="modal-body relative px-4 pb-4">
                        <div class="flex flex-col border-2 rounded-lg px-[2em]">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                @if((count($reservations) > 0))
                                <table class="min-w-full">
                                <thead class="bg-white border-b">
                                    <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Name
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Adress
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Reservation Date
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Reservation Time Start
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Reservation Time End
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Status
                                    </th>
                                    </tr>
                                </thead>
                                @foreach ($reservations as $reservation)
                                    @if($reservation->status == 0 || $reservation->status == 1 || $reservation->status == 2 || $reservation->status == 3)
                                    <tbody>
                                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $reservation->nama }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $reservation->alamat }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $reservation->tanggal_reservasi }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $reservation->jam_reservasi_mulai }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $reservation->jam_reservasi_selesai }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if ($reservation->status == 0)
                                        <span class="px-4 py-1 rounded-full text-gray-500 bg-gray-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Unconfirmed</span>
                                        @elseif ($reservation->status == 1)
                                        <span class="px-4 py-1 rounded-full text-green-500 bg-green-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Confirmed</span>
                                        @elseif ($reservation->status == 2)
                                        <span class="px-4 py-1 rounded-full text-red-500 bg-red-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Rejected</span>
                                        @elseif ($reservation->status == 3)
                                        <span class="px-4 py-1 rounded-full text-blue-500 bg-blue-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Checked In</span>
                                        @endif
                                    </td>
                                        </tr>
                                    </tbody>
                                    @endif
                                @endforeach
                                </table>
                                @else
                                <div class="flex justify-center items-center">
                                <h1 class="text-2xl font-bold text-gray-500 text-center">No Reservation</h1>
                                </div>
                                @endif
                            </div>
                            </div>
                        </div>
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
        </div>
        <div>
            <div class="w-full h-full my-[3em] px-[1em] xl:px-[11.5em] lg:px-[5em] md:px-[2em]">
                <!-- <div class="w-full h-[0.4em] bg-orange-500"></div> -->
                <div class="text-2xl my-[3em] md:text-3xl lg:text-4xl text-center font-semibold italic text-black">"Compact Home & Modern Architecture with Serene Nature Environment"</div>
                <!-- <div class="w-full h-[0.4em] bg-orange-500"></div> -->
            </div>
            <div class="w-full h-auto bg-gray-50 py-[10em] px-[1.5em] xl:px-[11.5em] lg:px-[5em] md:px-[2em]">
                <div class="w-full h-full block md:flex justify-between align-center my-[3em]">
                    <div class=" w-full md:w-[85%] lg:w-[95%] xl:w-[85%] h-[20vh] md:h-[70vh] mb-[1em] md:mb-0 md:mr-[1em] lg:mr-[2em] bg-cover bg-no-repeat bg-[url({{ asset('martinez-swimming-pool.jpg') }})]"></div>
                    <div class="w-full h-auto ml-0 md:ml-2 lg:ml-8 my-auto md:overflow-y-auto ">
                        <div>
                        <h5 class="w-full md:w-[75%] text-black mt-[3em] md:mt-0 text-2xl md:text-3xl lg:text-4xl xl:text-5xl xl:leading-tight font-black mb-[0.5em] text-center md:text-left">Improve your <br> life quality with martinez</h5>
                        </div>
                        <div class="text-sm md:text-md xl:text-lg text-black mt-[3em] md:mt-0 font-thin text-center md:text-justify ">                           
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dicta, voluptate vitae accusamus a delectus eveniet dolore hic sequi, earum voluptatum modi similique accusantium enim repellat amet debitis culpa doloremque ratione? Ab quam quod similique voluptatum iste. Odit ipsum pariatur eos ad repudiandae explicabo hic. Optio assumenda fugiat animi magni inventore, quisquam corporis expedita quo fuga iste officiis possimus sapiente quibusdam veritatis eum modi itaque!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full h-auto bg-white py-[10em] px-[1.5em] xl:px-[11.5em] lg:px-[5em] md:px-[2em]">
                <div class="w-full h-full block md:flex justify-between">
                    <div>
                        <h5 class="w-full text-black text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-black text-center md:text-left">Explore Our Pool</h5>
                    </div>
                    <div class="w-full md:w-[40%] text-center">
                        <h5 class="text-sm md:text-md xl:text-lg text-black mt-[2.5em] md:mt-0 font-thin text-center md:text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias illo excepturi magnam sed harum fuga sapiente, dolor itaque distinctio voluptate.</h5>
                    </div>
                </div>
                <div class="w-full h-full flex justify-between my-[5em] overflow-x-auto">
                    <div class="w-full h-[40vh] bg-[url({{ asset('martinez-clubhouse.jpg') }})] bg-cover bg-no-repeat"></div>
                    <div class="w-full h-[40vh] bg-[url({{ asset('clubhouse-table.jpg') }})] bg-cover bg-no-repeat mx-[2em]"></div>
                    <div class="w-full h-[40vh] bg-[url({{ asset('playground.jpg') }})] bg-cover bg-no-repeat bg-center"></div>
                </div>
                <div class="w-full h-[85vh] block md:flex justify-center my-[3em] bg-[url({{ asset('martinez-clubhouse.jpg') }})] bg-cover bg-no-repeat"></div>
            </div>
        </div>
        <footer class="lg:mt-[10em] text-center lg:text-left bg-orange-500 text-white">
            <div class="flex justify-center items-center lg:justify-between p-6 border-b border-white">
                <div class="mr-12 hidden lg:block">
                <span>Get connected with us on social networks:</span>
                </div>
                <div class="flex justify-center">
                <a href="#!" class="mr-6 text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                    class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 320 512">
                    <path fill="currentColor"
                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                    </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                    class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                    class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                    <path fill="currentColor"
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                    </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                    class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                    </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                    class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                    </path>
                    </svg>
                </a>
                <a href="#!" class="text-white">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
                    class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                    <path fill="currentColor"
                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                    </path>
                    </svg>
                </a>
                </div>
            </div>
            <div class="mx-6 py-10 text-center md:text-left">
                <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-[12.5em]">
                <div class="">
                    <h6 class="uppercase font-semibold mb-2 flexitems-center justify-center md:justify-start">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 mr-3">
                    <path d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z" />
                    <path fill-rule="evenodd" d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z" clip-rule="evenodd" /> -->
                    <div class="w-full h-full flex justify-center lg:justify-start">
                        <img src="https://www.summareconserpong.com/assets/images/serpong/SA.png" alt="" class="w-[12em] h-[4.5em] mb-3">
                    </div>
                    </svg>
                    Martinez Swimming Pool
                    </h6>
                    <p class="text-md font-thin">
                    Jl. Boulevard Raya Gading Serpong Blok M5 No. 3
                    Tangerang 15810, Indonesia
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Navigation
                    </h6>
                    <p class="mb-4">
                    <a href="#!" class="text-white">Home</a>
                    </p>
                    <p class="mb-4">
                    <a href="#!" class="text-white">About</a>
                    </p>
                    <p class="mb-4">
                    <a href="#!" class="text-white">Services</a>
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                    Contact Person
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 mr-4">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    +62 888 8888 8888
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 mr-4">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    +62 888 8888 8888
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 mr-4">
                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                    </svg>
                    +62 888 8888 8888
                    </p>
                </div>
                </div>
            </div>
            <!-- <div class="text-center p-6 bg-orange-500">
                <span>© 2022 Copyright:</span>
                <a class="text-white font-semibold" href="https://tailwind-elements.com/">Tailwind Elements</a>
            </div> -->
            </footer>
            <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 right-0 border-none w-96" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header flex items-center justify-between p-4">
                    <h5 class="offcanvas-title mb-0 leading-normal text-lg font-bold text-orange-500" id="offcanvasRightLabel">Martinez</h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                    <div class="w-full h-auto block mt-[1em]">
                        <a href="">
                            <button class="w-full h-auto flex justify-center py-2 text-orange-500 text-xl font-semibold">Home</button>
                        </a>
                        <a href="">
                            <button class="w-full h-auto flex justify-center py-2 text-orange-500 text-xl font-semibold">About</button>
                        </a>
                        <a href="">
                            <button class="w-full h-auto flex justify-center py-2 text-orange-500 text-xl font-semibold">Services</button>
                        </a>
                        <a href="">
                            <button class="w-full h-auto flex justify-center py-2 text-orange-500 text-xl font-semibold">Contact</button>
                        </a>
                    </div>
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

                // if ($(this).scrollTop() > 100) {
                //     $('#scroll-to-top').removeClass('opacity-0');
                //     $('#scroll-to-top').addClass('opacity-100');
                    
                // } else {
                //     $('#scroll-to-top').removeClass('opacity-100');
                //     $('#scroll-to-top').addClass('opacity-0');
                // }
            });
            $(document).on('keypress', function(e) {
                if (e.shiftKey && e.keyCode == 13) {
                    e.preventDefault();
                    // $('#admin-login-modal').show();
                    // $("body").addClass("overflow-hidden");
                    location.href="/admin"
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