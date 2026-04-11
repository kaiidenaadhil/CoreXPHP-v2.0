  <div class="data-table">
  <div class="table-container">
  <h2> Edit  services </h2>
<?php foreach ($params["services"] as $key => $services) : ?>
  <form method="post" action="<?= ROOT ?>/admin/services/<?= $services['serviceIdentify'] ?>/modify">
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" value="<?= $services["title"] ?>">
  </div>
  <div>
    <label for="category">Category</label>
    <input type="text" name="category" value="<?= $services["category"] ?>">
  </div>
  <div>
    <label for="description">Description</label>
    <textarea name="description"><?= $model["description"] ?></textarea><div>
  <div>
    <label for="icon">Icon</label>
    <input type="text" name="icon" value="<?= $services["icon"] ?>">
  </div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $services["status"] ?>">
  </div>
  <div>
    <label for="serviceCreatedAt">Service Created At</label>
    <input type="datetime-local" name="serviceCreatedAt" value="<?= $services["serviceCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/services" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
