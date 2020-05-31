<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Dosen
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dosen['Nama']; ?></h5>
                    <p class="card-text">
                        <label for=""><b>Kode: </b></label>
                        <?php echo $dosen['KODE']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>NIP: </b></label>
                        <?php echo $dosen['NIP']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>NIDN: </b></label>
                        <?php echo $dosen['NIDN']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Status: </b></label>
                        <?php echo $dosen['Status']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Matkul: </b></label>
                        <?php echo $dosen['Matkul']; ?>
                    </p>
                    <p class="card-text">
                        <label for=""><b>No Telpon: </b></label>
                        <?php echo $dosen['noTelp']; ?>
                    </p>
                    <p class="card-text">
                        <a href="<?= base_url() ?>dosen/editdosen/<?php echo $dosen['KODE']; ?>" class="btn btn-primary">Edit Data Dosen</a>
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalDPA">
                            Info DPA
                        </button>
                    </p>
                    <p class="card-text">
                        <label for=""><b>Homebase </b></label><br>
                        <label for="">Homebase: </label>
                        <?php echo $homebase['dosen_Homebase']; ?><br>
                        <label for="">Akreditasi D4: </label>
                        <?php echo $homebase['dosen_HomebaseAkreD4'] ?><br>
                        <label for="">Akreditasi: </label>
                        <?php echo $homebase['dosen_Akre'] ?><br>
                        <label for="">Jenjang: </label>
                        <?php echo $homebase['dosen_Jenjang'] ?>
                    </p>
                    <p class="card-text">
                        <a href="<?= base_url() ?>dosen/edithomebase/<?php echo $dosen['KODE']; ?>" class="btn btn-primary">Edit Data Homebase</a>
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalTR">
                            Info Pengajaran
                        </button>
                    </p>
                    <p class="card-text">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalKul">
                            Info Matkul
                        </button>
                    </p>
                    <a href="<?= base_url() ?>dosen" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalTR" tabindex="-1" role="dialog" aria-labelledby="modalTR" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $dosen['KODE'] ?>'s Teaching Rules</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="">Kuota Ajar: </label>
                <?= $teachingrules['dosen_KuotaAjar'] ?><br>
                <label for="">Jam Ajar: </label>
                <?= $teachingrules['dosen_JamAjar'] ?><br>
                <label for="">SKS: </label>
                <?= $teachingrules['dosen_SKS'] ?><br>
                <label for="">Distribusi: </label>
                <?= $teachingrules['dosen_Distr'] ?><br>
                <label for="">Kuota Tahun Ajar 19/20: </label>
                <?= $teachingrules['dosen_Kuota1920'] ?><br>
                <label for="">Distribusi Tahun Ajar 19/20: </label>
                <?= $teachingrules['dosen_Distr1920'] ?><br>
                <label for="">Kuota Ajar: </label>
                <?= $teachingrules['dosen_KuotaAjar'] ?><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalKul" tabindex="-1" role="dialog" aria-labelledby="modalKul" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $dosen['KODE'] ?>'s Classes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered" id="list_dos">
                    <thead>
                        <tr>
                            <th>KODE</th>
                            <th>Kelas</th>
                            <th>Matkul</th>
                            <th colspan="3">Jam Ajar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($jadwal as $jdw) {
                        ?>
                            <tr>
                                <td><?= $jdw->dosen_Code; ?></td>
                                <td><?= $jdw->cl_ID ?></td>
                                <td><?= $jdw->mk_Name; ?></td>
                                <td><?= $jdw->Jam; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>dosen/editjadwal/<?= $jdw->id ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>dosen/hapusjadwal/<?= $jdw->id ?>" class="btn btn-danger" onclick="return confirm('Yakin data ini akan dihapus?');">Hapus</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modalDPA" tabindex="-1" role="dialog" aria-labelledby="modalDPA" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?= $dosen['KODE'] ?>'s DPA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered" id="list_dos">
                    <thead>
                        <tr>
                            <th>KODE</th>
                            <th>Tahun</th>
                            <th>Semester</th>
                            <th colspan="3">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dpa as $dpa) {
                        ?>
                            <tr>
                                <td><?= $dpa->dosen_Code; ?></td>
                                <td><?= $dpa->dpa_Year; ?></td>
                                <td><?= $dpa->dpa_Semester; ?></td>
                                <td><?= $dpa->cl_ID; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>dosen/editdpa/<?= $dpa->id ?>" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>dosen/hapusdpa/<?= $dpa->id ?>" class="btn btn-danger" onclick="return confirm('Yakin data ini akan dihapus?');">Hapus</a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>