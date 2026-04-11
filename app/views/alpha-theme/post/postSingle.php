  <div class="data-table">
  <div class="table-container">
  <h2> Display post </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Post Id</th>
      <th>Post Title</th>
      <th>Post Desc</th>
      <th>Post Img</th>
      <th>Post Type</th>
      <th>Postboolean</th>
      <th>Post Float</th>
      <th>Post Created At</th>
      <th>Post Updated At</th>
      <th>Post Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['post'] as $key => $post): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $post['postId'] ?></td>
<td><?= $post['postTitle'] ?></td>
<td><?= $post['postDesc'] ?></td>
<td><?= $post['postImg'] ?></td>
<td><?= $post['postType'] ?></td>
<td><?= $post['postboolean'] ?></td>
<td><?= $post['postFloat'] ?></td>
<td><?= $post['postCreatedAt'] ?></td>
<td><?= $post['postUpdatedAt'] ?></td>
<td><?= $post['postIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/post" class="cancel-btn">back</a></aside> </div>
</div>
</div>
