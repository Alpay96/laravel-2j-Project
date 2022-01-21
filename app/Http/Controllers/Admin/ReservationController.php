<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::all();
        return view('admin.reservations', ['datalist' => $datalist]);
    }

    public function list($status)
    {
        $datalist = Reservation::where('status', $status)->get();
        return view('admin.reservations', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */

    public function show(Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        return view('admin.reservation_edit', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */

    public function edit(Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        $data->status = 'Read';
        $data->save();
        return view('admin.reservation_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        $data->status = $request->input('status');
        $data->admin_note = $request->input('admin_note');
        $data->save();
        return back()->with('success', 'Review Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */

    public function destroy(Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Review Deleted');
    }
}
