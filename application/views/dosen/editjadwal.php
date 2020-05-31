<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Edit DPA <?= $jadwal['dosen_Code'] ?>
                </div>
                <div class="card-body">
                    <!-- <?= validation_errors() ?> -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif     ?>
                    <form action="" method="post">
                        <input type="hidden" value="<?php echo $jadwal['id']; ?>" name="id" id="id">
                        <div class="form-group">
                            <label for="mk_Code">Mata Kuliah</label>
                            <select name="mk_Code" id="mk_Code">
                                <?php
                                foreach ($kurikulum as $kl) {
                                ?>
                                    <option value="<?php echo $kl->mk_Code; ?>">
                                        <?php echo $kl->mk_Name; ?>
                                    </option>
                                <?php }
                                ?>
                            </select>
                        </div>
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
                            <label for="Jam">Jam</label>
                            <input type="number" name="Jam" class="Jam">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>