<?= $this->extend("base"); ?>

<?= $this->section("title") ?>Add a Message<?= $this->endSection() ?>

<?= $this->section("content"); ?>

<?= form_open("/post/create", ['class' => "mt-3"]); ?>

<div class="form-group">
    <input type="text" name="full_name" value="<?= old("full_name"); ?>" class="form-control" placeholder="Full Name" required>
</div>

<div class="form-group">
    <input type="email" name="email_address" value="<?= old("email_address"); ?>" class="form-control" placeholder="Email Address" required>
</div>

<div class="form-group">
    <textarea name="comment" rows="5" placeholder="Please enter a message" class="form-control"><?= old("comment"); ?></textarea>
</div>

<?= reCaptcha2('reCaptcha2', ['id' => 'recaptcha_v2']); ?>

<div class="form-group text-center">
    <button type="submit" class="btn btn-info"> Post Message </button>
</div>

<?= form_close() ?>

<?= $this->endSection(); ?>
