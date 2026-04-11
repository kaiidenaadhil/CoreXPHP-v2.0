<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/post/" method="get">
<input type="text" name="search" placeholder="Search">
<button type="submit" class="gradient-btn">Search</button>
</form>
</div>
<div class="data-info">
<?php if (isset($_SESSION['success_message'])): ?>
<p><?= $_SESSION['success_message'] ?></p>
<?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
</div>
<div class="data-info">
<h3>Post List</h3> <a href="<?= ROOT ?>/admin/post/build" class="gradient-btn">add New post</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['post']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Post Title</th>
<th>Post Desc</th>
<th>Post Img</th>
<th>Post Type</th>
<th>Postboolean</th>
<th>Post Float</th>
<th>Post Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['post'] as $key => $post): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $post['postTitle'] ?></td>
<td><?= $post['postDesc'] ?></td>
<td><?= $post['postImg'] ?></td>
<td><?= $post['postType'] ?></td>
<td><?= $post['postboolean'] ?></td>
<td><?= $post['postFloat'] ?></td>
<td><?= $post['postCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/post/<?= $post['postIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/post/<?= $post['postIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/post/<?= $post['postIdentify'] ?>/destroy">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<div class="pagination-container">
<?= $params["pagination"] ?>
</div>
<?php else: ?>
<p>No Record to Display.</p>
<a href="<?= ROOT ?>/admin/post/build">Add a Record.</a>
<?php endif; ?>
</div>
