<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Edit DPA <?= $dpa['dosen_Code'] ?>
                </div>
                <div class="card-body">
                    <!-- <?= validation_errors() ?> -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif     ?>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $dpa['id']; ?>" name="id" id="id">
                        <div class="form-group">
                            <label for="cl_ID">Kelas</label>
                            <select name="cl_ID" id="cl_ID">
                                <?php
                                foreach ($class as $cl) {
                                ?>
                                    <option value="<?php echo $cl->cl_ID; ?>">
                                        <?php echo $cl->cl_Major; ?> -
                                        <?php echo $cl->cl_Grade; ?><?php echo $cl->cl_Postfix; ?>
                                    </option>
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dpa_Year">Tahun</label>
                            <select name="dpa_Year" id="dpa_Year">
                                <?php
                                for ($x = 2018; $x <= 2030; $x++) { ?>
                                    <option value="<?php echo $x; ?>">
                                        <?php echo $x; ?>
                                    </option>
                                <?php
                                } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dpa_Semester">Semester</label>
                            <select name="dpa_Semester" id="dpa_Semester">
                                <option value="GANJIL">GANJIL</option>
                                <option value="GENAP">GENAP</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>