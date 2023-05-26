
@extends('admin.layout')
@section('content')
<div class="card-body">
<div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
        <div class="card-body"><h5 class="card-title">Kurumsal </h5>
            {{-- <form action="{{route('gallery.corparate')}}" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data"> --}}
    <form action="{{route('gallery.corparate',['kurumsal','Kurumsal'])}}" class="dropzone dz-clickable" id="image-upload" enctype="multipart/form-data" method="POST">
        @csrf
       <div class="dz-default dz-message"><span>Resimlerinizi yüklemek için tıklayın veya sürükleyip bırakın..</span></div>
    </form>
    
    <div class="mt-3 badge text-info" style="letter-spacing: 0.7px">Sıralamayı değiştirmek için resmi tutarak sağa-sola veya yukarı-aşağı hareket ettiriniz!</div>
        </div>
      
        <div class="imageflex" id="sortable">
            @foreach ($data['allImages'] as $image)
            @if ($image->page == 'kurumsal')
                        <div class="singleimg sortable" id="item-{{$image->id}}">
                            <img src="/images/gallery/{{$image->file}}" alt="" width="150">
                            <label class="subChkBorder"><input type="checkbox" class="sub_chk" data-id="{{$image->id}}"></label>
                            {{-- <div class="btnEdit">
                            <button class="btn btn-info">Düzenle</button>
                            </div> --}}
                        </div>
            @endif
            @endforeach
        </div>

        <button style="margin:20px" class="btn btn-danger delete_all">Seçililerin Tamamını Sil</button>
        {{-- <button style="margin:20px" class="btn btn-danger delete_all" data-url="{{ url('/panel/deleteall') }}>Delete All Selected</button> --}}
    </div>
</div>
</div>
    @foreach ($data['pages'] as $item)
        <div class="card-body">
            <div class="tab-pane tabs-animation" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">{{$item->title}} </h5>
                        {{-- <form action="{{route('gallery.corparate')}}" class="dropzone" id="my-awesome-dropzone" enctype="multipart/form-data"> --}}
                <form action="{{route('gallery.corparate',[$item->slug,$item->title])}}" class="dropzone dz-clickable" id="image-upload" enctype="multipart/form-data" method="POST">
                    @csrf
                <div class="dz-default dz-message"><span>Resimlerinizi yüklemek için tıklayın veya sürükleyip bırakın..</span></div>
                </form>
                <div class="mt-3 badge text-info" style="letter-spacing: 0.7px">Sıralamayı değiştirmek için resmi tutarak sağa-sola veya yukarı-aşağı hareket ettiriniz!</div>
                    </div>
                    <div class="imageflex" id="sortable{{$item->id}}">

                    @foreach ($data['allImages'] as $image)
                    @if ($item->slug == $image->page)
                                <div class="singleimg sortable" id="item-{{$image->id}}">
                                    <img src="/images/gallery/{{$image->file}}" alt="" width="150">
                                    <label class="subChkBorder"><input type="checkbox" class="sub_chk" data-id="{{$image->id}}"></label>
                                </div>
                    @endif
                    @endforeach
                </div>
                <button style="margin:20px" class="btn btn-danger delete_all">Seçililerin Tamamını Sil</button>
                </div>
            </div>
        </div>
    @endforeach

@endsection

@section('css')
<style>
    .imageflex{
        display: flex;
        flex-wrap: wrap;
        margin: 0px 15px;
    }
    .singleimg{
        position: relative;
        margin: 4px 4px
    }
    .btnEdit{
        margin: 2px auto;
        text-align: center
    }
    .subChkBorder > input[type="checkbox"]{
        padding: 0px;
        width: 100%;
        height: 100%;
    }
    .subChkBorder{
        padding: 0px;
        z-index: 66;
        cursor: pointer;
        width: 25px;
        height: 25px;
        position: absolute;
        left: 0;
        right: 0;
        border: 2px solid rgb(255, 255, 255);
        /* border-radius: 20%; */
    }

</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script type="text/javascript">
//toplu resim silme işlemi
    $(document).ready(function () {

        // <input type="checkbox" id="master"></th> // Hepsini seçmek için burayı kullanabilirsin
        // $('#master').on('click', function(e) {
        //  if($(this).is(':checked',true))  
        //  {
        //     $(".sub_chk").prop('checked', true);  
        //  } else {  
        //     $(".sub_chk").prop('checked',false);  
        //  }  
        // });


        $('.delete_all').on('click', function(e) {


            var allVals = [];  
            $(".sub_chk:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if(allVals.length <=0)  
            {  
                alertify.alert("","Lütfen Silmek istediğiniz resimleri seçiniz..");  
            }  else {  


                alertify.confirm("","Seçililerin Tamamını Silmek İstiyor Musunuz?",
                function(){
                    var join_selected_values = allVals.join(","); 

                    $.ajax({
                        url: "{{route('delete.all')}}",
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data) {
                                $(".sub_chk:checked").each(function() {  
                                    $(this).parents(".singleimg").remove();
                                });
                                alertify.success('Silme İşlemi Başarılı');
                            } else  {
                                alertify.error('Silme İşlemi Başarısız');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });
                },
                    function(){
                    alertify.error('İşlem İptal Edildi');
                        });

                
            }  
        });
    })

    //Resim sıralmasını değiştirme ve ajax yöntemi ile veri tabanına kaydetme
    $(function() {

        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

        $('#sortable').sortable({
                revert: true,
                //handle: ".sortable",
                stop: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('galeriSortable')}}",
                        success: function (msg) {
                            //console.log(msg);
                            if (msg) {
                                alertify.success('Sıralama İşlemi Başarılı');
                            } else {
                                alertify.error('Sıralama İşlemi Başarısız');
                            }
                        }
                    });
                }
            });
            $('#sortable').disableSelection();
            // $( "#sortable" ).sortable();
            // $( "#sortable" ).disableSelection();
        } );
        @foreach ($data['pages'] as $item)
                    //Resim sıralmasını değiştirme ve ajax yöntemi ile veri tabanına kaydetme Alt Sayfalar
                $(function() {

            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $('#sortable@php echo $item->id @endphp').sortable({
                    revert: true,
                    //handle: ".sortable",
                    stop: function (event, ui) {
                        var data = $(this).sortable('serialize');
                        $.ajax({
                            type: "POST",
                            data: data,
                            url: "{{route('galeriSortable')}}",
                            success: function (msg) {
                                //console.log(msg);
                                if (msg) {
                                    alertify.success('Sıralama İşlemi Başarılı');
                                } else {
                                    alertify.error('Sıralama İşlemi Başarısız');
                                }
                            }
                        });
                    }
                });
                $('#sortable').disableSelection();
                // $( "#sortable" ).sortable();
                // $( "#sortable" ).disableSelection();
            } );
        @endforeach

    </script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection
