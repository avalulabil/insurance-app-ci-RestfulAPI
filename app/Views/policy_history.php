<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy History</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Policy History</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Nasabah</th>
                <th>Periode Pertanggungan</th>
                <th>Pertanggungan / Kendaraan</th>
                <th>Harga Pertanggungan</th>
                <th>Jenis Pertanggungan</th>
                <th>Risiko Banjir</th>
                <th>Risiko Gempa</th>
                <th>Total Premi</th>
                <th>Print</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policies as $policy): ?>
                <tr>
                    <td><?= $policy['customer_name'] ?></td>
                    <td><?= $policy['coverage_period_start'] ?> - <?= $policy['coverage_period_end'] ?></td>
                    <td><?= $policy['vehicle'] ?></td>
                    <td><?= $policy['coverage_price'] ?></td>
                    <td><?= $policy['coverage_type'] == 1 ? 'Comprehensive' : 'Total Loss Only' ?></td>
                    <td><?= $policy['risk_flood'] ? 'Yes' : 'No' ?></td>
                    <td><?= $policy['risk_earthquake'] ? 'Yes' : 'No' ?></td>
                    <td><?= $policy['total_premium'] ?></td>
                    <td><a href="<?= site_url('policy/print/' . $policy['id']) ?>">Print</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>