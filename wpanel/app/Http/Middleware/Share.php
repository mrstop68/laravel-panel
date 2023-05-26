<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;
use App\Pages;
use App\Settings;
use App\Color;

class Share
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Setting bölümündeki bilgiler veri tabanından alınarak view dosyası altındaki tüm dosyalar gönderilir.
        $settings = Settings::select('key', 'description')->get();
        $valuesAll['settingsAll'] = $settings;
        foreach ($valuesAll['settingsAll'] as $item) {
            $valuesAll[$item->key] = $item->description;
        }
        //Color 
        $valuesAll['colorAll'] = Color::all()->first();
        // foreach ($colors as $item) {
        //     $valuesAll[$item->title] = $item->color;
        // }
        //panelde sayfalar başlığı altından yayınlanan tüm sayfalar buradan view altındaki tüm sayfalara gönderildi
        $pageSlugsTitle = Pages::select('slug', 'title', 'status', 'must')->get()->where('status', 1)->sortBy('must');
        $valuesAll['slugTitle'] = $pageSlugsTitle;
        View::share($valuesAll);
        //dd($valuesAll);
        return $next($request);
    }
}
