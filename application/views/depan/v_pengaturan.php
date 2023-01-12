<div class="event_details_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php foreach ($data->result() as $row) : ?>
                    <div class="single_event d-flex align-items-center">
                        <div class="thumb">
                            <img src="<?php echo base_url() . 'style/img/pengaturan/' . $row->foto; ?>" alt="kepala sekolah">
                            <div class="date text-center">
                                <!-- <h4>02</h4>
                                <span>Mei, 2020</span> -->
                            </div>
                        </div>
                        <div class="event_details_info">
                            <div class="event_info">
                                <a href="#">
                                    <h4>SAMBUTAN KEPALA SEKOLAH</h4>
                                </a>
                                <!-- <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21 Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p> -->
                            </div>

                            <p><?php echo $row->sambutan; ?> </p>



                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Profile SD Pilar Nusantara</h2>
                </div>
            </div>
        </div>
        <div class="row feature_row">
            <!-- Feature Content -->
            <div class="col-lg-6 feature_col">
                <div class="feature_content">
                    <!-- Accordions -->
                    <?php foreach ($data->result() as $row) : ?>
                        <nav class="accordion arrows">
                            <input type="radio" name="accordion" id="cb1" />

                            <section class="box">
                                <label class="box-title" for="cb1">Visi</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->visi; ?></div>
                            </section>

                            <input type="radio" name="accordion" id="cb2" />
                            <section class="box">
                                <label class="box-title" for="cb2">Misi</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->misi; ?></div>
                            </section>
                            <input type="radio" name="accordion" id="cb3" />
                            <section class="box">
                                <label class="box-title" for="cb3">Sejarah</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->sejarah; ?></div>
                            </section>

                            <input type="radio" name="accordion" id="acc-close" />

                        </nav>
                    <?php endforeach; ?>
                    <!-- Accordions End -->
                </div>
            </div>
        </div>

    </div>
    <br>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Profile SMP Pilar Nusantara</h2>
                </div>
            </div>
        </div>
        <div class="row feature_row">
            <!-- Feature Content -->
            <div class="col-lg-6 feature_col">
          
                <div class="feature_content">
                    <!-- Accordions -->
                    <?php foreach ($pengaturansmp->result() as $row) : ?>
                        <nav class="accordion arrows">
                            <input type="radio" name="accordion" id="cb4" />

                            <section class="box">
                                <label class="box-title" for="cb4">Visi</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->visi; ?></div>
                            </section>

                            <input type="radio" name="accordion" id="cb5" />
                            <section class="box">
                                <label class="box-title" for="cb5">Misi</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->misi; ?></div>
                            </section>
                            <input type="radio" name="accordion" id="cb6" />
                            <section class="box">
                                <label class="box-title" for="cb6">Sejarah</label>
                                <label class="box-close" for="acc-close"></label>
                                <div class="box-content"><?php echo $row->sejarah; ?></div>
                            </section>

                            <input type="radio" name="accordion" id="acc-close" />

                        </nav>
                        <?php endforeach; ?>
                    <!-- Accordions End -->
                </div>
             
            </div>
        </div>
        <br>
    <br>
    <br>
    <br><br>
    <br><br>
    <br>
    </div>
</div>