<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Nakamanga</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nakamanga.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    

  </head>
  <body>
<!-- Header Start -->
<div class="example3">
  <nav class="navbar stiky-top navbar-expand-lg navbar-dark" id="nav_head">
    <div class="container">
      <a href="{{route('frontHome')}}">
          <img src="/img/logo/logo_3.png" width="250" height="50" alt="Logo Nakamanga" id="logo-nakamanga">
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="mr-auto"></ul>
      <ul class="navbar-nav mr-2" id="linkNavbar">
        <li class="">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="">
          <a class="nav-link" href="/manga">Manga</a>
        </li>
        <li class=" ">
          <a class="nav-link" href="/list_genre">Genre</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="post" action="/filter">
        {{ csrf_field() }}
        <input id="search" class="form-control mr-sm-2" name="cari" type="search" placeholder="Search Manga..." aria-label="Search">
        <button class="btn" id="btnCari" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
    </div>
  </nav>
</div>
<!-- Header End -->

@yield('konten')

 <!-- Footer Start -->

 <footer id="myFooter" class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Blank</h5>
                    <ul>
                        <!--<li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>-->
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Blank</h5>
                    <ul>
                        <!--<li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>-->
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Information</h5>
                    <p> Semua komik di website ini hanya preview dari komik aslinya, mungkin terdapat banyak kesalahan bahasa, nama tokoh, dan alur cerita. Untuk versi aslinya, silahkan beli komiknya jika tersedia di kotamu. </p>
                </div>
                <div class="col-sm-3" id="img_footer">
                    <br><br>
                    <div class="row">
                        <div class="col-sm-4">
                          <a href="#">
                            <img src="/img/logo_sosmed/discord.png" width="50" height="50" alt="Logo discord">
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="#">
                            <img src="/img/logo_sosmed/ig.png" width="50" height="50" alt="Logo discord">
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a href="#">
                            <img src="/img/logo_sosmed/gmail.png" width="50" height="50" alt="Logo discord">
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

 <!-- Footer End -->

    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/nakamanga.js') }}"></script>
    
  </body>
</html>
