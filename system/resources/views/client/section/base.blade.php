<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Toko Faeyza</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('public')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{url('public')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{url('public')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
        @stack('style')
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    
    <!-- Start Top Nav -->
    @include('client.section.navbar')
    <!-- Close Header -->

  
  @yield('content_front')





    <!-- Start Footer -->
  @include('client.section.footer')
    <!-- End Footer -->
@stack('script')
    <!-- Start Script -->
   <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/popper.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
    <!-- End Script -->
</body>

</html>