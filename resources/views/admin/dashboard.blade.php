@extends('layouts.admin-layouts')
@section('content')
  <div class="max-h-[75vh]">
    <p class="text-3xl font-bold my-2 text-orange-500">Dashboard</p>
    <hr class="border-2 bg-black opacity-1 rounded-full my-2">
    <h5 class="text-xl font-bold mb-2">Reservation list</h5>
    <div class="flex flex-col border-2 rounded-lg">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full">
              <thead class="bg-white border-b">
                <tr>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    No
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Name
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Adress
                  </th>
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Check-in Time
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
                  <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                    Action
                  </th>
                </tr>
              </thead>
              @foreach ($reservations as $reservation)
                <tbody>
                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                      {{ $loop->iteration }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $reservation->nama }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $reservation->alamat }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      {{ $reservation->waktu_checkin }}
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
                      @endif
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                      <div class="flex">
                        <a href="" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-4 rounded-full mr-2 transition duration-300 ease">Approve</a>
                        <a href="" class="bg-red-500 mr-2 hover:bg-red-600 text-white font-bold py-1 px-4 rounded-full transition duration-300 ease">Reject</a>
                        <a href="" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-md transition duration-300 ease"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                        </svg>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  <div>
@endsection