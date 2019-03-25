<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            overflow-x: hidden;
        }
        .navbar {
            height: 51px;
        }
        div.polaroid {
            width: 100%;
            height: 250px;
        }
    </style>
</head>

<body>

<!--Header -->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">আমার ইতিহাস</h1>
    </div>
</div>

<!-- navbar -->

<nav class="navbar navbar-expand-lg">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">হোম <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ইতিহাস
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="LanguageMovement">১৯৫২</a>
                    <a class="dropdown-item" href="MassUprising">১৯৬৯</a>
                    <a class="dropdown-item" href="LiberationWar">১৯৭১</a>
                    <!--
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something </a>-->
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="Bongobondhu">বঙ্গবন্ধু</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link " href="Archive" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    আর্কাইভ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Image">ছবি</a>
                    <a class="dropdown-item" href="Documents">ডকুমেন্টস</a>
                    <a class="dropdown-item" href="Video_Footage">ভিডিও ফুটেজ</a>
                    <a class="dropdown-item" href="Bangali.html">সংবাদপত্র</a>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="Freedom_Fighter">মুক্তি যোদ্ধ</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="Books">বই</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="About">আমাদের সম্পর্কে</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-oumyine-success btn-sm my-2 my-sm-0" type="submit">Search</button>
        </form>


    </div>
</nav>

<!--
<div class="container">
    <div class="row">
        <div class="one-third">
               <div class="wpb_text_column">
                   <div class="wpd_wrapper">

                       <h3 style="text-align: center;">Image One</h3>
                       <p style="text-align: center;">
                           <img class="aligncenter size-full wp-imag" src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2017/07/About-lwm-new.jpg" alt="About-LWM" width="335" height="132">
                           The Liberation War Museum is located in the centre of Dhaka city and was inaugurated on March 22, 1996.  It is registered as a Society with…
                       </p>
                       <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href=" " class="g-btn color_green">
                                   <span>Read More</span>
                               </a>
                           </span>
                       </p>

                   </div>
               </div>
        </div>
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>

-->

<!-- Three major movement -->
<div class="container">
    <h2 style="text-align: center;color: red">স্বাধীনতার যাত্রা</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <h3 style="text-align: center;font-size: 22px;color: #ff0000" >ভাষা আন্দোলন ১৯৫২</h3>
                <div class="polaroid">
                    <img src="https://www.newsg24.com/uploadFile/6f8dd_21_long.jpg"  class="img-thumbnail" alt="Fjords" width="304" height="236">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>


                <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="LanguageMovement" class="g-btn color_green">
                                   <span>Read More</span>
                               </a>
                           </span>
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <h3 style="text-align: center; font-size: 22px;color: #ff0000">গণ অভ্যুত্থান ১৯৬৯</h3>
                <div class="polaroid">
                    <img src="http://risingbd.com/media/imgAll/2017December/bg/Gonoabothan20180124131458.jpg"  class="img-thumbnail" alt="Fjords" width="304" height="236">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="MassUprising" class="g-btn color_green">
                                   <span>Read More</span>
                               </a>
                           </span>
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <h3 style="text-align: center; font-size: 22px;color: #ff0000">স্বাধীনতা যুদ্ধ ১৯৭১</h3>

                <div class="polaroid">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQobjU7N5WWtqIrG-qU3u4_Cr3gJJppDwlUJABp4laDaQ-Ld8g8"  class="img-thumbnail" alt="Fjords" width="304" height="236">
                    <div class="caption">
                        <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </div>
                <p style="text-align: center;">
                           <span class="wpb_button align_center">
                               <a href="LiberationWar" class="g-btn color_green">
                                   <span>Read More</span>
                               </a>
                           </span>
                </p>
            </div>
        </div>
    </div>


    <!--photo gallery

    <h4 class="section-heading3"><a href="#">ছবি</a></h4>

            <div class="row no-gutters">
                <div class="col-md-3 ">
                    <div class="card ">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831" alt="Park" class="card-img-top">
                        </a>
                    </div>

                </div>

                <div class="col-md-3">
                    <div class="card">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831images/rails.jpg" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>



            </div>
            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="card">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <a class="lightbox" href="#">
                            <img src="http://en.poriborton.com/upload/November16/Nov9/definition_ff.jpg?1478662812831images/rails.jpg" alt="Park" class="card-img-top">
                        </a>
                    </div>
                </div>

            </div> -->>



    <!-- footage-newspaper-documents


        <div class=" col-md-3">
            <h4 class="section-heading3"><a href="#">ফুটেজ</a></h4>
            <a href="#">
                <img src="https://i.ytimg.com/vi/mYehpS9_PRk/maxresdefault.jpg" class="alignleft img-responsive" alt="" width="100%">
            </a>
        </div>

        <div class=" col-md-3">
            <h4 class="section-heading3"><a href="#">সংবাদপত্র</a></h4>
            <a href="#">
                <img src="https://i.ytimg.com/vi/mYehpS9_PRk/maxresdefault.jpg" class="alignleft img-responsive" alt="" width="100%">
            </a>
        </div>
        <div class="col-md-3">
            <h4 class="section-heading3"><a href="#">দলিল</a></h4>
            <a href="#">
                <img src="https://i.ytimg.com/vi/mYehpS9_PRk/maxresdefault.jpg" class="alignleft img-responsive" alt="" width="100%">
            </a>
        </div> -->



    <!-- Freedom Fighter

    <div class="col-12">
        <h4 class="section-heading3"><a href="#">মুক্তিযোদ্ধা </a></h4>
        <a href="#">
            <img src="https://i.ytimg.com/vi/mYehpS9_PRk/maxresdefault.jpg" class="alignleft img-responsive" alt="" width="100%">
        </a>

    </div> -->



</div>

<h4 class="section-heading3"><a href="#">ছবি</a></h4>

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
        <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
        <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides and lightbox-->

    <div class="carousel-inner mdb-lightbox" role="listbox">
        <div id="mdb-lightbox-ui"></div>
        <!--First slide-->
        <div class=" carousel-item active text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class=" carousel-item text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class=" carousel-item text-center">

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/13.jpg" class="img-fluid"  style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/surrender-copy.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-womenfighters.jpg" class="img-fluid" style="width: 400px; height: 200px; " >
                </a>
            </figure>

            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/618889798.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#">
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/rivingtonplace-bangladeshchild.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>
            <figure class="col-md-3 d-md-inline-block">
                <a href="#" >
                    <img src="http://www.liberationwarmuseumbd.org/wp-content/uploads/2014/05/liberation-war-460.jpg" class="img-fluid" style="width: 400px; height: 200px; ">
                </a>
            </figure>

        </div>
        <!--/.Third slide-->

    </div>
    <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <!-- Content -->
                <a href="About" style="text-align: left;text-decoration: none;color: white"> <h5 class="font-weight-bold text-uppercase mt-3 mb-4">আমাদের সম্পর্কে</h5></a>
                <p>বাংলাদেশের মুক্তিযুদ্ধ একদিনে আসেনি। মুক্তিযুদ্ধ বাঙালি জাতির বহু ত্যাগ ও সংগ্রামের ফসল। ৫২ ভাষা আন্দোলন থেকে শুরু করে ৭১ পর্যন্ত সংগ্রামের মধ্যে দিয়ে ১৯৭১ সালের অগ্নিঝরা মার্চে শুরু হয় মুক্তিযুদ্ধ।</p>

                <a href="About" style="color: white;font-size: medium;"> <span>Read More</span> </a>

            </div>

        </div>
    </div>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright. All rights reserved.
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


</body>

</html>
