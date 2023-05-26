@extends('website.layout')
@section('title','Web Panel | ResClick')
@section('description','Açıklama Metni')
@section('content')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        @for ($say=1;$data['count']>$say;$say++) 
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$say}}"></li>
        @endfor
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        @php ($count=0)
        @foreach ($data['slider'] as $item)
        <div class="carousel-item @if ($count++==0) active @endif" style="background-image: url('/images/slider/{{$item->file}}')">
          <div class="carousel-caption d-none d-md-block">
            <h3>{{$item->title}}</h3>
            <p>{!!$item->content!!}</p>
          </div>
        </div>
        @endforeach
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>  
  <div class="container">
    @isset($corparate)
        <!-- Features Section -->
        <div class="row my-5">
          <div class="col-lg-6">
            <h2>{{$corparate->title}}</h2>
            <p>{!!$corparate->content!!}</p>
          </div>
          <div class="col-lg-6">
            <img class="img-fluid rounded" src="/images/{{$corparate->file}}" alt="">
          </div>
        </div>
        <!-- /.row -->
        @endisset
        <hr>
    
        <!-- Call to Action Section -->
        <div class="row my-5">
          <div class="col-md-8">
            <p>{!!$PhoneText!!}</p>
          </div>
          <div class="col-md-4">
            <a class="btn btn-lg btn-primary btn-block" href="tel:{{$Phone1}}">{{$Phone1}}</a>
          </div>
        </div>
        <hr>

    <h2 class="my-4">BLOG</h2>
  <div class="row">
@foreach ($data['blog'] as $item)
<div class="col-lg-4 col-sm-6 portfolio-item">
  <div class="card h-100">
    <a href="{{Route('Blog.Detail',$item->slug)}}"><img class="card-img-top" src="/images/blog/{{$item->file}}" alt="" height="225"></a>
    <div class="card-body">
      <h4 class="card-title">
        <a href="{{Route('Blog.Detail',$item->slug)}}">{{$item->title}}</a>
      </h4>
      
      @if ((strlen($item->content))>120)
      @if( preg_match('/(.*?)\s/i', substr( $item->content, 120), $dizi) )@endif
      <p class="card-text"> {!!substr($item->content, 0, 120+strlen($dizi[0]))!!}</p>
      {{-- <p class="card-text">{!!substr($item->content,0,120)!!}</p> --}}
      @else
      <p class="card-text"> {!!$item->content!!}</p>
      @endif
     
    </div>
    
  </div>
</div>
@endforeach
</div>
</div>

@endsection

@section('css')
    {{-- <style>
      .row{
        align-items: center;
      }
    </style> --}}
@endsection
@section('js')
    
@endsection
