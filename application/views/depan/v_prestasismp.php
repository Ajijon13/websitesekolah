<div class="popular_program_area section__padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section_title text-center">
                    <h3>PRESTASI SMP PINUS</h3>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">


                    <div class="container2">
                        <?php foreach ($data->result() as $row) : ?>
                            <div class="card1">
                                <div class="card1-header">
                                    <img src="<?php echo base_url() . 'style/img/prestasismp/' . $row->foto; ?>" alt="rover" />
                                </div>
                                <div class="card1-body">
                                    <h4>
                                    <?php echo $row->ket; ?>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>


                </div>

                <nav><?php echo $page; ?></nav>

            </div>

        </div>


    </div>
</div>