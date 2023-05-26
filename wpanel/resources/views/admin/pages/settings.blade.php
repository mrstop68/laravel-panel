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
                                <div class="card-body"><h5 class="card-title">Ayarlar Tablosu</h5>
                                    <div class="table-responsive">
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Değer</th>
                                                <th>Açıklama</th>
                                                <th>Düzenle</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody id="sortable">
                                                @foreach ($data['adminSettings'] as $item)
                                                <tr id="item-{{$item->id}}" >
                                                    <th scope="row" class="sortable">{{$item->id}}</th>
                                                    <td>{{$item->key}}</td>
                                                    <td>
                                                        @if ($item['type']=="file")
                                                        <img src="/images/{{$item->description}}" alt="" height="25">
                                                        @else
                                                        {!!$item->description!!}
                                                        @endif
                                                        
                                                    </td>
                                                    <td width="5"><a href="{{route('settingEdit',['id'=>$item->id])}}"><i class="pe-7s-pen"></i></a></td>
                                                    <td width="5">
                                                        @if ($item->delete)
                                                        <a href="javascript:void(0)"><i id="@php echo $item->id @endphp" class="pe-7s-trash"></i></a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            * id sütünundan sıralamayı değiştirebilirsiniz
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
  
<script>
    //tablo satırlarının sıralmasını değiştirme ve ajax yöntemi ile veri tabanına kayderme
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
                        url: "{{route('settingSortable')}}",
                        success: function (msg) {
                            //console.log(msg);
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
                location.href="/panel/settings/delete/"+destroy_id;
            },
            function(){
                alertify.error('İşlem İptal Edildi');
            });
       })
     
    </script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

@endsection