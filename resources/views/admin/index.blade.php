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
                  <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors text-orange-500 " href="./pages/tables.html">
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
                  <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors text-gray-400" href="./pages/tables.html">
                    <div class="shadow-soft-2xl mr-1 flex items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                      <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z" clip-rule="evenodd" />
                    </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">History</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </aside>
        <div class="flex my-[2.5em]">
          <div class="md:w-[22em] lg:w-[19em] xl:w-[17em]"></div>
            <div class=" w-full h-[full] mx-[2em] bg-white drop-shadow-md rounded-xl z-50">
              <div class="m-[2em]">
                <div>
                  <p class="text-2xl font-bold my-2">Dashboard</p>
                  <hr class="border-2 bg-black opacity-1 rounded-full">
                </div>
                <div>
                  
                </div>
              </div>
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
        $(document).on('keypress', function(e) {
            if (e.shiftKey && e.keyCode == 65) {
                e.preventDefault();
                console.log('shift + a');
                $('#admin-login-modal').removeClass('hidden');
            }else{
                $('#admin-login-modal').addClass('hidden');
            }
        });
        $(document).on('click', '#admin-login-quit', function(e) {
            e.preventDefault();
            $('#admin-login-modal').addClass('hidden');
        });
    </script>
</html>
