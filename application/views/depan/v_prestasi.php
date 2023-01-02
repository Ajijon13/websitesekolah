<div class="popular_program_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>PRESTASI SEKOLAH</h3>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">

                    <?php foreach ($data->result() as $row) : ?>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="single__program">
                                <div class="program_thumb">
                                    <?php if (empty($row->foto)) : ?>
                                        <img src="<?php echo base_url() . 'assets/images/blank.png'; ?>" class="img-thumbnail" alt="<?php echo $row->ket; ?>">
                                    <?php else : ?>
                                        <img src="<?php echo base_url() . 'style/img/prestasi/' . $row->foto; ?>" class="img-thumbnail" alt="<?php echo $row->ket; ?>">
                                    <?php endif; ?>

                                </div>
                                <div class="program__content">
                                    <span><?php echo $row->ket; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>

                <nav><?php echo $page; ?></nav>


            </div>



        </div>


    </div>
</div>