<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['page'] = Pages::all()->sortBy('must');
        return view('admin.pages.page', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.createPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // page crete sayfasından yeni sayfa eklendiğinde buraya geliyor
        //dd($request->all());
        if (strlen($request->slug) > 3) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($request->title);
        }
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
            ]);
            $fileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            $image_resize->resize(750, 450, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('/../../public_html/images/page/' . $fileName));
            // $image_resize->save(public_path('images/page/' . $fileName));
            //$request->file->move(public_path('/../../public_html/images/page/'), $fileName);
        } else {
            $fileName = null;
        }
        $blog = Pages::insert(
            [
                "title" => $request->title,
                "slug" => $slug,
                "file" => $fileName,
                "content" => $request->content,
                "status" => $request->status,
            ]
        );
        if ($blog) {
            return redirect(route('page.index'))->with('success', 'Sayfa Başarıyla Eklendi');
        }
        return back()->with('error', 'Sayfa Eklenirken Bir Hata Oluştu');
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
        $editPage = Pages::find($id);
        return view('admin.pages.editPage')->with('editPage', $editPage);
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
        // editPage sayfasından geliyor
        if ($request->hasFile('file')) {
            $request->validate([
                "file" => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
            ]);
            $fileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            $image_resize->resize(750, 450, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('/../../public_html/images/page/' . $fileName));
            // $image_resize->save(public_path('images/page/' . $fileName));
            //$request->file->move(public_path('/../../public_html/images/page/'), $fileName);

            $path = '/../../public_html/images/page/' . $request->old_file;
            // $path = 'images/page/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        } else {
            $fileName = $request->old_file;
        }

        $pageupdate = Pages::where('id', $id)->update(
            [
                "title" => $request->title,
                "slug" => $request->slug,
                "file" => $fileName,
                "content" => $request->content,
                "status" => $request->status
            ]
        );
        if ($pageupdate) {
            return back()->with("success", "Güncelleme İşlemi Başarılı");
        } else {
            return back()->with("error", "Güncelleme İşlemi Başarısız");
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
        $del = Pages::find(intval($id));
        // $del = Pages::where('id', $id)->first();
        if ($del->delete()) {
            echo true;
            // echo 1;
        }
        echo false;
        // echo 0;
    }
    public function pagesortable()
    {
        // print_r($_POST['item']);
        foreach ($_POST['item'] as $key => $value) {
            $page = Pages::find(intval($value));
            $page->must = intval($key);
            $page->save();
        }
        echo true;
    }
}
