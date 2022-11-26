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
              <ul class="flex flex-col py-[1em] px-[0.5em] bg-white rounded-md"> 
                <li class="mt-0.5 w-full">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white justify-center px-4 font-semibold text-slate-700 transition-colors" href="./pages/dashboard.html">
                    <span class="text-lg font-bold text-center">Admin Panel</span>
                  </a>
                </li>
                <li class="mt-[2.5em] w-full">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="./pages/dashboard.html">
                      <div class="overflow-hidden relative w-10 h-10 bg-slate-300 rounded-full mx-auto">
                        <svg class="absolute -left-1 w-12 h-12 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                  </a>
                </li>
                <li class="mt-0.5 w-full">
                  <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap justify-center rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="./pages/dashboard.html">
                    <span class="mt-1 text-md font-semibold text-center">$nama_admin</span>
                  </a>
                </li>
                <li class="mt-[1.5em] w-full">
                  <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/tables.html">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                      <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                      <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                  </a>
                </li>
  
                <li class="mt-0.5 w-full">
                  <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/billing.html">
                    <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                      <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>credit-card</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                            <g transform="translate(1716.000000, 291.000000)">
                              <g transform="translate(453.000000, 454.000000)">
                                <path class="fill-slate-800 opacity-60" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"></path>
                                <path class="fill-slate-800" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Billing</span>
                  </a>
                </li>
  

              </ul>
            </div>
          </div>
        </aside>
        <div class="fixed right-6 top-40 group drop-shadow-md z-50">
          
        </div
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
