<div class="container" style="margin-top:20px">
    <div class="col-md-12">
        <h1 style="
        text-align: center;
        margin-bottom: 30px;">Data Riset</h1>
    </div>
    <table class="table table-striped table-bordered" id="list_res">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Riset</th>
                <th>Prioritas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($research as $res) {
            ?>
                <tr>
                    <td><?= $res->Nama; ?></td>
                    <td><?= $res->rg_Field; ?></td>
                    <td><?= $res->rs_Priority; ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>