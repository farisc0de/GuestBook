<?= $this->extend("base"); ?>

<?= $this->section("title") ?>Home<?= $this->endSection() ?>

<?= $this->section("content"); ?>

<h2>Welcome</h2>

<p>To sign the GuestBook <a href="<?= site_url("/post/add"); ?>">Click Here</a></p>

<?= $this->endSection() ?>