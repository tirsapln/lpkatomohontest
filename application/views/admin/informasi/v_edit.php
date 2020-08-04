<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Edit Layanan
    </div>
        <div class="panel-body">
        
            <?php

            if(isset($error_upload)) {
                echo'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                            
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');



            echo form_open_multipart('informasi/edit/'.$informasi->id_layanan);
            ?>

            <div class="form-group">
                    <label>Nama Layanan</label>
                    <input class="form-control" value="<?= $informasi->nama_layanan ?>" type="text" name="nama_layanan" placeholder="Nama Layanan" required>
            </div>

            <div class="form-group">
                    <label>Deskripsi Layanan</label>
                    <textarea name="desk_layanan"  id="editor" class="form-control" required> <?= $informasi->desk_layanan ?> </textarea>
                    
            </div>

            <div class="form-group">
                    
                    <img  src="<?= base_url('foto_informasi/'.$informasi->foto_layanan) ?>" width="150px">
                    
            </div>

            <div class="form-group">
                    <label>Gambar Layanan</label>
                    <input type="file" class="form-control" name="foto_layanan">
            </div>
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
          <?php echo form_close(); ?>  
        </div>
</div>

