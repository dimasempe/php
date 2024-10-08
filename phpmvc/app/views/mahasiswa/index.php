<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash();?>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
         Tambah Data Mahasiswa
         </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
         <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3 mt-3">
               <input type="text" class="form-control" placeholder="Cari nama mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
               <button class="btn btn-primary" type="submit" id="tombolCari" >Button</button>
            </div>
         </form>
      </div>
    </div>

   <div class="row mb-3">
      <div class="col-6">
         <!-- Button trigger modal -->
         
         <h3>Daftar Mahasiswa</h3>
         <ul class="list-group">
            <?php foreach($data['mhs'] as $mhs): ?>
            <li class="list-group-item">
               <?= $mhs['nama'];?>
               <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?=$mhs['id']; ?>" class="badge text-bg-danger float-end ms-1" onclick="return confirm('ciyus mau apus?');">hapus</a>
               <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?=$mhs['id']; ?>" class="badge text-bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
               <a href="<?= BASEURL; ?>/mahasiswa/detail/<?=$mhs['id']; ?>" class="badge text-bg-primary float-end ms-1">detail</a>
            </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type='hidden' name='id' id='id'>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name='nama' required>
               </div>
               <div class="mb-3">
                  <label for="npm" class="form-label">NPM</label>
                  <input type="number" class="form-control" id="npm" placeholder="Masukkan NPM" name='npm' required>
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Masukkan email" name='email' required>
               </div>
               <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" id='jurusan' name='jurusan' required>
                     <option value="" disabled selected>Pilih Jurusan</option>
                        <option value='Informatika'>Informatika</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                    </select>
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
         <button type="submit" class="btn btn-primary">Tambah Data</button>
         </form>
         </div>
      </div>
   </div>
</div>