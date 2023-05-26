<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sliders;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['slider'] = Sliders::all()->sortBy('must');
        return view('admin.pages.slider', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.createSlider');
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
        if (strlen($request->slug) >= 3) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($request->title);
        }
        if ($request->hasFile('file')) {
            $request->validate([
                'title' => 'required',
                'file' => 'required|image|mimes:jpg,jpeg,svg,png,webp|max:2048',
                //'url' => 'active_active_url'
            ]);


            $newFileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            $image_resize->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('images/slider/' . $newFileName));
            //$request->file->move(public_path('/../../public_html/images/slider/'), $newFileName);
        } else {
            $newFileName = null;
        }
        $sliderInsert = Sliders::insert([
            "title" => $request->title,
            // "slug" => $slug,
            "url" => $request->url,
            "file" => $newFileName,
            "content" => $request->content,
            "status" => $request->status,
        ]);
        if ($sliderInsert) {
            return redirect(route('slider.index'))->with('success', 'Kayıt işlemi başarı ile tamamlandı');
        } else {
            return back()->with('error', 'Kayıt işleminde bir sorun ile karşılaşıldı');
        }
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
        $editSlider = Sliders::find($id);
        return view('admin.pages.editSlider')->with('editSlider', $editSlider);
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
                'title' => 'required',
                'file' => 'required|image|mimes:jpg,svg,jpeg,png|max:2048',
                //'url' => 'active_active_url'
            ]);
            $newFileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            $image_resize->resize(1920, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('images/slider/' . $newFileName));
            //$request->file->move(public_path('/../../public_html/images/slider/'), $newFileName);

            $path = 'images/slider/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        } else {
            $newFileName = $request->old_file;
        }
        $sliderUpdate = Sliders::where('id', $id)->update([

            "title" => $request->title,
            // "slug" => $request->slug,
            "url" => $request->url,
            "file" => $newFileName,
            "content" => $request->content,
            "status" => $request->status
        ]);
        if ($sliderUpdate) {
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
        // $del = Sliders::find(intval($id));
        // if ($del->delete() ? "echo true" : "echo false");
        $del = Sliders::find(intval($id));
        // $del = Pages::where('id', $id)->first();
        if ($del->delete()) {
            echo true;
            // echo 1;
        }
        echo false;
        // echo 0;
    }

    public function sliderSortable()
    {
        //print_r($_POST['item']);
        foreach ($_POST['item'] as $key => $value) {
            $slider = Sliders::find(intval($value));
            $slider->must = intval($key);
            $slider->save();
        }
        echo true;
    }
}
