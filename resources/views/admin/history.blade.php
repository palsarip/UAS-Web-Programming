@extends('layouts.admin-layouts')
@section('content')
  <div class="max-h-[75vh]">
    <p class="text-3xl font-bold my-2 text-orange-500">History</p>
    <hr class="border-2 bg-black opacity-1 rounded-full my-2 mb-[2em]">
    <div class="flex flex-col border-2 rounded-lg px-[2em]">
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">
            @if((count($history) > 0))
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
                </tr>
              </thead>
              @foreach ($history as $history)
                  <tbody>
                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $loop->iteration }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->nama }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->alamat }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->waktu_checkin }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->tanggal_reservasi }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->jam_reservasi_mulai }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $history->jam_reservasi_selesai }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        @if ($history->status == 0)
                        <span class="px-4 py-1 rounded-full text-gray-500 bg-gray-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Unconfirmed</span>
                        @elseif ($history->status == 1)
                        <span class="px-4 py-1 rounded-full text-green-500 bg-green-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Confirmed</span>
                        @elseif ($history->status == 2)
                        <span class="px-4 py-1 rounded-full text-red-500 bg-red-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Rejected</span>
                        @elseif ($history->status == 3)
                        <span class="px-4 py-1 rounded-full text-blue-500 bg-blue-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Checked In</span>
                        @elseif ($history->status == 4)
                        <span class="px-4 py-1 rounded-full text-red-500 bg-red-200 text-center font-light text-sm flex align-center justify-center w-full active:bg-gray-300 transition duration-300 ease">Checked Out</span>
                        @endif
                      </td>
                    </tr>
                  </tbody>
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
  <div>
@endsection