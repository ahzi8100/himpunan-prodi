<div class="col-sm-9">
    <h4>Tambah</h4>
    <hr>
    <br>
    <form method="POST" action="<?php echo site_url('Home/proses_tambah_kegiatan'); ?>">
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="id" class="form-control" id="id" name="id">
        </div>
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="nama_kegiatan" class="form-control" id="nama_kegiatan" name="nama_kegiatan">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <br>
            <input type="date" name="tanggal">
        </div>
        <br>
        <div class="mb-3">
            <label for="waktu" class="form-label">Waktu</label>
            <br>
            <input type="time" name="waktu">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Stakeholder</label>
            <input type="stakeholder" class="form-control" name="stakeholder">
        </div>
        <br>
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" name="biaya">
        </div>
        <br>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile02">LPJ</label>
            <input type="file" class="form-control" id="inputGroupFile02" name="lpj">
        </div>
        <br>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <input type="status" class="form-control" name="status">
        </div>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Cancel</button>
        </div>
    </form>
</div>
</div>
</div>