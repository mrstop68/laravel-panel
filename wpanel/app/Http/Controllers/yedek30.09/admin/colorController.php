<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;

class colorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colors['colorAll'] = Color::select('title', 'color')->get();
        foreach ($colors['colorAll'] as $item) {
            $colorsx[$item->title] = $item->color;
        }
        // return view('admin.pages.color');
        return view('admin.pages.color')->with($colorsx);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $dd = Color::where('title', 'headerbg')->update([
            "color" => $request->headerbg,
        ]);
        $dd = Color::where('title', 'headertext')->update([
            "color" => $request->headertext,
        ]);
        $dd = Color::where('title', 'footerbg')->update([
            "color" => $request->footerbg,
        ]);
        $dd = Color::where('title', 'footertext')->update([
            "color" => $request->footertext,
        ]);
        $colors['colorAll'] = Color::select('title', 'color')->get();
        foreach ($colors['colorAll'] as $item) {
            $colorsx[$item->title] = $item->color;
        }

        return view('admin.pages.color')->with($colorsx);
        // return view('admin.pages.color');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
