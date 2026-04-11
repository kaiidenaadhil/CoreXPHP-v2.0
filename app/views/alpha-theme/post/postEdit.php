  <div class="data-table">
  <div class="table-container">
  <h2> Edit  post </h2>
<?php foreach ($params["post"] as $key => $post) : ?>
  <form method="post" action="<?= ROOT ?>/admin/post/<?= $post['postIdentify'] ?>/modify">
  <div>
    <label for="postTitle">Post Title</label>
    <input type="text" name="postTitle" value="<?= $post["postTitle"] ?>">
  </div>
  <div>
    <label for="postDesc">Post Desc</label>
    <input type="text" name="postDesc" value="<?= $post["postDesc"] ?>">
  </div>
  <div>
    <label for="postImg">Post Img</label>
    <input type="text" name="postImg" value="<?= $post["postImg"] ?>">
  </div>
  <div>
    <label for="postType">Post Type</label>
    <input type="" name="postType" value="<?= $post["postType"] ?>">
  </div>
  <div>
    <label for="postboolean">Postboolean</label>
    <input type="" name="postboolean" value="<?= $post["postboolean"] ?>">
  </div>
  <div>
    <label for="postFloat">Post Float</label>
    <input type="" name="postFloat" value="<?= $post["postFloat"] ?>">
  </div>
  <div>
    <label for="postCreatedAt">Post Created At</label>
    <input type="datetime-local" name="postCreatedAt" value="<?= $post["postCreatedAt"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/post" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
