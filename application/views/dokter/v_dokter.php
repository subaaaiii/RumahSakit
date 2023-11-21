<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>SPESIALIS</th>
                        <th>KLINIK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dokter as $data) : ?>
                        <tr>
                            <td><?= $data->id ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->spesialis ?></td>
                            <td><?= $data->klinik ?></td>
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