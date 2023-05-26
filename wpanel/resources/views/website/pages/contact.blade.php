@extends('website.layout')
@section('content')
     <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">İletişim
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{route('Website.Index')}}">Anasayfa</a>
      </li>
      <li class="breadcrumb-item active">İletişim</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
              <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3>İletişim Bilgileri</h3>
        <i class="fas fa-map-marker-alt"> </i> {!!$Adres!!}
        <p>
          <span class="fa fa-phone"> </span> {{$Phone1}}
        </p>
        <p>
            <span class="fa fa-phone"> </span> {{$Phone2}}
          </p>
        <p>
            <span class="fa fa-mail-bulk"> </span> <a href="mailto:{{$Mail}}"> {{$Mail}}
          </a>
        </p>
        <p>
            <img src="/images/{{$Logo}}" alt="" width="150">
          
        </p>
      </div>
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map --> 
        <iframe src="{{$mapcode->mapcode}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        {{-- <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> --}}
      </div>

    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        @if (session()->has('success'))
        <div class="alert alert-success">
           <p>{{session('success')}}</p>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <div class="col-lg-8 mb-4">
        <h3>Bize Ulaşın</h3>
        {{-- <form name="sentMessage" id="contactForm" novalidate method="POST" action="{{route('contact.mail')}}"> --}}
            <form novalidate method="POST" action="{{route('contact.mail')}}">
            @CSRF
          <div class="control-group form-group">
            <div class="controls">
              <label>İsim Soyisim:</label>
              <input type="text" class="form-control" id="name" name="name" required data-validation-required-message="Lütfen İsminizi Giriniz" required>
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Telefon:</label>
              <input type="tel" class="form-control" id="phone" name="phone" required data-validation-required-message="Lütfen Telefon Numaranızı Giriniz." required>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Adresi:</label>
              <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Lütfen Mail Adresinizi Giriniz." required>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Mesaj:</label>
              <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Lütfen Mesajınızı Yazınız" maxlength="999" style="resize:none" required></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Mesaj Gönder</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
 @section('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
 @endsection
 @section('js')
     <script src="/website/js/jqBootstrapValidation.js"></script>
     <script src="/website/js/contact_me.js"></script>
 @endsection