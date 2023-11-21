<!-- Your form here -->
<form class="cool-form" method="post" action="<?= base_url('pasien/insert'); ?>">

    <h2 class="mb-4"><?= $title ?></h2>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="umur">Umur:</label>
        <input type="number" class="form-control" id="umur" name="umur" placeholder="Masukkan Umur">
    </div>
    <div class="form-group">
        <label for="tekanan_darah">Tekanan Darah:</label>
        <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="Masukkan Tekanan Darah">
    </div>
    <div class="form-group">
        <label for="efek_samping">Efek Samping:</label>
        <input type="text" class="form-control" id="efek_samping" name="efek_samping" placeholder="Masukkan Efek Samping">
    </div>
    <div class="form-group">
        <label for="dokter">Dokter:</label>
        <select class="form-control" id="id_dokter" name="id_dokter">
            <option value="">Pilih Dokter</option>
            <?php foreach ($dokter_options as $dokter) : ?>
                <option value="<?= $dokter['id']; ?>">
                    <?= $dokter['nama']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="dokter">Obat:</label>
        <select class="form-control" id="no_obat" name="no_obat">
            <option value="">Pilih Obat</option>
            <?php foreach ($obat_options as $obat) : ?>
                <option value="<?= $obat['no_seri']; ?>"><?= $obat['nama']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>
<!-- End of your form -->
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->