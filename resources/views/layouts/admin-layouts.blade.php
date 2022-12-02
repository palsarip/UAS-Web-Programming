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
    <body class="antialiased h-full bg-slate-50">
        <aside>
          <div class="fixed left-6 top-10 group drop-shadow-md z-50">
            <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
              <ul class="flex flex-col py-[1em] px-[0.75em] bg-white rounded-lg"> 
                <li class="mt-0.5 w-full">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white justify-center px-4 font-semibold text-orange-500 transition-color" href="./pages/dashboard.html">
                    <span class="text-lg font-bold text-center">Admin Panel</span>
                  </a>
                </li>
                <li class="mt-[2.5em] w-full ">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="./pages/dashboard.html">
                      <div class="overflow-hidden relative w-10 h-10 bg-slate-300 rounded-full mx-auto">
                        <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                  </a>
                </li>
                <li class="mt-0.5 w-full">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap justify-center rounded-lg bg-white px-4 font-semibold text-black transition-colors" href="./pages/dashboard.html">
                    <span class="mt-1 text-md font-semibold text-center">$nama_admin</span>
                  </a>
                </li>
                <li class="mt-[1.5em] w-full p-1 mb-[0.75em] hover:bg-slate-100 rounded">
                  <a class="w-full py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors text-orange-500 cursor-pointer">
                    <div class="shadow-soft-2xl mr-1 flex items-center justify-center stroke-0 text-center ">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                        <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                      </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                  </a>
                </li>
                <li class="w-full p-1 mb-[0.5em] hover:bg-slate-100 rounded">
                  <a class="w-full py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors text-gray-400 cursor-pointer">
                    <div class="shadow-soft-2xl mr-1 flex items-center justify-center rounded-l bg-center stroke-0 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                      <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                    </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">History</span>
                  </a>
                </li>
                <li class="w-full p-1 mt-[2em] hover:bg-slate-100 rounded cursor-pointer">
                  <a class="w-full py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors text-red-500" data-bs-toggle="modal" data-bs-target="#logout-modal">
                    <div class="shadow-soft-2xl mr-1 flex items-center justify-center rounded-lgbg-center stroke-0 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm5.03 4.72a.75.75 0 010 1.06l-1.72 1.72h10.94a.75.75 0 010 1.5H10.81l1.72 1.72a.75.75 0 11-1.06 1.06l-3-3a.75.75 0 010-1.06l3-3a.75.75 0 011.06 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Logout</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </aside>
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="logout-modal" tabindex="-1" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-center p-4 border-none border- rounded-t-md">
                <h5 class="text-xl text-center font-medium leading-normal text-black">
                Are you sure want to logout?
                </h5>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-center p-4 border-t border-gray-200 rounded-b-md">
                <button type="button"
                class="inline-block px-6 py-2.5 bg-white border-2 border-red-500 text-red-500 font-black text-xs leading-tight uppercase rounded hover:bg-red-500 hover:text-white focus:bg-orange-500 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800  active:shadow-lg transition duration-150 ease-in-out"
                data-bs-dismiss="modal">
                No
                </button>
                <a href="logout">
                    <button type="button"
                    class="inline-block px-6 py-2.5 bg-orange-500 text-white font-black text-xs leading-tight uppercase rounded  hover:bg-orange-600 hover:shadow-lg focus:bg-orange-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-orange-800  transition duration-150 ease-in-out ml-1">
                    Yes
                    </button>
                </a>
            </div>
            </div>
        </div>
        </div>
        <div class="flex my-[2.5em]">
          <div class="md:w-[22em] lg:w-[19em] xl:w-[17em]"></div>
            <div class=" w-full h-[full] mx-[2em] bg-white drop-shadow-md rounded-xl z-50">
              <div class="m-[2em]">
                <div>
                    @yield('content')
                </div>
              </div>
            </div>
        </div>
        @include('sweetalert::alert')
        </body>
</html>