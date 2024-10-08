<?php require base_path("views/partials/header.php") ?>
<div class="min-h-full">
    <?php require base_path('views/partials/nav.php') ?>
    <?php require base_path('views/partials/banner.php') ?>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <p><?= htmlspecialchars($note['body'])?></p>
    <form class="mt-6" method="POST">
      <input type="hidden" name="_method" value="DELETE">
      <input type="hidden" name="id" value="<?= $note['id']?>">
      <button class="text-sm text-red-500">DELETE</button>
    </form>
    </div>
  </main>
</div>
<?php require base_path('views/partials/footer.php') ?>
