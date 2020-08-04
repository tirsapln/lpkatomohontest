<div class="col-lg-12">
        <div class="panel panel-primary">
             <div class="panel-heading">
            <a href="<?= base_url('pegawai/add')?>" class="btn btn-primary btn-sm" > <i class="fa fa-plus"> </i> Tambah Data Pegawai</a>
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
                    <th>Nama Lengkap</th>
                    <th>NIP</th>
                    <th>Pangkat/Golongan</th>
                    <th>Jabatan</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan Akhir</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($pegawai as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->nama_pegawai ?></td>
                    <td><?= $value->nip ?></td>
                    <td><?= $value->nama_golongan ?></td>
                    <td><?= $value->nama_jabatan ?></td>
                    <td><?= $value->tempat_lahir ?></td>
                    <td><?= $value->tanggal_lahir ?></td>
                    <td><?= $value->pendidikan_akhir?></td>
                    <td><img src="<?= base_url('foto_pegawai/'.$value->foto_pegawai)?>"  width="100px"></td>

                    <td>
                    <a href="<?= base_url('pegawai/edit/' .$value->id_pegawai)?>" class="btn btn-xs btn-success"> <i class=" fa fa-pencil"></i> Edit</a>
                    <a href="<?= base_url('pegawai/delete/' .$value->id_pegawai)?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah data ini kan dihapus...?')"> <i class=" fa fa-trash"></i> Hapus</a>


                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
            </div>
    </div>
</div>