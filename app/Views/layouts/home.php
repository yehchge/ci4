<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<h1 class="fw-bold">CodeIgniter 4 Pagination</h1>
<hr>
<div class="card rounded-0">
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-stripped table-bordered">
                <thead>
                    <tr class="bg-gradient bg-primary text-light">
                        <th class="p-1 text-center">#</th>
                        <th class="p-1 text-center">Name</th>
                        <th class="p-1 text-center">Contact #</th>
                        <th class="p-1 text-center">Email</th>
                        <th class="p-1 text-center">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row): ?>
                        <tr>
                            <td class="px-2 py-1 text-center align-middle"><?= $row['id'] ?></td>
                            <td class="px-2 py-1 align-middle"><?= $row['name'] ?></td>
                            <td class="px-2 py-1 align-middle"><?= $row['contact'] ?></td>
                            <td class="px-2 py-1 align-middle"><?= $row['email'] ?></td>
                            <td class="px-2 py-1 align-middle"><?= $row['address'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->makeLinks($page,$perPage, $total, 'custom_view') ?>

        </div>
    </div>
</div>
<?= $this->endSection() ?>
