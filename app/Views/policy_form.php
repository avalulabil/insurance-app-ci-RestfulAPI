<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Input</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <form action="<?= site_url('policy/create') ?>" method="post">
    <?= csrf_field() ?>
        <h2>Policy Input</h2>
        <label for="customer_name">Nama Nasabah</label>
        <input type="text" id="customer_name" name="customer_name" required>
        
        <label for="coverage_period_start">Periode Pertanggungan Start</label>
        <input type="date" id="coverage_period_start" name="coverage_period_start" required>
        
        <label for="coverage_period_end">Periode Pertanggungan End</label>
        <input type="date" id="coverage_period_end" name="coverage_period_end" required>
        
        <label for="vehicle">Pertanggungan / Kendaraan</label>
        <input type="text" id="vehicle" name="vehicle" required>
        
        <label for="coverage_price">Harga Pertanggungan</label>
        <input type="number" id="coverage_price" name="coverage_price" required>
        
        <label for="coverage_type">Jenis Pertanggungan</label>
        <select id="coverage_type" name="coverage_type" required>
            <option value="1">Comprehensive</option>
            <option value="2">Total Loss Only</option>
        </select>
        
        <label for="risk_flood">Risiko Banjir</label>
        <input type="checkbox" id="risk_flood" name="risk_flood">
        
        <label for="risk_earthquake">Risiko Gempa</label>
        <input type="checkbox" id="risk_earthquake" name="risk_earthquake">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>