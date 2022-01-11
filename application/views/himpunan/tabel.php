</div>
    <div class="col-sm-9">
                <div class="card mt-4">
                    <div class="row">
                        <div class="col card-header text-right">
                            <a href="<?php echo site_url('Home/tambah_kegiatan'); ?>">
                                <button type="button" class="btn btn-primary plus">
                                    <span data-feather="plus"></span>
                                    Tambah Kegiatan
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <td>ID</td>
                        <td>Nama Himpunan</td>
                        <td>Tanggal Kegiatan</td>
                        <td>Waktu Kegiatan</td>
                        <td>Stakeholder</td>
                        <td>Biaya</td>
                        <td>LPJ</td>
                        <td>Status</td>
                        <td colspan="2">Settings</td>
                    </tr>

                    <?php foreach ($himpunan as $hp) : ?>
                        <tr>
                            <td><?php echo $hp['id_himpunan']; ?></td>
                            <td><?php echo $hp['nama']; ?></td>
                            <td><?php echo $hp['tanggal']; ?></td>
                            <td><?php echo $hp['waktu']; ?></td>
                            <td><?php echo $hp['stakeholder']; ?></td>
                            <td><?php echo $hp['biaya']; ?></td>
                            <td><?php echo $hp['lpj']; ?></td>
                            <td><?php echo $hp['status']; ?></td>
                            <td>
                                <a href="<?php echo site_url('Home/edit_kegiatan')?>/<?php echo $hp['id_himpunan']; ?>" class="badge badge-primary">Edit</a>
                                <a href="<?php echo site_url('Home/deletekegiatan')?>/<?php echo $hp['id_himpunan']; ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

</div>
</body>

</html>