@extends('client.section.base')

@section('content_front')
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

                            

                            <!-- news shoes -->
                            <div id="shoes" class="shoes-bg">
                                <h3>New shoes</h3>
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                        <div class="shoes-box">
                                            <i><img src="{{url('public')}}/icon/shoeszara.png" /></i>
                                            <h4>Rp. 325.000</h4>
                                        </div>
                                        <a class="buynow" href="{{url('detail')}}">Masukan Keranjang</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 margintop">
                                        <div class="shoes-box">
                                            <i><img src="{{url('public')}}/icon/shoeshermes.png" /></i>
                                            <h4>Rp. 245.000</h4>
                                        </div>
                                        <a class="buynow" href="#">Masukan Keranjang</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <div class="shoes-box">
                                            <i><img src="{{url('public')}}/icon/shoesgucci.png" /></i>
                                            <h4>Rp. 400.000</h4>
                                        </div>
                                        <a class="buynow" href="#">Masukan Keranjang</a>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                                        <div class="shoes-box">
                                            <i><img src="{{url('public')}}/icon/shoesck.png" /></i>
                                            <h4>Rp. 750.000</h4>
                                        </div>
                                        <a class="buynow" href="#">Masukan Keranjang</a>
                                    </div>
                                </div>
                            </div>
                            <a class="seemore" href="#">See more</a>
                        </div>

                    </div>
                </div>
                <!-- end news shoes -->

                <!-- end Categories -->

                <section>
                    
                </section>

                



               


        </div>

        <div class="overlay"></div>

        <!-- Javascript files-->
        <script src="{{url('public')}}/js/jquery.min.js"></script>
        <script src="{{url('public')}}/js/popper.min.js"></script>
        <script src="{{url('public')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('public')}}/js/jquery-3.0.0.min.js"></script>

        <!-- sidebar -->
        <script src="{{url('public')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{url('public')}}/js/custom.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });

        </script>

        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });

        </script>
        <script>
            // This example adds a marker to indicate the position of Bondi Beach in Sydney,
            // Australia.
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                });

                var image = 'images/maps-and-flags.png';
                var beachMarker = new google.maps.Marker({
                    position: {
                        lat: 40.645037,
                        lng: -73.880224
                    },
                    map: map,
                    icon: image
                });
            }

        </script>
        <!-- google map js -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
        </script>
        <!-- end google map js -->
</body>

</html>

@endsection
