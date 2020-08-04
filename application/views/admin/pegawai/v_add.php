<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Tambah Data Pegawai
    </div>
        <div class="panel-body">
        
            <?php

            if(isset($error_upload)) {
                echo'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                            
            }
            echo form_open_multipart('pegawai/add');
            ?>

            <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input class="form-control" type="text" name="nama_pegawai" placeholder="Nama Pegawai">
            </div>
            <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" type="text" name="nip" placeholder="NIP" required>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <label>Jabatan</label>
                    <select name="id_jabatan" class="form-control">
                    <option value="-">--Pilih Jabatan--</option>
                    <?php foreach($jabatan as $key =>$value) { ?>
                    <option value="<?= $value->id_jabatan ?>"><?= $value->nama_jabatan?></option>
                    <?php } ?>
                    </select>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                    <label>Golongan</label>
                    <select name="id_golongan" class="form-control">
                    <option value="-">--Pilih Golongan--</option>
                    <?php foreach($golongan as $key =>$value) { ?>
                    <option value="<?= $value->id_golongan ?>"><?= $value->nama_golongan?></option>
                    <?php } ?>
                    </select>
            </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control"  type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                </div>
            </div>

            <div class="form-group">
                    <label>Pendidikan Akhir</label>
                    <input class="form-control" type="text" name="pendidikan_akhir" placeholder="Pendidikan Akhir" required>
            </div>
            <div class="form-group">
                    <label>Foto Pegawai</label>
                    <input type="file" class="form-control" name="foto_pegawai" required>
            </div>
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
          <?php echo form_close(); ?>  
        </div>
</div>

