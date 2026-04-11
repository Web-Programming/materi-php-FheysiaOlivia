<?php
$keyword = trim($_GET['keyword'] ?? '');
$kategori =  trim($_GET['kategori'] ?? 'semua');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar PHP form</title>
</head>
<body>
    <h2>1) Contoh Form GET</h2>
    <form action="" method="get">
        <label for="keyword">Keyword Pencarian</label>
        <input id="keyword" name="keyword" type="text"
        value="<?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?>"
        placeholder="Contoh : laptop">

        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategpri">
            <option value="Semua" <?= $kategori === 'Semua' ? 'Selected' : ''?>>Semua</option>
            <option value="Elektronik" <?= $kategori === 'Elektronik' ? 'Selected' : ''?>>Elektronik</option>
            <option value="Pakaian" <?= $kategori === 'Pakaian' ? 'Selected' : ''?>>Pakaian</option>
            <option value="Makanan" <?= $kategori === 'Makanan' ? 'Selected' : ''?>>Makanan</option>
        </select>
        <button type="submit">Cari</button>
    </form>

    <?php if (isset($_GET['keyword']) || isset ($_GET['kategori'])): ?>
        <div class="result">
            <strong>Hasil GET</strong>
            Keyword: <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?><br>
            Kategori : <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?>
            <hr>
            Keyword 2 : <?php echo $keyword; ?><br>
        </div>
    <?php endif;?>
</body>
</html>