@extends('admin.layout')
@section('content')
<div class="card-body">
<div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">İletişim Sayfası Ayarları</h5>
            <form class="" method="POST" enctype="multipart/form-data" action="{{route('contactUpdate')}}"> 
                @csrf
                <div class="position-relative row form-group"><label for="mapcode" class="col-sm-2 col-form-label">Harita Kodu</label>
                    <div class="col-sm-10"><input name="mapcode" id="mapcode" placeholder="Açıklama bölümündeki 'Harita yerleştirme' sekmesindeki kodu buraya yerleştiriniz..." type="text" class="form-control"></div>
                </div>
                <div class="col-lg-6 mb-4">
                    <h6 class="text-info">ÖN İZLEME</h6>
                    <!-- Embedded Google Map --> 
                    <iframe src="{{$mapcode->mapcode}}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    {{-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> --}}
                  </div>
                <div class="position-relative row form-group"><label for="mailsend" class="col-sm-2 col-form-label">Maillerinizi almak istediğiniz hesabı yazınız</label>
                    <div class="col-sm-10"><input name="mailsend" id="mailsend" placeholder="ornek@domail.com" type="email" class="form-control" value="{{$mapcode->sendmail}}" required></div>
                </div>

                <fieldset class="position-relative row form-group">
                    <legend class="col-form-label col-sm-2">Durum</legend>
                    <div class="col-sm-10">
                        <div class="position-relative form-check" style="display:inline-block; margin-right:16px"><label class="form-check-label"><input checked name="status" type="radio" class="form-check-input" value="1">Aktif</label></div>
                        <div class="position-relative form-check" style="display:inline-block"><label class="form-check-label"><input name="status" type="radio" class="form-check-input" value="0">Pasif</label></div>
                    </div>
                </fieldset>
              
                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-secondary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="card-body">
<div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">AÇIKLAMA</h5>
            <p>Google Maps (https://www.google.com/maps) haritalarda yerinizi bulduktan sonra sol üst köşedeki ikonu tıklayarak resimde görünen adımları takip ediniz..</p>
            <div class="container" >
                    <div class="row">
                        <div class="col-lg-6 col-12"><img src="/images/contact/share2.jpg" alt="" width="100%"></div>
                        <div class="col-lg-6 col-12"><img src="/images/contact/map2.jpg" alt="" width="100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    {{-- <script src="/admin/js/ckeditor.js"></script>
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
    </script> --}}
@endsection
