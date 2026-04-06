<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<article class="entry">
    <h2><?= $artikel['judul']; ?></h2>

    <small>
        <?= date('d M Y', strtotime($artikel['created_at'])); ?>
    </small>

    <img src="<?= base_url('/gambar/' . $artikel['gambar']); ?>" 
         alt="<?= $artikel['judul']; ?>">

    <p><?= $artikel['isi']; ?></p>
</article>

<?= $this->endSection() ?>