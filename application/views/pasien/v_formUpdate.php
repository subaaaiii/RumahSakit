<form class="cool-form" method="post" action="<?= base_url('pasien/update'); ?>">
    <?php foreach ($pasien as $ps) : ?>
        <h2 class="mb-4"><?= $title ?></h2>
        <div class="form-group">
            <label for="no_antrian">No Antrian:</label>
            <input type="text" class="form-control" id="no_antrian" name="no_antrian" value="<?= $ps->no_antrian; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $ps->nama; ?>">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-Laki" <?php if ($ps->jenis_kelamin == "Laki-Laki") echo "selected"; ?>>Laki-Laki</option>
                <option value="Perempuan" <?php if ($ps->jenis_kelamin == "Perempuan") echo "selected"; ?>>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" class="form-control" id="umur" name="umur" value="<?= $ps->umur; ?>">
        </div>
        <div class="form-group">
            <label for="tekanan_darah">Tekanan Darah:</label>
            <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" value="<?= $ps->tekanan_darah; ?>">
        </div>
        <div class="form-group">
            <label for="efek_samping">Efek Samping:</label>
            <input type="text" class="form-control" id="efek_samping" name="efek_samping" value="<?= $ps->efek_samping; ?>">
        </div>
        <div class="form-group">
            <label for="id_dokter">Dokter:</label>
            <select class="form-control" id="id_dokter" name="id_dokter">
                <?php foreach ($dokter_options as $dokter) : ?>
                    <option value="<?= $dokter['id']; ?>" <?php if ($dokter['id'] == $ps->id_dokter) echo 'selected'; ?>><?= $dokter['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="dokter">Obat:</label>
            <select class="form-control" id="no_obat" name="no_obat">
                <option value="">Pilih Obat</option>
                <?php foreach ($obat_options as $obat) : ?>
                    <option value="<?= $obat['no_seri']; ?>" <?php if ($obat['no_seri'] == $ps->no_obat) echo 'selected'; ?>><?= $obat['nama']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
    <?php endforeach; ?>
</form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->