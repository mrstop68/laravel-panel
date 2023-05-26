@extends('admin.layout')
@section('content')
<div class="app-main__inner">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="main-card mb-3">
                                <div class="card-body">
                                    <div class="alert alert-info fade show" role="alert"> <strong>{{$editSlider->title}}</strong> Sayfasını Düzenleme</div>
                                    <form action="{{route('slider.update',$editSlider->id)}}" class="" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input value="{{$editSlider->title}}" type="text" class="mb-2 form-control" name="title">
                                        {{-- <input value="{{$editSlider->slug}}" type="text" class="mb-2 form-control" name="slug"> --}}
                                        <input value="{{$editSlider->url}}" type="text" class="mb-2 form-control" name="url" placeholder="Slider Link">
                                        <div class="position-relative form-group"><label for="exampleText" class=""></label><textarea name="content" id="editor" class="form-control" >{{$editSlider->content}}</textarea></div>
                                        <div class="position-relative form-group"><label for="exampleFile" class=""></label>
                                            <input name="file" id="file" type="file" class="form-control-file" value="{{$editSlider->file}}">
                                        <br>
                                            <img src="/images/slider/{{$editSlider->file}}" alt="" width="250">
                                        </div>
                                        <fieldset class="position-relative row form-group">
                                            <legend class="col-form-label col-sm-2">Durum</legend>
                                            <div class="col-sm-10">
                                                <div class="position-relative form-check" style="display:inline-block; margin-right:16px"><label class="form-check-label"><input {{$editSlider->status=="1" ? "checked":""}} name="status" type="radio" class="form-check-input" value="1">Aktif</label></div>
                                                <div class="position-relative form-check" style="display:inline-block"><label class="form-check-label"><input {{$editSlider->status=="0" ? "checked":""}} name="status" type="radio" class="form-check-input" value="0">Pasif</label></div>
                                            </div>
                                        </fieldset>
                                        <input type="hidden" name="old_file" value="{{$editSlider->file}}">
                                        <button type="submit" class="mt-1 btn btn-primary">Kaydet</button>
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
@endsection
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="/admin/js/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
        } )
        .then( editor => {
            window.editor = editor;
        } )
        .catch( err => {
            console.error( err.stack );
        } );
</script>
@endsection