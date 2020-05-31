<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="
        text-align: center;
        margin-bottom: 30px;">DPA</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_dos">
        <thead>
            <tr>
                <th>KODE</th>
                <th>Tahun</th>
                <th>Semester</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dosen as $dos) {
            ?>
                <tr>
                    <td><?= $dos->dosen_Code; ?></td>
                    <td><?= $dos->dpa_Year; ?></td>
                    <td><?= $dos->dpa_Semester; ?></td>
                    <td><?= $dos->cl_ID; ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>