<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/services/" method="get">
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
<h3>Services List</h3> <a href="<?= ROOT ?>/admin/services/build" class="gradient-btn">add New services</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['services']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Category</th>
<th>Description</th>
<th>Icon</th>
<th>Status</th>
<th>Service Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['services'] as $key => $services): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $services['title'] ?></td>
<td><?= $services['category'] ?></td>
<td><?= $services['description'] ?></td>
<td><?= $services['icon'] ?></td>
<td><?= $services['status'] ?></td>
<td><?= $services['serviceCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/services/<?= $services['serviceIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/services/<?= $services['serviceIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/services/<?= $services['serviceIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/services/build">Add a Record.</a>
<?php endif; ?>
</div>
