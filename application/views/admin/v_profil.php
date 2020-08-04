
<div class="col-sm-12 ">
<?php

           

echo form_open_multipart('admin/profil');
?> 

<div class="col-sm-12 text center ">
    <label> Struktur Organisasi </label> <br>
    <img  src="<?= base_url('pengaturan/struktur/'.$profil->struktur_organisasi) ?>" width="70%" height="70%" > <br>
    <br>
    </div>
    <div class="form-group">
                    <label>Unggah Struktur Organisasi</label>
                    <input type="file" class="form-control" name="struktur_organisasi">
    </div>

    <br>
    <div class="form-group">
                    <label>Sejarah Singkat</label>
                    <textarea name="sejarah_singkat" class="form-control" id="" cols="30" rows="10" required> <?= $profil->sejarah_singkat ?> </textarea>
    </div>

    <div class="col-sm-6 ">

    <div class="form-group">
                    <label>Tugas</label>
                    <textarea name="tugas_lpka" class="form-control" id="" cols="30" rows="10" required> <?= $profil->tugas_lpka ?> </textarea>
 
    </div>

    </div>

    <div class="col-sm-6 ">

    <div class="form-group">
                    <label>Fungsi</label>
                    
                    <textarea name="fungsi_lpka" class="form-control" id="" cols="30" rows="10" required> <?= $profil->fungsi_lpka ?> </textarea>
                      </div>

    </div>

    <div class="col-sm-6 ">
    <div class="form-group">
                    <label>Visi</label>
                    <textarea name="visi" class="form-control" id="" cols="30" rows="10" required> <?= $profil->visi ?> </textarea>
                    </div>
    </div>

    <div class="col-sm-6 ">

    <div class="form-group">
                    <label>Misi</label>
                    <textarea name="misi" class="form-control" id="" cols="30" rows="10" required> <?= $profil->misi ?> </textarea>
    </div>
    </div>

    <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>

 
<?php echo form_close(); ?>   
</div>

