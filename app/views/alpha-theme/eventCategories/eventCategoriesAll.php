<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/eventCategories/" method="get">
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
<h3>Event Categories List</h3> <a href="<?= ROOT ?>/admin/eventCategories/build" class="gradient-btn">add New eventCategories</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['eventCategories']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Description</th>
<th>Status</th>
<th>Event Category Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['eventCategories'] as $key => $eventCategories): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $eventCategories['name'] ?></td>
<td><?= $eventCategories['description'] ?></td>
<td><?= $eventCategories['status'] ?></td>
<td><?= $eventCategories['eventCategoryCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategories['eventCategoryIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategories['eventCategoryIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/eventCategories/<?= $eventCategories['eventCategoryIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/eventCategories/build">Add a Record.</a>
<?php endif; ?>
</div>
