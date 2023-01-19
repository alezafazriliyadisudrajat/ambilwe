<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>PPDB SMK WIKRAMA BOGOR</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <h3>
              Wikrama
            </h3>
            <span> Bogor</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/beranda">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tentang"> Tentang Kami </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/jurusan"> Jurusan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/testimoni"> Testimoni </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontak">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        PPDB SMK WIKRAMA BOGOR
                      </h1>
                      <a class="btn btn-success" style="a::hover: display: block" href="{{ route('pendaftaran') }}">
                        Daftar Sekarang
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Tahun Pelajaran 2022-2023
                      </h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h5>
                        Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik PENDAFTARAN PPDB di halaman sebelumnya.
                        Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- special section -->

  <section class="special_section">
    <div class="container">
      <div class="special_container">
        <div class="box b1">
          <div class="img-box">
            <img src="assets/images/award.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              MOTTO
            </h4>
            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="assets/images/study.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
            AFIRMASI
            </h4>
            <p>Pada MU Negri - Kami berjanji - Lulus Wikrama Siap Membangun Negri</p>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">
            <img src="assets/images/books-stack-of-three.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              ATTITUDE
            </h4>
            <P>Aku Ada Lingkungan ku Bahagia</P>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end special section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="side_img">
      <img src="assets/images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="assets/images/Gedung.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="assets/images/mew.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                Tentang Kami
              </h3>
              <p>
                SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan
            Yayasan
            Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu
            adalah
            sekretaris dengan jumlah hanya 34 siswa.
              </p>
              <p> 
                Seiring berjalannya waktu, jumlah siswa SMK Wikrama Bogor setiap tahunnya terus bertambah. Sehingga pada
                tahun 2001, secara bertahap SMK Wikrama Bogor menempati gedung yang lebih luas diatas tanah ± 5000m2,
                berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor. Hingga saat ini, SMK Wikrama Bogor
                memiliki
                1596 siswa dengan 51 guru pendidik.
              </p>
              <p>
                Kesuksesan SMK Wikrama Bogor saat ini tentunya tidak lepas dari sejarah SMK WIKRAMA
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- course section -->

  <section class="course_section layout_padding-bottom">
    <div class="side_img">
      <img src="assets/images/side-img.png" alt="" />
    </div>
    <div class="container">
      <div class="heading_container">
        <h3>
          Jurusan
        </h3>
      </div>
      <div class="course_container">
        <div class="course_content">
          <div class="box">
            <img src="assets/images/RPL.jpeg" alt="" />
            <a href="" class="">
              <img src="images/link.png" alt="" />
            </a>
            <h5 style="color: black">
              RPL
            </h5>
          </div>
          <div class="box">
            <img src="assets/images/mmd.jpeg" alt="" />
            <a href="" class="">
              <img src="assets/images/link.png" alt="" />
            </a>
            <h5 style="color: black">
              MMD
            </h5>
          </div>
        </div>
        <div class="course_content">
          <div class="box">
            <img src="assets/images/TKJ.jpeg" alt="" />
            <a href="" class="">
              <img src="assets/images/link.png" alt="" />
            </a>
            <h5 style="color: black">
             TKJ
            </h5>
          </div>
          <div class="box">
            <img src="assets/images/bdp.jpeg" alt="" />
            <a href="" class="">
              <img src="assets/images/link.png" alt="" />
            </a>
            <h5 style="color: black">
              BDP
            </h5>
          </div>
          <div class="box">
            <img src="assets/images/TBG.jpeg" alt="" />
            <a href="" class="">
              <img src="assets/images/link.png" alt="" />
            </a>
            <h5 style="color: black">
              TBG
            </h5>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end course section -->

  <!-- event section -->
  <section class="event_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h3>
          Testimoni
        </h3>
      </div>
      <div class="event_container">
        <div class="box">
          <div class="img-box">
            <img src="assets/images/wk.jpg" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              AKHMAD MUNITO
            </h4>
            <h6>
              Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat 
              dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
                Tahun
              </span>
              2000
            </h3>
          </div>
        </div>
      </div>
      <div class="event_container">
        <div class="box">
          <div class="img-box">
            <img src="assets/images/wk.jpg " alt="" />
          </div>
          <div class="detail-box">
            <h4>
              KAMALUDIN
            </h4>
            <h6>
              SMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, 
              melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.
            </h6>
          </div>
          <div class="date-box">
            <h3>
              <span>
                Tahun
              </span>
              2011
            </h3>
          </div>
        </div>
        <div class="event_container">
          <div class="box">
            <div class="img-box">
              <img src="assets/images/wk.jpg " alt="" />
            </div>
            <div class="detail-box">
              <h4>
                KAMALUDIN
              </h4>
              <h6>
                SMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, 
                melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.
              </h6>
            </div>
            <div class="date-box">
              <h3>
                <span>
                  Tahun
                </span>
                2016
              </h3>
            </div>
          </div>
      </div>
      <div class="btn-box">
      </div>
    </div>
  </section>
  <!-- end event section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h3>
          Apa kata alumni tentang Wikrama
        </h3>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="assets/images/wk.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Andi Wibowo : IT Developer
                </h5>
                <p>	
                  SMK Wikrama Luar biasa sekali bisa membentuk murid2nya menjadi siap bekerja di dunia kerja. 
                  tp dengan jerih payah juga tentunya hhe sukses wikrama 
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="assets/images/wk.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Gita Fitri Br Tarigan : Web Designer
                </h5>
                <p>
                  Setelah lulus sangat layak masuk dunia kerja karena sudah melewati masa pelatihan dari sekolah 
                  terutama dipelajaran produktif ditambah dengan adanya PKL selama 3 bulan.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="assets/images/wk.jpg" alt="" />
              </div>
              <div class="detail-box">
                <h5>
                  Insan Harish : IT Auditor (Mitra internal audit Telkom)
                </h5>
                <p>
                  Sekolah pendidikan tidak hanya ilmu formal tapi juga akhlak dan mental, 
                  yang dapat diterapkan di tempat kerja dan pendidikan lanjut, 
                  mudah mencari pekerjaan dan dapat
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
                Contact Us
              </h3>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="contact-form">
            <h5>
              Get In Touch
            </h5>
            <form action="">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email Address" />
              </div>
              <div>
                <input type="text" placeholder="Message" class="input_message" />
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn_on-hover">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/beranda">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tentang"> Tentang Kami </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/jurusan"> Jurusan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/testimoni"> Testimoni </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kontak">Contact </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
              TOP RATED COURSE
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by
              injected humou
            </p>
          </div>
        </div>

        <div class="col-md-5 offset-md-1">
          <div class="info_news">
            <h5>
              FOR ANY QUERY, PLEASE WRITE TO US
            </h5>
            <div class="info_contact">
              <a href="">
                Location
              </a>
              <a href="https://www.instagram.com/smkwikrama/">
                @smkwikrama
              </a>
              <a href="">
                Call : +01 1234567890
              </a>
            </div>
            <form action="">
              <input type="text" placeholder="Enter Your email" />
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2023 by: Aleza 
      <a href="https://html.design/"></a>
    </p>
  
  </footer>

   
  <footer class="container-fluid footer_section">
  
      <p>
        Distributed By Aleza
      </p>
  
  </footer>
 
  <!-- footer section -->

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>

</html>