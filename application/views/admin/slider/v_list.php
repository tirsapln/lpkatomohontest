<div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <a href="<?= base_url('slider/add')?>" class="btn btn-primary btn-sm" > <i class="fa fa-plus"> </i> Tambah Foto Slider</a>
            </div>
            
            <div class="panel-body">
            <?php

                    if($this->session->flashdata('pesan'))
                        {
                            echo'<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('pesan');
                            echo'</div>';
                        }

            ?>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan Foto</th>
                    
                    <th>Slider Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($slider as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->nama_foto ?></td>
                    
                    <td><img src="<?= base_url('pengaturan/'.$value->foto_slider)?>"  width="300px" height="270px"></td>

                    <td>
                    
                    <a href="<?= base_url('slider/delete/' .$value->id_slider)?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah data ini kan dihapus...?')"> <i class=" fa fa-trash"></i> Hapus</a>


                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
            </div>
    </div>