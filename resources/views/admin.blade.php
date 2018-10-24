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
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/table.css') }}" rel="stylesheet" media="screen">

</head>

<body>
@php
  $no=1
@endphp

    {{-- <p>{{session('key')}}</p>     --}}

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
              @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                        @else
                             <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                upload dokumen <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('formuploadapbd/apbd')}}">APBD Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('formuploadapbd/rkp')}}">RKP Desa</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('formuploadapbd/rpjm')}}">RPJM Desa</a>
                              </div>
                            </li>
                            <li class="nav-item dropdown navigation">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Tabel Data <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropdowntabel">
                                <a class="dropdown-item" href="#tabelberita">Tabel Berita</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelpengumuman">Tabel Pengumuman</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabeljmlpend">Tabel Jumlah Penduduk</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelstatpendidikanpend">Tabel Statistik Penduduk Menurut Pendidikan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelstatpekerjaanpend">Tabel Statistik Penduduk Menurut Pekerjaan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelstatetnispend">Tabel Statistik Penduduk Menurut etnis/suku</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#tabelstatagamapend">Tabel Statistik Penduduk Menurut Agama</a>
                              </div>
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




    <section id="tabelberita">
      <div class="container-fluid">
         <h1>Tabel data Berita Desa</h1>
        <div class="row">
          <div class="col-md-12">
            <div class="limiter">
             
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">Judul Berita</th>
                                        <th class="cell100 column2">Deskripsi</th>
                                        <th class="cell100 column4">edit</th>
                                        <th class="cell100 column5">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                              @foreach($beritas as $berita)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $berita->judulberita }}</td>
                                 <td class="cell100 column2">{{ substr($berita->deskripsi,0,50) }}</td>
                                 <td class="cell100 column3"><a href={{ url('formeditberita/' .  $berita->id ) }}>edit</a></td>
                                 <td class="cell100 column4"><a href={{ url('deleteberita/' .  $berita->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                           </div>

                        </div>
                        <a href="{{url('formaddberita')}}" class="tomboladd">Buat Berita Baru</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}
                       
                </div>
              </div>
            </div>
    </section>




      <section id="tabelpengumuman">
      <div class="contaitabelluid">
        <h1>Tabel data Pengumuman Desa</h1>
        <div class="row">
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">Judul Pengumuman</th>
                                        <th class="cell100 column2">Deskripsi</th>
                                        <th class="cell100 column4">edit</th>
                                        <th class="cell100 column5">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                              @foreach($pengumumandesas as $pengumumandesa)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $pengumumandesa->judulpengumuman }}</td>
                                 <td class="cell100 column5">{{ substr($pengumumandesa->deskripsi,0,50) }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditpengumuman/' .  $pengumumandesa->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletepengumuman/' .  $pengumumandesa->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                            
                        </div>
                        <a href="{{url('formaddpengumuman')}}" class="tomboladd">Buat Pengumuman Baru</a>                      
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}
          </div>
        </div>
      </div>
    </section>

         


      


      <section id="tabeljmlpend"  class="tabel5kolom">
      <div class="container-fluid">
        <h1>Tabel data Jumlah Penduduk Desa Pringgajurang Utara</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">wilayah</th>
                                        <th class="cell100 column3">Jumlah</th>
                                        <th class="cell100 column4">Edit</th>
                                        <th class="cell100 column5">Hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                              @foreach($jmlpends as $jmlpend)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $no++ }}</td>
                                 <td class="cell100 column2">{{ $jmlpend->wilayah }}</td>
                                 <td class="cell100 column3">{{ $jmlpend->jumlah }}</td>
                                 <td class="cell100 column4"><a href={{ url('formeditjmlpend/' .  $jmlpend->id ) }}>edit</a></td>
                                 <td class="cell100 column5"><a href={{ url('deletejmlpend/' .  $jmlpend->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddjmlpend')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section>




      <section id="tabelstatpendidikanpend" class="tabel7kolom">
      <div class="container-fluid">
        <h1>Tabel Statistik Penduduk Menurut Pendidikan</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Tingkat Pendidikan</th>
                                        <th class="cell100 column3">Pria</th>
                                        <th class="cell100 column4">Wanita</th>
                                        <th class="cell100 column5">Jumlah</th>
                                        <th class="cell100 column6">edit</th>
                                        <th class="cell100 column7">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                                 @php
                                  $no=1
                                @endphp
                              @foreach($pendidikans as $pendidikan)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $no++ }}</td>
                                 <td class="cell100 column2">{{ $pendidikan->pendidikan }}</td>
                                 <td class="cell100 column3">{{ $pendidikan->pria }}</td>
                                 <td class="cell100 column4">{{ $pendidikan->wanita }}</td>
                                 <td class="cell100 column5">{{ $pendidikan->jumlah }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditstatpendidikanpend/' .  $pendidikan->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletestatpendidikanpend/' .  $pendidikan->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddstatpendidikanpend')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
      </div>
    </section>




      <section id="tabelstatpekerjaanpend" class="tabel7kolom">
      <div class="container-fluid">
        <h1>Tabel Statistik Penduduk Menurut Pekerjaan</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Pekerjaan</th>
                                        <th class="cell100 column3">Pria</th>
                                        <th class="cell100 column4">Wanita</th>
                                        <th class="cell100 column5">Jumlah</th>
                                        <th class="cell100 column6">edit</th>
                                        <th class="cell100 column7">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                                @php
                                  $no=1
                                @endphp
                              @foreach($pekerjaans as $pekerjaan)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $no++ }}</td>
                                 <td class="cell100 column2">{{ $pekerjaan->pekerjaan }}</td>
                                 <td class="cell100 column3">{{ $pekerjaan->pria }}</td>
                                 <td class="cell100 column4">{{ $pekerjaan->wanita }}</td>
                                 <td class="cell100 column5">{{ $pekerjaan->jumlah }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditstatpekerjaanpend/' .  $pekerjaan->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletestatpekerjaanpend/' .  $pekerjaan->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddstatpekerjaanpend')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section>



      <section id="tabelstatetnispend" class="tabel7kolom">
      <div class="container-fluid">
        <h1>Tabel Statistik Penduduk Menurut etnis/suku</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Etnis/Suku</th>
                                        <th class="cell100 column2">Pria</th>
                                        <th class="cell100 column2">Wanita</th>
                                        <th class="cell100 column5">Jumlah</th>
                                        <th class="cell100 column6">edit</th>
                                        <th class="cell100 column7">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                               @php
                                  $no=1
                                @endphp
                              @foreach($etniss as $etnis)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $no++ }}</td>
                                 <td class="cell100 column2">{{ $etnis->etnis }}</td>
                                 <td class="cell100 column3">{{ $etnis->pria }}</td>
                                 <td class="cell100 column4">{{ $etnis->wanita }}</td>
                                 <td class="cell100 column5">{{ $etnis->jumlah }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditstatetnispend/' .  $etnis->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletestatetnispend/' .  $etnis->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddstatetnispend')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section>



      <section id="tabelstatagamapend" class="tabel7kolom">
      <div class="container-fluid">
        <h1>Tabel Statistik Penduduk Menurut Agama</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Etnis/Suku</th>
                                        <th class="cell100 column2">Pria</th>
                                        <th class="cell100 column2">Wanita</th>
                                        <th class="cell100 column5">Jumlah</th>
                                        <th class="cell100 column6">edit</th>
                                        <th class="cell100 column7">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                               @php
                                  $no=1
                                @endphp
                              @foreach($agamas as $agama)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $no++ }}</td>
                                 <td class="cell100 column2">{{ $agama->agama }}</td>
                                 <td class="cell100 column3">{{ $agama->pria }}</td>
                                 <td class="cell100 column4">{{ $agama->wanita }}</td>
                                 <td class="cell100 column5">{{ $agama->jumlah }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditstatagamapend/' .  $agama->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletestatagamapend/' .  $agama->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddstatagamapend')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section>




    {{--   <section id="tabelkriteria" class="tabel7kolom">
      <div class="container-fluid">
        <h1>Tabel Angkatan Kerja Penduduk Berdasarkan Usia</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Kriteria</th>
                                        <th class="cell100 column2">Pria</th>
                                        <th class="cell100 column2">Wanita</th>
                                        <th class="cell100 column5">Jumlah</th>
                                        <th class="cell100 column6">edit</th>
                                        <th class="cell100 column7">hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                              @foreach($pengumumandesas as $pengumumandesa)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $pedidikan->id }}</td>
                                 <td class="cell100 column2">{{ $pedidikan->pedidikan }}</td>
                                 <td class="cell100 column3">{{ $pedidikan->pria }}</td>
                                 <td class="cell100 column4">{{ $pedidikan->wanita }}</td>
                                 <td class="cell100 column5">{{ $pedidikan->jumlah }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditstatpendidikanpend/' .  $pendidikan->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletestatpendidikanpend/' .  $pendidikan->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddpengumuman')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section> --}}




    {{--   <section id="tabellembaga">
      <div class="container-fluid">
        <h1>Tabel Potensi Kelembagaan Desa</h1>
          <div class="col-md-12">
          <div class="limiter">
                          <div class="container-table100">
                            <div class="wrap-table100">
                              <div class="table100 ver1 m-b-110">
                                <div class="table100-head">
                                  <table>
                                    <thead>
                                      <tr class="row100 head">
                                        <th class="cell100 column1">No</th>
                                        <th class="cell100 column2">Lembaga Desa</th>
                                        <th class="cell100 column4">No</th>
                                        <th class="cell100 column5">Lembaga Kemasyarakatan / Organisasi</th>
                                        <th class="cell100 column5">Edit</th>
                                        <th class="cell100 column5">Hapus</th>
                                      </tr>
                                    </thead>
                                  </table>
                                </div>
                           <div class="table100-body js-pscroll">
                           <table>
                             <tbody>
                              @foreach($pengumumandesas as $pengumumandesa)
                               <tr class="row100 body">
                                 <td class="cell100 column1">{{ $pengumumandesa->judulpengumuman }}</td>
                                 <td class="cell100 column5">{{ substr($pengumumandesa->deskripsi,0,50) }}</td>
                                 <td class="cell100 column6"><a href={{ url('formeditpengumumandesa/' .  $berita->id ) }}>edit</a></td>
                                 <td class="cell100 column7"><a href={{ url('deletepengumumandesa/' .  $berita->id ) }}>hapus</a></td>
                               </tr>
                              @endforeach
                             </tbody>
                           </table>
                            </div>
                        </div>
                        <a href="{{url('formaddpengumuman')}}" class="tomboladd">Tambah Data</a>
                      </div>
                    </div>
                  </div>

                           
                           

                           {{ $beritas->links() }}


        </div>
        </div>
        </div>
    </section> --}}
  


  

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
