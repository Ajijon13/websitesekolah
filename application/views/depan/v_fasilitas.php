<style>
  /* Hover CSS */
  /* img {
	filter: brightness(0) invert(1);
	max-height: 120px;
  } */

  .conta {
    width: 1080px;
    position: relative;
    display: flex;
    justify-content: space-between;
  }

  .conta .kard {
    position: relative;
  }

  .conta .kard .kard-kontent {
    width: 300px;
    height: 280px;
    transition: 0.4s;
  }

  .conta .kard .kard-kontent.kard-header {
    position: relative;
    background: #212121;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(140px);
  }

  .conta .kard:hover .kard-kontent.kard-header {
    transform: translateY(0);
  }

  .conta .kard.kard-style-1:hover .kard-kontent.kard-header {
    background: #880e4f;
  }

  .conta .kard.kard-style-2:hover .kard-kontent.kard-header {
    background: #4a148c;
  }

  .conta .kard.kard-style-3:hover .kard-kontent.kard-header {
    background: #311b92;
  }

  .conta .kard .kard-kontent.kard-header .kontent {
    opacity: 0.3;
    transition: 0.4s;
  }

  .conta .kard:hover .kard-kontent.kard-header .kontent {
    opacity: 1;
  }

  .conta .kard .kard-kontent.kard-header .kontent h3 {
    margin: 12px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 20px;
  }

  .conta .kard .kard-kontent.kard-body {
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
    transform: translateY(-140px);
  }

  .conta .kard:hover .kard-kontent.kard-body {
    transform: translateY(0);
  }

  .conta .kard .kard-kontent.kard-body .kontent p {
    margin: 0;
    padding: 0;
  }

  .conta .kard .kard-kontent.kard-body .kontent a {
    margin: 16px 0 0;
    padding: 6px;
    display: inline-block;
    text-decoration: none;
    font-weight: 900;
  }

  .conta .kard.kard-style-1 .kard-kontent.kard-body .kontent a {
    color: #880e4f;
    border: 1px solid #880e4f;
  }

  .conta .kard .kard-kontent.kard-body .kontent a:hover {
    background: #212121;
    color: #fff;
    border: 1px solid #212121;
  }

</style>

<div class="popular_program_area section__padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title text-center">
          <h3>FASILITAS SEKOLAH</h3>
          <br><br>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
        <div class="conta">
          <?php foreach ($data->result() as $row) : ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="kard kard-style-1">
                <div class="kard-kontent kard-header">
                  <div class="kontent">
                    <?php if (empty($row->foto)) : ?>
                      <img src="<?php echo base_url() . 'assets/images/blank.png'; ?>" class="img-thumbnail" alt="<?php echo $row->ket; ?>">
                    <?php else : ?>
                      <img src="<?php echo 'style/img/fasilitas/' . $row->foto; ?>">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="kard-kontent kard-body">
                  <div class="kontent">
                    <p><?php echo $row->ket; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>


    
      <div class="col-md-12 text-center">
        <?php echo $page; ?>
      </div>
    </div>


  </div>
</div>