<div class="col-md-12">
    <h3>
        Daftar Mata Kuliah
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($list_matakuliah as $matakuliah) {
            ?>
                <tr>
                    <td><?= $matakuliah->nama ?></td>
                    <td><?= $matakuliah->sks ?></td>
                    <td><?= $matakuliah->kode ?></td>
                </tr>
            <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>