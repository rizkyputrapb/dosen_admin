<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="
        text-align: center;
        margin-bottom: 30px;">Data Jabatan</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_jab">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tahun</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($jabatan as $jab) {
            ?>
                <tr>
                    <td><?= $jab->Nama; ?></td>
                    <td><?= $jab->pos_Name; ?></td>
                    <td><?= $jab->jab_Year; ?></td>
                    <td><?= $jab->jab_Semester; ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>