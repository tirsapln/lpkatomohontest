<div class="col-sm-12 "> 

<?php

           

            echo form_open_multipart('admin/kalapas');
            ?>
<div class="col-sm-6 "> 
    <label> Kepala LPKA </label> <br>
    <img  src="<?= base_url('pengaturan/'.$pengaturan->foto_kalapas) ?>" width="150px" height="200px"> <br>

    <br>
    <div class="form-group">
                    <label>Pilih Kepala LPKA</label>
                    <input type="file" class="form-control" name="foto_kalapas">
    </div>
    
</div>

<div class="col-sm-6 "> 
    
            <div class="form-group">
                    <label>Nama Kepala LPKA</label>
                    <input class="form-control" value="<?= $pengaturan->nama_kalapas?>" type="text" name="nama_kalapas" placeholder="Nama Pegawai" required>
            </div>

            <div class="form-group">
                    <label>NIP</label>
                    <input class="form-control" value="<?= $pengaturan->nip_kalapas?>" type="text" name="nip_kalapas" placeholder="NIP" required>
            </div>

            <div class="form-group">
                    <label>Pangkat/Golongan</label>
                    <input class="form-control" value="<?= $pengaturan->pangkat?>" type="text" name="pangkat" placeholder="Pangkat" required>
            </div>

            <div class="form-group">
                    <label>Tempat & Tanggal Lahir</label>
                    <input class="form-control" value="<?= $pengaturan->ttl_kalapas?>" type="text" name="ttl_kalapas" placeholder="TTL" required>
            </div>

            <div class="form-group">
                    <label>Agama</label>
                    <input class="form-control" value="<?= $pengaturan->agama?>" type="text" name="agama" placeholder="TTL" required>
            </div>

            
</div>

<div class="col-sm-12 "> 
            <div class="form-group">
                    <label>Pendidikan</label>
                    <textarea name="pendidikan"   id="" class="form-control " required> <?= $pengaturan->pendidikan ?> </textarea>
                    
            </div>

            <div class="form-group">
                    <label>Riwayat Pekerjaan</label>
                    <textarea name="riwayat_pekerjaan"   id="" class="form-control " required> <?= $pengaturan->riwayat_pekerjaan ?> </textarea>
                    
            </div>

            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-success" >Reset</button>
            </div>
</div>

<?php echo form_close(); ?>  
</div>