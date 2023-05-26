@extends('admin.layout')
@section('content')
<div class="card-body">
<div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Yeni Sayfa Oluşturma</h5>
            <form class="" method="POST" enctype="multipart/form-data" action="{{route('slider.store')}}"> 
                @csrf
                <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">BAŞLIK</label>
                    <div class="col-sm-10"><input name="title" id="title" placeholder="Sayfada yer alması gereken başlığı yazınız..." type="text" class="form-control"></div>
                </div>
                {{-- <div class="position-relative row form-group"><label for="slug" class="col-sm-2 col-form-label">SEO-URL (SLUG)</label>
                    <div class="col-sm-10"><input name="slug" id="slug" placeholder="*Eğer bu bölümünü boş bırakırsanız başlıktan seo uyumlu bir url otomatik olarak oluşturulacaktır." type="text" class="form-control"></div>
                </div> --}}
                <div class="position-relative row form-group"><label for="url" class="col-sm-2 col-form-label">SLIDER URL (LİNK)</label>
                    <div class="col-sm-10"><input name="url" id="url" placeholder="Slidera veya üzerindeki bir butona tıklayınca gönderilecek link (boş bırakabilirsiniz)" type="text" class="form-control"></div>
                </div>
                {{-- <div class="position-relative row form-group"><label for="editor" class="col-sm-2 col-form-label">İÇERİK</label>
                    <div class="col-sm-10"><div id="editor"><input type="text" name="content"></div></div>
                </div> --}}
                <div class="position-relative row form-group"><label for="editor" class="col-sm-2 col-form-label">İÇERİK</label>
                    <div class="col-sm-10"><textarea name="content" id="editor"></textarea></div>
                </div>
              
                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-10">
                        <input name="file" id="exampleFile" type="file" class="form-control-file">
                        
                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                    </div>
                </div>
                <fieldset class="position-relative row form-group">
                    <legend class="col-form-label col-sm-2">Durum</legend>
                    <div class="col-sm-10">
                        <div class="position-relative form-check" style="display:inline-block; margin-right:16px"><label class="form-check-label"><input checked name="status" type="radio" class="form-check-input" value="1">Aktif</label></div>
                        <div class="position-relative form-check" style="display:inline-block"><label class="form-check-label"><input name="status" type="radio" class="form-check-input" value="0">Pasif</label></div>
                    </div>
                </fieldset>
                {{-- <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                    <div class="col-sm-10">
                        <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                    </div>
                </div> --}}
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
@endsection

@section('css')
    
@endsection
@section('js')
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
