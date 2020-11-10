<div class="container mt-3">

    <div class="row">
                 <div class="col-lg-6">
                   <?php Flasher::flash() ?>

                 </div>
               </div>
               
    <div class="row">
        <div class="col-lg-6">
            <div>

            <h3>Daftar Anggota <button type="button" class="btn btn-primary tombolTambahData float-right"  data-toggle="modal" data-target="#formModal">
  Tambah Anggota
  </button></h3>
           </div>
           <br>
           <form action="<?= BASEURL;?>/mahasiswa/cari" method="post">
             <div class="input-group ">
        <input type="text" class="form-control" placeholder="Cari Nama..." name="keyword" id="keyword" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
    </div>
    </div>
           </form>
           <br>

            <ul class="list-group" >
                 <?php foreach( $data['mhs'] as $mhs ) : ?>
                    <li class="list-group-item ">
        <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">Hapus</a>

              <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right tampilModalUbah"  data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>" >Ubah</a>

            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right mr-1">Detail</a>
        </li>
                 <?php endforeach ?>
            </ul>
          
        </div>
    </div>
    <br>
    
</div>
<!--modal-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Anggota Kelompok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
			<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
			<input type="hidden" name="id" id="id">
					<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama">
		</div>
        
        <div class="form-group">
			<label for="jurusan">NIS</label>
			<input type="nis" class="form-control" id="nis" name="nis">
		</div>

		<div class="form-group">
			<label for="umur">Umur</label>
			<input type="number" class="form-control" id="umur" name="umur">
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>
		
        <div class="form-group">
			<label for="jurusan">jurusan</label>
			<select class="form-control" id="jurusan" name="jurusan">
            <option value="RPL">RPL</option>
            <option value="BDP">BDP</option>
            <option value="MMD">MMD</option>
            <option value="OTKP">OTKP</option>
            <option value="TKJ">TKJ</option>
            <option value="HOTEL">HOTEL</option>
            </select>
		</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Konfirmasi</button>
		</form>
      </div>
    </div>
  </div>
</div>