<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<?php if($artikel): $no = 1; foreach($artikel as $row): ?>
<article class="entry">

    <?php if($no == 1): ?>
        <span style="color:red; font-weight:bold;">🔥 Terbaru</span>
    <?php endif; ?>

    <h2>
        <a href="<?= base_url('/artikel/' . $row['slug']); ?>">
            <?= $row['judul']; ?>
        </a>
    </h2>

    <small>
        <?= date('d M Y', strtotime($row['created_at'])); ?>
    </small>
    
    <img src="<?= base_url('/gambar/' . $row['gambar']); ?>" 
         alt="<?= $row['judul']; ?>">
    
    <p><?= substr($row['isi'], 0, 200); ?></p>
</article>

<?php $no++; ?>
<hr class="divider" />

<?php endforeach; else: ?>

<article class="entry">
    <h2>Belum ada data.</h2>
</article>

<?php endif; ?>

<?= $this->endSection() ?>