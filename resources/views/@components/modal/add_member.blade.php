<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="add_member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
	 	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-user-plus"></i> Tambah Anggota</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 		<span aria-hidden="true">&times;</span>
		  		</button>
			</div>
<<<<<<< HEAD
			<form role="form" action="{{ route('upload.member') }}" method="post" enctype="multipart/form-data">
				@csrf
=======
			<form role="form">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
				<div class="modal-body">
			 		<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Kode Anggota</label>
				  		<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="kd" type="text" value="{{$kode}}" readonly>
=======
							<input class="form-control" type="text" value="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">NIK</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="nik" type="text" value="">
=======
							<input class="form-control" type="text" value="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Nama</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="nama" type="text" value="">
=======
							<input class="form-control" type="text" value="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Jenis Kelamin</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<select id="user_time_zone" name="jk" class="form-control" size="0">
=======
							<select id="user_time_zone" class="form-control" size="0">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
								<option value="">--Pilih--</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Peempuan">Perempuan</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Pekerjaan</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="pk" type="text" value="" placeholder="">
=======
							<input class="form-control" type="text" value="" placeholder="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Alamat</label>
                        <div class="col-lg-9">
<<<<<<< HEAD
                        	<input class="form-control" name="alamat" type="text" value="" placeholder="Masukkan Alamat">
=======
                        	<input class="form-control" type="text" value="" placeholder="Masukkan Alamat">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
                        </div>
                    </div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label"></label>
						<div class="col-lg-6">
<<<<<<< HEAD
							<input class="form-control" name="kabko" type="text" value="" placeholder="Kab/Kota">
						</div>
						<div class="col-lg-3">
							<input class="form-control" name="pos" type="text" value="" placeholder="Kode Pos">
=======
							<input class="form-control" type="text" value="" placeholder="Kab/Kota">
						</div>
						<div class="col-lg-3">
							<input class="form-control" type="text" value="" placeholder="Kode Pos">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Email</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="email" type="email" value="">
=======
							<input class="form-control" type="email" value="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">No. Telp</label>
						<div class="col-lg-9">
<<<<<<< HEAD
							<input class="form-control" name="telp" type="text" value="">
=======
							<input class="form-control" type="text" value="">
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-3 col-form-label form-control-label">Upload Photo</label>
						<div class="col-lg-9">
							<div class="custom-file">
<<<<<<< HEAD
  								<input type="file" name="image" class="custom-file-input" id="dir_img" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
  								<label class="d-inline-block custom-file-label" for="dir_img">Masukkan Foto</label>
=======
  								<input type="file" class="custom-file-input" id="dir_img" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
  								<label class="custom-file-label" for="dir_img">Masukkan Foto</label>
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
		  			<button type="reset" class="btn btn-secondary">Reset</button>
<<<<<<< HEAD
		  			<input type="submit" class="btn btn-primary" value="Simpan">
=======
		  			<button type="button" class="btn btn-primary">Simpan</button>
>>>>>>> a7d788509d1d7bb72156fff90a13d323c79cfacd
				</div>
			</form>
	 	</div>
  	</div>
</div>