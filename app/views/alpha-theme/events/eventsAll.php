<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/events/" method="get">
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
<h3>Events List</h3> <a href="<?= ROOT ?>/admin/events/build" class="gradient-btn">add New events</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['events']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Title</th>
<th>Category Id</th>
<th>Location</th>
<th>Event Date</th>
<th>Event Time</th>
<th>Cover Image</th>
<th>Summary</th>
<th>Status</th>
<th>Event Created At</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['events'] as $key => $events): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $events['title'] ?></td>
<td><?= $events['categoryId'] ?></td>
<td><?= $events['location'] ?></td>
<td><?= $events['eventDate'] ?></td>
<td><?= $events['eventTime'] ?></td>
<td><?= $events['coverImage'] ?></td>
<td><?= $events['summary'] ?></td>
<td><?= $events['status'] ?></td>
<td><?= $events['eventCreatedAt'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/events/<?= $events['eventIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/events/<?= $events['eventIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/events/<?= $events['eventIdentify'] ?>/destroy">Delete</a>
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
<a href="<?= ROOT ?>/admin/events/build">Add a Record.</a>
<?php endif; ?>
</div>
