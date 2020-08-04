<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Edit Berita
    </div>
        <div class="panel-body">
        
            <?php

            if(isset($error_upload)) {
                echo'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                            
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');



            echo form_open_multipart('berita/edit/'.$berita->id_berita);
            ?>

            <div class="form-group">
                    <label>Judul Berita</label>
                    <input class="form-control" value="<?= $berita->judul_berita ?>" type="text" name="judul_berita" placeholder="Judul Berita" required>
            </div>

            <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea name="isi_berita"  id="editor" class="form-control" required> <?= $berita->isi_berita ?> </textarea>
                    
            </div>

            <div class="form-group">
                    
                    <img  src="<?= base_url('foto_berita/'.$berita->foto_berita) ?>" width="150px">
                    
            </div>

            <div class="form-group">
                    <label>Gambar Berita</label>
                    <input type="file" class="form-control" name="foto_berita">
            </div>
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
          <?php echo form_close(); ?>  
        </div>
</div>

