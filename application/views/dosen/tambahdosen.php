<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Dosen
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
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">KODE</label>
                            <input type="text" class="form-control" id="KODE" name="KODE">
                        </div>
                        <div class="form-group">
                            <label for="email">NIP</label>
                            <input type="text" class="form-control" id="NIP" name="NIP">
                        </div>
                        <div class="form-group">
                            <label for="email">NIDN</label>
                            <input type="text" class="form-control" id="NIDN" name="NIDN">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="MKU">MKU</option>
                                <option value="CPNS/Kontrak">CPNS/Kontrak</option>
                                <option value="CPNS/Magang">CPNS/Magang</option>
                                <option value="LB">LB</option>
                                <option value="PNS">PNS</option>
                                <option value="Kontrak">Kontrak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Mata Kuliah</label>
                            <select class="form-control" id="status" name="matkul">
                                <option value="TI">TI</option>
                                <option value="MP">MP</option>
                                <option value="BING">BING</option>
                                <option value="MKU">MKU</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nomor Telepon</label>
                            <input type="text" class="form-control" id="noTelp" name="noTelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>