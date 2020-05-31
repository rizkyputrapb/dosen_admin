<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data DPA
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
                            <label for="dpa_Year">Tahun</label>
                            <input type="text" class="form-control" id="dpa_Year" name="dpa_Year">
                        </div>
                        <div class="form-group">
                            <label for="dpa_Semester">Semester</label>
                            <select name="dpa_Semester" id="dpa_Semester">
                                <option value="GANJIL">Ganjil</option>
                                <option value="GENAP">Genap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cl_ID">Kelas</label>
                            <select name="class" id="class">
                                <option value="">No Selected</option>
                                <?php foreach ($kelas as $kls) : ?>
                                    <option value="<?php echo $kls->cl_ID; ?>">
                                        <?php echo $kls->cl_Major; ?> -
                                        <?php echo $kls->cl_Grade; ?><?php echo $kls->cl_Postfix; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>