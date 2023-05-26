<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blogs;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blog'] = Blogs::all()->sortBy('must');
        //dd($data);
        return  view('admin.pages.blog', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pages.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // blog crete sayfasından yeni blog sayfası eklendiğinde buraya geliyor
        //dd($request->all());
        if (strlen($request->slug) > 3) {
            $slug = Str::slug($request->slug);
        } else {
            $slug = Str::slug($request->title);
        }
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,jpeg,png,webp,JPG|max:2048'
            ]);
            $fileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            // $image_resize->crop(700, 400);
            //$image_resize->resize(700, 400);
            $image_resize->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('images/blog/' . $fileName));

            //$request->file->move(public_path('/../../public_html/images/blog/'), $fileName);

        } else {
            $fileName = null;
        }
        $blog = Blogs::insert(
            [
                "title" => $request->title,
                "slug" => $slug,
                "file" => $fileName,
                "content" => $request->content,
                "status" => $request->status,
            ]
        );
        if ($blog) {
            return redirect(route('blog.index'))->with('success', 'Blog Sayfası Eklendi');
        }
        return back()->with('error', 'Blog Sayfası Eklenirken Bir Hata Oluştu');
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
        //blog sayfasından geliyor 
        $blogEdit = Blogs::find($id);
        return view('admin.pages.editBlog')->with('blogEdit', $blogEdit);
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
        // editBlog sayfasından geliyor
        if ($request->hasFile('file')) {
            $request->validate([
                "file" => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
            ]);
            $fileName = uniqid() . "." . $request->file->getClientOriginalExtension();
            $image_resize = Image::make($request->file->getRealPath());
            // $image_resize->crop(700, 400);
            //$image_resize->resize(700, 400);
            $image_resize->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image_resize->save(public_path('images/blog/' . $fileName));
            //$request->file->move(public_path('/../../public_html/images/blog/'), $fileName);

            $path = 'images/blog/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
        } else {
            $fileName = $request->old_file;
        }

        $blogupdate = Blogs::where('id', $id)->update(
            [
                "title" => $request->title,
                "slug" => $request->slug,
                "file" => $fileName,
                "content" => $request->content,
                "status" => $request->status
            ]
        );
        if ($blogupdate) {
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
        //blog sayfasından ajax ile gelen id ye göre blog tablosundan veriyi silme
        $blog = Blogs::find(intval($id));
        if ($blog->delete()) {
            echo 1;
        }
        echo 0;
    }
    public function blogSortable()
    {
        //print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $blogs = Blogs::find(intval($value));
            $blogs->must = intval($key);
            $blogs->save();
        }
        echo true;
    }
}
