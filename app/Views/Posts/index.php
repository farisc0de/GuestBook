<?= $this->extend("base"); ?>

<?= $this->section("title"); ?>Posts<?= $this->endSection() ?>


<?= $this->section("content") ?>

<div class="container">
    <h2 class="mt-3">Guest Messages</h2>
    <?php if ($posts == null) : ?>
        <div class="card">
            <div class="card-body">
                No Posts
            </div>
        </div>
    <?php else :  ?>
        <?php foreach ($posts as $post) : ?>
            <div class="card mt-3">
                <div class="card-header">
                    <span>From: <?= $post->full_name; ?></span>
                </div>
                <div class="card-body">
                    <?= $post->comment; ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<div class="container mt-4">
    <div class="text-center">
        <ul class="pagination pagination-sm">
            <?= $pages->simpleLinks(); ?>
        </ul>
    </div>
</div>

<?= $this->endSection() ?>