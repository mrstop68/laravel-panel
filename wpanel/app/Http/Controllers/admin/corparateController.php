<?php

namespace App\Http\Controllers\admin;

use App\Corparate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class corparateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corparate = Corparate::all()->first();
        //dd($corparate);
        return view('admin.pages.corparate')->with('corparate', $corparate);
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
        if ($request->hasFile('file')) {
            $request->validate([
                // 'title' => 'required',
                'file' => 'required|image|mimes:jpg,svg,jpeg,png,JPG|max:2048',
                //'url' => 'active_active_url'
            ]);
            $newFileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            $image_resize->resize(null, 470, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('/../../public_html/images/' . $newFileName));
            // $image_resize->save(public_path('images/' . $newFileName));
            //$request->file->move(public_path('/../../public_html/images/'), $newFileName);

            $path = '/../../public_html/images/' . $request->old_file;
            // $path = 'images/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        } else {
            $newFileName = $request->old_file;
        }
        $corparateUpdate = Corparate::where('id', $id)->update([

            "title" => $request->title,
            // "slug" => $request->slug,
            "file" => $newFileName,
            "content" => $request->content,
            "status" => $request->status
        ]);
        if ($corparateUpdate) {
            return back()->with('success', 'Güncelleme İşlemi Başarılı');
        } else {
            return back()->with('error', 'Güncelleme İşlemi Başarısız');
        }
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
