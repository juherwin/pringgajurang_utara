 <!DOCTYPE html>
<html>

<head>
  <title>Pringgarata Utara</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="{{ asset('css/min.css') }}https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  
  <link href="{{ asset('color/default.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/editform.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/form.css') }}" rel="stylesheet" media="screen">

</head>

<body>


    

    <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->

        <a class="navbar-brand" href="{{url('/')}}">
        <img id="logo" src="img/kabupaten-lombok-timur-ntb (1).png" alt="">
        <span id="textlogo">Pringgajurang Utara</span>
      </a>

          </div>
          <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                        @else
                             <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </ul>
          </div>
        </div>
      </nav>



    
        <form action={{ url('editberita/' .  $beritas->id ) }} method="post" enctype="multipart/form-data" style="padding-top: 75px;">
          {{ csrf_field() }}
          Judul Berita:<br>
          <input type="text" name="judul_berita" value="{{ $beritas->judulberita }}"><br><br>
          Isi Berita:<br>
          <textarea  rows="30" cols="200" name="isi_berita">{{ $beritas->deskripsi }}</textarea><br><br>
          Gambar : <br><br>
          <input type="file" name="url_gambar" id="url_gambar">
          <br><br>
          <input type="submit" value="Submit">
        </form>

  

  <footer id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Winchy.tech. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://winchy.tech/">Winchy.tech</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/mb.bgndGallery.js') }}"></script>
  <script src="{{ asset('js/mb.bgndGallery.effects.js') }}"></script>
  <script src="{{ asset('js/jquery.simple-text-rotator.min.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nav.js') }}"></script>
  <script src="{{ asset('js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('js/grid.js') }}"></script>
  <script src="{{ asset('js/stellar.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>
  <!-- Template Custom Javascript File -->
  <script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
