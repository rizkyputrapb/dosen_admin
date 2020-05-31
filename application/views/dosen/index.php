<style>
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<div class="container">

    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Dosen <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col md-6">
            <a href="<?= base_url() ?>dosen/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <!--mt-3 artinya margin top 3-->
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Dosen</h2>
            <?php if (empty($dosen)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Dosen tidak ditemukan
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($dosen as $dos) : ?>
                    <li class="list-group-item">
                        <?= $dos['Nama'];
                        echo " | ";
                        echo $dos['KODE']; ?>
                        <a href="<?= base_url(); ?>dosen/detail/<?= $dos['KODE']; ?>" class="badge badge-primary float-right">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>