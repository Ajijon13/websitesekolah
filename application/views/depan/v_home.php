<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>

<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">

        <?php $loop = 0; ?>
        <?php foreach ($slide_banner as $b) { ?>
            <?php $loop++; ?>
            <li data-target="#demo" data-slide-to="<?php echo ($loop - 1); ?>" class="<?php if ($loop === 1) echo 'active' ?>">
            </li>
        <?php } ?>

    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <?php $loop = 0; ?>
        <?php foreach ($slide_banner as $b) { ?>
            <?php $loop++; ?>
            <div class="carousel-item <?php if ($loop === 1) echo 'active' ?>">
                <img src="<?php echo 'style/img/banner/' . $b->photo; ?>" width="1100" height="200">
                <div class="carousel-caption">
                    <h1 style="color: white;"><?php echo $b->title; ?></h1>
                    <p style="color: white;"><?php echo $b->text; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>


<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Ekstrakurikuler</h3>
                    <hr>

                </div>
            </div>
        </div>

        <section classs="testimonials">
            <div class="container">
                <div class="section_title text-center mb-70">
                    <h2>SD PINUS</h2>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="customers-testimonials" class="owl-carousel">

                            <!-- testimonial 1 -->
                            <?php foreach ($ekstrasd->result() as $row) : ?>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-circle" src="<?php echo base_url() . 'style/img/ekstrasd/' . $row->foto; ?>" alt="">
                                    </div>
                                    <div class="testimonial-name"><?php echo $row->ket; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <section classs="testi">
            <div class="container">
                <div class="container">
                    <div class="section_title text-center mb-70">
                        <br>
                        <h2>SMP PINUS</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="customer-testimoni" class="owl-carousel">

                                <!-- testimonial 1 -->
                                <?php foreach ($ekstrasmp->result() as $row) : ?>
                                    <div class="items">
                                        <div class="shadows-effects">
                                            <img class="img-circle" src="<?php echo base_url() . 'style/img/ekstrasmp/' . $row->foto; ?>" alt="">
                                        </div>
                                        <div class="testi-name"><?php echo $row->ket; ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    </div>
</div>


<div class="recent_news_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Berita Terkini</h3>
                    <hr>

                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($berita->result() as $row) : ?>
                <div class="col-md-4">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" alt="<?php echo $row->tulisan_judul; ?>">
                            </a>
                            <span class="badge"><?php echo $row->tulisan_kategori_nama; ?></span>
                        </div>
                        <div class="news_info">
                            <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                <h4><?php echo $row->tulisan_judul; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->tulisan_isi, 10) . '...'; ?></p>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> <?php echo $row->tanggal; ?></span>

                                <span> </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!--/ service_area_start  -->


<!-- popular_program_area_start  -->
<div class="popular_program_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Program Unggulan</h3>
                </div>
                <br>
            </div>
        </div>
        <div class="cards">
            <div class="cardian cardian-1">
                <h2 class="cardian__title">English Day Activity</h2>
            </div>
            <div class="cardian cardian-2">
                <h2 class="cardian__title">Mandarin Class</h2>
            </div>
            <div class="cardian cardian-3">
                <h2 class="cardian__title">Parenting</h2>
            </div>
            <div class="cardian cardian-4">
                <h2 class="cardian__title">Character Building</h2>
            </div>
            <div class="cardian cardian-5">
                <h2 class="cardian__title">Budaya Kebhinekaan</h2>
            </div>
            <div class="cardian cardian-1">
                <h2 class="cardian__title">Pengembangan Bakat dan Minat</h2>
            </div>
            <div class="cardian cardian-2">
                <h2 class="cardian__title">Suasana Pembelajaran Kondusif</h2>
            </div>
            <div class="cardian cardian-3">
                <h2 class="cardian__title">Lingkungan Sekolah Yang Nyaman</h2>
            </div>
            <div class="cardian cardian-4">
                <h2 class="cardian__title">5 (Lima Hari Belajar)</h2>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

    </div>
</div>


<!-- popular_program_area_start  -->
<div class="popular_program_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>Pengumuman Sekolah</h3>
                </div>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <img src="img/program/1.png" alt="">
                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->tanggal; ?></span>
                                    <h4><a href="<?php echo site_url('pengumuman'); ?>"><?php echo $row->pengumuman_judul; ?></a></h4>
                                    <p><?php echo limit_words($row->pengumuman_deskripsi, 10) . '...'; ?></p>
                                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn5">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>



        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="course_all_btn text-center">
                    <a href="<?php echo site_url('pengumuman'); ?>" class="boxed-btn4">Lihat Semua Pengumuman</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_program_area_end -->

<!-- recent_event_area_strat  -->
<div class="recent_event_area section__padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section_title text-center mb-70">
                    <h3 class="mb-45">Agenda Sekolah</h3>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">


                <?php foreach ($agenda->result() as $row) : ?>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span><?php echo date("d", strtotime($row->agenda_tanggal)); ?></span>
                            <p><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></p>
                        </div>
                        <div class="event_info">
                            <a href="<?php echo site_url('agenda'); ?>">
                                <h4><?php echo $row->agenda_nama; ?></h4>
                            </a>
                            <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>