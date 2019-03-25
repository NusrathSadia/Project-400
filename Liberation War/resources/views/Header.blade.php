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
            color: #fff;
        }
        .navbar {
            height: 51px;
        }

        .about_title {
            text-align: center;
        }
        .bongobondhu .img {
            width: 45%;
            margin: 0 auto;
        }
        .freedom_fighter .img {
            width: 61%;
            margin: 0 auto;
        }
        .books {
            display: flex;
            flex-wrap: wrap;
        }
        .books .book img {
            height: 300px;
            max-width: 100%;
        }
        .books .book {
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .image_page .images {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        .image_page .images {
            margin-bottom: 10px;
        }
        .image_page .images img {
            margin-right: 10px;
            height: 260px;
            max-width: 100%;
        }
        .videos {
            width: 50%;
            margin: 0 auto;
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>