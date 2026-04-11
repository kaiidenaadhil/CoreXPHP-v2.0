  <div class="data-table">
  <div class="table-container">
  <h2> Edit  blogPosts </h2>
<?php foreach ($params["blogPosts"] as $key => $blogPosts) : ?>
  <form method="post" action="<?= ROOT ?>/admin/blogPosts/<?= $blogPosts['blogPostIdentify'] ?>/modify">
  <div>
    <label for="title">Title</label>
    <input type="text" name="title" value="<?= $blogPosts["title"] ?>">
  </div>
  <div>
    <label for="slug">Slug</label>
    <input type="text" name="slug" value="<?= $blogPosts["slug"] ?>">
  </div>
  <div>
    <label for="content">Content</label>
    <textarea name="content"><?= $model["content"] ?></textarea><div>
  <div>
    <label for="coverImage">Cover Image</label>
    <input type="text" name="coverImage" value="<?= $blogPosts["coverImage"] ?>">
  </div>
  <div>
    <label for="status">Status</label>
    <input type="text" name="status" value="<?= $blogPosts["status"] ?>">
  </div>
  <div>
    <label for="blogPostCreatedAt">Blog Post Created At</label>
    <input type="datetime-local" name="blogPostCreatedAt" value="<?= $blogPosts["blogPostCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/blogPosts" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
