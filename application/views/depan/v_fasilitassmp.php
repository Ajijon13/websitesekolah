<style>
  :root {
    --background-dark: #2d3548;
    --text-light: rgba(255, 255, 255, 0.6);
    --text-lighter: rgba(255, 255, 255, 0.9);
    --spacing-s: 8px;
    --spacing-m: 16px;
    --spacing-l: 24px;
    --spacing-xl: 32px;
    --spacing-xxl: 64px;
    --width-container: 1200px;
  }


  .hero-section {
    align-items: flex-start;
    display: flex;
    min-height: 100%;
    justify-content: center;
    padding: var(--spacing-xxl) var(--spacing-l);
  }

  .cardil-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-column-gap: var(--spacing-l);
    grid-row-gap: var(--spacing-l);
    max-width: var(--width-container);
    width: 100%;
  }

  @media(min-width: 540px) {
    .cardil-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media(min-width: 960px) {
    .cardil-grid {
      grid-template-columns: repeat(4, 1fr);
    }
  }

  .cardil {
    list-style: none;
    position: relative;
  }

  .cardil:before {
    content: '';
    display: block;
    padding-bottom: 150%;
    width: 100%;
  }

  .cardil__background {
    background-size: cover;
    background-position: center;
    border-radius: var(--spacing-l);
    bottom: 0;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform-origin: center;
    trsnsform: scale(1) translateZ(0);
    transition:
      filter 200ms linear,
      transform 200ms linear;
  }

  .cardil:hover .cardil__background {
    transform: scale(1.05) translateZ(0);
  }

  .cardil-grid:hover>.cardil:not(:hover) .cardil__background {
    filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
  }

  .cardil__content {
    left: 0;
    padding: var(--spacing-l);
    position: absolute;
    top: 0;
  }

  .cardil__category {
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom: var(--spacing-s);
    text-transform: uppercase;
  }

  .cardil__heading {
    color: var(--text-lighter);
    font-size: 1.9rem;
    text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
    line-height: 1.4;
    word-spacing: 100vw;
  }
</style>
<div class="popular_program_area section__padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title text-center">
          <h3>FASILITAS SMP PINUS</h3>
          <br><br>
        </div>
      </div>
    </div>

    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

        <div class="row">



          <div class="cardil-grid">
            <?php foreach ($data->result() as $row) : ?>
              <a class="cardil" href="#">
                <div class="cardil__background" style="background-image: url('<?php echo base_url() . 'style/img/fasilitassmp/' . $row->foto; ?>')">
                </div>
                <div class="cardil__content">
                  <h3 class="cardil__heading"><?php echo $row->ket; ?></h3>
                </div>
              </a>
              <?php endforeach; ?>
          </div>
        




        </div>

        <nav><?php echo $page; ?></nav>


      </div>



    </div>


  </div>
</div>