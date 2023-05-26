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
                                    <div class="alert alert-info fade show" role="alert">Düzenleme Alanı</div>
                                    <h5 class="card-title">{{$settingsEdit->value}}</h5>
                                    <form action="{{route('editUpdate',['id'=>$settingsEdit->id])}}" class="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @if ($settingsEdit->type=='text')
                                        <input value="{{$settingsEdit->description}}" type="text" class="mb-2 form-control" name="descriptionName">
                                        @endif
                                        @if ($settingsEdit->type=='textarea')
                                        <div class="position-relative form-group"><label for="exampleText" class=""></label><textarea name="descriptionName" id="editor" class="form-control" >{{$settingsEdit->description}}</textarea></div>
                                        @endif
                                        @if ($settingsEdit->type=='file')
                                        <img src="/images/{{$settingsEdit->description}}" alt="" >
                                        <div class="position-relative form-group"><label for="exampleFile" class=""></label><input name="descriptionName" id="exampleFile" type="file" class="form-control-file" required>
                                        </div>
                                        @endif
                                        @if ($settingsEdit->type=='file')
                                        <input name="old_file" id="exampleFile" type="hidden" value="{{$settingsEdit->description}}" >
                                        @endif
                                        <button class="mt-1 btn btn-primary">Kaydet</button>
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
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>

@endsection
@section('js')
{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   --}}
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