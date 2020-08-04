<div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <a href="<?= base_url('informasi/add')?>" class="btn btn-primary btn-sm" > <i class="fa fa-plus"> </i> Tambah Layanan</a>
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
                    <th>Nama Layanan</th>
                    <th>Slug Layanan</th>
                    <th>Gambar Layanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($informasi as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->nama_layanan ?></td>
                    <td><?= $value->slug_layanan ?></td>
                    <td><img src="<?= base_url('foto_informasi/'.$value->foto_layanan)?>"  width="100px"></td>

                    <td>
                    <a href="<?= base_url('informasi/edit/' .$value->id_layanan)?>" class="btn btn-xs btn-success"> <i class=" fa fa-pencil"></i> Edit</button>
                    <a href="<?= base_url('informasi/delete/' .$value->id_layanan)?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah data ini kan dihapus...?')"> <i class=" fa fa-trash"></i> Hapus</a>


                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
            </div>
    </div>