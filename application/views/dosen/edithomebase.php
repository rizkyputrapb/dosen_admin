<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jabatan Dosen
                </div>
                <div class="card-body">
                    <!-- <?= validation_errors() ?> -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif     ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="KODE">Nama Dosen</label>
                            <select name="KODE" id="KODE">
                                <option value="<?php echo $dosen['KODE']; ?>">
                                    <?php echo $dosen['KODE']; ?> -
                                    <?php echo $dosen['Nama']; ?>
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dosen_Homebase">Homebase</label>
                            <select name="dosen_Homebase" id="dosen_Homebase">
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dosen_HomebaseAkreD4">Homebase Akreditasi D4</label>
                            <select name="dosen_HomebaseAkreD4" id="dosen_HomebaseAkreD4">
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dosen_Akre">Dosen Akreditasi</label>
                            <select name="dosen_Akre" id="dosen_Akre">
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dosen_Jenjang">Dosen Jenjang</label>
                            <select name="dosen_Jenjang" id="dosen_Jenjang">
                                <option value="D4">D4</option>
                                <option value="D3">D3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>