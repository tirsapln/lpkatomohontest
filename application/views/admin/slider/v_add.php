<div class="col-lg-12">
<div class="panel panel-primary">
    <div class="panel-heading">
    Tambah Slider Foto
    </div>
        <div class="panel-body">
        
            <?php

            if(isset($error_upload)) {
                echo'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
                            
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');



            echo form_open_multipart('slider/add');
            ?>

            <div class="form-group">
                    <label>Keterangan Foto</label>
                    <input class="form-control" type="text" name="nama_foto" placeholder="Keterangan Foto" required>
            </div>

            
            <div class="form-group">
                    <label>Pilih Foto</label> <br>
                    <p> Untuk hasil slide foto yang maksimal gunakan Foto Ukuran : 1920 x 850 </p>

                    <input type="file" class="form-control" name="foto_slider" required>
            </div>

            
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
          <?php echo form_close(); ?>  
        </div>
</div>

