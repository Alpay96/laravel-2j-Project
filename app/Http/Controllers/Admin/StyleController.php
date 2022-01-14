<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Style::all();
        return view('admin.style', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $datalist = Style::all();
        return view('admin.style_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = new Style;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->save();
        return redirect()->route('admin_style');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Style $style
     * @return \Illuminate\Http\Response
     */
    public function show(Style $style)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Style $style
     * @return \Illuminate\Http\Response
     */
    public function edit(Style $style, $id)
    {
        $data = Style::find($id);
        $datalist = Style::all();
        return view('admin.style_edit', ['data' => $data, 'datalist' => $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Style $style
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Style $style, $id)
    {
        $data = Style::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->detail = $request->input('detail');
        $data->save();
        return redirect()->route('admin_style');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Style $style
     * @return \Illuminate\Http\Response
     */
    public function destroy(Style $style, $id)
    {
        $data = Style::find($id);
        $data->delete();
        return redirect()->route('admin_style');
    }
}
