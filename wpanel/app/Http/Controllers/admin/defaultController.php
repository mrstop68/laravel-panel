<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class defaultController extends Controller
{
    public function index()
    {

        return view('admin.pages.index');
    }
    public function settings()
    {
        $data['adminSettings'] = Settings::all()->sortBy('must');
        return view('admin.pages.settings', compact('data'));
    }
    public function settingSortable()
    {
        //print_r($_POST['item']);

        foreach ($_POST['item'] as $key => $value) {
            $settings = Settings::find(intval($value));
            $settings->must = intval($key);
            $settings->save();
        }
        echo true;
    }
    public function destroy($id)
    {
        $settings = Settings::find($id);
        if ($settings->delete()) {
            return  back()->with('success', 'Silme İşlemi Başarılı');
        } else {
            return back()->with('error', 'Silme İşlemi Başarısız!');
        }
    }
    public function edit($id)
    {
        $settings = Settings::where('id', $id)->first();
        return view('admin.pages.editSettings')->with('settingsEdit', $settings);
    }

    public function editUpdate(Request $request, $id)
    {

        if ($request->hasFile('descriptionName')) {
            $request->validate([
                'descriptionName' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048'
            ]);

            $file_name = uniqid() . '.' . $request->descriptionName->getClientOriginalExtension();
            $request->descriptionName->move(public_path('/../../public_html/images/'), $file_name);
            // $request->descriptionName->move(public_path('images/'), $file_name);
            $request->descriptionName = $file_name;
        }

        $settings = Settings::where('id', $id)->update(
            [
                "description" => $request->descriptionName,

            ]
        );
        if ($settings) {
            $path = '/../../public_html/images/' . $request->old_file;
            // $path = 'images/' . $request->old_file;
            if (file_exists($path)) {
                @unlink(public_path($path));
            }
            return back()->with("success", "Düzenleme İşlemi Başarılı");
        } else {
            return back()->with("error", "Düzenleme İşlemi Başarısız!");
        }
    }

    public function auth(Request $request)
    {
        //dd($request->all());
        $request->flash(); //form verilerini session a atarak geri dönüşlerde form verilerinin otomatik doldurulmasını sağlar.

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended(route('panelIndex'));
        } else {
            return back()->with('error', ('Kullanıcı adı veya şifre hatalı'));
        }
        //return back();
    }

    public function loginA()
    {
        return view('admin.pages.login');
    }
    public function contact()
    {
        $mapcode = Contact::all()->first();
        return view('admin.pages.contact', compact('mapcode'));
    }
    public function contactUpdate(Request $request)
    {



        if (($request->mapcode) && ($request->mailsend)) {
            $code = $request->mapcode;
            $codeExp = explode(" ", $code)[1];
            $codeSubs = substr($codeExp, 5, -1);
            $updateContact = Contact::where('id', 1)->update([
                "mapcode" => $codeSubs,
                "sendmail" => $request->mailsend,
                "status" => $request->status
            ]);
            if ($updateContact) {
                return back()->with('success', 'Güncelleme Başarılı');
            } else {
                return back()->with('error', 'Güncelleme Başarısız!');
            }
        } else if ($request->mapcode) {
            $code = $request->mapcode;
            $codeExp = explode(" ", $code)[1];
            $codeSubs = substr($codeExp, 5, -1);
            $updateContact = Contact::where('id', 1)->update([
                "mapcode" => $request->mapcode,
                "status" => $request->status
            ]);
            if ($updateContact) {
                return back()->with('success', 'Güncelleme Başarılı');
            } else {
                return back()->with('error', 'Güncelleme Başarısız!');
            }
        } else if ($request->mailsend) {
            $updateContact = Contact::where('id', 1)->update([
                "sendmail" => $request->mailsend,
                "status" => $request->status
            ]);
            if ($updateContact) {
                return back()->with('success', 'Güncelleme Başarılı');
            } else {
                return back()->with('error', 'Güncelleme Başarısız!');
            }
        }
    }
}
