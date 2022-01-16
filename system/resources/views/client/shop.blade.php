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
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
   <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

               <ul class="list-unstyled components">

                    <li class="active">
                        <a href="{{url('home')}}">Home</a>
                    </li>
                    <li class="">
                        <a href="{{url('shop')}}">Produk</a>
                    </li>
                    

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="head_top">
                    <div class="header">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-3 logo_section">
                                    <div class="full">
                                        <div class="center-desk">
                                            <div class="logo">
                                                <a href="index.blade.php">FAEYZA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="right_header_info">
                                        <ul>
                                            <li class="menu_iconb active">
                                                <a href="#"><img style="margin-right: 15px;" src="{{url('public')}}/icon/1.png"
                                                        alt="#" />7213456789</a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="{{url('login')}}">Log in <img style="margin-right: 15px;"
                                                        src="{{url('public')}}/icon/5.png" alt="#" /> </a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="{{url('register')}}">Signup<img style="margin-left: 15px;" src="{{url('public')}}/icon/6.png"
                                                        alt="#" /></a>
                                            </li>
                                            <li class="tytyu active">
                                                <a href="{{url('keranjang')}}"> <img style="margin-right: 15px;" src="{{url('public')}}/icon/2.png"
                                                        alt="#" /></a>
                                            </li>
                                            <li class="menu_iconb">
                                                <a href="search"><img style="margin-right: 15px;" src="{{url('public')}}/icon/3.png"
                                                        alt="#" /></a>
                                            </li>

                                            <li>
                                                <button type="button" id="sidebarCollapse">
                                                    <img src="{{url('public')}}/images/menu_icon.png" alt="#" />
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end header inner -->


                    <!--coursel-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="height:500px;">
                            <div class="carousel-item active">
                                <img src="{{url('public')}}/images/sale.png" height="300px" class="d-block w-100" alt="..."> </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale5.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale3.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                   
   



    <!-- Start Content -->
    <div class="container">
      <div class="card mt-3 pt-3">
      <div class="row ml-1 mr-2 mb-3">
         <div class="col-md-12">
           
            <h4><b>Filter</b></h4>
         </div>

         <div class="container">
         <div class="card-body">
            <form action="{{url('shop/filter')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for="" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
               </div>
                            <br>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                        </form>


                    </div>
                    
                    
                </div>
            </div>
            <hr>

              <div id="shoes" class="shoes-bg">
                                <h3>New Produk</h3>
                                <div class="row">
                                      @foreach ($list_produk as $produk)
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                        <div class="shoes-box">
                                         <img width="70%"  src="{{url("public/$produk->foto") }}" style="width:250px;height:180px;">
                                         <hr>
                                            <a href="{{ url('/produkshop', $produk->uuid) }}"
                                            class="h5 text-decoration-none">{{ $produk->nama }}</a>
                                        </div>
                                            <a class="buynow" href="keranjang">Masukan Keranjang</a>
                                       
                                       </div>
                                       @endforeach
                                </div>
                            </div>
                            <div>
                    {{ $list_produk->links() }}
                </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <hr>
               
                
            </div>
        </div>

        </div>
    </div>
    <!-- End Content -->




    <!-- Start Footer -->
    @include('client.section.footer')
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/popper.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>
    <!-- End Script -->
</body>

</html>
