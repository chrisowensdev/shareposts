<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?= URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?= $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Written By <?= $data['user']->name; ?> on <?= $data['post']->created_at;?>
</div>
<p><?= $data['post']->body; ?></p>
<?php if ($data['post']->userid == $_SESSION['user_id']) : ?>
    <hr>
    <a href="<?= URLROOT ;?>/posts/edit/<?= $data['post']->id; ?>" class="btn btn-dark">Edit</a>

    <form action="<?= URLROOT; ?>/posts/delete/<?= $data['post']->id ;?>" method="post">
<input class="pull-right" type="submit" value="Delete" class="btn btn-danger"></form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>