<div class="col-lg-12">
        <div class="panel panel-primary">
             <div class="panel-heading">
             <p> Data Laporan</p>
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
                    <th>E-mail</th>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach ($kotakpengaduan as $key => $value) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->tanggal ?></td>
                    <td><?= $value->desk_pengaduan ?></td>

                    <td>
                     <a href="<?= base_url('pengaduan/delete_kotakpengaduan/' .$value->id_pengaduan)?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah data ini kan dihapus...?')"> <i class=" fa fa-trash"></i> Hapus</a>


                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
            </div>
    </div>