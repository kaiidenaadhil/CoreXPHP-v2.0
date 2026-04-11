  <div class="data-table">
  <div class="table-container">
  <h2> Display eventCategories </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Category Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Status</th>
      <th>Event Category Created At</th>
      <th>Event Category Updated At</th>
      <th>Event Category Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['eventCategories'] as $key => $eventCategories): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $eventCategories['categoryId'] ?></td>
<td><?= $eventCategories['name'] ?></td>
<td><?= $eventCategories['description'] ?></td>
<td><?= $eventCategories['status'] ?></td>
<td><?= $eventCategories['eventCategoryCreatedAt'] ?></td>
<td><?= $eventCategories['eventCategoryUpdatedAt'] ?></td>
<td><?= $eventCategories['eventCategoryIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/eventCategories" class="cancel-btn">back</a></aside> </div>
</div>
</div>
