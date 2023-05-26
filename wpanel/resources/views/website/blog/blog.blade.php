@extends('website.layout')
@section('title','Blog Sayfası')
@section('description','Blog Sayfası Açıklama')
@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Blog 
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{Route('Website.Index')}}">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>

    <div class="row">
        @foreach ($blogs as $item)
        
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="{{Route('Blog.Detail',$item->slug)}}"><img class="card-img-top" src="/images/blog/{{$item->file}}" alt="" height="230"></a>
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
            {{-- <p class="card-text">{!!substr($item->content,0,250)!!}</p> --}}
            <a href="{{Route('Blog.Detail',$item->slug)}}" class="btn btn-primary">Devamını Oku &rarr;</a>
          </div>
          
          <div class="card-footer text-muted">
            {{-- <strong> Yayınlama Zamanı:</strong> {{$item->created_at}} --}}
            <strong> Yayınlama Zamanı:</strong> {{$item->created_at->format('d-m-Y')}}
            
           </div>
        </div>
        
      </div>
      @endforeach

    </div>
      <ul class="pagination justify-content-center">
        {{$blogs->links()}}
      </ul>
    <!-- Pagination -->
    {{-- <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Geri</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">İleri</span>
        </a>
      </li>
    </ul> --}}

  </div>
     
@endsection
@section('css')
    <style>
.card-body{
      text-align:justify;
  }
    </style>
@endsection
@section('js')
    
@endsection