@extends('admin.layout')
@section('content')
<div class="app-main__inner">
    <div class="">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body" >
                        <div class="contentimg" >
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info" >
                                <a href="{{route('page.index')}}" ><div><img src="/images/home/newpage.png" alt=""><h5 class="card-title mt-3 text-center">Sayfalar ve Yeni Sayfa Oluşturma</h5></div></a>
                            </div>
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info">
                                <a href="{{route('slider.index')}}"><div><img src="/images/home/slider.png" alt=""><h5 class="card-title mt-3 text-center">Slider Ekleme ve Sıralama</h5></div></a>
                            </div>
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info">
                                <a href="{{route('corparate.index')}}"><div><img src="/images/home/corparate.png" alt=""><h5 class="card-title mt-3 text-center">Kurumsal Sayfa</h5></div></a>
                            </div>
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info">
                                <a href="{{route('blog.index')}}"><div><img src="/images/home/blog2.png" alt=""><h5 class="card-title mt-3 text-center">Blog Sayfası Oluşturma, Düzenleme ve Sıralama</h5></div></a>
                            </div>
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info">
                                <a href="{{route('panel.gallery')}}"><div><img src="/images/home/gallery.png" alt=""><h5 class="card-title mt-3 text-center">Tüm Sayfalar için Galeri Oluşturma</h5></div></a>
                            </div>
                            <div class="itemimg card-shadow-info border mb-3 card card-body border-info">
                                <a href="{{route('panelSettings')}}"><div><img src="/images/home/settings.png" alt=""><h5 class="card-title mt-3 text-center">Ayarlar, Seo ve İçerik Ekleme</h5></div></a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="card-footer">
                        Card Footer
                    </div> --}}
                </div>
        </div>
    </div>
</div>
@endsection
@section('css')
    <style>
        .contentimg{
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            justify-content: space-evenly;
            box-sizing: border-box;
            
        }
        .itemimg{
            max-width: 25%;
            margin: 0px 8px;
            box-sizing: border-box;
            align-self: stretch;
        }
        .itemimg img{
            width: 100%;

        }
        @media (max-width:786px){
            .itemimg{
            max-width: 47%;
            margin: 0px 2px;
            box-sizing: border-box;
            
        }
        }
        @media (max-width:477px){
            .itemimg{
            max-width: 98%;
            margin: 0px 2px;
            box-sizing: border-box;
            
        }
        }
    </style>
@endsection