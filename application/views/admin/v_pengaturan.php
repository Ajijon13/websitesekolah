<div id="content">


    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>




    </nav>

    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><?php echo isset($breadcrumb) ? $breadcrumb : ''; ?></h6>
            </div>
            <div class="card-body">

                <br>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Sejarah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data->result_array() as $i) :
                                $no++;
                                $id_pengaturan = $i['id_pengaturan'];
                                $visi = $i['visi'];
                                $misi = $i['misi'];
                                $sejarah = $i['sejarah'];
                            ?>
                                <tr>
                                    <td><?php echo $id_pengaturan; ?> </td>
                                    <td><?php echo $visi; ?></td>
                                    <td><?php echo $misi; ?></td>
                                    <td><?php echo $sejarah; ?></td>
                                    <td>

                                        <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id_pengaturan; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>

                                        <a href="#" class="btn btn-danger btn-icon-split" data-toggle="modal" data-target="#ModalHapus<?php echo $id_pengaturan; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Hapus</span>
                                        </a>



                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Profil</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/simpan_pengaturan' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Visi</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="xvisi" placeholder="Isi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Misi</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="xmisi" placeholder="Isi" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Sejarah</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="3" name="xsejarah" placeholder="isi" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php foreach ($data->result_array() as $i) :
        $id_pengaturan = $i['id_pengaturan'];
        $visi = $i['visi'];
        $misi = $i['misi'];
        $sejarah = $i['sejarah'];
    ?>
        <!--Modal Edit -->
        <div class="modal fade" id="ModalEdit<?php echo $id_pengaturan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Profil</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/update_pengaturan' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Visi</label>
                                <div class="col-sm-12">
                                    <input type="hidden" name="kode" value="<?php echo $id_pengaturan; ?>" />
                                    <textarea class="form-control" rows="3" name="xvisi" placeholder="Deskripsi ..." required><?php echo $visi; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Misi</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="3" name="xmisi" placeholder="Deskripsi ..." required><?php echo $misi; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Sejarah</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" rows="6" name="xsejarah" placeholder="Deskripsi ..." required><?php echo $sejarah; ?></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($data->result_array() as $i) :
        $id_pengaturan = $i['id_pengaturan'];
        $visi = $i['visi'];
        $misi = $i['misi'];
        $sejarah = $i['sejarah'];
    ?>
        <!--Modal Hapus -->
        <div class="modal fade" id="ModalHapus<?php echo $id_pengaturan; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Profil</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturan/hapus_pengaturan' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id_pengaturan; ?>" />
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $visi; ?></b> ?</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>