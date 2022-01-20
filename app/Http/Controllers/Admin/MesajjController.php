<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mesajj;
use Illuminate\Http\Request;

class MesajjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Mesajj::all();
        return view('admin.messages', ['datalist'=>$datalist]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesajj  $mesajj
     * @return \Illuminate\Http\Response
     */
    public function show(Mesajj $mesajj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesajj  $mesajj
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesajj $mesajj,$id)
    {
        $data = Mesajj::find($id);
        $data->status = 'Read';
        $data->save();
        return view('admin.messages_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mesajj  $mesajj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesajj $mesajj, $id)
    {
        $data = Mesajj::find($id);
        $data->note = $request->input('note');
        $data->save();
        return back()->with('success', 'Message Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesajj  $mesajj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesajj $mesajj, $id)
    {
        $data = Mesajj::find($id);
        $data->delete();
        return redirect()->route('admin_message')->with('success', 'Message Deleted.');
    }
}
