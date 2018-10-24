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
  <link href="{{ asset('css/lembaga.css') }}" rel="stylesheet" media="screen">

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



    <section id="lembaga">
      <div class="container">
      <h1 class="text-center">Karang Taruna Muda Karya Desa Pringgajurang Utara</h1>
       <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h3>Pengurus Karang Taruna Pedekik Periode 2015 - 2018</h3>
            <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="{{ asset('img/team/2.jpg') }}" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Kepala Desa</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="{{ asset('img/team/1.jpg') }}" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>wakil kepala Desa</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="{{ asset('img/team/3.jpg') }}" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Sekertaris</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="{{ asset('img/team/4.jpg') }}" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Bendahara</p>
          </div>
        </div>
      </div>
      <div class="row" id="visimisi">
        <div class="col-md-12">
          <img src="img/kartaru.png" alt="grafik organisasi">
          <h4 class="text-center">Visi</h4>
          <p>“MEWUJUDKAN GENERASI MUDA YANG MANDIRI, TANGGUH, TERAMPIL, BERAKHLAK DAN BERKUALITAS”</p>
          <h4 class="text-center">Misi</h4>
          <p>“MEWUJUDKAN GENERASI MUDA YANG MANDIRI, TANGGUH, TERAMPIL, BERAKHLAK DAN BERKUALITAS”</p>
          <h4>Pedoman Umum Karang Taruna Dalam Permensos No. 77 Tahun 2010</h4>
          <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'ASAS DAN TUJUAN')">ASAS DAN TUJUAN</button>
            <button class="tablinks" onclick="openCity(event, 'KEDUDUKAN, TUGAS POKOK DAN FUNGSI')">KEDUDUKAN, TUGAS POKOK DAN FUNGSI</button>
            <button class="tablinks" onclick="openCity(event, 'PROGRAM KERJA')">PROGRAM KERJA</button>
            <button class="tablinks" onclick="openCity(event, 'TANGGUNG JAWAB DAN WEWENANG')">TANGGUNG JAWAB DAN WEWENANG</button>
          </div>

          <div id="ASAS DAN TUJUAN" class="tabcontent">
            <h3>ASAS DAN TUJUAN</h3>
            <h4 class="text-center">Pasal 2</h4>
            <p>Karang Taruna berasaskan Pancasila dan Undang-Undang Dasar 1945.</p>
            <h4 class="text-center">Pasal 3</h4>
            <p>Karang Taruna bertujuan untuk mewujudkan :</p>
            <br>
            <ul>
              <li>pertumbuhan dan perkembangan setiap anggota masyarakat yang berkualitas, terampil, cerdas, inovatif, berkarakter serta memiliki kesadaran dan tanggung jawab sosial dalam mencegah, menangkal, menanggulangi dan mengantisipasi berbagai masalah kesejahteraan sosial, khususnya generasi muda;</li>
              <li>kualitas kesejahteraan sosial setiap anggota masyarakat terutama generasi muda di desa/kelurahan secara terpadu, terarah, menyeluruh serta berkelanjutan;</li>
              <li>pengembangan usaha menuju kemandirian setiap anggota masyarakat terutama generasi muda; dan</li>
              <li>pengembangan kemitraan yang menjamin peningkatan kemampuan dan potensi generasi muda secara terarah dan berkesinambungan.</li>
            </ul>

            <h4 class="text-center">Pasal 23</h4>
            <p>Tanggung jawab dan wewenang Gubernur sebagaimana dimaksud dalam Pasal 21 ayat (2) meliputi :</p>
             <ul>
              <li>melaksanakan tugas desentralisasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melaksanakan tugas dekonsentrasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melakukan program pengembangan;</li>
              <li>melaksanakan pembinaan lanjutan;</li>
              <li>melakukan pembinaan kemitraan dengan Forum Pengurus Karang Taruna;</li>
              <li>memberikan penghargaan;</li>
              <li>melakukan sosialisasi;</li>
              <li>melakukan monitoring; dan</li>
              <li>melaksanakan koordinasi.</li>
            </ul>

            <br><br>
            <p>(Permensos Nomor 77 Tahun 2010)</p>

          </div>

          <div id="KEDUDUKAN, TUGAS POKOK DAN FUNGSI" class="tabcontent">
            <h3>KEDUDUKAN, TUGAS POKOK DAN FUNGSI</h3>
            <h4 class="text-center">Pasal 4</h4>
            <p>Karang Taruna berkedudukan di desa/kelurahan di dalam wilayah hukum Negara Kesatuan Republik Indonesia.</p>
            <h4 class="text-center">Pasal 5</h4>
            <p>Karang Taruna memiliki tugas pokok secara bersama-sama dengan Pemerintah, Pemerintah Provinsi, dan Pemerintah Kabupaten/Kota serta masyarakat lainnya menyelenggarakan pembinaan generasi muda dan kesejahteraan sosial.</p>
           
            <h4 class="text-center">Pasal 6</h4>
            <p>Dalam melaksanakan tugas pokok sebagaimana dimaksud dalam Pasal 5, Karang Taruna mempunyai fungsi:</p>
             <ul>
              <li>mencegah timbulnya masalah kesejahteraan sosial, khususnya generasi muda;</li>
              <li>menyelenggarakan kesejahteraan sosial meliputi rehabilitasi, perlindungan sosial, jaminan sosial, pemberdayaan sosial dan diklat setiap anggota masyarakat terutama generasi muda;</li>
              <li>meningkatkan Usaha Ekonomi Produktif;</li>
              <li>menumbuhkan, memperkuat dan memelihara kesadaran dan tanggung jawab sosial setiap anggota masyarakat terutama generasi muda untuk berperan secara aktif dalam penyelenggaraan kesejahteraan sosial;</li>
              <li>menumbuhkan, memperkuat, dan memelihara kearifan lokal; dan</li>
              <li>memelihara dan memperkuat semangat kebangsaan, Bhineka Tunggal Ika dan tegaknya Negara Kesatuan Republik Indonesia.</li>
            </ul>


            <h4 class="text-center">Pasal 7</h4>
            <p>Untuk melaksanakan tugas pokok dan fungsi Karang Taruna sebagaimana dimaksud dalam Pasal 5 dan Pasal 6, dibentuk Majelis Pertimbangan Forum Pengurus Karang Taruna yang terdiri atas para mantan pengurus dan mantan pembina yang memiliki fungsi konsultasi dan pengarah bagi kepengurusan Karang Taruna dan kepengurusan Forum Pengurus Karang Taruna.</p>

            <br><br>
            <p>(Permensos Nomor 77 Tahun 2010)</p>
          </div>

          <div id="PROGRAM KERJA" class="tabcontent">
            <h3>PROGRAM KERJA</h3>
            <h4 class="text-center">Pasal 19</h4>
            <p>Setiap Karang Taruna bertanggung jawab untuk menetapkan program kerja berdasarkan mekanisme, potensi, sumber, kemampuan dan kebutuhan Karang Taruna setempat.</p>
            <h4 class="text-center">Pasal 20</h4>
            <br>
            <p>(1) Program Kerja Karang Taruna terdiri dari pembinaan dan pengembangan generasi muda, penguatan organisasi, peningkatan usaha kesejahteraan sosial, usaha ekonomis produktif, rekreasi olahraga dan kesenian, kemitraan dan lain-lain sesuai kebutuhan.</p>
            <br>
            <p>(2) Program kerja sebagaimana dimaksud pada ayat (1) disusun sebagai hasil musyawarah/mufakat berdasarkan rencana jangka pendek, menengah dan panjang.</p>
            <br>
            <p>(3) Untuk melaksanakan program kerja sebagaimana dimaksud pada ayat (1) dan ayat (2), Karang Taruna dapat membentuk unit teknis.</p>
            

            <h4 class="text-center">Pasal 23</h4>
            <p>Tanggung jawab dan wewenang Gubernur sebagaimana dimaksud dalam Pasal 21 ayat (2) meliputi :</p>
             <ul>
              <li>melaksanakan tugas desentralisasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melaksanakan tugas dekonsentrasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melakukan program pengembangan;</li>
              <li>melaksanakan pembinaan lanjutan;</li>
              <li>melakukan pembinaan kemitraan dengan Forum Pengurus Karang Taruna;</li>
              <li>memberikan penghargaan;</li>
              <li>melakukan sosialisasi;</li>
              <li>melakukan monitoring; dan</li>
              <li>melaksanakan koordinasi.</li>
            </ul>

            <br><br>
            <p>(Permensos Nomor 77 Tahun 2010)</p>
          </div>

          <div id="TANGGUNG JAWAB DAN WEWENANG" class="tabcontent">
            <h3>TANGGUNG JAWAB DAN WEWENANG</h3>
            <h4 class="text-center">Pasal 21</h4>
            <p>(1) Penyelenggaraan Program Karang Taruna menjadi tanggung jawab dan wewenang Pemerintah, Pemerintah Provinsi, dan Pemerintah Kabupaten/Kota.</p>
            <p>(2) Tanggung jawab dan wewenang sebagaimana dimaksud pada ayat (1) dilaksanakan oleh Menteri Sosial, Gubernur, dan Bupati/Walikota.</p>
            <h4 class="text-center">Pasal 22</h4>
            <p>Tanggung jawab dan wewenang Menteri Sosial sebagaimana dimaksud dalam Pasal 21 ayat (2) meliputi :</p>
            <br>
            <ul>
              <li>menetapkan Pedoman Umum Karang Taruna;</li>
              <li>menetapkan standar dan indikator secara nasional;</li>
              <li>melakukan program percontohan;</li>
              <li>memberikan stimulasi; </li>
              <li>memberikan penghargaan;</li>
              <li>melakukan sosialisasi;</li>
              <li>melakukan monitoring;</li>
              <li>melaksanakan koordinasi; dan</li>
              <li>memantapkan Sumber Daya Manusia.</li>
            </ul>

            <h4 class="text-center">Pasal 23</h4>
            <p>Tanggung jawab dan wewenang Gubernur sebagaimana dimaksud dalam Pasal 21 ayat (2) meliputi :</p>
             <ul>
              <li>melaksanakan tugas desentralisasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melaksanakan tugas dekonsentrasi bidang Pemberdayaan Karang Taruna;</li>
              <li>melakukan program pengembangan;</li>
              <li>melaksanakan pembinaan lanjutan;</li>
              <li>melakukan pembinaan kemitraan dengan Forum Pengurus Karang Taruna;</li>
              <li>memberikan penghargaan;</li>
              <li>melakukan sosialisasi;</li>
              <li>melakukan monitoring; dan</li>
              <li>melaksanakan koordinasi.</li>
            </ul>

            <br><br>
            <p>(Permensos Nomor 77 Tahun 2010)</p>
          </div>



          
           
           
        </div>
      </div>
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
  <script src="{{ asset('js/lembaga.js') }}"></script>

</body>
</html>
