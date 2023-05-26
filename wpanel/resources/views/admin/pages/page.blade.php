@extends('admin.layout')
@section('content')
<div class="app-main__inner">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body page-title-wrapper">
                                    <div class="card-header">
                                    <h5 class="card-title">YENİ SAYFA EKLEME VE SIRALAMA İŞLEMLERİ</h5>
                                    <div class="btn-actions-pane-right"><a href="{{route('page.create')}}"><button  type="button" class="btn-shadow btn btn-focus">SAYFA EKLE</button></a></div></div>
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Başlık</th>
                                                <th>Düzenleme Tarihi</th>
                                                <th>Düzenle</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="sortable">
                                                @foreach ($data['page'] as $item)
                                                <tr id="item-{{$item->id}}" >
                                                    <th scope="row" class="sortable">{{$item->title}}</th>
                                                    <th scope="row" >{{date('d-m-Y',strtotime($item->created_at))}}</th>
                                                    <td width="5"><a href="{{route('page.edit',$item->id)}}"><i class="pe-7s-pen"></i></a></td>
                                                    <td width="5"><a href="javascript:void(0)"><i id="@php echo $item->id @endphp" class="pe-7s-trash"></i></a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        * Başlık sütünundan sayfa sıralamasını değiştirebilirsiniz
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
  
<script>
    //tablo satırlarının sıralmasını değiştirme ve ajax yöntemi ile veri tabanına kaydetme
    $( function() {

      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#sortable').sortable({
                revert: true,
                handle: ".sortable",
                stop: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('pagesortable')}}",
                        success: function (msg) {
                            console.log(msg);
                            if (msg) {
                                alertify.success('İşlem Başarılı');
                            } else {
                                alertify.error('İşlem Başarısız');
                            }
                        }
                    });
                }
            });
            $('#sortable').disableSelection();
            // $( "#sortable" ).sortable();
            // $( "#sortable" ).disableSelection();
    } );

    //tablodaki verileri silme
       $('.pe-7s-trash').click(function(){
        destroy_id=$(this).attr('id')

        alertify.confirm("","Silmek istediğinize emin misiniz?",
            function(){
                $.ajax({
                   type:"DELETE",
                   url:"page/"+destroy_id,
                   success:function(msg){
                    if (msg) {
                            $("#item-"+destroy_id).remove();
                                alertify.success('Silme İşlemi Başarılı');
                            } else {
                                alertify.error('Silme İşlemi Başarılı');
                            }
                   }
               })
            },
            function(){
                alertify.error('İşlem İptal Edildi');
            });
       })
     
    </script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection