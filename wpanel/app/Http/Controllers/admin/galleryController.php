<?php

namespace App\Http\Controllers\admin;

use App\Gallerys;
use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class galleryController extends Controller
{
    //
    public function gallery()
    {
        // $pages = Pages::all()->where('status', '1');
        $data['pages'] = Pages::all()->where('status', '1');
        $data['allImages'] = Gallerys::all()->sortBy('must');
        //dd($ss);
        return view('admin.pages.gallery', compact('data'));
    }
    public function corparate(Request $request, $pageSlug, $pageTitle)
    {

        $newFileName = uniqid() . "." . $request->file->getClientOriginalExtension();
        $image_resize = Image::make($request->file->getRealPath());
        $image_resize->resize(1080, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $image_resize->save(public_path('/../../public_html/images/gallery/' . $newFileName));
        // $image_resize->save(public_path('images/gallery/' . $newFileName));
        //$request->file->move(public_path('/../../public_html/images/gallery/'), $newFileName);
        //return response()->json(['success' => $newFileName]);

        $sliderInsert = Gallerys::insert([
            "page" => $pageSlug,
            "title" => $pageTitle,
            "file" => $newFileName,
        ]);
        // if ($sliderInsert) {
        //     return redirect(route('panel.gallery'))->with('success', 'Kayıt işlemi başarı ile tamamlandı');
        // } else {
        //     return back()->with('error', 'Kayıt işleminde bir sorun ile karşılaşıldı');
        // }
    }
    public function deleteAll(Request $request)
    {
        //dd($request->all());
        $ids = $request->ids;
        $deleteAll = Gallerys::whereIn('id', explode(",", $ids))->delete();
        // DB::table("gallerys")->whereIn('id', explode(",", $ids))->delete();
        return response()->json(['success' => "Silme İşlemi Başarılı."]);
        // if ($deleteAll) {
        //     return back()->with('success', 'Silme İşlemi Başarılı');
        // } else {
        //     return back()->with('error', 'Silme İşlemi Başarısız!');
        // }
        // $path = 'images/gallery/' . $request->files;
        // if (file_exists($path)) {
        //     @unlink(public_path($path));
        // }
    }
    public function galeriSortable()
    {
        //return "dkjsfh";
        //print_r($_POST['item']);
        foreach ($_POST['item'] as $key => $value) {
            $gallerys = Gallerys::find(intval($value));
            $gallerys->must = intval($key);
            $gallerys->save();
        }
        echo true;
    }
}
