<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.Seri</th>
                        <th>NAMA</th>
                        <th>BENTUK</th>
                        <th>TANGGAL KADALUARSA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($obat as $data) : ?>
                        <tr>
                            <td><?= $data->no_seri ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->bentuk ?></td>
                            <td><?= $data->tanggal_kadaluarsa ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->