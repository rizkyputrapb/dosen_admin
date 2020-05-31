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
                            <label for="dosen">Nama Dosen</label>
                            <select name="KODE" id="KODE">
                                <option value="">No Selected</option>
                                <?php foreach ($dosen as $dos) : ?>
                                    <option value="<?php echo $dos->KODE; ?>">
                                        <?php echo $dos->KODE; ?> -
                                        <?php echo $dos->Nama; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pos_ID">Jabatan</label>
                            <select name="pos_ID" id="pos_ID">
                                <?php foreach ($position as $pos) : ?>
                                    <option value="<?php echo $pos->pos_ID; ?>">
                                        <?php echo $pos->pos_Name; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jab_Semester">Semester</label>
                            <select name="jab_Semester" id="jab_Semester">
                                <option value="GANJIL">Ganjil</option>
                                <option value="GENAP">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jab_Year">Tahun</label>
                            <input type="text" class="jab_Year" name="jab_Year">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>