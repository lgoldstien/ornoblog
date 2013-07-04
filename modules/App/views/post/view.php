<h1><?= $this->region('post_title') ?></h1>
<?= $this->region('post_content') ?>
<p><strong>Posted on <?= $this->region('post_date_created') ?> by <a href="/authors/<?= $this->region('post_author_id') ?>/<?= $this->region('post_author') ?>"><?= $this->region('post_author') ?></a></strong></p>