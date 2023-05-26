 @extends('website.layout')
 @section('title','Blog Datail')
 @section('description','Blog Datail Açıklama')
     @section('content')
         
 <!-- Page Content -->
 <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Blog Sayfası
      <small></small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{Route('Website.Blog')}}">Blog</a>
      </li>
      <li class="breadcrumb-item active">{{$data->title}}</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="/images/blog/{{$data->file}}" alt="">
            <div class="card-body">
              <h2 class="card-title">{{$data->title}}</h2>
              <p class="card-text">{!!$data->content!!}</p>
            </div>
            <div class="card-footer text-muted">
             <strong> Yayınlama Zamanı:</strong> {{$data->created_at->format('d-m-Y')}}
             
            </div>
          </div> 

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        {{-- <div class="card mb-4">
          <h5 class="card-header">Arama</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Arama yapmak istediğniz metin...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">ARA!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Son Blog Yazıları</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                    @foreach ($lastBlog as $item)
                    <li>
                        <a href="{{Route('Blog.Detail',$item->slug)}}">{{$item->title}}</a>
                      </li>
                    @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Etiketler</h5>
          <div class="card-body">
            ......!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

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