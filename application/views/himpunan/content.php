<div class="col-sm-9">
    <h4><small>Himpunan</small></h4>
    <hr>
    <h2>Kegiatan</h2>
    <div class="col px-md-5">
        <a href="<?php echo site_url('Home/tambah_kegiatan'); ?>">
            <button type="button" class="btn btn-primary plus">
                <span data-feather="plus"></span>
                + Tambah
            </button>
        </a>
    </div>
    <br>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Nama Kegiatan</td>
            <td>Tanggal Kegiatan</td>
            <td>Waktu Kegiatan</td>
            <td>Stakeholder</td>
            <td>Biaya</td>
            <td>LPJ</td>
            <td>Status</td>
            <td colspan="4">Action</td>
        </tr>

        <?php foreach ($himpunan as $hp) : ?>
            <tr>
                <td><?php echo $hp['id_himpunan']; ?></td>
                <td><?php echo $hp['nama']; ?></td>
                <td><?php echo $hp['tanggal']; ?></td>
                <td><?php echo $hp['waktu']; ?></td>
                <td><?php echo $hp['stakeholder']; ?></td>
                <td><?php echo $hp['biaya']; ?></td>
                <td>
                    <a href="<?php echo base_url("file/" . $hp['lpj']) ?>" class="btn"><i class="fa fa-download"></i> Download</a>
                </td>
                <td><?php echo $hp['status']; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href="<?php echo site_url('Home/detail_kegiatan') ?>/<?php echo $hp['id_himpunan']; ?>" role="button">Detail</a>
                        <a class="btn btn-primary" href="<?php echo site_url('Home/edit_kegiatan') ?>/<?php echo $hp['id_himpunan']; ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="<?php echo site_url('Home/deletekegiatan') ?>/<?php echo $hp['id_himpunan']; ?>" role="button">Delete</a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>