  <div class="data-table">
  <div class="table-container">
  <h2> Edit  categories </h2>
<?php foreach ($params["categories"] as $key => $categories) : ?>
  <form method="post" action="<?= ROOT ?>/admin/categories/<?= $categories['categoryIdentify'] ?>/modify">
  <div>
    <label for="categoryId">Category Id</label>
    <input type="number" name="categoryId" value="<?= $categories["categoryId"] ?>">
  </div>
  <div>
    <label for="categoryName">Category Name</label>
    <input type="text" name="categoryName" value="<?= $categories["categoryName"] ?>">
  </div>
  <div>
    <label for="categoryURI">Category U R I</label>
    <input type="text" name="categoryURI" value="<?= $categories["categoryURI"] ?>">
  </div>
  <div>
    <label for="categoryCreatedAt">Category Created At</label>
    <input type="datetime-local" name="categoryCreatedAt" value="<?= $categories["categoryCreatedAt"] ?>">
  </div>
  <div>
    <label for="categoryUpdatedAt">Category Updated At</label>
    <input type="datetime-local" name="categoryUpdatedAt" value="<?= $categories["categoryUpdatedAt"] ?>">
  </div>
  <div>
    <label for="categoryIdentify">Category Identify</label>
    <input type="text" name="categoryIdentify" value="<?= $categories["categoryIdentify"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/categories" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
