  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

<div class="carousel-inner" role="listbox">

	<!-- Slide 1 -->
	<div class="carousel-item active" style="background-image: url(<?=base_url()?>assets/img/frontend/slide/slide1.png)">
		<div class="carousel-container">
			<div class="container">
				<h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Puspaman bpom</span></h2>
				<p class="animate__animated animate__fadeInUp">Pusat Informasi Pasar Aman Dari Bahan Berbahaya yang diintervensi oleh Badan POM dalam mengawasi pasar-pasar di indonesia sebagai upaya menstrelisasi pasar dari bahan berbahaya</p>
				<a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pelajari lebih lanjut</a>
			</div>
		</div>
	</div>

	<!-- Slide 2 -->
	<div class="carousel-item" style="background-image: url(<?=base_url()?>assets/img/frontend/slide/slide2.png)">
		<div class="carousel-container">
			<div class="container">
				<h2 class="animate__animated animate__fadeInDown">Informasi Pasar Aman</h2>
				<p class="animate__animated animate__fadeInUp">Pasar Aman adalah pasar percontohan yang diintervensi oleh Badan POM, dimana secara periodik dilakukan pengawasan terhadap pangan yang diduga mengandung bahan berbahaya dan dalam periode pengawasan terakhir tidak ditemukan adanya penyalahgunaan bahan berbahaya dalam pangan.</p>
				
			</div>
		</div>
	</div>

	<!-- Slide 3 -->
	<div class="carousel-item" style="background-image: url(<?=base_url()?>assets/img/frontend/slide/slide3.png)">
		<div class="carousel-container">
			<div class="container">
				<h2 class="animate__animated animate__fadeInDown">Pasar Aman Bebas Dari Bahan Berbahaya</h2>
				<p class="animate__animated animate__fadeInUp">Pasar aman dari bahan berbahaya adalah pasar yang mempunyai komitmen dan dukungan penuh dari komunitas pasar (pedagang, pemasok, masyarakat) dan pemerintah setempat untuk mengendalikan peredaran bahan berbahaya yang disalahgunakan dalam pangan dan pangan yang berpotensi mengandung bahan berbahaya.</p>
				
			</div>
		</div>
	</div>

</div>

<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
	<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
</a>

<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
	<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
</a>

</div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Pasar Aman Dari bahan Berbahaya</h3>
          <p>Informasi pasar aman oleh Badan POM</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
						Pasar Aman adalah pasar percontohan yang diintervensi oleh Badan POM, dimana secara periodik dilakukan pengawasan terhadap pangan yang diduga mengandung bahan berbahaya dan dalam periode pengawasan terakhir tidak ditemukan adanya penyalahgunaan bahan berbahaya dalam pangan.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">FAQ</a></h4>
              <p class="description">Penjelasan seputar pertanyaan - pertanyaan yang sering ditanyakan terkait pasar aman dari bahan berbahaya.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-brightness-high"></i></div>
              <h4 class="title"><a href="">Program</a></h4>
              <p class="description">Program pasarmana dari bahan berahaya dalam pengendalian peredaran bahan berbahaya yang disalahgunakan.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Bahan Berbahaya</a></h4>
              <p class="description">Penjelasan tentang bahan berbahaya dan informasi seputar bahan berbahaya yang ada pada produk pangan  di pasar.</p>
            </div>

          </div>

          <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
            <img src="<?=base_url()?>assets/img/frontend/slide/slide1.png" class="img-fluid" alt="">
          </div>
        </div>

        

      </div>
    </section><!-- End About Section -->
		
		<!-- ======= Berita Section ======= -->
    <section id="team" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Berita</h3>
          <p>Berita Terkini Pasar Aman</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						<div class="card h-100">
							<img src="<?=base_url()?>assets/img/frontend/berita/berita1.png" class="card-img-top" alt="...">
							<div class="card-body">
								<a href="<?=site_url('frontend/Berita/detail_berita')?>"><h5 class="card-title">BBPOM Bandung Survei Pasar di Kota Sukabumi</h5></a>
								<p class="card-text">Kota Sukabumi (20-21 Juni 2022), Balai Besar POM di Bandung melaksanakan kegiatan survei pasar dalam rangka implementasi Pasar Aman dari Bahan Berbahaya.</p>
								
							</div>
							<div class="card-footer">
								<small class="text-muted">Terakhir diupdate 3 menit yang lalu</small>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card h-100">
							<img src="<?=base_url()?>assets/img/frontend/berita/berita2.png" class="card-img-top" alt="...">
							<div class="card-body">
							<a href="<?=site_url('frontend/Berita/detail_berita')?>"><h5 class="card-title">Penyuluhan Pedagang Pasar dan Kampanye PPABK di Pasar Mblin Kayam Kabupaten Raja Ampat</h5></a>
								<p class="card-text">Selasa 21 Juni 2022, Penyuluhan kepada Pedagang Pasar dirangkaikan dengan Kampanye Pasar Pangan Aman Berbasis Komunitas telah dilaksanakan oleh Balai POM di Manokwari di Pasar Mbilim Kayam Kabupaten Raja Ampat.</p>
								
							</div>
							<div class="card-footer">
								<small class="text-muted">Terakhir diupdate 3 menit yang lalu</small>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card h-100">
							<img src="<?=base_url()?>assets/img/frontend/berita/berita3.png" class="card-img-top" alt="...">
							<div class="card-body">
							<a href="<?=site_url('frontend/Berita/detail_berita')?>"><h5 class="card-title">BBPOM di serang Tingkatkan Kompetensi Pengelola Pasar melalui Pelatihan Fasilitator PPABK</h5></a>
								<p class="card-text">Rabu, 15 Juni 2022 bertempat di Studio RRI Kabupaten Nabire, Kepala Balai Besar POM di Jayapura, Mojaza Sirait, S.Si., Apt melakukan kegiatan talkshow bersama narasumber tamu Jeuquline O. Tentua, S.Si., Apt Kepala Seksi Pelayanan Kefarmasian dan Makanan Dinas Kesehatan Kabupaten Nabire.</p>
								
							</div>
							<div class="card-footer">
								
								<small class="text-muted">Terakhir diupdate 3 menit yang lalu</small>
							</div>
						</div>
					</div>
			</div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>List Pasar Aman</h3>
          <p>Periode Pengawasan: Oktober - Desember 2022</p>
        </header>

        <div class="row justify-content-center">

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-shop-window" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pasar Johar Baru</a></h4>
              <p class="description">Kepala Pasar : bapak Suganda</p>
							<p class="description">Alamat :  Jl. Johar Jakarta pusat</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-shop-window" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pasar Sekip Ujung</a></h4>
              <p class="description">Kepala Pasar : Yasfin M</p>
							<p class="description">Alamat : Sekip Ujung Palembang</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-shop-window" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pasar Agrobisnis Keramat Barabai</a></h4>
              <p class="description">Kepala Pasar : Muhammad Rumainur</p>
							<p class="description">Alamat : Barabai Utara, Barabai, Kabupaten Hulu Sungai Tengah, Kalimantan Selatan 71352</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-shop-window" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Pasar Cakranegara</a></h4>
              <p class="description">Kepala Pasar : I Nengah Sukardi</p>
							<p class="description">Alamat :  Jl. Selaparang, Cakranegara</p>
            </div>
          </div>
          <div class="col-md-12 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
            <div class="box text-center">
              <a href="<?=site_url('frontend/PasarAman/index')?>" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Selengkapnya</a>          
            </div>
            
          </div>
          
          

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Bahan Berbahaya</h3>
          <p>Bahan berbahaya adalah bahan kimia baik dalam bentuk tunggal maupun campuran yang dapat membahayakan kesehatan dan lingkungan hidup secara langsung atau tidak langsung yang mempunyai sifat racun, karsinogenik, teratogenik, mutagenik, korosif dan iritasi (Peraturan Menteri Kesehatan Nomor 472/Menkes/Per/V/1996 tentang Pengamanan Bahan Berbahaya Bagi Kesehatan).</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="100">
              <i class="bi bi-calendar4-week"></i>
              <div class="card-body">
                <h5 class="card-title">Boraks</h5>
                <p class="card-text">Boraks merupakan senyawa dengan nama kimia natrium tetraborat yang berbentuk kristal lunak. Boraks digunakan untuk campuran pembuatan gelas, pengawet kayu, salep kulit, campuran pupuk tanaman, dll.</p>
                <a href="#" class="readmore">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Formalin</h5>
                <p class="card-text">Formalin termasuk kelompok aldehid dengan rumus kimia HCHO, biasanya berbentuk larutan yang tidak berwarna dan berbau sangat menyengat. Di dalam larutan formalin terkandung sekitar 37% formaldehid dalam air dan. Formalin dipakai untuk mengawetkan mayat, membunuh kuman, pengawet kosmetika dan pengeras kuku, serta perekat kayu lapis.</p>
                <a href="#" class="readmore">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">Rhodamin B dan Kuning Metanil</h5>
                <p class="card-text">Rhodamin B dan Kuning Metanil dipakai untuk pewarna tekstil, kertas serta cat.</p>
                <a href="#" class="readmore">Pelajari lebih lanjut</a>
              </div>
            </div>
          </div>

        </div>

        <!-- <div class="row counters" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div> -->

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="clearfix">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Galeri</h3>
        </header>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide1.png" data-gallery="portfolioGallery" class="portfolio-lightbox link-preview"><i class="bi bi-search"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide2.png" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery"><i class="bi bi-search"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide3.png" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery"><i class="bi bi-search"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide1.png" data-gallery="portfolioGallery" class="portfolio-lightbox link-preview"><i class="bi bi-search"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide2.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide2.png" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery"><i class="bi bi-search"></i></a>
                
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?=base_url()?>assets/img/frontend/slide/slide3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                
                <div>
                  <a href="<?=base_url()?>assets/img/frontend/slide/slide3.png" class="portfolio-lightbox link-preview" data-gallery="portfolioGallery"><i class="bi bi-search"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    
  </main><!-- End #main -->


