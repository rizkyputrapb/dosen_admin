<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="
        text-align: center;
        margin-bottom: 30px;">File SAP</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_res">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama File</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sap as $sap) {
            ?>
                <tr>
                    <td><?= $sap->mk_Code; ?></td>
                    <td><?= $sap->file; ?></td>
                    <td style="width:1%; white-space:nowrap;">
                        <a href="<?php echo base_url(); ?>dosen/downloadsap/<?= $sap->id; ?>" class="btn btn-secondary">Download</a>
                        <a href="<?= base_url(); ?>dosen/hapussap/<?= $sap->id ?>" class="btn btn-danger" onclick="return confirm('Yakin data ini akan dihapus?');">Hapus</a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>dosen/uploadsap">
        <input type="hidden" name="updated_by" id="updated_by" value="<?php echo $this->session->userdata('username') ?>">
        <select name="mk_Code" id="mk_Code">
            <?php
            foreach ($matkul as $mk) {
            ?>
                <option value="<?= $mk->mk_Code ?>"><?= $mk->mk_Code ?> - <?= $mk->mk_Name ?></option>
            <?php }
            ?>
        </select>
        <div><input type="file" name="berkas"> <input class="btn btn-primary" type="submit" value="Upload SAP" /></div>
    </form>
    <br><br><br><br>
</div>