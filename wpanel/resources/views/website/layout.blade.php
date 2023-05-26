<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{$Description}}">
  <meta name="author" content="ResClick">
  <title>{{$Title}}</title>
  <link rel="shortcut icon" href="/images/{{$icon}}" type="image/x-icon" />
  <!-- Bootstrap core CSS -->
  <link href="/website/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/website/css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  @yield('css')
  <style>

    .fixed-top {
      padding: 0 8px;
    }
    .navbar-dark .navbar-nav .nav-link {
    color: rgba(255,255,255);
    }
    .footericon{
      margin-bottom: 12px;
    }
    .infoFooter{
      padding: 50px 0px;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg  fixed-top" style="background-color: {{$colorAll->headerbg}}">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/images/{{$Logo}}" alt="" height="60"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a style="color: {{$colorAll->headertext}}" class="nav-link" href="{{Route('Website.Index')}}">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a style="color: {{$colorAll->headertext}}" class="nav-link" href="{{Route('Website.About')}}">Kurumsal</a>
          </li>
         {{-- @php 
         use App\Pages;
          $page= Pages::select('slug','title')->get();
         @endphp --}}
         
         @foreach ($slugTitle as $value) 
          <li class="nav-item">
           <a style="color: {{$colorAll->headertext}}" class="nav-link" href="{{Route('Website.Page',$value->slug)}}">{{$value->title}}</a></li>
         @endforeach
        <li class="nav-item">
          <a style="color: {{$colorAll->headertext}}" class="nav-link" href="{{Route('Website.Blog')}}">Blog</a>
        </li>
        <li class="nav-item">
          <a style="color: {{$colorAll->headertext}}" class="nav-link" href="{{Route('contact.index')}}">İletişim</a>
        </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>

@yield('content')
<section class="infoFooter" style="background-color: {{$colorAll->footerbg}};color:{{$colorAll->footertext}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-4"> 
        <div class="footericon"><i class="fas fa-map-marker-alt"></i> {{$Adres}}</div>
        <div class="footericon"><i class="fas fa-phone-square"></i> {{$Phone1}}</div>
        <div class="footericon"><i class="fas fa-phone-square"></i> {{$Phone2}}</div>
        <div class="footericon"><i class="fa fa-mail-bulk"></i> {{$Mail}}</div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4"><img src="/images/{{$Logo}}" alt=""> </div>
    </div>
  </div>
</section>
  <!-- Footer -->
  <footer class="pt-3 pb-2" style="background-color: #343A40">
    <div class="container">
      <p class="mt-0 text-center text-white" ><span>{{$Copyright}} {{ date('Y') }} | </span> <span><a href="https://resclick.com" target="_blank"> <img src="/images/resclick-logo-white.svg" alt=""></a></span> </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="/website/vendor/jquery/jquery.min.js"></script>
  <script src="/website/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
@yield('js')
</body>

</html>
