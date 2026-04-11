  <div class="data-table">
  <div class="table-container">
  <h2> Display blogPosts </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Post Id</th>
      <th>Title</th>
      <th>Slug</th>
      <th>Content</th>
      <th>Cover Image</th>
      <th>Status</th>
      <th>Blog Post Created At</th>
      <th>Blog Post Updated At</th>
      <th>Blog Post Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['blogPosts'] as $key => $blogPosts): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $blogPosts['postId'] ?></td>
<td><?= $blogPosts['title'] ?></td>
<td><?= $blogPosts['slug'] ?></td>
<td><?= $blogPosts['content'] ?></td>
<td><?= $blogPosts['coverImage'] ?></td>
<td><?= $blogPosts['status'] ?></td>
<td><?= $blogPosts['blogPostCreatedAt'] ?></td>
<td><?= $blogPosts['blogPostUpdatedAt'] ?></td>
<td><?= $blogPosts['blogPostIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/blogPosts" class="cancel-btn">back</a></aside> </div>
</div>
</div>
