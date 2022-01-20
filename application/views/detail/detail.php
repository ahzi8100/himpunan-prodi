<div class="col-sm-9">
    <h4>Detail</h4>

    <hr>
    <br>
    <form>
        <input type="hidden" name="id_himpunan" value="<?php echo $himpunan['id_himpunan'] ?>" href="">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="id" class="form-control" id="id" name="id_himpunan" value="<?php echo $himpunan['id_himpunan'];  ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="<?php echo $himpunan['nama'];  ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <br>
            <input type="" name="tanggal" value="<?php echo $himpunan['tanggal'];  ?>" readonly>
        </div>
        <br>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <br>
            <input type="" name="waktu" value="<?php echo $himpunan['waktu'];  ?>" readonly>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Stakeholder</label>
            <input type="stakeholder" class="form-control" id="stakeholder" name="stakeholder" value="<?php echo $himpunan['stakeholder'];  ?>" readonly>
        </div>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="biaya" value="<?php echo $himpunan['biaya'];  ?>" readonly>
        </div>
        <br>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">LPJ</label>
            <!-- <input type="" class="form-control" id="inputGroupFile02" name="lpj" value="<?php echo $himpunan['lpj'];  ?>" readonly> -->
            <br>
            <a href="<?php echo base_url('file/' . $himpunan['lpj']) ?>"><img src="<?php echo base_url('file/' . $himpunan['lpj']) ?>" class="img-fluid" width="200" alt="gambar"></a>
            <br>
            <a download href="<?php echo base_url("file/" . $himpunan['lpj']) ?>" class="btn"><i class="fa fa-download"></i> Download</a>
        </div>
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <input type="status" class="form-control" id="status" name="status" value="<?php echo $himpunan['status'];  ?>" readonly>
        </div>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href="<?php echo site_url('Home/edit_kegiatan') ?>/<?php echo $himpunan['id_himpunan']; ?>" role="button">Edit</a>
            <a class="btn btn-danger" href="<?php echo site_url('Home/index') ?>/<?php echo $himpunan['id_himpunan']; ?>" role="button">Kembali</a>
        </div>

    </form>
</div>
<br>