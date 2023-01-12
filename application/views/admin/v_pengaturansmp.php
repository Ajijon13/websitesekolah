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
                                <th>visi</th>
                                <th>misi</th>
                                <th>sejarah</th>
                                <th style="text-align:right;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data->result_array() as $i) :
                                $no++;
                                $id_pengaturansmp = $i['id_pengaturansmp'];
                                $visi = $i['visi'];
                                $misi = $i['misi'];
                                $sejarah = $i['sejarah'];
                           
                            ?>
                                <tr>
                                    <td><?php echo $visi; ?></td>
                                    <td><?php echo $misi; ?></td>
                                    <td><?php echo $sejarah; ?></td>
                                    <td style="text-align:right;">

                                        <a href="#" class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#ModalEdit<?php echo $id_pengaturansmp; ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text">Edit</span>
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

    
    <!--Modal Edit Album-->
    <?php foreach ($data->result_array() as $i) :
        $id_pengaturansmp = $i['id_pengaturansmp'];
        $visi = $i['visi'];
        $misi = $i['misi'];
        $sejarah = $i['sejarah'];
    ?>


        <div class="modal fade" id="ModalEdit<?php echo $id_pengaturansmp; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Profil</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengaturansmp/update_pengaturansmp' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <input type="hidden" name="kode" value="<?php echo $id_pengaturansmp; ?>" />
                            
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Visi</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="xvisi" id="inputUserName" placeholder="keterangan" required><?php echo $visi; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Misi</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="xmisi" id="inputUserName" placeholder="keterangan" required><?php echo $misi; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Sejarah</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="xsejarah" id="inputUserName" placeholder="keterangan" required><?php echo $sejarah; ?></textarea>
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
    <?php endforeach; ?>
    <!--Modal Edit Album-->

    