@extends('website.layout')
{{-- @section('title','Web Panel | ResClick') --}}
@section('description','Açıklama Metni')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">{{$corpare->title}}
      <small>Hakkımızda</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="/">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">Hakkımızda</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="/images/{{$corpare->file}}" alt="">
      </div>
      <div class="col-lg-6">
        <p>{!!$corpare->content!!}</p>
      </div>
    </div>

    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach ($imagesCorpare as $item)
          <div class="swiper-slide">
            <img src="/images/gallery/{{$item->file}}" />
          </div>
          @endforeach
         
        </div>
        <div class="swiper-pagination"></div>
      </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<style>
/* html,
body {
  position: relative;
  height: 100%;
}

body {
  background: #eee;
  font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
  font-size: 14px;
  color: #000;
  margin: 0;
  padding: 0;
} */

.swiper {
  width: 100%;
  padding-top: 50px;
  padding-bottom: 50px;
}

.swiper-slide {
  background-position: center;
  background-size: cover;
  width: 300px;
  height: 300px;
}

.swiper-slide img {
  display: block;
  width: 100%;
}
</style>
@endsection
@section('js')
   <!-- Swiper JS -->
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
     var swiper = new Swiper(".mySwiper", {
       effect: "coverflow",
       grabCursor: true,
       centeredSlides: true,
       slidesPerView: "auto",
       coverflowEffect: {
         rotate: 50,
         stretch: 0,
         depth: 100,
         modifier: 1,
         slideShadows: true,
       },
       pagination: {
         el: ".swiper-pagination",
       },
     });
   </script>
@endsection