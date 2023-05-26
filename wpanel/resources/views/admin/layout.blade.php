<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dinamik Title </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
    <link href="/admin/css/main.css" rel="stylesheet">
    <link href="/admin/css/custom.css" rel="stylesheet">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <a href="{{route('panelIndex')}}">
                    <div class="logo-src"></div>
                </a>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <!-- <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Arama">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>

                </div> -->
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="30" class="rounded-circle" src="/admin/images/avatar.svg" alt="">
                                            <span style="color: #fff"> {{ Auth::user()->name }} </span>
                                            <i class="fa fa-angle-down ml-2 opacity-8" style="color: #fff;"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">Hesap Yönetimi</button>
                                            
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">{{ Auth::user()->name }} </button>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Çıkış Yap') }}
                                         </a>
     
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <!-- <li class="app-sidebar__heading">Anasayfa</li> -->
                            <li>
                                <a href="{{route('panelIndex')}}">
                                    <i class="metismenu-icon pe-7s-home"></i>
                                    Anasayfa
                                </a>
                            </li>
                            <li class="app-sidebar__heading"> Web Site</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Sayfalar
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{route('page.index')}}">
                                            <i class="metismenu-icon"></i>
                                            Tüm Sayfalar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('page.create')}}">
                                            <i class="metismenu-icon">
                                            </i>Yeni Ekle
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{route('slider.index')}}">
                                    <i class="metismenu-icon pe-7s-photo"></i>
                                    Slider
                                </a>
                            </li>
                            <li>
                                <a href="{{route('panelSettings')}}">
                                    <i class="metismenu-icon pe-7s-settings"></i>
                                    Ayarlar
                                </a>
                            </li>
                            <li>
                                <a href="{{route('corparate.index')}}">
                                    <i class="metismenu-icon pe-7s-global"></i>
                                    Kurumsal
                                </a>
                            </li>
                            {{-- <li class="mm-active">
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-tools"></i>
                                    Ayarlar
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-show">
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon ">
                                            </i>Menü
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="mm-active">
                                            <i class="metismenu-icon">
                                            </i>Header
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon">
                                            </i>Footer
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="metismenu-icon">
                                            </i>Harita
                                        </a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li>
                                <a href="{{route('blog.index')}}">
                                    <i class="metismenu-icon pe-7s-world"></i>
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{route('panel.gallery')}}">
                                    <i class="metismenu-icon pe-7s-photo-gallery"></i>
                                    Galeri
                                </a>
                            </li>
                            <li>
                                <a href="{{route('panel.contact')}}">
                                    <i class="metismenu-icon pe-7s-pin"></i>
                                    İletişim
                                </a>
                            </li>
                            <li>
                                <a href="{{route('color.index')}}">
                                    <i class="metismenu-icon pe-7s-drop"></i>
                                    Renk Ayarı
                                </a>
                            </li>

                            {{-- <li class="app-sidebar__heading">Seo</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Title
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Title
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-pendrive">
                                    </i>Title
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                {{-- içerikler buraya geliyor --}}
                @yield('content')
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <!-- <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Footer Link 2
                                        </a>
                                    </li>
                                </ul>
                            </div> --> 
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item" style="color:#fff">© <?php echo date('Y'); ?> All rights reserved.
                                        <a href="https://resclick.com" target="_blank">
                                            ResClick
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.js"></script>
    @yield('js')
    @if(session()->has('success'))
    <script>alertify.success('{{session('success')}}')</script>
    @endif
    @if (session()->has('error'))
    <script>alertify.success('{{session('error')}}')</script>
    @endif
    @foreach($errors->all() as $error)
    <script>
        alertify.error('{{$error}}');
    </script>
@endforeach
</body>

</html>