<div class="col-sm-9">
    <h4>Edit</h4>

    <hr>
    <br>
    <form method="POST" action="<?php echo site_url('Home/proseseditkegiatan'); ?>">
        <input type="hidden" name="id_himpunan" value="<?php echo $himpunan['id_himpunan'] ?>" href="">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="id" class="form-control" id="id" name="id_himpunan" value="<?php echo $himpunan['id_himpunan'];  ?>">
        </div>
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="<?php echo $himpunan['nama'];  ?>">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <br>
            <input type="date" name="tanggal" value="<?php echo $himpunan['tanggal'];  ?>">
        </div>
        <br>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <br>
            <input type="time" name="waktu" value="<?php echo $himpunan['waktu'];  ?>">
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stakeholder</label>
            <input type="stakeholder" class="form-control" id="stakeholder" name="stakeholder" value="<?php echo $himpunan['stakeholder'];  ?>">
        </div>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="biaya" value="<?php echo $himpunan['biaya'];  ?>">
        </div>
        <br>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">LPJ</label>
            <input type="file" class="form-control" id="inputGroupFile02" name="lpj" value="<?php echo $himpunan['lpj'];  ?>">
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <input type="status" class="form-control" id="status" name="status" value="<?php echo $himpunan['status'];  ?>">
        </div>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="cancel" class="btn btn-danger">Batal</button>
        </div>

    </form>
</div>
<br>