<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Falr - Bootstrap 4 Admin Dashboard Template">

    <!--=========================*
              Page Title
    *===========================-->
    <title>Falr - Bootstrap 4 Admin Dashboard Template</title>

    <!-- jquery -->
    
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/assets/images/favicon.png') }}">

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="{{ asset('admin/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css">

    <!--=========================*
            Font Awesome
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!--=========================*
             Themify Icons
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/themify-icons.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css"> -->


    <!--=========================*
               Ionicons
    *===========================-->
    <link href="{{ asset('admin/assets/css/ionicons.min.css') }}" rel="stylesheet"/>

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="{{ asset('admin/assets/css/et-line.css') }}" rel="stylesheet"/>


    <!--=========================*
              Flag Icons
    *===========================-->
    <link href="{{ asset('admin/assets/css/flag-icon.min.css') }}" rel="stylesheet"/>

        <!-- Start datatable css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/data-table/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/data-table/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/data-table/css/responsive.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/data-table/css/responsive.jqueryui.min.css') }}">
    

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="{{ asset('admin/assets/js/modernizr-2.8.3.min.js') }}"></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/metisMenu.css') }}">

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/slicknav.min.css') }}">
    
    <!--=========================*
              Flag Icons
    *===========================-->
    <link href="{{ asset('admin/assets/css/flag-icon.min.css') }}" rel="stylesheet"/>

    <!--=========================*
               AM Chart
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/am-charts/css/am-charts.css') }}" type="text/css" media="all" />

    <!--=========================*
               Morris Css
    *===========================-->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/charts/morris-bundle/morris.css') }}">

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Font USE: 'Roboto', sans-serif;-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body class="darker">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--=========================*
         Page Container
*===========================-->
<div id="page-container">

    <!--==================================*
               Header Section
    *====================================-->
 
    @include('backend.reporter.body.header')

    <!--==================================*
               End Header Section
    *====================================-->

    <!--=========================*
             Side Bar Menu
    *===========================-->
   
    @include('backend.reporter.body.sidebar')


    <!--=========================*
           End Side Bar Menu
    *===========================-->

    <!--==================================*
               Main Content Section
    *====================================-->
    <div class="main-content page-content">

        <!--==================================*
                   Main Section
        *====================================-->
       
        @yield('reporter')

        <!--==================================*
                   End Main Section
        *====================================-->
    </div>
    <!--=================================*
           End Main Content Section
    *===================================-->

    <!--=================================*
                  Footer Section
    *===================================-->
    
    @include('backend.reporter.body.footer')

    <!--=================================*
                End Footer Section
    *===================================-->

</div>
<!--=========================*
        End Page Container
*===========================-->

<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<!-- <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script> -->
<!-- bootstrap 4 js -->
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<!-- Owl Carousel Js -->
<script src="{{ asset('admin/assets/js/owl.carousel.min.js') }}"></script>
<!-- Metis Menu Js -->
<script src="{{ asset('admin/assets/js/metisMenu.min.js') }}"></script>
<!-- SlimScroll Js -->
<script src="{{ asset('admin/assets/js/jquery.slimscroll.min.js') }}"></script>
<!-- Slick Nav -->
<script src="{{ asset('admin/assets/js/jquery.slicknav.min.js') }}"></script>
<!-- Ck Editor  -->
<script src="{{ asset('admin/assets/js/code.js') }}"></script>
<!-- ========== This Page js ========== -->

<script>
    //  Form Validation
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
    }, false);
</script>



<!-- maps js -->
<script src="{{ asset('admin/assets/js/am-maps.js') }}"></script>

<!--Float Js-->
<script src="{{ asset('admin/assets/vendors/charts/float-bundle/jquery.flot.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/charts/float-bundle/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/charts/float-bundle/jquery.flot.resize.js') }}"></script>

<!--Sparkline Js-->
<script src="{{ asset('admin/assets/vendors/charts/sparkline/sparklines.js') }}"></script>
<!-- Data Table js -->
<script src="{{ asset('admin/assets/vendors/data-table/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/data-table/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/data-table/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/data-table/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/vendors/data-table/js/responsive.bootstrap.min.js') }}"></script>

<!-- Data table Init -->
<script src="{{ asset('admin/assets/js/init/data-table.js') }}"></script>
<!-- Ck Editor  -->
<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
<!-- ========== This Page js ========== -->

<!-- Main Js -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<script src="{{ asset('admin/assets/customs/custom.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
	@if(Session::has('message'))
	  var type="{{Session::get('alert-type','info')}}"
	  switch(type){
		  case 'info':
			   toastr.info("{{ Session::get('message') }}");
			   break;
		  case 'success':
			  toastr.success("{{ Session::get('message') }}");
			  break;
		  case 'warning':
			 toastr.warning("{{ Session::get('message') }}");
			  break;
		  case 'error':
			  toastr.error("{{ Session::get('message') }}");
			  break;
	  }
	@endif

  CKEDITOR.replace('editor1');
  CKEDITOR.replace('editor2');
  CKEDITOR.replace('editor3');
 </script>

<!-- {{ asset('admin/') }} -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

</body>

</html>

