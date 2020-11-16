<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GAME | {{ $title }}</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- datetime picker -->
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('styles')

</head>
<body class="">
    <div id="wrapper">
        @include('layouts.navigation')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('layouts.topnavbar')

            <!-- subheader -->
            @if(isset($heading))
                <div class="row wrapper border-bottom white-bg page-heading">
                    {{ $heading }}
                </div>
            @endif
            
            <section class="wrapper wrapper-content animated fadeInRight">
                @include('includes.flash-message')
                
                {{ $slot }}
            </section><!-- /.content -->
           
            @include('layouts.footer')
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js//bootstrap.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-confirm@3.3.4/dist/jquery-confirm.min.js"></script>
    <script src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>
   
    <script>
    $(document).ready(function(){
        // Menu active class 

        // var url = window.location;
        // $('ul.nav a[href="' + url.origin + '"]').parent().addClass('active');
        // $('ul.nav a').filter(function () {
        //     return this.href == url;
        // }).parent().addClass('active').parent().addClass('collapse in');
        
    });

    </script>

    @stack('scripts')

</body>
</html>