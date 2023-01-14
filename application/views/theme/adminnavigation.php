<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-user"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Lembaga Pendidikan Pinus</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/dashboard' ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiji" aria-expanded="true" aria-controls="collapseSiji">
      <i class="fas fa-fw fa-cog"></i>
      <span>Berita</span>
    </a>
    <div id="collapseSiji" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/tulisan' ?>">List Berita</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>">Pos Berita</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/kategori' ?>">Kategori Berita</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Galeri </span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/album' ?>">Kategori Galeri</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/galeri' ?>">Foto Galeri SD</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/galerismp' ?>">Foto Galeri SMP</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Prestasi</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/prestasisd' ?>">Prestasi SD</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/prestasismp' ?>">Prestasi SMP</a>
      </div>
    </div>
  </li>


  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Ekstrakurikuler</span>
    </a>
    <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/ekstrasd' ?>">Ekstrakurikuler SD</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/ekstrasmp' ?>">Ekstrakurikuler SMP</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Data Fasilitas</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/fasilitas' ?>">Fasilitas SD</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/fasilitassmp' ?>">Fasilitas SMP</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Profil </span>
    </a>
    <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="<?php echo base_url() . 'admin/pengaturan' ?>">Profil SD</a>
        <a class="collapse-item" href="<?php echo base_url() . 'admin/pengaturansmp' ?>">Profil SMP</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/guru' ?>">
      <i class="fas fa-fw fa-address-book"></i>
      <span>Data Guru</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/banner' ?>">
      <i class="fas fa-fw fa-cog"></i>
      <span>Data Banner</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/agenda' ?>">
      <i class="fas fa-fw fa-envelope-open"></i>
      <span>Data Agenda</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/pengumuman' ?>">
      <i class="fas fa-fw fa-volume-up"></i>
      <span>Data Pengumuman</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/pengguna' ?>">
      <i class="fas fa-fw fa-users"></i>
      <span>Data User</span></a>
  </li>

  <!-- Divider -->




  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url() . 'admin/login/logout' ?>">
      <i class="fas fa-fw fa-power-off"></i>
      <span>Logout</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>