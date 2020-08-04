<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Tambah Layanan
    </div>
        <div class="panel-body">
        
            <?php

            if(isset($error_upload)) {
                echo'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                            
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');



            echo form_open_multipart('informasi/add');
            ?>

            <div class="form-group">
                    <label>Nama Layanan</label>
                    <input class="form-control" type="text" name="nama_layanan" placeholder="Nama Layanan" required>
            </div>

            
            <div class="form-group">
                    <label>Gambar Layanan</label>
                    <input type="file" class="form-control" name="foto_layanan" value="-">
            </div>

            <div class="form-group">
                    <label>Deskripsi layanan</label>
                    <textarea name="desk_layanan" id="editor" class="form-control" required> </textarea>
                    
            </div>
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
          <?php echo form_close(); ?>  
        </div>
</div>

