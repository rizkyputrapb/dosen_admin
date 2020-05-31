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
                            <label for="rg_ID">Grup Riset</label>
                            <select name="rg_ID" id="rg_ID">
                                <?php foreach ($resgroup as $res) : ?>
                                    <option value="<?php echo $res->rg_ID; ?>">
                                        <?php echo $res->rg_Field; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="rs_Priority">Prioritas</label>
                            <select name="rs_Priority" id="rs_Priority">
                                <option value="PRIMARY">Primary</option>
                                <option value="SECONDARY">Secondary</option>
                                <option value="TERTIARY">Tertiary</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>