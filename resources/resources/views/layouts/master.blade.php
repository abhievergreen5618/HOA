<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>ASAP Mail Boxes And More </title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/jqvmap/jqvmap.min.css') }}">
  
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
  
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/adminstyle.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.css') }}">
 
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
  
  
  @stack("header_extras")
</head>

<body class="sidebar-mini layout-fixed">
<div class="wrapper">
  @include('layouts.partials.navbar')
  @include('layouts.partials.sidebar')
    <div class="wrapper">
     
      @yield('content')
    </div>
  </div>
  
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  
<script src="{{ asset('adminlte/dist/js/adminlte.js?v=3.2.0') }}"></script>

<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>

<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>

<script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style>

<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['fontname', ['fontname']],
            ]
        });
    
     //Add text editor
    $('#heading1').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['fontname', ['fontname']],
            ]
        });
    
     //Add text editor
    $('#heading2').summernote({
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['fontname', ['fontname']],
            ]
        });
  })
</script>

 
   <script>
    jQuery(function($) {
        var path = window.location.href;

        // Highlight active links in the main navigation
        $('ul a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });

        // Add class 'menu-open' to the parent 'nav-item' if any child link matches the current path
        $('.nav-item').each(function() {
            if ($(this).find('ul a').filter(function() {
                return this.href === path;
            }).length > 0) {
                $(this).addClass('menu-open');
                // Add 'active' class to parent anchor tag
                $(this).children('a.nav-link').addClass('active');
           
            }
        });
    });
</script>

<style>
    
.note-editable.card-block {
    height: 300px !important;
}

</style>

  
  @stack("footer_extras")
</body>

</html>