@extends('layouts.layouts')
@section('content')
    <body class="w-full h-full bg-slate-50">
        <div id="admin-login-modal" class="fixed transition-opacity z-50">
        <div class="fixed inset-0 overflow-y-auto">
            <div class="flex min-h-full justify-center p-0 text-left items-center">
            <form action="/admin/login" method="POST">
                @csrf
                <div class="relative transform overflow-hidden rounded-xl text-left shadow-xl transition-all my-8 w-[80vw] max-w-lg">
                    <div class="bg-white px-4 pt-5 pb-4 p-6">
                    <div class="block items-start">
                        <div class="text-left mt-0">
                        <div class="flex my-1 items-center justify-center">
                            <h3 class=" text-xl font-black leading-6 text-black" id="modal-title">Admin Login</h3>
                        </div>
                        <hr class="my-4">
                        <div class="mt-2">
                            <div class="mb-5">
                                <label for="discussion-title"><span class="text-md font-extrabold text-black">Username</span></label>
                                <input type="text" name="username" value="{{Session::get('username')}}" class="form-control w-full my-2 border-2 border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" placeholder="Username..." required>
                            </div>
                            <div class="mb-5">
                                <label for="discussion-title"><span class="text-md font-extrabold text-black">Password</span></label>
                                <input type="password" name="password" class="form-control w-full my-2 border-2 border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-600 focus:border-transparent ease-out duration-100" placeholder="Password..." required>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="bg-white px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <!-- <a href="/admin"> -->
                            <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-orange-500 px-4 py-2 text-base font-extrabold text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-600 sm:ml-3 sm:w-auto sm:text-sm hover:bg-orange-600 transition duration-150 ease-in-out">Login</button>
                            <a href="/">
                                <button type="button"
                                class="inline-flex w-full mt-[0.5em] md:mt-0 justify-center rounded-md bg-white border border-orange-500 px-4 py-2 text-base font-extrabold text-orange-500 shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-600 sm:ml-3 sm:w-auto sm:text-sm hover:bg-orange-500 transition duration-150 ease-in-out hover:text-white">Back</button>
                            </a>
                        <!-- </a> -->
                    </div>
                    </div>
            </form>
            </div>
            </div>
        </div>
        </body>
    </div>
@endsection