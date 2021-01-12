<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="span6">
                <h2>Selamat Datang Di <br />
                    <strong>Suplier Ayam Adi Jaya</strong>
                </h2>
                <p>
                    Adi jaya adalah sebuah perusahaan yang bergerak dalam bidang distribusi ayam broiler
                </p>
                <p>
                    Dengan banyak macam varian produk ayam yang segar setiap hari, kami melayani berbagai macam konsumen. Seperti restaurant cepat saji, hotel, & supermarket.
                </p>
            </div>
            <div class="span6">
                <!-- start flexslider -->
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?= base_url() ?>/assets/img/sampel/Adi jaya logo.jpg" alt="" />
                        </li>
                        <!--<li>
                            <img src="<?= base_url() ?>/assets/img/works/full/image-02-full.jpg" alt="" />
                        </li>
                        <li>
                            <img src="<?= base_url() ?>/assets/img/works/full/image-03-full.jpg" alt="" />
                        </li> -->
                    </ul>
                </div>
                <!-- end flexslider -->
            </div>
        </div>


    </div>
</section>

<?= $this->endSection('content'); ?>