<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<section id="featured">
  <!-- start slider -->
  <div id="slider" class="sl-slider-wrapper demo-2">
    <div class="sl-slider">
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1">
          </div>
          <h2><strong>Daging</strong> Premium</h2>
          <blockquote>
            <p>
              Ddaging ayam yang kami pilih hanya dari ayam yang berkualitas
            </p>
            <!-- <cite>ayam</cite> -->
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2">
          </div>
          <h2><strong>Banyak</strong> Pilihan</h2>
          <blockquote>
            <p>
              Beraneka ragam macam pilihan mulai dari kaki hingga kepala ayam
            </p>
            <!-- <cite>ayam</cite> -->
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3">
          </div>
          <h2><strong>Diolah</strong> Dengan Baik</h2>
          <blockquote>
            <p>
              Daging yang kami sajikan diolah oleh tangan - tangan terampil
            </p>
            <!-- <cite>Ayam</cite> -->
          </blockquote>
        </div>
      </div>

    </div>
    <!-- /sl-slider -->
    <nav id="nav-dots" class="nav-dots">
      <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
    </nav>
  </div>
  <!-- /slider-wrapper -->
  <!-- end slider -->
</section>
<section class="callaction">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="big-cta">
          <div class="cta-text" style="float: none; text-align: center;">
            <h3>
              <strong>Keunggulan</strong> Ayam Kami
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="row">
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <img src="<?php base_url() ?>/assets/img/sliders/dada-utuh.png" class="rounded mx-auto d-block" alt="...">
              </div>
              <div class="text">
                <h6>Daging 100% Organik</h6>
                <p>
                  Daging Ayam Kami 100% Fresh & Organik
                </p>
                <!-- <a href="#">Learn more</a> -->
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <img src="<?php base_url() ?>/assets/img/sliders/paha.png" class="rounded mx-auto d-block" alt="...">
              </div>
              <div class="text">
                <h6>Proses Hygienic Handling</h6>
                <p>
                  Proses Pengolahan Daging Ayam Yang Higenis & Berteknologi
                </p>
                <!-- <a href="#">Learn more</a> -->
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <img src="<?php base_url() ?>/assets/img/sliders/sayap.png" class="rounded mx-auto d-block" alt="...">
              </div>
              <div class="text">
                <h6>Fresh & Halal</h6>
                <p>
                  Proses Pengelolaan Ayam Yang Modern Selalu Higenis, Fresh, & Halal
                </p>
                <!-- <a href="#">Learn more</a> -->
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="box aligncenter">
              <div class="aligncenter icon">
                <img src="<?php base_url() ?>/assets/img/sliders/dada-kulit.png" class="rounded mx-auto d-block" alt="...">
              </div>
              <div class="text">
                <h6>Trusted Delivery</h6>
                <p>
                  Pengiriman Daging Ayam Gratis & Cepat & Tepat Waktu
                </p>
                <!-- <a href="#">Learn more</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- divider -->
    <div class="row">
      <div class="span12">
        <div class="solidline"></div>
      </div>
    </div>
    <!-- end divider -->
    <!-- Portfolio Projects -->
    <div class="row" style="margin-bottom: 0px;">
      <div class="span12">
        <h4 class="heading" style="text-align: center;"><strong>Produk</strong> Ayam Kami</h4>
        <div class="row" style="margin-top: 70px;">
          <section id="projects">
            <ul id="thumbs" class="portfolio">
              <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Ayam Utuh" href="assets/img/product/utuh.jpeg">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb icon-zoom-in"></span>
                </a>
                <img src="assets/img/product/utuh.jpeg" alt="" />
              </li>
              <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dada Ayam" href="assets/img/product/dada.jpeg">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb icon-zoom-in"></span>
                </a>
                <img src="assets/img/product/dada.jpeg" alt="" />
              </li>
              <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Paha Ayam" href="assets/img/product/paha.jpeg">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb icon-zoom-in"></span>
                </a>
                <img src="assets/img/product/paha.jpeg" alt="" />
              </li>
              <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Ceker Ayam" href="assets/img/product/sayap.jpeg">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb icon-zoom-in"></span>
                </a>
                <img src="assets/img/product/sayap.jpeg" alt="" />
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
    <!-- End Portfolio Projects -->

    <section class="callaction" style="padding: 0%;">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div style="float: none; text-align: center;">
              <a class="btn btn-large btn-theme btn-rounded animated shake" href="<?= base_url('Produk') ?>">Produk</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- divider -->
    <div class="row">
      <div class="span12">
        <div class="solidline"></div>
      </div>
    </div>
    <!-- end divider -->
    <div class="row">
      <div class="span12">
        <h4 style="text-align: center;"><strong>Klien</strong> Kami</h4>
        <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
          <li>
            <a href="#">
              <img src="<?= base_url() ?>/assets/img/clients/wing-heng.png" class="client-logo" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="bottom">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="aligncenter">
          <div id="twitter-wrapper">
            <div id="twitter"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection('content'); ?>