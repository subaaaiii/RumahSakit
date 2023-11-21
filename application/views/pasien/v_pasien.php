          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
          <?= $this->session->flashdata('msg'); ?>
          <button type="button" class="btn btn-success" style="margin : 10px"><a href="<?= base_url('pasien/insert/'); ?>" style="text-decoration:none; color:white">Tambah Data</a></button>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NAMA</th>
                      <th>JENIS KELAMIN</th>
                      <th>UMUR</th>
                      <th>TEKANAN DARAH</th>
                      <th>EFEK SAMPING</th>
                      <th>TANGGAL CHECK-IN</th>
                      <th>ID DOKTER</th>
                      <th>NO OBAT</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($pasien as $data) : ?>
                      <tr>
                        <td><?= $data->no_antrian ?></td>
                        <td><?= kapital($data->nama) ?></td>
                        <td><?= jk($data->jenis_kelamin) ?></td>
                        <td><?= $data->umur ?></td>
                        <td><?= $data->tekanan_darah ?></td>
                        <td><?= kapital($data->efek_samping) ?></td>
                        <?php date_default_timezone_set('Asia/Bangkok'); ?>
                        <td><?= date('d F Y H:i', $data->tanggal_check_in); ?></td>
                        <td><?= $data->id_dokter ?></td>
                        <td><?= $data->no_obat ?></td>
                        <td>
                          <button type="button" class="btn btn-warning"> <a href=" <?= base_url('pasien/update/' . $data->no_antrian) ?>" style="text-decoration:none; color:white"><i class="fas fa-edit"></i></a></button>
                          <button type="button" class="btn btn-danger"> <a href="<?= base_url('pasien/delete/' . $data->no_antrian) ?>" style="text-decoration:none; color:white"><i class="fas fa-trash"></i></a></button>

                        </td>
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