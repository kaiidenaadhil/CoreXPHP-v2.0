  <div class="data-table">
  <div class="table-container">
  <h2> Edit  eventCategories </h2>
<?php foreach ($params["eventCategories"] as $key => $eventCategories) : ?>
  <form method="post" action="<?= ROOT ?>/admin/eventCategories/<?= $eventCategories['eventCategoryIdentify'] ?>/modify">
  <div>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $eventCategories["name"] ?>">
  </div>
  <div>
    <label for="description">Description</label>
    <textarea name="description"><?= $model["description"] ?></textarea><div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $eventCategories["status"] ?>">
  </div>
  <div>
    <label for="eventCategoryCreatedAt">Event Category Created At</label>
    <input type="datetime-local" name="eventCategoryCreatedAt" value="<?= $eventCategories["eventCategoryCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/eventCategories" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
