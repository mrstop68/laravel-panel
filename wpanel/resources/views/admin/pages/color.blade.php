@extends('admin.layout'),
@section('content')
<div class="card-body">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Renk Ayarları</h5>
            <form action="{{route('color.update',1)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-4"><label for="exampleColorInput" class="form-label">Header Arka Plan</label>
                        <input type="color" name="headerbg" id="exampleColorInput" value="{{$data['colors']->headerbg}}"></div>
                    <div class="col-lg-4"><label for="exampleColorInput" class="form-label">Header Metin</label>
                        <input type="color" name="headertext" id="exampleColorInput" value="{{$data['colors']->headertext}}"></div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-lg-4"><label for="exampleColorInput" class="form-label">Footer Arka Plan</label>
                        <input type="color" name="footerbg" id="exampleColorInput" value="{{$data['colors']->footerbg}}"></div>
                    <div class="col-lg-4"><label for="exampleColorInput" class="form-label">Footer Metin</label>
                        <input type="color" name="footertext" id="exampleColorInput" value="{{$data['colors']->footertext}}"></div>
                </div>
                <div class="card mt-2">
                    <button type="submit" class="mt-1 btn btn-success">Kaydet</button>

                </div>
            </form>
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
<style>
    .form-label{
        margin-right: 16px;
    }
    input[type=color]{
	width: 40px;
	height: 40px;
	border: none;
	border-radius: 40px;
	background: none;
}
input[type="color"]::-webkit-color-swatch-wrapper {
	padding: 0;
}
input[type="color"]::-webkit-color-swatch {
	border: solid 1px #000; /*change color of the swatch border here*/
	border-radius: 40px;
}
</style>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
@endsection
