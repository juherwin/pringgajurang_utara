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
  <link href="{{ asset('css/beritadesa.css') }}" rel="stylesheet" media="screen">

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
          <div>
            <ul class="nav navbar-nav">
              <li><a href="{{url('/')}}">Kembali</a></li>
            </ul>
          </div>
        </div>
      </nav>



<section id="tentang-desa">
      <div class="container">
      <h1 class="text-center">Pengumuman Desa Pringgajurang Utara</h1>
      @foreach($pengumumans as $pengumuman)
      <div class="row">
        <div class="col-md-12">
            <img src="{{ $pengumuman->urlgambar }}" alt="" width="400px" height="250px">
            <h3>{{ $pengumuman->judulpengumuman }}</h3>
            <p>{{ substr($pengumuman->deskripsi,0,150) }}</p><br>
            <a href="{{ url('detailpengumuman/' .  $pengumuman->judulpengumuman ) }}">Selengkapnya>></a>
        </div>

      </div>

      @endforeach



      {{ $pengumumans->links() }}



    </div>
    </section>


  


  

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
