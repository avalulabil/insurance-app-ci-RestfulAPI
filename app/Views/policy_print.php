<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Print</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <h2>Policy Details</h2>
    <p>Nama Nasabah: <?= $policy['customer_name'] ?></p>
    <p>Periode Pertanggungan: <?= $policy['coverage_period_start'] ?> - <?= $policy['coverage_period_end'] ?></p>
    <p>Pertanggungan / Kendaraan: <?= $policy['vehicle'] ?></p>
    <p>Harga Pertanggungan: <?= $policy['coverage_price'] ?></p>
    <p>Jenis Pertanggungan: <?= $policy['coverage_type'] == 1 ? 'Comprehensive' : 'Total Loss Only' ?></p>
    <p>Risiko Banjir: <?= $policy['risk_flood'] ? 'Yes' : 'No' ?></p>
    <p>Risiko Gempa: <?= $policy['risk_earthquake'] ? 'Yes' : 'No' ?></p>
    <p>Total Premi: <?= $policy['total_premium'] ?></p>
</body>
</html>