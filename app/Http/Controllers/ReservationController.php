<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin/dashboard')->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservations.create') && view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        Reservation::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'jam_reservasi_mulai' => $request->jam_reservasi_mulai,
            'jam_reservasi_selesai' => $request->jam_reservasi_selesai
        ]);

        History::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'jam_reservasi_mulai' => $request->jam_reservasi_mulai,
            'jam_reservasi_selesai' => $request->jam_reservasi_selesai
        ]);

        return redirect('/')->with('success', 'Reservation created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approved(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $name = $reservation->nama;
        $reservation->status = 1;
        $reservation->save();

        $history = History::find($id);
        $history->status = 1;
        $history->save();

        return redirect('admin/reservations')->with('success',  $name . ' reservation approved successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rejected(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $name = $reservation->nama;
        $reservation->status = 2;
        $reservation->save();
    
        $history = History::find($id);
        $history->status = 2;
        $history->save();
        
        return redirect('admin/reservations')->with('success',  $name . ' reservation rejected successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkin(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $name = $reservation->nama;
        $reservation->waktu_checkin = now();
        $reservation->status = 3;
        $reservation->save();
        
        $history = History::find($id);
        $history->waktu_checkin = now();
        $history->status = 3;
        $history->save();
        
        return redirect('admin/checks')->with('success',  $name . ' has been checked in');
    }

    public function checkout(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $name = $reservation->nama;
        $reservation->waktu_checkout = now();
        $reservation->status = 4;
        $reservation->save();
        
        $history = History::find($id);
        $history->waktu_checkout = now();
        $history->status = 4;
        $history->save();
        
        return redirect('admin/checks')->with('success',  $name . ' has been checked out');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $name = $reservation->nama;
        $reservation->delete();
        return redirect('admin/reservations')->with('success', $name . ' reservation deleted successfully');
    }
}
