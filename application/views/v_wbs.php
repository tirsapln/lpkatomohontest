<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Whistle Blowing System</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

    <div class="contact">
		
		

		<div class="contact_info_container">
			<div class="container">
				<div class="row">
					
				<div class="col-lg-12 text-center"> 
				<h2>Selamat Datang di Whistle Blowing System</h2><br>
				</div>
                <div class="col-lg-12"> 
                    <p>    Whistle Blowing System (WBS) merupakan layanan yang disediakan oleh Lembaga Pembinaan
                    Khusus Anak Kelas II Tomohon, untuk anda yang memiliki informasi dan ingin melaporkan suatu 
                    perbuatan berindikasi pelanggaran yang terjadi di lingkungan Lembaga Pembinaan Khusus Anak Kelas II Tomohon  </p>
                    <br>
                    <p>     Anda tidak perlu khawatir terungkapnya identitas diri anda karena Lembaga Pembinaan Khusus Anak Kelas II Tomohon akan
                    <b>MERAHASIAKAN IDENTITAS DIRI ANDA</b> sebagai whistleblower. Lembaga Pembinaan Khusus Anak Kelas II Tomohon
                    menghargai informasi yang anda laporkan.</p>



                  <br> 

                  <div class="panel-body">
        
            <?php

           
            echo form_open_multipart('home/wbs_add');
            ?>

            <div class="form-group">
                    <label>Nama (wajib)</label>
                    <input class="form-control" type="text" name="nama" placeholder="" required>
            </div>
            <div class="form-group">
                    <label>E-mail (wajib)</label>
                    <input class="form-control" type="text" name="email" placeholder="" required>
            </div>
            <div class="form-group">
                    <label>Isi Laporan (wajib)</label>
                    <textarea name="laporan_wbs" class="form-control" id="" cols="30" rows="10" required> </textarea>
            </div>
            
            
            <div class="form-group">
                
                <button type="submit" class="btn btn-primary">Kirim</button>
                
            </div>
          <?php echo form_close(); ?>  
        </div>  
                </div> 
                
                

                </div>
					
				</div>
			</div>
		</div>
	</div>