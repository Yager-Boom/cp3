<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
  <link href="{{ asset('css/backend/selectize.bootstrap3.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/smart_wizard.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/bootstrap-formhelpers.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/selectize.bootstrap3.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/switcher.css') }}" rel="stylesheet">
  <link href="{{ asset('css/backend/styles.css') }}" rel="stylesheet">
  
  <!-- include libraries(jQuery, bootstrap) -->
  <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet"> -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->    
</head>
<body>
  @include('layouts/backend/_header')
  <div class="container-fluid p-0 border-b main">
  @yield('content')
  </div>
    
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <!--build:js js/main.min.js -->
  <script src="{{ asset('js/lib/jquery.js') }}"></script>
  <script src="{{ asset('js/lib/tether.js') }}"></script>
  <script src="{{ asset('js/lib/bootstrap.js') }}"></script>
  <script src="{{ asset('js/lib/selectize.js') }}"></script>
  <script src="{{ asset('js/lib/jquery.smartWizard.js') }}"></script>
  <script src="{{ asset('js/lib/bootstrap-formhelpers.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>    

  <!-- include summernote css/js-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
  <script type="text/javascript">
      $.ajaxSetup({
          headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
      });

      $(document).ready(function () {        
          $('#summernote').summernote({
              height: 370,                 // set editor height
              minHeight: 370,             // set minimum height of editor
              maxHeight: null,             // set maximum height
              callbacks: {
                  // onInit: function(e) {
                  //   $("#summernote").summernote("fullscreen.toggle");
                  // },
                  onImageUpload: function (files, editor, $editable) {
                      for (var i = files.length - 1; i >= 0; i--) {
                          sendFile(files[i], editor);
                          console.log(files[i], editor);
                      }
                  }
              }
          });
          $('.note-codable').keyup(function(){
            $('#summernote').html(this.value);
          });
          function sendFile(file, el) {
              data = new FormData();
              data.append("file", file);
              data.append("tmpPath", $('.tmpPath').val());
              data.append("_token", $('meta[name="csrf-token"]').attr('content'));
              jQuery.ajax({
                  url: '{{ action('backend\ImagesController@uploadFile') }}',
                  data: data,
                  cache: false,
                  contentType: false,
                  processData: false,
                  enctype: 'multipart/form-data',
                  type: 'POST',
                  success: function (s) {
                      console.log(s);
                      $('#summernote').summernote('insertImage', s, function ($image) {
                          $image.css('width', '100%');
                          $image.attr('class', 'img-responsive lazy');
                          $image.attr('data-original', s);
                      });
                  },
                  error: function (jqXHR, textStatus, errorThrown) {
                      console.log(jqXHR + " " + textStatus + " " + errorThrown);
                  }
              });
          }
      });
  </script>     
</body>
</html>
